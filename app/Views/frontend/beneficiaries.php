
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<section class="hero-section">
    <div class="container">
        <h1 class="mb-4">Our Beneficiaries</h1>
        <p class="lead">Meet the talented students we're proud to support on their educational journey</p>
    </div>
</section>

<!-- Search and Filter Section -->
<section class="py-5 bg-soft">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <form method="GET" action="<?= base_url('beneficiaries') ?>" class="row g-3">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="fas fa-search text-muted"></i>
                                    </span>
                                    <input type="text" class="form-control border-0 bg-light" name="search"
                                        placeholder="Search by name, course, or university..."
                                        value="<?= esc($search ?? '') ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-grid gap-2 d-md-flex">
                                    <button type="submit" class="btn btn-primary flex-fill">
                                        <i class="fas fa-search me-2"></i> Search
                                    </button>
                                    <?php if (!empty($search)): ?>
                                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-outline-secondary">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php if (!empty($search)): ?>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-muted">
                        <i class="fas fa-info-circle me-2"></i>
                        Showing results for "<strong><?= esc($search) ?></strong>"
                        <?php if (isset($total_results)): ?>
                            - <?= $total_results ?> student(s) found
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Beneficiaries Grid -->
<section class="section-padding">
    <div class="container">
        <?php if (!empty($beneficiaries)): ?>
            <div class="row">
                <?php foreach ($beneficiaries as $beneficiary): ?>
                    <div class="col-lg-6 col-xl-4 mb-4">
                        <div class="card h-100 border-0 shadow-lg">
                            <div class="card-header text-center" style="background: var(--gradient-soft); border-bottom: 3px solid var(--primary-color);">
                                <div class="feature-icon mx-auto mb-3" style="width: 80px; height: 80px; font-size: 2rem;">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <h5 class="mb-1 font-display">
                                    <?= esc($beneficiary['name']) ?>
                                </h5>
                                <p class="text-muted small mb-2">Age: <?= esc($beneficiary['age']) ?> years</p>

                                <div class="mt-2">
                                    <span class="badge px-3 py-2" style="background: var(--gradient-primary); color: white;">
                                        <?= esc($beneficiary['status']) ?>
                                    </span>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="mb-4">
                                    <h6 class="text-primary mb-2">
                                        <i class="fas fa-graduation-cap me-2"></i>Course & University
                                    </h6>
                                    <p class="mb-1 fw-bold"><?= esc($beneficiary['course']) ?></p>
                                    <p class="text-muted small mb-0"><?= esc($beneficiary['institution']) ?></p>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-6">
                                        <h6 class="text-primary mb-2">
                                            <i class="fas fa-book me-2"></i>Education Level
                                        </h6>
                                        <p class="mb-0 fw-semibold"><?= esc($beneficiary['education_level']) ?></p>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="text-primary mb-2">
                                            <i class="fas fa-map-marker-alt me-2"></i>Location
                                        </h6>
                                        <p class="mb-0 fw-semibold"><?= esc($beneficiary['city']) ?>, <?= esc($beneficiary['state']) ?></p>
                                    </div>
                                </div>

                                <?php if (!empty($beneficiary['phone']) || !empty($beneficiary['email'])): ?>
                                <div class="mb-4">
                                    <h6 class="text-primary mb-2">
                                        <i class="fas fa-address-book me-2"></i>Contact Information
                                    </h6>
                                    <?php if (!empty($beneficiary['phone'])): ?>
                                        <p class="mb-1 small">
                                            <i class="fas fa-phone me-2"></i><?= esc($beneficiary['phone']) ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if (!empty($beneficiary['email'])): ?>
                                        <p class="mb-0 small">
                                            <i class="fas fa-envelope me-2"></i><?= esc($beneficiary['email']) ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>

                                <?php if (!empty($beneficiary['academic_achievements'])): ?>
                                <div class="mb-4">
                                    <h6 class="text-primary mb-2">
                                        <i class="fas fa-trophy me-2"></i>Academic Achievements
                                    </h6>
                                    <p class="mb-0 small text-muted"><?= esc(substr($beneficiary['academic_achievements'], 0, 100)) ?><?= strlen($beneficiary['academic_achievements']) > 100 ? '...' : '' ?></p>
                                </div>
                                <?php endif; ?>

                                <?php if (!empty($beneficiary['career_goals'])): ?>
                                <div class="mb-4">
                                    <h6 class="text-primary mb-2">
                                        <i class="fas fa-bullseye me-2"></i>Career Goals
                                    </h6>
                                    <p class="mb-0 small text-muted"><?= esc(substr($beneficiary['career_goals'], 0, 100)) ?><?= strlen($beneficiary['career_goals']) > 100 ? '...' : '' ?></p>
                                </div>
                                <?php endif; ?>

                                <div class="text-center mt-4">
                                    <div class="row">
                                        <?php if (!empty($beneficiary['email'])): ?>
                                            <div class="col-6">
                                                <a href="mailto:<?= esc($beneficiary['email']) ?>" class="btn btn-outline-primary btn-sm w-100">
                                                    <i class="fas fa-envelope me-2"></i>Email
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($beneficiary['linkedin_url'])): ?>
                                            <div class="col-6">
                                                <a href="<?= esc($beneficiary['linkedin_url']) ?>" target="_blank" class="btn btn-outline-info btn-sm w-100">
                                                    <i class="fab fa-linkedin me-2"></i>LinkedIn
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if (isset($pager) && $pager->getPageCount() > 1): ?>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <nav aria-label="Beneficiaries pagination">
                                <ul class="pagination pagination-lg">
                                    <?php if ($pager->hasPrevious()): ?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?= $pager->getPrevious() . (isset($search) && $search ? '&search=' . urlencode($search) : '') ?>">
                                                <i class="fas fa-chevron-left"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php foreach ($pager->links() as $link): ?>
                                        <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                                            <a class="page-link" href="<?= $link['uri'] . (isset($search) && $search ? '&search=' . urlencode($search) : '') ?>">
                                                <?= $link['title'] ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>

                                    <?php if ($pager->hasNext()): ?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?= $pager->getNext() . (isset($search) && $search ? '&search=' . urlencode($search) : '') ?>">
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>

                        <div class="text-center mt-3">
                            <p class="text-muted">
                                Showing <?= $pager->getDetails()['start'] ?> to <?= $pager->getDetails()['end'] ?>
                                of <?= $pager->getDetails()['total'] ?> entries
                            </p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        <?php else: ?>
            <div class="text-center py-5">
                <div class="feature-icon mx-auto mb-4" style="width: 120px; height: 120px; font-size: 4rem; background: var(--gradient-soft); color: var(--text-light);">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3 class="text-muted mb-3">
                    <?= !empty($search) ? 'No Results Found' : 'No Beneficiaries Found' ?>
                </h3>
                <p class="text-muted mb-4">
                    <?= !empty($search) ?
                        'Try adjusting your search terms or browse all beneficiaries.' :
                        'We\'re currently working on adding new beneficiaries to our program.' ?>
                </p>
                <?php if (!empty($search)): ?>
                    <a href="<?= base_url('beneficiaries') ?>" class="btn btn-primary">
                        <i class="fas fa-list me-2"></i> View All Beneficiaries
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding bg-soft">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title text-gradient font-display">Support Our Mission</h2>
                <p class="lead text-muted mb-4">Help us continue supporting deserving students in their educational journey. Every contribution makes a meaningful difference in someone's life.</p>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="<?= base_url('success-stories') ?>" class="btn btn-primary btn-lg w-100">
                            <i class="fas fa-star me-2"></i> Read Success Stories
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="<?= base_url() ?>" class="btn btn-outline-primary btn-lg w-100">
                            <i class="fas fa-home me-2"></i> Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
