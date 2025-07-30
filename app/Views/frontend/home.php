
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10 mx-auto text-center">
                <h1 class="font-display mb-4">Transforming Lives Through Education</h1>
                <p class="lead mb-5">Empowering underprivileged students to achieve their dreams and build a brighter future for themselves and their communities through comprehensive support and guidance.</p>
                <div class="hero-buttons">
                    <a href="<?= base_url('beneficiaries') ?>" class="btn btn-primary btn-lg me-3">
                        <i class="fas fa-graduation-cap me-2"></i> Meet Our Beneficiaries
                    </a>
                    <a href="<?= base_url('success-stories') ?>" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-star me-2"></i> Success Stories
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="section-padding bg-soft fade-in">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title text-gradient font-display">Our Impact in Numbers</h2>
                <p class="lead text-muted">See how we're making a difference in the lives of students across our community</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card stats-card h-100">
                    <div class="card-body">
                        <div class="feature-icon bg-primary mb-3 mx-auto">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="stats-number"><?= $total_beneficiaries ?></span>
                        <h5 class="fw-bold">Total Beneficiaries</h5>
                        <p class="mb-0 text-muted">Students supported through our comprehensive education programs</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card stats-card h-100">
                    <div class="card-body">
                        <div class="feature-icon bg-success mb-3 mx-auto" style="background: var(--gradient-accent);">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <span class="stats-number"><?= $active_beneficiaries ?></span>
                        <h5 class="fw-bold">Active Students</h5>
                        <p class="mb-0 text-muted">Currently pursuing their education with our support and guidance</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card stats-card h-100">
                    <div class="card-body">
                        <div class="feature-icon mb-3 mx-auto" style="background: var(--gradient-secondary);">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <span class="stats-number"><?= count($success_stories) ?></span>
                        <h5 class="fw-bold">Success Stories</h5>
                        <p class="mb-0 text-muted">Graduates who achieved their dreams and are now giving back</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card stats-card h-100">
                    <div class="card-body">
                        <div class="feature-icon mb-3 mx-auto" style="background: linear-gradient(135deg, #f59e0b 0%, #eab308 100%);">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <span class="stats-number">5+</span>
                        <h5 class="fw-bold">Years of Service</h5>
                        <p class="mb-0 text-muted">Dedicated years of transforming lives through education</p>
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
                <p class="mb-4 text-muted">We provide comprehensive support including financial assistance, mentorship, career guidance, and skill development to deserving students from underprivileged backgrounds, helping them pursue higher education and achieve their career goals.</p>
                
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="feature-icon me-3" style="width: 60px; height: 60px; font-size: 1.3rem;">
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
                            <div class="feature-icon me-3" style="width: 60px; height: 60px; font-size: 1.3rem; background: var(--gradient-accent);">
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
                            <div class="feature-icon me-3" style="width: 60px; height: 60px; font-size: 1.3rem; background: var(--gradient-secondary);">
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
                            <div class="feature-icon me-3" style="width: 60px; height: 60px; font-size: 1.3rem; background: linear-gradient(135deg, #f59e0b 0%, #eab308 100%);">
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
                        <div class="feature-icon mb-4 mx-auto" style="width: 120px; height: 120px; font-size: 3.5rem;">
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
                                <h5 class="fw-bold" style="color: var(--accent-color);">5+</h5>
                                <small class="text-muted">Years Experience</small>
                            </div>
                            <div class="col-4">
                                <h5 class="fw-bold" style="color: var(--secondary-color);">24/7</h5>
                                <small class="text-muted">Support Available</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="section-padding bg-soft fade-in">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title text-gradient font-display">How We Make It Happen</h2>
                <p class="lead text-muted">Our systematic approach to transforming lives through education</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-step">
                    <div class="process-number">1</div>
                    <h5 class="fw-bold mb-3">Application & Assessment</h5>
                    <p class="text-muted">Students apply through our comprehensive application process where we assess their needs, potential, and commitment to education.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-step">
                    <div class="process-number" style="background: var(--gradient-accent);">2</div>
                    <h5 class="fw-bold mb-3">Selection & Onboarding</h5>
                    <p class="text-muted">Our selection committee carefully reviews applications and selected students are onboarded with a comprehensive orientation program.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-step">
                    <div class="process-number" style="background: var(--gradient-secondary);">3</div>
                    <h5 class="fw-bold mb-3">Support & Mentorship</h5>
                    <p class="text-muted">Ongoing financial support, academic mentorship, career guidance, and personal development throughout their educational journey.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-step">
                    <div class="process-number" style="background: linear-gradient(135deg, #f59e0b 0%, #eab308 100%);">4</div>
                    <h5 class="fw-bold mb-3">Success & Impact</h5>
                    <p class="text-muted">Graduates become successful professionals who contribute back to society and inspire the next generation of students.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<?php if (!empty($success_stories)): ?>
