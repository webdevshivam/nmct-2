
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
                        <form method="GET" action="<?= base_url('beneficiaries') ?>" class="row g-3" id="searchForm">
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
        <div id="beneficiariesContainer">
            <?php if (!empty($beneficiaries)): ?>
                <div class="row" id="beneficiariesGrid">
                    <?php foreach ($beneficiaries as $beneficiary): ?>
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
                    <?php endforeach; ?>
                </div>

                <!-- Load More Section -->
                <?php if (isset($has_more) && $has_more): ?>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <button id="loadMoreBtn" class="btn btn-primary btn-lg" data-page="<?= ($current_page ?? 1) + 1 ?>" data-search="<?= esc($search ?? '') ?>">
                            <i class="fas fa-plus me-2"></i>Load More Students
                        </button>
                        <div id="loadingSpinner" class="d-none mt-3">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <p class="text-muted mt-2">Loading more students...</p>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle read more buttons
    document.querySelectorAll('.read-more-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const icon = this.querySelector('i');
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            
            setTimeout(() => {
                if (this.getAttribute('aria-expanded') === 'true') {
                    icon.className = 'fas fa-minus me-1';
                    this.innerHTML = '<small><i class="fas fa-minus me-1"></i>Show Less</small>';
                } else {
                    icon.className = 'fas fa-plus me-1';
                    this.innerHTML = '<small><i class="fas fa-plus me-1"></i>Read More</small>';
                }
            }, 100);
        });
    });

    // Handle load more functionality
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const loadingSpinner = document.getElementById('loadingSpinner');
    const beneficiariesGrid = document.getElementById('beneficiariesGrid');

    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            const page = this.getAttribute('data-page');
            const search = this.getAttribute('data-search');
            
            // Show loading state
            loadMoreBtn.classList.add('d-none');
            loadingSpinner.classList.remove('d-none');
            
            // Make AJAX request
            const url = `<?= base_url('beneficiaries/load-more') ?>?page=${page}&search=${encodeURIComponent(search)}`;
            
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (data.success && data.html) {
                        // Append new beneficiaries
                        beneficiariesGrid.insertAdjacentHTML('beforeend', data.html);
                        
                        // Update page number
                        loadMoreBtn.setAttribute('data-page', parseInt(page) + 1);
                        
                        // Hide load more button if no more data
                        if (!data.has_more) {
                            loadMoreBtn.remove();
                            loadingSpinner.innerHTML = '<p class="text-muted">All students loaded!</p>';
                        } else {
                            loadMoreBtn.classList.remove('d-none');
                        }
                    } else {
                        loadMoreBtn.innerHTML = '<i class="fas fa-exclamation-triangle me-2"></i>Error loading more';
                        loadMoreBtn.classList.add('btn-danger');
                    }
                    loadingSpinner.classList.add('d-none');
                })
                .catch(error => {
                    console.error('Error:', error);
                    loadMoreBtn.innerHTML = '<i class="fas fa-exclamation-triangle me-2"></i>Error loading more';
                    loadMoreBtn.classList.add('btn-danger');
                    loadingSpinner.classList.add('d-none');
                });
        });
    }
});
</script>

<?= $this->endSection() ?>
