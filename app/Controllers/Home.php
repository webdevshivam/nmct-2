<?php

namespace App\Controllers;

use App\Models\BeneficiaryModel;
use App\Models\SuccessStoryModel;

class Home extends BaseController
{
    public function index()
    {
        $successStoryModel = new SuccessStoryModel();
        $beneficiaryModel = new BeneficiaryModel();

        $data = [
            'success_stories' => $successStoryModel->getPublishedStories(),
            'total_beneficiaries' => $beneficiaryModel->countAll(),
            'active_beneficiaries' => $beneficiaryModel->where('status', 'active')->countAllResults()
        ];

        return view('frontend/home', $data);
    }

    public function beneficiaries()
    {
        $search = $this->request->getGet('search');
        $page = (int)($this->request->getGet('page') ?? 1);
        $perPage = 6;
        $offset = ($page - 1) * $perPage;

        $beneficiaryModel = new BeneficiaryModel();

        // Get pursuing students (not passed out)
        $pursuingBeneficiaries = $beneficiaryModel->getActiveBeneficiariesByStatus(false, null, null, $search);

        // Get passed out students
        $passoutBeneficiaries = $beneficiaryModel->getActiveBeneficiariesByStatus(true, null, null, $search);

        $totalResults = count($pursuingBeneficiaries) + count($passoutBeneficiaries);

        $data = [
            'pursuing_beneficiaries' => $pursuingBeneficiaries,
            'passout_beneficiaries' => $passoutBeneficiaries,
            'search' => $search,
            'current_page' => $page,
            'has_more' => false, // We're showing all results now
            'total_results' => $totalResults
        ];

        return view('frontend/beneficiaries', $data);
    }

