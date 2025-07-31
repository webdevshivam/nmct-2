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
        $beneficiaryModel = new BeneficiaryModel();
        $search = $this->request->getGet('search');
        $perPage = 9; // 3x3 grid
        $currentPage = (int)($this->request->getGet('page') ?? 1);
        $offset = ($currentPage - 1) * $perPage;

        if ($search) {
            $beneficiaries = $beneficiaryModel->getActiveBeneficiaries($perPage, $offset, $search);
            $total = $beneficiaryModel->countActiveBeneficiaries($search);
            $hasMore = ($offset + $perPage) < $total;

            $data = [
                'beneficiaries' => $beneficiaries,
                'search' => $search,
                'total_results' => $total,
                'has_more' => $hasMore,
                'current_page' => $currentPage
            ];
        } else {
            $beneficiaries = $beneficiaryModel->getActiveBeneficiaries($perPage, $offset);
            $total = $beneficiaryModel->countActiveBeneficiaries();
            $hasMore = ($offset + $perPage) < $total;

            $data = [
                'beneficiaries' => $beneficiaries,
                'search' => $search,
                'has_more' => $hasMore,
                'current_page' => $currentPage
            ];
        }

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
                <div class="card-header text-center" style="background: var(--gradient-soft); border-bottom: 3px solid var(--primary-color);">
                    <div class="feature-icon mx-auto mb-3" style="width: 80px; height: 80px; font-size: 2rem;">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h5 class="mb-1 font-display">
                        <?= esc($beneficiary['name']) ?>
                    </h5>
                    <?php if (!empty($beneficiary['age'])): ?>
                        <p class="text-muted small mb-2">Age: <?= esc($beneficiary['age']) ?> years</p>
                    <?php endif; ?>

                    <div class="mt-2">
                        <span class="badge px-3 py-2" style="background: var(--gradient-primary); color: white;">
                            <?= esc($beneficiary['status']) ?>
                        </span>
                    </div>
                </div>
                <div class="card-body p-4">
                    <!-- Course & University -->
                    <div class="mb-3">
                        <h6 class="text-primary mb-2">
                            <i class="fas fa-graduation-cap me-2"></i>Course & University
                        </h6>
                        <p class="mb-1 fw-bold"><?= esc($beneficiary['course']) ?></p>
                        <p class="text-muted small mb-0"><?= esc($beneficiary['institution']) ?></p>
                    </div>

                    <!-- Education Level -->
                    <div class="mb-3">
                        <h6 class="text-primary mb-2">
                            <i class="fas fa-certificate me-2"></i>Education Level
                        </h6>
                        <p class="mb-0 fw-semibold"><?= esc($beneficiary['education_level']) ?></p>
                    </div>

                    <!-- Contact -->
                    <?php if (!empty($beneficiary['phone'])): ?>
                    <div class="mb-3">
                        <h6 class="text-primary mb-2">
                            <i class="fas fa-phone me-2"></i>Contact
                        </h6>
                        <p class="mb-0">
                            <a href="tel:<?= esc($beneficiary['phone']) ?>" class="text-decoration-none fw-semibold">
                                <?= esc($beneficiary['phone']) ?>
                            </a>
                        </p>
                    </div>
                    <?php endif; ?>

                    <!-- Contact Information -->
                    <?php if (!empty($beneficiary['phone']) || !empty($beneficiary['email'])): ?>
                    <div class="mb-3">
                        <h6 class="text-primary mb-2">
                            <i class="fas fa-address-book me-2"></i>Contact Information
                        </h6>
                        <?php if (!empty($beneficiary['phone'])): ?>
                            <p class="mb-1 small">
                                <i class="fas fa-phone me-2"></i>
                                <a href="tel:<?= esc($beneficiary['phone']) ?>" class="text-decoration-none">
                                    <?= esc($beneficiary['phone']) ?>
                                </a>
                            </p>
                        <?php endif; ?>
                        <?php if (!empty($beneficiary['email'])): ?>
                            <p class="mb-0 small">
                                <i class="fas fa-envelope me-2"></i>
                                <a href="mailto:<?= esc($beneficiary['email']) ?>" class="text-decoration-none">
                                    <?= esc($beneficiary['email']) ?>
                                </a>
                            </p>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Action Buttons -->
                    <div class="mb-3">
                        <div class="row">
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
                        <button class="btn btn-link p-0 read-more-btn" data-bs-toggle="collapse" data-bs-target="#details-<?= $beneficiary['id'] ?>" aria-expanded="false">
                            <small><i class="fas fa-plus me-1"></i>Read More</small>
                        </button>
                    </div>

                    <!-- Additional Details (Collapsible) -->
                    <div class="collapse mt-3" id="details-<?= $beneficiary['id'] ?>">
                        <hr>

                        <?php if (!empty($beneficiary['city']) || !empty($beneficiary['state'])): ?>
                        <div class="mb-3">
                            <h6 class="text-primary mb-2">
                                <i class="fas fa-map-marker-alt me-2"></i>Location
                            </h6>
                            <p class="mb-0 small">
                                <?php 
                                $location = [];
                                if (!empty($beneficiary['city'])) $location[] = esc($beneficiary['city']);
                                if (!empty($beneficiary['state'])) $location[] = esc($beneficiary['state']);
                                echo implode(', ', $location);
                                ?>
                            </p>
                        </div>
                        <?php endif; ?>

                        <?php if (!empty($beneficiary['family_background'])): ?>
                        <div class="mb-3">
                            <h6 class="text-primary mb-2">
                                <i class="fas fa-home me-2"></i>Family Background
                            </h6>
                            <p class="mb-0 small text-muted"><?= nl2br(esc($beneficiary['family_background'])) ?></p>
                        </div>
                        <?php endif; ?>

                        <?php if (!empty($beneficiary['academic_achievements'])): ?>
                        <div class="mb-3">
                            <h6 class="text-primary mb-2">
                                <i class="fas fa-trophy me-2"></i>Academic Achievements
                            </h6>
                            <p class="mb-0 small text-muted"><?= nl2br(esc($beneficiary['academic_achievements'])) ?></p>
                        </div>
                        <?php endif; ?>

                        <?php if (!empty($beneficiary['career_goals'])): ?>
                        <div class="mb-3">
                            <h6 class="text-primary mb-2">
                                <i class="fas fa-bullseye me-2"></i>Career Goals
                            </h6>
                            <p class="mb-0 small text-muted"><?= nl2br(esc($beneficiary['career_goals'])) ?></p>
                        </div>
                        <?php endif; ?>

                        <?php if (!empty($beneficiary['company_link'])): ?>
                        <div class="mb-3">
                            <h6 class="text-primary mb-2">
                                <i class="fas fa-building me-2"></i>Company
                            </h6>
                            <p class="mb-0 small">
                                <a href="<?= esc($beneficiary['company_link']) ?>" target="_blank" class="text-decoration-none">
                                    View Company <i class="fas fa-external-link-alt ms-1"></i>
                                </a>
                            </p>
                        </div>
                        <?php endif; ?>
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