<section class="section-padding fade-in">
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
                            <div class="feature-icon me-3" style="width: 70px; height: 70px; font-size: 1.8rem; background: var(--gradient-<?= $index % 3 == 0 ? 'primary' : ($index % 3 == 1 ? 'accent' : 'secondary') ?>);">
                                <i class="fas fa-star"></i>
                            </div>
                            <div>
                                <h5 class="card-title mb-1 font-display"><?= esc($story['title']) ?></h5>
                                <h6 class="text-primary fw-bold"><?= esc($story['student_name']) ?></h6>
                            </div>
                        </div>
                        <p class="card-text text-muted mb-3"><?= esc(substr($story['story'], 0, 150)) ?>...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="badge px-3 py-2" style="background: var(--gradient-accent); color: white;">
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

<!-- Testimonials Section -->
<section class="section-padding bg-soft fade-in">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title text-gradient font-display">What Our Students Say</h2>
                <p class="lead text-muted">Hear directly from our beneficiaries about their transformative journey</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="testimonial-card">
                    <div class="mb-3">
                        <i class="fas fa-quote-left fa-2x" style="color: var(--primary-color);"></i>
                    </div>
                    <p class="text-muted mb-4">"The support I received from Nayantar Trust changed my entire life. From financial assistance to career guidance, they were with me every step of the way."</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="feature-icon me-3" style="width: 50px; height: 50px; font-size: 1.2rem;">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Priya Sharma</h6>
                            <small class="text-muted">Software Engineer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="testimonial-card">
                    <div class="mb-3">
                        <i class="fas fa-quote-left fa-2x" style="color: var(--accent-color);"></i>
                    </div>
                    <p class="text-muted mb-4">"Not just financial support, but the mentorship and emotional support I received made me who I am today. Forever grateful to this amazing organization."</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="feature-icon me-3" style="width: 50px; height: 50px; font-size: 1.2rem; background: var(--gradient-accent);">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Rajesh Kumar</h6>
                            <small class="text-muted">Doctor</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="testimonial-card">
                    <div class="mb-3">
                        <i class="fas fa-quote-left fa-2x" style="color: var(--secondary-color);"></i>
                    </div>
                    <p class="text-muted mb-4">"The trust's holistic approach to education support - from academics to personality development - prepared me for a successful career in business."</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="feature-icon me-3" style="width: 50px; height: 50px; font-size: 1.2rem; background: var(--gradient-secondary);">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Anita Patel</h6>
                            <small class="text-muted">Entrepreneur</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <div class="feature-icon mx-auto mb-3" style="background: var(--gradient-accent);">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h5 class="fw-bold">Innovation</h5>
                    <p class="text-muted">Modern teaching methods and technology integration for better learning outcomes.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="feature-icon mx-auto mb-3" style="background: var(--gradient-secondary);">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5 class="fw-bold">Transparency</h5>
                    <p class="text-muted">Complete transparency in our processes and regular updates on student progress.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="feature-icon mx-auto mb-3" style="background: linear-gradient(135deg, #f59e0b 0%, #eab308 100%);">
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
