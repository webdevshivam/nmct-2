<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<section class="hero-section">
    <div class="container">
        <h1 class="mb-4">Our Beneficiaries</h1>
        <p class="lead text-muted">Meet the talented students we're proud to support on their educational journey</p>
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
            <?php if (!empty($pursuing_beneficiaries) || !empty($passout_beneficiaries)): ?>

                <!-- Currently Pursuing Students -->
                <?php if (!empty($pursuing_beneficiaries)): ?>
                    <div class="mb-5">
                        <div class="text-center mb-4">
                            <h2 class="section-title text-primary font-display">
                                <i class="fas fa-book-open me-2"></i>Currently Pursuing
                            </h2>
                            <p class="text-muted">Students who are currently studying and pursuing their dreams</p>
                            <hr class="w-25 mx-auto">
                        </div>
                        <div class="row" id="pursuingGrid">
                            <?php foreach ($pursuing_beneficiaries as $beneficiary): ?>
                                <div class="col-lg-6 col-xl-4 mb-4 beneficiary-card">
                                    <div class="card h-100 border-0 shadow-lg">
                                        <div class="card-header text-center bg-light">
                                            <div class="feature-icon mx-auto mb-3" style="width: 80px; height: 80px; font-size: 2rem; background: var(--gradient-soft); color: var(--primary-color); overflow: hidden; border-radius: 50%;">
                                                <?php if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])): ?>
                                                    <img src="<?= base_url('uploads/beneficiaries/' . $beneficiary['image']) ?>" 
                                                         alt="<?= esc($beneficiary['name']) ?>" 
                                                         style="width: 100%; height: 100%; object-fit: cover;">
                                                <?php else: ?>
                                                    <i class="fas fa-user-graduate"></i>
                                                <?php endif; ?>
                                            </div>
                                            <h5 class="mb-1 font-display text-dark">
                                                <?= esc($beneficiary['name']) ?>
                                            </h5>
                                            <?php if (!empty($beneficiary['age'])): ?>
                                                <p class="text-muted small mb-2"><?= esc($beneficiary['age']) ?> years old</p>
                                            <?php endif; ?>

                                            <div class="mt-2">
                                                <span class="badge bg-info px-3 py-2">
                                                    <i class="fas fa-book me-1"></i>Currently Studying
                                                </span>
                                            </div>
                                        </div>
                                        <?php
                                        // Include the card body content here
                                        include('beneficiary_card_body.php');
                                        ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Passed Out Students -->
                <?php if (!empty($passout_beneficiaries)): ?>
                    <div class="mb-5">
                        <div class="text-center mb-4">
                            <h2 class="section-title text-success font-display">
                                <i class="fas fa-graduation-cap me-2"></i>Passed Out
                            </h2>
                            <p class="text-muted">Students who have successfully completed their studies</p>
                            <hr class="w-25 mx-auto">
                        </div>
                        <div class="row" id="passoutGrid">
                            <?php foreach ($passout_beneficiaries as $beneficiary): ?>
                                <div class="col-lg-6 col-xl-4 mb-4 beneficiary-card">
                                    <div class="card h-100 border-0 shadow-lg">
                                        <div class="card-header text-center bg-light">
                                            <div class="feature-icon mx-auto mb-3" style="width: 80px; height: 80px; font-size: 2rem; background: var(--gradient-soft); color: var(--success-color); overflow: hidden; border-radius: 50%;">
                                                <?php if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])): ?>
                                                    <img src="<?= base_url('uploads/beneficiaries/' . $beneficiary['image']) ?>" 
                                                         alt="<?= esc($beneficiary['name']) ?>" 
                                                         style="width: 100%; height: 100%; object-fit: cover;">
                                                <?php else: ?>
                                                    <i class="fas fa-graduation-cap"></i>
                                                <?php endif; ?>
                                            </div>
                                            <h5 class="mb-1 font-display text-dark">
                                                <?= esc($beneficiary['name']) ?>
                                            </h5>
                                            <?php if (!empty($beneficiary['age'])): ?>
                                                <p class="text-muted small mb-2"><?= esc($beneficiary['age']) ?> years old</p>
                                            <?php endif; ?>

                                            <div class="mt-2">
                                                <span class="badge bg-success px-3 py-2">
                                                    <i class="fas fa-graduation-cap me-1"></i>Graduated
                                                </span>
                                            </div>
                                        </div>
                                        <?php
                                        // Include the card body content here
                                        include('beneficiary_card_body.php');
                                        ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
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

