
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="font-display mb-4">Transforming Lives Through Education</h1>
                <p class="lead mb-4">Empowering underprivileged students to achieve their dreams and build a brighter future for themselves and their communities.</p>
                <div class="hero-buttons">
                    <a href="<?= base_url('beneficiaries') ?>" class="btn btn-primary btn-lg me-3">
                        <i class="fas fa-graduation-cap me-2"></i> Meet Our Beneficiaries
                    </a>
                    <a href="<?= base_url('success-stories') ?>" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-star me-2"></i> Success Stories
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="section-padding bg-light fade-in">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title text-gradient font-display">Our Impact in Numbers</h2>
                <p class="lead text-muted">See how we're making a difference in the lives of students across our community</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card stats-card h-100">
                    <div class="card-body">
                        <div class="feature-icon bg-primary mb-3 mx-auto">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="stats-number"><?= $total_beneficiaries ?></span>
                        <h5 class="fw-bold">Total Beneficiaries</h5>
                        <p class="mb-0">Students supported through our comprehensive education programs</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card stats-card h-100">
                    <div class="card-body">
                        <div class="feature-icon bg-success mb-3 mx-auto">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <span class="stats-number"><?= $active_beneficiaries ?></span>
                        <h5 class="fw-bold">Active Students</h5>
                        <p class="mb-0">Currently pursuing their education with our support and guidance</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card stats-card h-100">
                    <div class="card-body">
                        <div class="feature-icon bg-warning mb-3 mx-auto">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <span class="stats-number"><?= count($success_stories) ?></span>
                        <h5 class="fw-bold">Success Stories</h5>
                        <p class="mb-0">Graduates who achieved their dreams and are now giving back</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="section-padding fade-in">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="section-title text-gradient font-display">Our Mission & Vision</h2>
                <p class="lead mb-4">At Nayantar Memorial Charitable Trust, we believe that education is the most powerful weapon to change the world and break the cycle of poverty.</p>
                <p class="mb-4">We provide comprehensive support including financial assistance, mentorship, career guidance, and skill development to deserving students from underprivileged backgrounds, helping them pursue higher education and achieve their career goals.</p>
                
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="feature-icon me-3" style="width: 50px; height: 50px; font-size: 1.2rem;">
                                <i class="fas fa-scholarship"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Scholarship Programs</h6>
                                <small class="text-muted">Financial support for education</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="feature-icon me-3" style="width: 50px; height: 50px; font-size: 1.2rem;">
                                <i class="fas fa-compass"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Career Guidance</h6>
                                <small class="text-muted">Professional development support</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="feature-icon me-3" style="width: 50px; height: 50px; font-size: 1.2rem;">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Mentorship Support</h6>
                                <small class="text-muted">One-on-one guidance and support</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="feature-icon me-3" style="width: 50px; height: 50px; font-size: 1.2rem;">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Skill Development</h6>
                                <small class="text-muted">Modern skills for future careers</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-body text-center p-5">
                        <div class="feature-icon mb-4 mx-auto" style="width: 100px; height: 100px; font-size: 3rem;">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4 class="font-display mb-3">Education for All</h4>
                        <p class="text-muted mb-4">We believe every student deserves the opportunity to pursue their dreams through quality education, regardless of their economic background or social circumstances.</p>
                        <div class="row text-center">
                            <div class="col-4">
                                <h5 class="text-primary fw-bold">100%</h5>
                                <small class="text-muted">Success Rate</small>
                            </div>
                            <div class="col-4">
                                <h5 class="text-success fw-bold">5+</h5>
                                <small class="text-muted">Years Experience</small>
                            </div>
                            <div class="col-4">
                                <h5 class="text-warning fw-bold">24/7</h5>
                                <small class="text-muted">Support Available</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<?php if (!empty($success_stories)): ?>
<section class="section-padding bg-light fade-in">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title text-gradient font-display">Inspiring Success Stories</h2>
                <p class="lead text-muted">Meet some of our incredible graduates who have transformed their lives through education</p>
            </div>
        </div>
        <div class="row">
            <?php foreach(array_slice($success_stories, 0, 3) as $index => $story): ?>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-lg">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon me-3" style="width: 60px; height: 60px; font-size: 1.5rem; background: var(--gradient-<?= $index % 2 == 0 ? 'primary' : 'secondary' ?>);">
                                <i class="fas fa-star"></i>
                            </div>
                            <div>
                                <h5 class="card-title mb-1 font-display"><?= esc($story['title']) ?></h5>
                                <h6 class="text-primary fw-bold"><?= esc($story['student_name']) ?></h6>
                            </div>
                        </div>
                        <p class="card-text text-muted mb-3"><?= esc(substr($story['story'], 0, 150)) ?>...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="badge bg-success px-3 py-2">
                                <i class="fas fa-trophy me-1"></i>
                                <?= esc($story['achievement']) ?>
                            </div>
                            <small class="text-muted">
                                <i class="fas fa-calendar-alt me-1"></i>
                                <?= date('Y', strtotime($story['created_at'] ?? 'now')) ?>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-5">
            <a href="<?= base_url('success-stories') ?>" class="btn btn-primary btn-lg">
                <i class="fas fa-arrow-right me-2"></i> View All Success Stories
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Features Section -->
<section class="section-padding fade-in">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title text-gradient font-display">Why Choose Us</h2>
                <p class="lead text-muted">We provide comprehensive support to ensure every student's success</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="feature-icon mx-auto mb-3">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h5 class="fw-bold">Personalized Care</h5>
                    <p class="text-muted">Individual attention and support for each student's unique needs and goals.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="feature-icon mx-auto mb-3">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h5 class="fw-bold">Innovation</h5>
                    <p class="text-muted">Modern teaching methods and technology integration for better learning outcomes.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="feature-icon mx-auto mb-3">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5 class="fw-bold">Transparency</h5>
                    <p class="text-muted">Complete transparency in our processes and regular updates on student progress.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="feature-icon mx-auto mb-3">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h5 class="fw-bold">Community Impact</h5>
                    <p class="text-muted">Creating a positive ripple effect that benefits entire communities.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding" style="background: var(--gradient-primary); color: white;">
    <div class="container text-center fade-in">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="font-display mb-4">Join Us in Making a Difference</h2>
                <p class="lead mb-5">Together, we can transform lives through the power of education and create opportunities for a brighter tomorrow.</p>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-light btn-lg w-100">
                            <i class="fas fa-hands-helping me-2"></i> Support Our Cause
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="<?= base_url('success-stories') ?>" class="btn btn-outline-light btn-lg w-100">
                            <i class="fas fa-book-open me-2"></i> Read More Stories
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
