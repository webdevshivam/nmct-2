
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section - More Compact -->
<section class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-5 fw-bold mb-3">Our Beneficiaries</h1>
                <p class="lead text-muted mb-4">Talented students we're proud to support on their educational journey</p>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Search Section -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form method="GET" action="<?= base_url('beneficiaries') ?>" class="position-relative">
                    <div class="input-group shadow-sm">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="fas fa-search text-primary"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 py-3" name="search"
                            placeholder="Search students by name, course, or university..."
                            value="<?= esc($search ?? '') ?>">
                        <button type="submit" class="btn btn-primary px-4">
                            Search
                        </button>
                        <?php if (!empty($search)): ?>
                            <a href="<?= base_url('beneficiaries') ?>" class="btn btn-outline-secondary">
                                <i class="fas fa-times"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </form>
                
                <?php if (!empty($search)): ?>
                    <div class="text-center mt-3">
                        <small class="text-muted">
                            Showing results for "<strong><?= esc($search) ?></strong>"
                            <?php if (isset($total_results)): ?>
                                - <?= $total_results ?> student(s) found
                            <?php endif; ?>
                        </small>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Beneficiaries Grid -->
<section class="py-5">
    <div class="container">
        <?php if (!empty($pursuing_beneficiaries) || !empty($passout_beneficiaries)): ?>

            <!-- Currently Pursuing Students -->
            <?php if (!empty($pursuing_beneficiaries)): ?>
                <div class="mb-5">
                    <div class="row align-items-center mb-4">
                        <div class="col-md-6">
                            <h2 class="h3 text-primary mb-2">
                                <i class="fas fa-book-open me-2"></i>Currently Pursuing
                            </h2>
                            <p class="text-muted mb-0">Students actively working towards their goals</p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <span class="badge bg-primary fs-6 px-3 py-2">
                                <?= count($pursuing_beneficiaries) ?> Students
                            </span>
                        </div>
                    </div>
                    
                    <div class="row g-4">
                        <?php foreach ($pursuing_beneficiaries as $beneficiary): ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 border-0 shadow-sm hover-lift">
                                    <!-- Compact Header -->
                                    <div class="card-header bg-gradient-primary text-white text-center py-3">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <div class="rounded-circle bg-white bg-opacity-20 p-2 me-3">
                                                <?php if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])): ?>
                                                    <img src="<?= base_url('uploads/beneficiaries/' . $beneficiary['image']) ?>" 
                                                         alt="<?= esc($beneficiary['name']) ?>" 
                                                         class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                                                <?php else: ?>
                                                    <i class="fas fa-user-graduate text-white"></i>
                                                <?php endif; ?>
                                            </div>
                                            <div class="text-start">
                                                <h6 class="mb-0 fw-bold"><?= esc($beneficiary['name']) ?></h6>
                                                <?php if (!empty($beneficiary['age'])): ?>
                                                    <small class="opacity-75"><?= esc($beneficiary['age']) ?> years old</small>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <span class="badge bg-info px-2 py-1">
                                            <i class="fas fa-book me-1"></i>Studying
                                        </span>
                                    </div>
                                    
                                    <!-- Compact Body -->
                                    <div class="card-body p-3">
                                        <!-- Course Info -->
                                        <div class="mb-3">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-graduation-cap text-primary me-2 mt-1"></i>
                                                <div>
                                                    <p class="mb-0 fw-semibold text-dark small"><?= esc($beneficiary['course']) ?></p>
                                                    <p class="text-muted small mb-0"><?= esc($beneficiary['institution']) ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Education Level -->
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-certificate text-success me-2"></i>
                                                <span class="text-dark small"><?= esc($beneficiary['education_level']) ?></span>
                                            </div>
                                        </div>

                                        <!-- Contact -->
                                        <?php if (!empty($beneficiary['phone']) || !empty($beneficiary['email'])): ?>
                                        <div class="mb-3">
                                            <div class="row g-2">
                                                <?php if (!empty($beneficiary['phone'])): ?>
                                                <div class="col-6">
                                                    <a href="tel:<?= esc($beneficiary['phone']) ?>" class="btn btn-outline-primary btn-sm w-100">
                                                        <i class="fas fa-phone me-1"></i>Call
                                                    </a>
                                                </div>
                                                <?php endif; ?>
                                                <?php if (!empty($beneficiary['email'])): ?>
                                                <div class="col-6">
                                                    <a href="mailto:<?= esc($beneficiary['email']) ?>" class="btn btn-outline-success btn-sm w-100">
                                                        <i class="fas fa-envelope me-1"></i>Email
                                                    </a>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <!-- Footer with View More -->
                                    <div class="card-footer bg-light border-0 text-center">
                                        <button class="btn btn-primary btn-sm read-more-btn w-100"
                                                data-beneficiary-id="<?= $beneficiary['id'] ?>"
                                                data-beneficiary-name="<?= esc($beneficiary['name']) ?>"
                                                data-beneficiary-age="<?= esc($beneficiary['age'] ?? '') ?>"
                                                data-beneficiary-education="<?= esc($beneficiary['education_level']) ?>"
                                                data-beneficiary-course="<?= esc($beneficiary['course']) ?>"
                                                data-beneficiary-institution="<?= esc($beneficiary['institution']) ?>"
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
                                            <i class="fas fa-info-circle me-1"></i>View Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Passed Out Students -->
            <?php if (!empty($passout_beneficiaries)): ?>
                <div class="mb-5">
                    <div class="row align-items-center mb-4">
                        <div class="col-md-6">
                            <h2 class="h3 text-success mb-2">
                                <i class="fas fa-graduation-cap me-2"></i>Success Stories
                            </h2>
                            <p class="text-muted mb-0">Graduates who achieved their dreams</p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <span class="badge bg-success fs-6 px-3 py-2">
                                <?= count($passout_beneficiaries) ?> Graduates
                            </span>
                        </div>
                    </div>
                    
                    <div class="row g-4">
                        <?php foreach ($passout_beneficiaries as $beneficiary): ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 border-0 shadow-sm hover-lift">
                                    <!-- Compact Header -->
                                    <div class="card-header bg-gradient-success text-white text-center py-3">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <div class="rounded-circle bg-white bg-opacity-20 p-2 me-3">
                                                <?php if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])): ?>
                                                    <img src="<?= base_url('uploads/beneficiaries/' . $beneficiary['image']) ?>" 
                                                         alt="<?= esc($beneficiary['name']) ?>" 
                                                         class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                                                <?php else: ?>
                                                    <i class="fas fa-graduation-cap text-white"></i>
                                                <?php endif; ?>
                                            </div>
                                            <div class="text-start">
                                                <h6 class="mb-0 fw-bold"><?= esc($beneficiary['name']) ?></h6>
                                                <?php if (!empty($beneficiary['age'])): ?>
                                                    <small class="opacity-75"><?= esc($beneficiary['age']) ?> years old</small>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <span class="badge bg-warning text-dark px-2 py-1">
                                            <i class="fas fa-trophy me-1"></i>Graduated
                                        </span>
                                    </div>
                                    
                                    <!-- Compact Body -->
                                    <div class="card-body p-3">
                                        <!-- Course Info -->
                                        <div class="mb-3">
                                            <div class="d-flex align-items-start">
                                                <i class="fas fa-graduation-cap text-success me-2 mt-1"></i>
                                                <div>
                                                    <p class="mb-0 fw-semibold text-dark small"><?= esc($beneficiary['course']) ?></p>
                                                    <p class="text-muted small mb-0"><?= esc($beneficiary['institution']) ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Company Info -->
                                        <?php if (!empty($beneficiary['company_name'])): ?>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-building text-info me-2"></i>
                                                <span class="text-dark small fw-semibold"><?= esc($beneficiary['company_name']) ?></span>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                        <!-- Contact -->
                                        <?php if (!empty($beneficiary['phone']) || !empty($beneficiary['email']) || !empty($beneficiary['linkedin_url'])): ?>
                                        <div class="mb-3">
                                            <div class="row g-1">
                                                <?php if (!empty($beneficiary['phone'])): ?>
                                                <div class="col-4">
                                                    <a href="tel:<?= esc($beneficiary['phone']) ?>" class="btn btn-outline-primary btn-sm w-100 py-1">
                                                        <i class="fas fa-phone"></i>
                                                    </a>
                                                </div>
                                                <?php endif; ?>
                                                <?php if (!empty($beneficiary['email'])): ?>
                                                <div class="col-4">
                                                    <a href="mailto:<?= esc($beneficiary['email']) ?>" class="btn btn-outline-success btn-sm w-100 py-1">
                                                        <i class="fas fa-envelope"></i>
                                                    </a>
                                                </div>
                                                <?php endif; ?>
                                                <?php if (!empty($beneficiary['linkedin_url'])): ?>
                                                <div class="col-4">
                                                    <a href="<?= esc($beneficiary['linkedin_url']) ?>" target="_blank" class="btn btn-outline-info btn-sm w-100 py-1">
                                                        <i class="fab fa-linkedin"></i>
                                                    </a>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <!-- Footer with View More -->
                                    <div class="card-footer bg-light border-0 text-center">
                                        <button class="btn btn-success btn-sm read-more-btn w-100"
                                                data-beneficiary-id="<?= $beneficiary['id'] ?>"
                                                data-beneficiary-name="<?= esc($beneficiary['name']) ?>"
                                                data-beneficiary-age="<?= esc($beneficiary['age'] ?? '') ?>"
                                                data-beneficiary-education="<?= esc($beneficiary['education_level']) ?>"
                                                data-beneficiary-course="<?= esc($beneficiary['course']) ?>"
                                                data-beneficiary-institution="<?= esc($beneficiary['institution']) ?>"
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
                                            <i class="fas fa-eye me-1"></i>View Success
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

        <?php else: ?>
            <!-- Empty State -->
            <div class="text-center py-5">
                <div class="mb-4">
                    <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center" style="width: 120px; height: 120px;">
                        <i class="fas fa-user-graduate fa-3x text-muted"></i>
                    </div>
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