<!-- Beneficiary Details Modal -->
<div class="modal fade" id="beneficiaryModal" tabindex="-1" aria-labelledby="beneficiaryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="beneficiaryModalLabel">
                    <i class="fas fa-user-graduate me-2"></i>Beneficiary Details
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalContent">
                <!-- Content will be populated by JavaScript -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<section class="section-padding bg-soft">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title text-primary font-display">Support Our Mission</h2>
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
        const modal = new bootstrap.Modal(document.getElementById('beneficiaryModal'));
        const modalContent = document.getElementById('modalContent');

        // Handle read more buttons
        document.addEventListener('click', function(e) {
            if (e.target.closest('.read-more-btn')) {
                const btn = e.target.closest('.read-more-btn');
                const data = btn.dataset;

                const content = generateModalContent(data);
                modalContent.innerHTML = content;
                modal.show();
            }
        });

        function generateModalContent(data) {
            let html = `
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="feature-icon mx-auto mb-3" style="width: 100px; height: 100px; font-size: 3rem; background: var(--gradient-soft); color: var(--primary-color);">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h4 class="text-dark mb-1">${data.beneficiaryName}</h4>
                    ${data.beneficiaryAge ? `<p class="text-muted">${data.beneficiaryAge} years old</p>` : ''}
                    <span class="badge bg-success px-3 py-2">${data.beneficiaryStatus.charAt(0).toUpperCase() + data.beneficiaryStatus.slice(1)}</span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h6 class="text-primary mb-3 fw-bold"><i class="fas fa-graduation-cap me-2"></i>Academic Information</h6>
                    <div class="mb-3">
                        <strong class="text-dark">Education Level:</strong><br>
                        <span class="text-muted">${data.beneficiaryEducation}</span>
                    </div>
                    <div class="mb-3">
                        <strong class="text-dark">Course:</strong><br>
                        <span class="text-muted">${data.beneficiaryCourse}</span>
                    </div>
                    <div class="mb-3">
                        <strong class="text-dark">Institution:</strong><br>
                        <span class="text-muted">${data.beneficiaryInstitution}</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <h6 class="text-primary mb-3 fw-bold"><i class="fas fa-address-book me-2"></i>Contact Information</h6>
                    ${data.beneficiaryPhone ? `
                        <div class="mb-3">
                            <strong class="text-dark">Phone:</strong><br>
                            <a href="tel:${data.beneficiaryPhone}" class="text-muted text-decoration-none">${data.beneficiaryPhone}</a>
                        </div>
                    ` : ''}
                    ${data.beneficiaryEmail ? `
                        <div class="mb-3">
                            <strong class="text-dark">Email:</strong><br>
                            <a href="mailto:${data.beneficiaryEmail}" class="text-muted text-decoration-none">${data.beneficiaryEmail}</a>
                        </div>
                    ` : ''}
                    ${(data.beneficiaryCity || data.beneficiaryState) ? `
                        <div class="mb-3">
                            <strong class="text-dark">Location:</strong><br>
                            <span class="text-muted">${[data.beneficiaryCity, data.beneficiaryState].filter(Boolean).join(', ')}</span>
                        </div>
                    ` : ''}
                </div>
            </div>

            ${data.beneficiaryFamily || data.beneficiaryAchievements || data.beneficiaryGoals ? `
                <hr class="my-4">
                <div class="row">
                    ${data.beneficiaryFamily ? `
                        <div class="col-12 mb-4">
                            <h6 class="text-primary mb-2 fw-bold"><i class="fas fa-home me-2"></i>Family Background</h6>
                            <p class="text-muted">${data.beneficiaryFamily.replace(/\n/g, '<br>')}</p>
                        </div>
                    ` : ''}

                    ${data.beneficiaryAchievements ? `
                        <div class="col-12 mb-4">
                            <h6 class="text-primary mb-2 fw-bold"><i class="fas fa-trophy me-2"></i>Academic Achievements</h6>
                            <p class="text-muted">${data.beneficiaryAchievements.replace(/\n/g, '<br>')}</p>
                        </div>
                    ` : ''}

                    ${data.beneficiaryGoals ? `
                        <div class="col-12 mb-4">
                            <h6 class="text-primary mb-2 fw-bold"><i class="fas fa-bullseye me-2"></i>Career Goals</h6>
                            <p class="text-muted">${data.beneficiaryGoals.replace(/\n/g, '<br>')}</p>
                        </div>
                    ` : ''}
                </div>
            ` : ''}

            ${data.beneficiaryLinkedin || data.beneficiaryCompany || data.beneficiaryEmail ? `
                <hr class="my-4">
                <div class="row">
                    <div class="col-12">
                        <h6 class="text-primary mb-3 fw-bold"><i class="fas fa-link me-2"></i>Quick Actions</h6>
                        <div class="d-flex gap-2 flex-wrap">
                            ${data.beneficiaryEmail ? `
                                <a href="mailto:${data.beneficiaryEmail}" class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-envelope me-1"></i>Send Email
                                </a>
                            ` : ''}
                            ${data.beneficiaryLinkedin ? `
                                <a href="${data.beneficiaryLinkedin}" target="_blank" class="btn btn-outline-info btn-sm">
                                    <i class="fab fa-linkedin me-1"></i>LinkedIn Profile
                                </a>
                            ` : ''}
                            ${data.beneficiaryCompany ? `
                                <a href="${data.beneficiaryCompany}" target="_blank" class="btn btn-outline-secondary btn-sm">
                                    <i class="fas fa-building me-1"></i>Company Link
                                </a>
                            ` : ''}
                        </div>
                    </div>
                </div>
            ` : ''}
        `;

            return html;
        }

        // Handle load more functionality
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        const loadingSpinner = document.getElementById('loadingSpinner');
        const beneficiariesGrid = document.getElementById('beneficiariesGrid');

        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                const page = this.getAttribute('data-page');
                const search = this.getAttribute('data-search');

                loadMoreBtn.classList.add('d-none');
                loadingSpinner.classList.remove('d-none');

                fetch(`<?= base_url('beneficiaries/load-more') ?>?page=${page}&search=${encodeURIComponent(search)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.success && data.html) {
                            beneficiariesGrid.insertAdjacentHTML('beforeend', data.html);
                            loadMoreBtn.setAttribute('data-page', parseInt(page) + 1);

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