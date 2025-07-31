
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
                data-beneficiary-image="<?= !empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image']) ? base_url('uploads/beneficiaries/' . $beneficiary['image']) : '' ?>"
                data-beneficiary-education="<?= esc($beneficiary['education_level']) ?>"
                data-beneficiary-course="<?= esc($beneficiary['course']) ?>"
                data-beneficiary-institution="<?= esc($beneficiary['institution']) ?>"
                data-beneficiary-city="<?= esc($beneficiary['city'] ?? '') ?>"
                data-beneficiary-state="<?= esc($beneficiary['state'] ?? '') ?>"
                data-beneficiary-phone="<?= esc($beneficiary['phone'] ?? '') ?>"
                data-beneficiary-email="<?= esc($beneficiary['email'] ?? '') ?>"
                data-beneficiary-linkedin="<?= esc($beneficiary['linkedin_url'] ?? '') ?>"
                data-beneficiary-family="<?= esc($beneficiary['family_background'] ?? '') ?>"
                data-beneficiary-achievements="<?= esc($beneficiary['academic_achievements'] ?? '') ?>"
                data-beneficiary-goals="<?= esc($beneficiary['career_goals'] ?? '') ?>"
                data-beneficiary-company="<?= esc($beneficiary['company_link'] ?? '') ?>"
                data-beneficiary-status="<?= esc($beneficiary['status']) ?>">
            <i class="fas fa-info-circle me-1"></i>Read More
        </button>
    </div>
</div>