<!-- Enhanced Modal -->
<div class="modal fade" id="beneficiaryModal" tabindex="-1" aria-labelledby="beneficiaryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="beneficiaryModalLabel">
                    <i class="fas fa-user-graduate me-2"></i>Student Details
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalContent">
                <!-- Content populated by JavaScript -->
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h3 class="mb-3">Support Our Mission</h3>
                <p class="mb-4">Help us continue supporting deserving students in their educational journey.</p>
                <div class="row g-3 justify-content-center">
                    <div class="col-md-4">
                        <a href="<?= base_url('success-stories') ?>" class="btn btn-light btn-lg w-100">
                            <i class="fas fa-star me-2"></i> Success Stories
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('ngo-works') ?>" class="btn btn-outline-light btn-lg w-100">
                            <i class="fas fa-hands-helping me-2"></i> Our Work
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url() ?>" class="btn btn-outline-light btn-lg w-100">
                            <i class="fas fa-home me-2"></i> Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.hover-lift {
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

.hover-lift:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}

.bg-gradient-primary {
    background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);
}

.bg-gradient-success {
    background: linear-gradient(135deg, #198754 0%, #20c997 100%);
}

.card-header {
    border-bottom: none;
}

.card-footer {
    border-top: 1px solid rgba(0,0,0,0.125);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = new bootstrap.Modal(document.getElementById('beneficiaryModal'));
    const modalContent = document.getElementById('modalContent');

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
        return `
            <div class="text-center mb-4">
                <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="fas fa-user-graduate fa-2x text-primary"></i>
                </div>
                <h4 class="mb-1">${data.beneficiaryName}</h4>
                ${data.beneficiaryAge ? `<p class="text-muted">${data.beneficiaryAge} years old</p>` : ''}
                <span class="badge bg-${data.beneficiaryStatus === 'active' ? 'primary' : 'success'} px-3 py-2">
                    ${data.beneficiaryStatus.charAt(0).toUpperCase() + data.beneficiaryStatus.slice(1)}
                </span>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h6 class="text-primary mb-3"><i class="fas fa-graduation-cap me-2"></i>Academic Info</h6>
                    <div class="mb-3">
                        <strong>Education:</strong><br>
                        <span class="text-muted">${data.beneficiaryEducation}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Course:</strong><br>
                        <span class="text-muted">${data.beneficiaryCourse}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Institution:</strong><br>
                        <span class="text-muted">${data.beneficiaryInstitution}</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <h6 class="text-primary mb-3"><i class="fas fa-address-book me-2"></i>Contact Info</h6>
                    ${data.beneficiaryPhone ? `
                        <div class="mb-3">
                            <strong>Phone:</strong><br>
                            <a href="tel:${data.beneficiaryPhone}" class="text-decoration-none">${data.beneficiaryPhone}</a>
                        </div>
                    ` : ''}
                    ${data.beneficiaryEmail ? `
                        <div class="mb-3">
                            <strong>Email:</strong><br>
                            <a href="mailto:${data.beneficiaryEmail}" class="text-decoration-none">${data.beneficiaryEmail}</a>
                        </div>
                    ` : ''}
                    ${data.beneficiaryCompanyName ? `
                        <div class="mb-3">
                            <strong>Company:</strong><br>
                            <span class="text-muted">${data.beneficiaryCompanyName}</span>
                        </div>
                    ` : ''}
                    ${(data.beneficiaryCity || data.beneficiaryState) ? `
                        <div class="mb-3">
                            <strong>Location:</strong><br>
                            <span class="text-muted">${[data.beneficiaryCity, data.beneficiaryState].filter(Boolean).join(', ')}</span>
                        </div>
                    ` : ''}
                </div>
            </div>

            ${data.beneficiaryFamily || data.beneficiaryAchievements || data.beneficiaryGoals ? `
                <hr class="my-4">
                ${data.beneficiaryFamily ? `
                    <div class="mb-4">
                        <h6 class="text-primary mb-2"><i class="fas fa-home me-2"></i>Family Background</h6>
                        <p class="text-muted">${data.beneficiaryFamily.replace(/\n/g, '<br>')}</p>
                    </div>
                ` : ''}
                ${data.beneficiaryAchievements ? `
                    <div class="mb-4">
                        <h6 class="text-primary mb-2"><i class="fas fa-trophy me-2"></i>Achievements</h6>
                        <p class="text-muted">${data.beneficiaryAchievements.replace(/\n/g, '<br>')}</p>
                    </div>
                ` : ''}
                ${data.beneficiaryGoals ? `
                    <div class="mb-4">
                        <h6 class="text-primary mb-2"><i class="fas fa-bullseye me-2"></i>Career Goals</h6>
                        <p class="text-muted">${data.beneficiaryGoals.replace(/\n/g, '<br>')}</p>
                    </div>
                ` : ''}
            ` : ''}

            ${data.beneficiaryLinkedin || data.beneficiaryCompany || data.beneficiaryEmail ? `
                <hr class="my-4">
                <div class="text-center">
                    <h6 class="text-primary mb-3"><i class="fas fa-link me-2"></i>Connect</h6>
                    <div class="d-flex gap-2 justify-content-center flex-wrap">
                        ${data.beneficiaryEmail ? `
                            <a href="mailto:${data.beneficiaryEmail}" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-envelope me-1"></i>Email
                            </a>
                        ` : ''}
                        ${data.beneficiaryLinkedin ? `
                            <a href="${data.beneficiaryLinkedin}" target="_blank" class="btn btn-outline-info btn-sm">
                                <i class="fab fa-linkedin me-1"></i>LinkedIn
                            </a>
                        ` : ''}
                        ${data.beneficiaryCompany ? `
                            <a href="${data.beneficiaryCompany}" target="_blank" class="btn btn-outline-secondary btn-sm">
                                <i class="fas fa-building me-1"></i>Company
                            </a>
                        ` : ''}
                    </div>
                </div>
            ` : ''}
        `;
    }
});
</script>

<?= $this->endSection() ?>
