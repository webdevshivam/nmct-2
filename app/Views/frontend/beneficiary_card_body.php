
<div class="card-body p-4">
    <!-- Course & University -->
    <div class="mb-3">
        <h6 class="text-primary mb-2 fw-bold">
            <i class="fas fa-graduation-cap me-2"></i>Course & University
        </h6>
        <p class="mb-1 text-dark fw-semibold"><?= esc($beneficiary['course']) ?></p>
        <p class="text-muted small mb-0"><?= esc($beneficiary['university']) ?></p>
    </div>

    <!-- Year -->
    <?php if (!empty($beneficiary['year'])): ?>
    <div class="mb-3">
        <h6 class="text-primary mb-2 fw-bold">
            <i class="fas fa-calendar me-2"></i>Year
        </h6>
        <p class="mb-0 text-dark"><?= esc($beneficiary['year']) ?></p>
    </div>
    <?php endif; ?>

    <!-- Contact -->
    <?php if (!empty($beneficiary['contact_phone'])): ?>
        <div class="mb-3">
            <h6 class="text-primary mb-2 fw-bold">
                <i class="fas fa-phone me-2"></i>Contact
            </h6>
            <p class="mb-0">
                <a href="tel:<?= esc($beneficiary['contact_phone']) ?>" class="text-dark text-decoration-none fw-semibold">
                    <?= esc($beneficiary['contact_phone']) ?>
                </a>
            </p>
        </div>
    <?php endif; ?>

    <!-- Email -->
    <?php if (!empty($beneficiary['email'])): ?>
        <div class="mb-3">
            <h6 class="text-primary mb-2 fw-bold">
                <i class="fas fa-envelope me-2"></i>Email
            </h6>
            <p class="mb-0 small text-dark">
                <a href="mailto:<?= esc($beneficiary['email']) ?>" class="text-dark text-decoration-none">
                    <?= esc($beneficiary['email']) ?>
                </a>
            </p>
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
            <?php if (!empty($beneficiary['contact_phone'])): ?>
                <div class="col-6">
                    <a href="tel:<?= esc($beneficiary['contact_phone']) ?>" class="btn btn-outline-success btn-sm w-100">
                        <i class="fas fa-phone me-1"></i>Call
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
            data-beneficiary-course="<?= esc($beneficiary['course']) ?>"
            data-beneficiary-university="<?= esc($beneficiary['university']) ?>"
            data-beneficiary-year="<?= esc($beneficiary['year'] ?? '') ?>"
            data-beneficiary-phone="<?= esc($beneficiary['contact_phone'] ?? '') ?>"
            data-beneficiary-email="<?= esc($beneficiary['email'] ?? '') ?>"
            data-beneficiary-status="<?= esc($beneficiary['status']) ?>">
            <i class="fas fa-info-circle me-1"></i>Read More
        </button>
    </div>
</div>