    public function loadMoreBeneficiaries()
    {
        $beneficiaryModel = new BeneficiaryModel();
        $search = $this->request->getGet('search');
        $perPage = 9;
        $currentPage = (int)($this->request->getGet('page') ?? 1);
        $offset = ($currentPage - 1) * $perPage;

        $beneficiaries = $beneficiaryModel->getActiveBeneficiaries($perPage, $offset, $search);
        $total = $beneficiaryModel->countActiveBeneficiaries($search);
        $hasMore = ($offset + $perPage) < $total;

        if (empty($beneficiaries)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'No more beneficiaries found'
            ]);
        }

        // Generate HTML for new beneficiaries
        $html = '';
        foreach ($beneficiaries as $beneficiary) {
            $html .= $this->generateBeneficiaryCard($beneficiary);
        }

        return $this->response->setJSON([
            'success' => true,
            'html' => $html,
            'has_more' => $hasMore
        ]);
    }

    private function generateBeneficiaryCard($beneficiary)
    {
        ob_start();
        ?>
        <div class="col-lg-6 col-xl-4 mb-4 beneficiary-card">
            <div class="card h-100 border-0 shadow-lg">
                <div class="card-header text-center bg-light py-2">
                    <div class="feature-icon mx-auto mb-2" style="width: 60px; height: 60px; font-size: 1.5rem; background: var(--gradient-soft); color: var(--primary-color); overflow: hidden; border-radius: 50%;">
                        <?php if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])): ?>
                            <img src="<?= base_url('uploads/beneficiaries/' . $beneficiary['image']) ?>" 
                                 alt="<?= esc($beneficiary['name']) ?>" 
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        <?php else: ?>
                            <i class="fas fa-user-graduate"></i>
                        <?php endif; ?>
                    </div>
                    <h6 class="mb-1 font-display text-dark">
                        <?= esc($beneficiary['name']) ?>
                    </h6>
                    <?php if (!empty($beneficiary['age'])): ?>
                        <p class="text-muted small mb-1" style="font-size: 0.75rem;"><?= esc($beneficiary['age']) ?> years old</p>
                    <?php endif; ?>

                    <span class="badge bg-success px-2 py-1 small">
                        <?= esc(ucfirst($beneficiary['status'])) ?>
                    </span>
                </div>
                <div class="card-body p-4">
                    <!-- Course & University -->
                    <div class="mb-3">
                        <h6 class="text-primary mb-2 fw-bold">
                            <i class="fas fa-graduation-cap me-2"></i>Course & University
                        </h6>
                        <p class="mb-1 text-dark fw-semibold"><?= esc($beneficiary['course']) ?></p>
                        <p class="text-muted small mb-0"><?= esc($beneficiary['institution']) ?></p>
                    </div>

                    <!-- Education Level -->
                    <div class="mb-3">
                        <h6 class="text-primary mb-2 fw-bold">
                            <i class="fas fa-certificate me-2"></i>Education Level
                        </h6>
                        <p class="mb-0 text-dark"><?= esc($beneficiary['education_level']) ?></p>
                    </div>

                    <!-- Contact -->
                    <?php if (!empty($beneficiary['phone'])): ?>
                    <div class="mb-3">
                        <h6 class="text-primary mb-2 fw-bold">
                            <i class="fas fa-phone me-2"></i>Contact
                        </h6>
                        <p class="mb-0">
                            <a href="tel:<?= esc($beneficiary['phone']) ?>" class="text-dark text-decoration-none fw-semibold">
                                <?= esc($beneficiary['phone']) ?>
                            </a>
                        </p>
                    </div>
                    <?php endif; ?>

                    <!-- Contact Information -->
                    <?php if (!empty($beneficiary['phone']) || !empty($beneficiary['email'])): ?>
                    <div class="mb-4">
                        <h6 class="text-primary mb-2 fw-bold">
                            <i class="fas fa-address-book me-2"></i>Contact Information
                        </h6>
                        <?php if (!empty($beneficiary['phone'])): ?>
                            <p class="mb-1 small text-dark">
                                <i class="fas fa-phone me-2 text-muted"></i>
                                <a href="tel:<?= esc($beneficiary['phone']) ?>" class="text-dark text-decoration-none">
                                    <?= esc($beneficiary['phone']) ?>
                                </a>
                            </p>
                        <?php endif; ?>
                        <?php if (!empty($beneficiary['email'])): ?>
                            <p class="mb-0 small text-dark">
                                <i class="fas fa-envelope me-2 text-muted"></i>
                                <a href="mailto:<?= esc($beneficiary['email']) ?>" class="text-dark text-decoration-none">
                                    <?= esc($beneficiary['email']) ?>
                                </a>
                            </p>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Action Buttons -->
                    <div class="mb-3">
                        <div class="row g-2">
                            <?php if (!empty($beneficiary['email'])): ?>
                                <div class="col-6">
                                    <a href="mailto:<?= esc($beneficiary['email']) ?>" class="btn btn-outline-primary btn-sm w-100">
                                        <i class="fas fa-envelope me-1"></i>Email
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($beneficiary['linkedin_url'])): ?>
                                <div class="col-6">
                                    <a href="<?= esc($beneficiary['linkedin_url']) ?>" target="_blank" class="btn btn-outline-info btn-sm w-100">
                                        <i class="fab fa-linkedin me-1"></i>LinkedIn
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Read More Button -->
                    <div class="text-center">
                        <button class="btn btn-primary btn-sm read-more-btn" 
                                data-beneficiary-id="<?= $beneficiary['id'] ?>"
                                data-beneficiary-name="<?= esc($beneficiary['name']) ?>"
                                data-beneficiary-age="<?= esc($beneficiary['age'] ?? '') ?>"
                                data-beneficiary-education="<?= esc($beneficiary['education_level']) ?>"
                                data-beneficiary-course="<?= esc($beneficiary['course']) ?>"
                                data-beneficiary-institution="<?= esc($beneficiary['institution']) ?>"


    public function serveBeneficiaryImage($filename)
    {
        $filepath = WRITEPATH . 'uploads/beneficiaries/' . $filename;
        
        if (!file_exists($filepath)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Image not found');
        }
        
        $mime = mime_content_type($filepath);
        
        return $this->response
            ->setHeader('Content-Type', $mime)
            ->setHeader('Content-Length', filesize($filepath))
            ->setBody(file_get_contents($filepath));
    }

                                data-beneficiary-city="<?= esc($beneficiary['city'] ?? '') ?>"
                                data-beneficiary-state="<?= esc($beneficiary['state'] ?? '') ?>"
                                data-beneficiary-phone="<?= esc($beneficiary['phone'] ?? '') ?>"
                                data-beneficiary-email="<?= esc($beneficiary['email'] ?? '') ?>"
                                data-beneficiary-linkedin="<?= esc($beneficiary['linkedin_url'] ?? '') ?>"
                                data-beneficiary-company-name="<?= esc($beneficiary['company_name'] ?? '') ?>"
                                data-beneficiary-family="<?= esc($beneficiary['family_background'] ?? '') ?>"
                                data-beneficiary-achievements="<?= esc($beneficiary['academic_achievements'] ?? '') ?>"
                                data-beneficiary-goals="<?= esc($beneficiary['career_goals'] ?? '') ?>"
                                data-beneficiary-company="<?= esc($beneficiary['company_link'] ?? '') ?>"
                                data-beneficiary-status="<?= esc($beneficiary['status']) ?>">
                            <i class="fas fa-info-circle me-1"></i>Read More
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }

    public function success_stories()
    {
        $successStoryModel = new SuccessStoryModel();
        $data = [
            'success_stories' => $successStoryModel->getPublishedStories(),
            'title' => 'Success Stories'
        ];

        return view('frontend/success_stories', $data);
    }
}