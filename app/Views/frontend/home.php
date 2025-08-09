<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Modern Hero Section -->
<section class="modern-hero-section">
    <!-- Animated Background Elements -->
    <div class="hero-background-animation">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
        <div class="floating-shape shape-4"></div>
        <div class="floating-icons">
            <div class="floating-icon icon-1"><i class="fas fa-graduation-cap"></i></div>
            <div class="floating-icon icon-2"><i class="fas fa-book"></i></div>
            <div class="floating-icon icon-3"><i class="fas fa-lightbulb"></i></div>
            <div class="floating-icon icon-4"><i class="fas fa-users"></i></div>
            <div class="floating-icon icon-5"><i class="fas fa-rocket"></i></div>
        </div>
    </div>

    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <!-- Left Content -->
            <div class="col-lg-6 order-2 order-lg-1">
                <!-- Tagline Ribbon -->
                <div class="hero-ribbon mb-4" style="margin-top: 20px;">
                    <span class="ribbon-text">
                        <i class="fas fa-star me-2"></i>
                        Empowering Students Since 2010
                    </span>
                </div>

                <div class="hero-content-left">
                    <h1 class="modern-hero-title mb-3">
                        <?= $translations['hero_title'] ?>
                    </h1>

                    <h2 class="modern-hero-subtitle mb-4">
                        <?= $translations['hero_tagline'] ?>
                    </h2>

                    <p class="modern-hero-description mb-4">
                        <?= $translations['hero_description'] ?>
                    </p>

                    <!-- Feature Icons Row -->
                    <div class="hero-features-row mb-5">
                        <div class="feature-item">
                            <div class="feature-icon-circle">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <span class="feature-text"><?= $translations['quality_education'] ?></span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon-circle">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <span class="feature-text"><?= $translations['personal_mentoring'] ?></span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon-circle">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <span class="feature-text"><?= $translations['career_development'] ?></span>
                        </div>
                    </div>

                    <!-- Modern CTA Buttons -->
                    <div class="hero-cta-buttons mb-5">
                        <a href="<?= base_url($language . '/ngo-works') ?>" class="btn btn-modern-primary btn-xl me-3 mb-3">
                            <i class="fas fa-rocket me-2"></i>
                            <?= $translations['our_approach'] ?>
                        </a>
                        <a href="<?= base_url($language . '/beneficiaries') ?>" class="btn btn-modern-secondary btn-xl mb-3">
                            <i class="fas fa-users me-2"></i>
                            <?= $translations['support_students'] ?>
                        </a>
                    </div>

                    <!-- Animated Statistics -->
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-number" data-count="500">0</div>
                            <div class="stat-label">Students Supported</div>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <div class="stat-number" data-count="95">0</div>
                            <div class="stat-label">Employment Rate</div>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <div class="stat-number" data-count="50">0</div>
                            <div class="stat-label">Industry Partners</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Visual -->
            <div class="col-lg-6 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="hero-visual-container">
                    <!-- Image Frame -->
                    <div class="hero-image-frame">
                        <img src="<?= base_url('assets/images/bharatpur-hero-image.png') ?>"
                            alt="Educational Transformation - Students becoming professionals"
                            class="hero-main-image"
                            onerror="this.src='https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=450&fit=crop&crop=faces,entropy&auto=format&q=80'">

                        <!-- Decorative Elements on Image -->
                        <div class="image-decorations">
                            <div class="decoration-circle circle-1"></div>
                            <div class="decoration-circle circle-2"></div>
                            <div class="decoration-triangle"></div>
                        </div>
                    </div>

                    <!-- Testimonial Quote -->
                    <div class="floating-testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-avatar">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face&auto=format&q=80"
                                    alt="Student testimonial" class="avatar-img">
                            </div>
                            <div class="testimonial-text">
                                <p class="quote">"Transformed my career completely!"</p>
                                <span class="author">- Rajesh K., Software Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wave Bottom -->
    <div class="hero-wave-bottom">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>
</section>

<!-- Counter Animation Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animate counters
        const counters = document.querySelectorAll('.stat-number[data-count]');

        function animateCounter(counter) {
            const target = parseInt(counter.getAttribute('data-count'));
            const increment = target / 100;
            let current = 0;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    counter.textContent = target + (counter.textContent.includes('%') ? '%' : '+');
                    clearInterval(timer);
                } else {
                    counter.textContent = Math.floor(current) + (target === 95 ? '%' : '+');
                }
            }, 20);
        }

        // Intersection Observer for animation trigger
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    if (!counter.classList.contains('animated')) {
                        counter.classList.add('animated');
                        animateCounter(counter);
                    }
                }
            });
        }, {
            threshold: 0.7
        });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });
</script>

<!-- Unique Approach Section -->
<section class="section-padding bg-soft">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Column - Reduced width for better balance -->
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="about-image-container position-relative">
                    <!-- Gradient overlay for better text contrast -->
                    <div class="image-gradient-overlay"></div>
                    <img src="<?= base_url('assets/images/our-difference-image.jpg') ?>"
                        alt="Creating Professionals - Students in mentoring and professional training"
                        class="img-fluid rounded-4 shadow-lg contextual-image"
                        style="width: 100%; height: 450px; object-fit: cover;"
                        onerror="this.src='https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&h=450&fit=crop&crop=faces,entropy&auto=format&q=80'">

                    <!-- Enhanced decorative elements -->
                    <div class="image-overlay-decorations">
                        <div class="floating-element element-1">
                            <div class="icon-circle">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                        </div>
                        <div class="floating-element element-2">
                            <div class="icon-circle">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="floating-element element-3">
                            <div class="icon-circle">
                                <i class="fas fa-briefcase"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Content Column - Increased width for better breathing room -->
            <div class="col-lg-7">
                <div class="about-content">
                    <span class="badge bg-primary-light text-primary px-4 py-2 rounded-pill mb-4 section-badge">
                        <i class="fas fa-star me-2"></i>
                        <?= $translations['our_difference'] ?>
                    </span>
                    
                    <!-- Enhanced headline with better hierarchy -->
                    <div class="headline-container mb-4">
                        <h2 class="section-title font-display enhanced-headline">
                            We Don't Just Provide <span class="text-highlight">Education</span>
                            <br>
                            We Create <span class="text-primary-gradient">Professionals</span>
                        </h2>
                        <div class="headline-underline"></div>
                    </div>
                    
                    <!-- Enhanced subheading -->
                    <p class="lead enhanced-description mb-5">
                        Unlike traditional NGOs that only offer monetary support, we provide comprehensive 
                        <span class="text-emphasis">Education</span>, 
                        <span class="text-emphasis">Mentoring</span>, and 
                        <span class="text-emphasis">Career Placement</span> 
                        to transform students into industry-ready professionals.
                    </p>

                    <!-- Enhanced benefit cards with more spacing -->
                    <div class="benefits-container mb-5">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="benefit-card h-100">
                                    <div class="benefit-icon-large bg-gradient-primary">
                                        <i class="fas fa-brain"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h5 class="benefit-title"><?= $translations['holistic_development'] ?></h5>
                                        <p class="benefit-description">
                                            Complete intellectual, emotional and professional growth.
                                            <br>
                                            <small class="text-muted">Mind + Skills + Character</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="benefit-card h-100">
                                    <div class="benefit-icon-large bg-gradient-success">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h5 class="benefit-title"><?= $translations['industry_ready'] ?></h5>
                                        <p class="benefit-description">
                                            Practical skills and real-world experience.
                                            <br>
                                            <small class="text-muted">Ready for Professional Success</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced CTA buttons with better differentiation -->
                    <div class="cta-buttons-container">
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="<?= base_url($language . '/ngo-works') ?>" 
                               class="btn btn-primary-enhanced btn-lg">
                                <i class="fas fa-rocket me-2"></i>
                                <?= $translations['our_approach'] ?>
                            </a>
                            <a href="<?= base_url($language . '/beneficiaries') ?>" 
                               class="btn btn-outline-primary-enhanced btn-lg">
                                <i class="fas fa-users me-2"></i>
                                <?= $translations['meet_beneficiaries'] ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Three Pillars Section -->
<section class="section-padding pillars-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <div class="pillars-badge mb-4">
                    <span class="badge bg-primary-light text-primary px-4 py-3 rounded-pill fs-6 fw-bold">
                        <i class="fas fa-columns me-2"></i>
                        <?= $translations['our_three_pillars'] ?>
                    </span>
                </div>
                <h2 class="pillars-main-title font-display mb-4">
                    <?= $translations['complete_transformation'] ?>
                </h2>
                <p class="pillars-subtitle lead text-muted mb-5">
                    Empowering students through education, mentorship, and career opportunities.
                </p>
            </div>
        </div>
        
        <div class="row g-4 pillars-row">
            <!-- Education Pillar -->
            <div class="col-lg-4 pillar-col">
                <div class="pillar-card education-pillar h-100">
                    <div class="card-body p-5 text-center">
                        <div class="pillar-icon-container mb-4">
                            <div class="pillar-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                        </div>
                        <h3 class="pillar-title mb-4"><?= $translations['quality_education'] ?></h3>
                        <p class="pillar-description mb-4"><?= $translations['complete_academic_support'] ?> with modern learning tools and industry-relevant skills.</p>
                        <ul class="pillar-features list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-book feature-icon me-2"></i> 
                                <?= $translations['full_academic_coverage'] ?>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-laptop-code feature-icon me-2"></i> 
                                <?= $translations['modern_learning_tools'] ?>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-tools feature-icon me-2"></i> 
                                <?= $translations['skill_workshops'] ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Mentoring Pillar -->
            <div class="col-lg-4 pillar-col">
                <div class="pillar-card mentoring-pillar h-100">
                    <div class="card-body p-5 text-center">
                        <div class="pillar-icon-container mb-4">
                            <div class="pillar-icon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <h3 class="pillar-title mb-4"><?= $translations['personal_mentoring'] ?></h3>
                        <p class="pillar-description mb-4">Personal guidance from industry professionals for career and personal growth.</p>
                        <ul class="pillar-features list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-handshake feature-icon me-2"></i> 
                                <?= $translations['industry_mentors_text'] ?>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-compass feature-icon me-2"></i> 
                                <?= $translations['regular_guidance'] ?>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-user-graduate feature-icon me-2"></i> 
                                <?= $translations['personality_development'] ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Career Development Pillar -->
            <div class="col-lg-4 pillar-col">
                <div class="pillar-card career-pillar h-100">
                    <div class="card-body p-5 text-center">
                        <div class="pillar-icon-container mb-4">
                            <div class="pillar-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                        </div>
                        <h3 class="pillar-title mb-4"><?= $translations['career_development'] ?></h3>
                        <p class="pillar-description mb-4">Job placement assistance and professional training for sustainable careers.</p>
                        <ul class="pillar-features list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-briefcase feature-icon me-2"></i> 
                                <?= $translations['job_placement'] ?>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-comments feature-icon me-2"></i> 
                                <?= $translations['interview_training'] ?>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-chart-line feature-icon me-2"></i> 
                                <?= $translations['career_support'] ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="section-padding" style="background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%); color: white;">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title text-white font-display mb-4"><?= $translations['real_impact'] ?></h2>
                <p class="lead text-white-50"><?= $translations['impact_description'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-users fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2"><?= $total_beneficiaries ?>+</h3>
                    <h5 class="fw-semibold mb-2"><?= $translations['students_transformed'] ?></h5>
                    <p class="text-white-50 mb-0"><?= $translations['into_professionals'] ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-briefcase fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2">95%</h3>
                    <h5 class="fw-semibold mb-2"><?= $translations['employment_rate'] ?></h5>
                    <p class="text-white-50 mb-0"><?= $translations['in_chosen_fields'] ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-user-tie fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2">50+</h3>
                    <h5 class="fw-semibold mb-2"><?= $translations['industry_mentors'] ?></h5>
                    <p class="text-white-50 mb-0"><?= $translations['professional_guidance'] ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-rupee-sign fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2">₹50K+</h3>
                    <h5 class="fw-semibold mb-2"><?= $translations['average_salary'] ?></h5>
                    <p class="text-white-50 mb-0"><?= $translations['sustainable_livelihoods'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How We Work Section -->
<section class="section-padding bg-soft">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3"><?= $translations['how_we_work'] ?></span>
                <h2 class="section-title font-display mb-4"><?= $translations['empowerment_process'] ?></h2>
                <p class="lead text-muted"><?= $translations['process_description'] ?></p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-lg h-100 text-center process-card">
                    <div class="card-body p-5">
                        <div class="process-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 70px; height: 70px; font-size: 1.5rem; font-weight: bold;">1</div>
                        <div class="icon-box bg-primary-light text-primary rounded-3 p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                            <i class="fas fa-graduation-cap fs-4"></i>
                        </div>
                        <h5 class="card-title font-display mb-3"><?= $translations['quality_education'] ?></h5>
                        <p class="card-text text-muted">Quality education with industry-relevant curriculum and modern tools.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-lg h-100 text-center process-card">
                    <div class="card-body p-5">
                        <div class="process-number bg-success text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 70px; height: 70px; font-size: 1.5rem; font-weight: bold;">2</div>
                        <div class="icon-box bg-success-light text-success rounded-3 p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                            <i class="fas fa-user-tie fs-4"></i>
                        </div>
                        <h5 class="card-title font-display mb-3"><?= $translations['personal_mentoring'] ?></h5>
                        <p class="card-text text-muted">Personal guidance from industry experts for career growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-lg h-100 text-center process-card">
                    <div class="card-body p-5">
                        <div class="process-number bg-warning text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 70px; height: 70px; font-size: 1.5rem; font-weight: bold;">3</div>
                        <div class="icon-box bg-warning-light text-warning rounded-3 p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                            <i class="fas fa-briefcase fs-4"></i>
                        </div>
                        <h5 class="card-title font-display mb-3"><?= $translations['career_development'] ?></h5>
                        <p class="card-text text-muted">Job placement and professional support for career success.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<?php if (!empty($success_stories)): ?>
    <section class="section-padding">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3"><?= $translations['professional_success'] ?></span>
                    <h2 class="section-title font-display mb-4"><?= $translations['from_students'] ?></h2>
                    <p class="lead text-muted"><?= $translations['success_description'] ?></p>
                </div>
            </div>
            <div class="row g-4">
                <?php foreach (array_slice($success_stories, 0, 3) as $index => $story): ?>
                    <div class="col-lg-4">
                        <div class="card border-0 shadow-lg h-100 success-story-card">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-circle bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                        style="width: 60px; height: 60px; font-size: 1.5rem;">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div>
                                        <h6 class="card-title mb-1 font-display"><?= esc($story['name']) ?></h6>
                                        <p class="text-primary fw-semibold mb-0"><?= esc($story['current_position']) ?></p>
                                    </div>
                                </div>
                                <p class="card-text text-muted mb-3"><?= esc(substr($story['story'], 0, 150)) ?>...</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="badge bg-success px-3 py-2">
                                        <i class="fas fa-briefcase me-1"></i> Professional
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
                <a href="<?= base_url($language . '/success-stories') ?>" class="btn btn-primary btn-lg px-5">
                    <i class="fas fa-arrow-right me-2"></i> <?= $translations['view_all_stories'] ?>
                </a>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Call to Action -->
<section class="section-padding" style="background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%); color: white;">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="font-display mb-4 display-5"><?= $translations['education_revolution'] ?></h2>
                <p class="lead mb-5 fs-4"><?= $translations['revolution_description'] ?></p>
                <div class="row justify-content-center g-3">
                    <div class="col-md-4">
                        <a href="<?= base_url($language . '/ngo-works') ?>" class="btn btn-light btn-lg w-100 py-3">
                            <i class="fas fa-rocket me-2"></i> <?= $translations['our_approach'] ?>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url($language . '/beneficiaries') ?>" class="btn btn-outline-light btn-lg w-100 py-3">
                            <i class="fas fa-users me-2"></i> <?= $translations['support_students'] ?>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url($language . '/success-stories') ?>" class="btn btn-outline-light btn-lg w-100 py-3">
                            <i class="fas fa-handshake me-2"></i> <?= $translations['become_mentor'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Modern Hero Section */
    .modern-hero-section {
        min-height: 100vh;
        background: linear-gradient(135deg, #ffd700 0%, #fff8e1 30%, #ffffff 70%, #f5f5f5 100%);
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        padding: 140px 0 60px 0;
    }

    /* Animated Background Elements */
    .hero-background-animation {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
        pointer-events: none;
    }

    .floating-shape {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 215, 0, 0.1);
        animation: floatShape 20s infinite linear;
    }

    .shape-1 {
        width: 100px;
        height: 100px;
        top: 10%;
        left: 10%;
        animation-delay: 0s;
    }

    .shape-2 {
        width: 60px;
        height: 60px;
        top: 70%;
        right: 20%;
        animation-delay: -5s;
        background: rgba(165, 102, 28, 0.15);
    }

    .shape-3 {
        width: 80px;
        height: 80px;
        top: 30%;
        right: 10%;
        animation-delay: -10s;
        background: rgba(255, 140, 0, 0.1);
    }

    .shape-4 {
        width: 120px;
        height: 120px;
        bottom: 10%;
        left: 15%;
        animation-delay: -15s;
    }

    .floating-icons {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .floating-icon {
        position: absolute;
        font-size: 1.5rem;
        color: rgba(165, 102, 28, 0.3);
        animation: floatIcon 15s infinite ease-in-out;
    }

    .icon-1 {
        top: 15%;
        left: 5%;
        animation-delay: 0s;
    }

    .icon-2 {
        top: 25%;
        right: 8%;
        animation-delay: -3s;
    }

    .icon-3 {
        top: 60%;
        left: 8%;
        animation-delay: -6s;
    }

    .icon-4 {
        bottom: 30%;
        right: 12%;
        animation-delay: -9s;
    }

    .icon-5 {
        bottom: 20%;
        left: 20%;
        animation-delay: -12s;
    }

    @keyframes floatShape {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
            opacity: 0.1;
        }

        25% {
            transform: translateY(-30px) rotate(90deg);
            opacity: 0.3;
        }

        50% {
            transform: translateY(-20px) rotate(180deg);
            opacity: 0.2;
        }

        75% {
            transform: translateY(-40px) rotate(270deg);
            opacity: 0.25;
        }
    }

    @keyframes floatIcon {

        0%,
        100% {
            transform: translateY(0px) scale(1);
            opacity: 0.3;
        }

        33% {
            transform: translateY(-20px) scale(1.1);
            opacity: 0.6;
        }

        66% {
            transform: translateY(-10px) scale(0.9);
            opacity: 0.4;
        }
    }

    /* Content Styling */
    .hero-content-left {
        position: relative;
        z-index: 10;
    }

    /* Tagline Ribbon */
    .hero-ribbon {
        display: inline-block;
        margin-bottom: 1.5rem;
    }

    .ribbon-text {
        background: linear-gradient(135deg, #d4a574 0%, #a5661c 100%);
        color: white;
        padding: 8px 20px;
        border-radius: 25px;
        font-size: 0.9rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 15px rgba(165, 102, 28, 0.3);
        display: inline-flex;
        align-items: center;
        animation: ribbonGlow 3s ease-in-out infinite alternate;
    }

    @keyframes ribbonGlow {
        0% {
            box-shadow: 0 4px 15px rgba(165, 102, 28, 0.3);
        }

        100% {
            box-shadow: 0 6px 25px rgba(165, 102, 28, 0.5);
        }
    }

    /* Modern Typography */
    .modern-hero-title {
        font-family: 'Montserrat', 'Poppins', sans-serif;
        font-size: 3.8rem;
        font-weight: 800;
        color: #2d1810;
        line-height: 1.1;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .modern-hero-subtitle {
        font-family: 'Poppins', sans-serif;
        font-size: 1.6rem;
        font-weight: 600;
        color: #a5661c;
        text-transform: uppercase;
        letter-spacing: 3px;
        line-height: 1.3;
        margin-bottom: 1.5rem;
    }

    .modern-hero-description {
        font-family: 'Lora', serif;
        font-size: 1.2rem;
        color: #555;
        line-height: 1.7;
        font-weight: 400;
        max-width: 500px;
    }

    /* Feature Icons Row */
    .hero-features-row {
        display: flex;
        gap: 2rem;
        align-items: center;
        justify-content: flex-start;
        flex-wrap: wrap;
    }

    .feature-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        max-width: 120px;
        transition: all 0.3s ease;
    }

    .feature-item:hover {
        transform: translateY(-5px);
    }

    .feature-icon-circle {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #ffd700 0%, #a5661c 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.8rem;
        margin-bottom: 0.8rem;
        box-shadow: 0 8px 25px rgba(165, 102, 28, 0.3);
        transition: all 0.3s ease;
    }

    .feature-item:hover .feature-icon-circle {
        transform: scale(1.1);
        box-shadow: 0 12px 35px rgba(165, 102, 28, 0.5);
    }

    .feature-text {
        font-size: 0.85rem;
        font-weight: 600;
        color: #666;
        text-align: center;
        line-height: 1.2;
    }

    /* Modern CTA Buttons */
    .hero-cta-buttons {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .btn-modern-primary {
        background: linear-gradient(135deg, #d4a574 0%, #a5661c 100%);
        border: none;
        color: white;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        padding: 18px 40px;
        border-radius: 50px;
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 10px 30px rgba(165, 102, 28, 0.4);
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .btn-modern-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s;
    }

    .btn-modern-primary:hover::before {
        left: 100%;
    }

    .btn-modern-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(165, 102, 28, 0.6);
        color: white;
    }

    .btn-modern-secondary {
        background: transparent;
        border: 3px solid #a5661c;
        color: #a5661c;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        padding: 15px 37px;
        border-radius: 50px;
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
    }

    .btn-modern-secondary:hover {
        background: #a5661c;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(165, 102, 28, 0.4);
    }

    .btn-xl {
        font-size: 1.1rem;
        padding: 18px 40px;
    }

    /* Animated Statistics */
    .hero-stats {
        display: flex;
        gap: 2rem;
        align-items: center;
        margin-top: 2rem;
        flex-wrap: wrap;
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        font-family: 'Montserrat', sans-serif;
        font-size: 2.5rem;
        font-weight: 800;
        color: #a5661c;
        line-height: 1;
        margin-bottom: 0.3rem;
    }

    .stat-label {
        font-size: 0.85rem;
        color: #666;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .stat-divider {
        width: 2px;
        height: 40px;
        background: linear-gradient(to bottom, transparent, #ddd, transparent);
    }

    /* Right Visual Container */
    .hero-visual-container {
        position: relative;
        z-index: 10;
    }

    .hero-image-frame {
        position: relative;
        background: linear-gradient(135deg, #ffd700 0%, #a5661c 100%);
        border-radius: 30px;
        padding: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        transform: perspective(1000px) rotateY(-5deg);
        transition: all 0.3s ease;
    }

    .hero-image-frame:hover {
        transform: perspective(1000px) rotateY(0deg) scale(1.02);
        box-shadow: 0 25px 80px rgba(0, 0, 0, 0.2);
    }

    .hero-main-image {
        width: 100%;
        height: auto;
        border-radius: 20px;
        display: block;
        max-height: 500px;
        object-fit: cover;
    }

    /* Image Decorations */
    .image-decorations {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
    }

    .decoration-circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
    }

    .circle-1 {
        width: 60px;
        height: 60px;
        top: -15px;
        right: -15px;
        animation: float 4s ease-in-out infinite;
    }

    .circle-2 {
        width: 40px;
        height: 40px;
        bottom: -10px;
        left: -10px;
        animation: float 5s ease-in-out infinite reverse;
    }

    .decoration-triangle {
        position: absolute;
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-bottom: 35px solid rgba(255, 255, 255, 0.3);
        top: 50%;
        left: -25px;
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    /* Floating Testimonial */
    .floating-testimonial {
        position: absolute;
        bottom: -30px;
        right: -20px;
        background: white;
        border-radius: 20px;
        padding: 1.5rem;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        max-width: 300px;
        animation: floatTestimonial 8s ease-in-out infinite;
    }

    @keyframes floatTestimonial {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .testimonial-content {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .testimonial-avatar {
        flex-shrink: 0;
    }

    .avatar-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 3px solid #ffd700;
    }

    .testimonial-text .quote {
        font-size: 0.9rem;
        color: #333;
        margin-bottom: 0.3rem;
        font-style: italic;
        font-weight: 500;
    }

    .testimonial-text .author {
        font-size: 0.75rem;
        color: #a5661c;
        font-weight: 600;
    }

    /* Wave Bottom */
    .hero-wave-bottom {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
        z-index: 5;
    }

    .hero-wave-bottom svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 60px;
        fill: #ffffff;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .modern-hero-title {
            font-size: 3rem;
        }

        .modern-hero-subtitle {
            font-size: 1.3rem;
            letter-spacing: 2px;
        }

        .hero-features-row {
            justify-content: center;
            gap: 1.5rem;
        }

        .hero-stats {
            justify-content: center;
        }

        .floating-testimonial {
            position: relative;
            bottom: auto;
            right: auto;
            margin-top: 2rem;
            max-width: 100%;
        }
    }

    @media (max-width: 768px) {
        .modern-hero-section {
            padding: 120px 0 60px 0;
        }
        
        .modern-hero-title {
            font-size: 2.5rem;
        }

        .modern-hero-subtitle {
            font-size: 1.1rem;
            letter-spacing: 1.5px;
        }

        .hero-features-row {
            gap: 1rem;
        }

        .feature-icon-circle {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }

        .hero-cta-buttons {
            flex-direction: column;
            align-items: center;
        }

        .btn-modern-primary,
        .btn-modern-secondary {
            width: 100%;
            max-width: 300px;
            justify-content: center;
        }

        .hero-stats {
            gap: 1rem;
        }

        .stat-number {
            font-size: 2rem;
        }

        .hero-image-frame {
            transform: none;
            padding: 15px;
        }
    }

    @media (max-width: 576px) {
        .modern-hero-title {
            font-size: 2rem;
        }

        .hero-features-row {
            flex-direction: column;
            gap: 1.5rem;
        }

        .floating-shape,
        .floating-icon {
            display: none;
        }

        .stat-divider {
            display: none;
        }

        .hero-stats {
            flex-direction: column;
            gap: 1.5rem;
        }
    }

    /* Enhanced Our Difference Section Styles */
    
    /* Image enhancements */
    .about-image-container {
        position: relative;
        overflow: hidden;
        border-radius: 20px;
    }
    
    .image-gradient-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(165, 102, 28, 0.1) 0%, transparent 50%);
        z-index: 2;
        border-radius: 20px;
    }
    
    .contextual-image {
        transition: all 0.3s ease;
        border-radius: 20px;
    }
    
    .contextual-image:hover {
        transform: scale(1.02);
    }
    
    /* Floating decorative elements */
    .floating-element {
        position: absolute;
        z-index: 3;
        animation: floatElement 6s ease-in-out infinite;
    }
    
    .element-1 {
        top: 20px;
        right: 20px;
        animation-delay: 0s;
    }
    
    .element-2 {
        bottom: 80px;
        left: 20px;
        animation-delay: 2s;
    }
    
    .element-3 {
        top: 50%;
        right: -15px;
        animation-delay: 4s;
    }
    
    .floating-element .icon-circle {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        font-size: 1.5rem;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
    }
    
    @keyframes floatElement {
        0%, 100% { transform: translateY(0px) scale(1); }
        33% { transform: translateY(-10px) scale(1.05); }
        66% { transform: translateY(5px) scale(0.98); }
    }
    
    /* Enhanced badge styling */
    .section-badge {
        font-size: 1rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 15px rgba(37, 99, 235, 0.2);
    }
    
    /* Enhanced headline styling */
    .headline-container {
        position: relative;
    }
    
    .enhanced-headline {
        font-size: 2.8rem;
        line-height: 1.2;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 1rem;
    }
    
    .text-highlight {
        color: #667eea;
        position: relative;
    }
    
    .text-highlight::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, #667eea, #764ba2);
        border-radius: 2px;
    }
    
    .text-primary-gradient {
        background: linear-gradient(135deg, var(--primary-color) 0%, #667eea 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 800;
    }
    
    .headline-underline {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), #ffd700);
        border-radius: 2px;
        margin-bottom: 1rem;
    }
    
    /* Enhanced description styling */
    .enhanced-description {
        font-size: 1.2rem;
        line-height: 1.8;
        color: #4a5568;
        font-weight: 500;
    }
    
    .text-emphasis {
        color: var(--primary-color);
        font-weight: 700;
        position: relative;
    }
    
    .text-emphasis::after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, var(--primary-color), transparent);
        opacity: 0.3;
    }
    
    /* Enhanced benefit cards */
    .benefits-container {
        margin-top: 3rem;
    }
    
    .benefit-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .benefit-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), #667eea);
    }
    
    .benefit-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }
    
    .benefit-icon-large {
        width: 80px;
        height: 80px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 2rem;
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
    }
    
    .bg-gradient-primary {
        background: linear-gradient(135deg, var(--primary-color) 0%, #667eea 100%);
    }
    
    .bg-gradient-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }
    
    .benefit-card:hover .benefit-icon-large {
        transform: scale(1.1) rotate(5deg);
    }
    
    .benefit-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 0.8rem;
    }
    
    .benefit-description {
        font-size: 1rem;
        color: #4a5568;
        line-height: 1.6;
        margin-bottom: 0;
    }
    
    /* Enhanced CTA buttons */
    .cta-buttons-container {
        margin-top: 2.5rem;
    }
    
    .btn-primary-enhanced {
        background: linear-gradient(135deg, var(--primary-color) 0%, #667eea 100%);
        border: none;
        color: white;
        font-weight: 700;
        padding: 16px 32px;
        border-radius: 50px;
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 10px 30px rgba(37, 99, 235, 0.3);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .btn-primary-enhanced::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s;
    }
    
    .btn-primary-enhanced:hover::before {
        left: 100%;
    }
    
    .btn-primary-enhanced:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(37, 99, 235, 0.4);
        color: white;
    }
    
    .btn-outline-primary-enhanced {
        background: transparent;
        border: 3px solid var(--primary-color);
        color: var(--primary-color);
        font-weight: 700;
        padding: 13px 29px;
        border-radius: 50px;
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .btn-outline-primary-enhanced::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: linear-gradient(135deg, var(--primary-color) 0%, #667eea 100%);
        transition: width 0.3s ease;
        z-index: -1;
    }
    
    .btn-outline-primary-enhanced:hover::before {
        width: 100%;
    }
    
    .btn-outline-primary-enhanced:hover {
        color: white;
        border-color: var(--primary-color);
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(37, 99, 235, 0.3);
    }
    
    /* Responsive adjustments */
    @media (max-width: 992px) {
        .enhanced-headline {
            font-size: 2.3rem;
        }
        
        .benefit-card {
            padding: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .benefit-icon-large {
            width: 70px;
            height: 70px;
            font-size: 1.8rem;
        }
    }
    
    @media (max-width: 768px) {
        .enhanced-headline {
            font-size: 2rem;
            text-align: center;
        }
        
        .headline-underline {
            margin: 1rem auto;
        }
        
        .enhanced-description {
            font-size: 1.1rem;
            text-align: center;
        }
        
        .cta-buttons-container .d-flex {
            flex-direction: column;
            align-items: center;
        }
        
        .btn-primary-enhanced,
        .btn-outline-primary-enhanced {
            width: 100%;
            max-width: 300px;
        }
        
        .floating-element {
            display: none;
        }
    }

    /* Enhanced Three Pillars Section */
    .pillars-section {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        position: relative;
        overflow: hidden;
        padding: 100px 0;
    }
    
    .pillars-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 25% 25%, rgba(165, 102, 28, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 75% 75%, rgba(255, 215, 0, 0.08) 0%, transparent 50%);
        z-index: 1;
    }
    
    .container {
        position: relative;
        z-index: 2;
    }
    
    /* Badge Styling */
    .pillars-badge .badge {
        font-size: 1.1rem;
        font-weight: 700;
        letter-spacing: 0.8px;
        box-shadow: 0 8px 25px rgba(165, 102, 28, 0.2);
        border: 2px solid rgba(165, 102, 28, 0.15);
        background: linear-gradient(135deg, #a5661c 0%, #d4a574 100%);
        color: white;
        transition: all 0.3s ease;
        padding: 12px 24px;
    }
    
    .pillars-badge .badge:hover {
        transform: scale(1.08);
        box-shadow: 0 12px 35px rgba(165, 102, 28, 0.35);
    }
    
    /* Main Title */
    .pillars-main-title {
        font-size: 3.5rem;
        font-weight: 900;
        color: #1a202c;
        line-height: 1.1;
        text-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
        font-family: 'Montserrat', sans-serif;
    }
    
    /* Subtitle */
    .pillars-subtitle {
        font-size: 1.3rem;
        font-weight: 600;
        color: #4a5568;
        line-height: 1.7;
        max-width: 650px;
        margin: 0 auto;
        font-family: 'Poppins', sans-serif;
    }
    
    /* Pillar Cards Container */
    .pillars-row {
        margin-top: 5rem;
        display: flex;
        align-items: stretch;
    }
    
    .pillar-col {
        display: flex;
        animation: fadeInUp 0.8s ease-out;
        animation-fill-mode: both;
    }
    
    .pillar-col:nth-child(1) { animation-delay: 0.2s; }
    .pillar-col:nth-child(2) { animation-delay: 0.4s; }
    .pillar-col:nth-child(3) { animation-delay: 0.6s; }
    
    /* Enhanced Pillar Cards */
    .pillar-card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 15px 45px rgba(0, 0, 0, 0.12);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        min-height: 580px;
        display: flex;
        flex-direction: column;
        background: white;
    }
    
    .pillar-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 6px;
        transition: all 0.4s ease;
        z-index: 2;
    }
    
    .pillar-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 25px 70px rgba(0, 0, 0, 0.2);
    }
    
    /* Card-specific top borders and hover effects */
    .education-pillar::before {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .education-pillar:hover {
        box-shadow: 0 25px 70px rgba(102, 126, 234, 0.3);
    }
    
    .mentoring-pillar::before {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }
    
    .mentoring-pillar:hover {
        box-shadow: 0 25px 70px rgba(240, 147, 251, 0.3);
    }
    
    .career-pillar::before {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }
    
    .career-pillar:hover {
        box-shadow: 0 25px 70px rgba(79, 172, 254, 0.3);
    }
    
    /* Card Body */
    .pillar-card .card-body {
        padding: 3rem 2.5rem;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        text-align: center;
        background: white;
        position: relative;
        z-index: 3;
    }
    
    /* Icon Container */
    .pillar-icon-container {
        position: relative;
        display: inline-block;
        margin-bottom: 2rem;
    }
    
    .pillar-icon {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.2rem;
        color: white;
        transition: all 0.4s ease;
        position: relative;
        margin: 0 auto;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }
    
    .education-pillar .pillar-icon {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .mentoring-pillar .pillar-icon {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }
    
    .career-pillar .pillar-icon {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }
    
    .pillar-card:hover .pillar-icon {
        transform: scale(1.15) rotate(10deg);
        animation: iconPulse 0.6s ease;
    }
    
    @keyframes iconPulse {
        0%, 100% { transform: scale(1.15) rotate(10deg); }
        50% { transform: scale(1.25) rotate(-5deg); }
    }
    
    /* Title Styling */
    .pillar-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.6rem;
        font-weight: 700;
        color: #2d3748;
        line-height: 1.3;
        margin-bottom: 1.5rem;
    }
    
    /* Description */
    .pillar-description {
        font-size: 1rem;
        line-height: 1.7;
        color: #4a5568;
        font-weight: 400;
        margin-bottom: 2rem;
        flex-grow: 1;
    }
    
    /* Feature List */
    .pillar-features {
        text-align: left;
        padding-left: 0;
        margin: 0;
    }
    
    .pillar-features li {
        display: flex;
        align-items: flex-start;
        font-size: 0.95rem;
        line-height: 1.6;
        color: #2d3748;
        font-weight: 500;
        margin-bottom: 1rem;
        padding: 0.5rem;
        border-radius: 8px;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .pillar-features li:hover {
        background: rgba(0, 0, 0, 0.02);
        transform: translateX(8px);
        padding-left: 1rem;
    }
    
    .pillar-features li:last-child {
        margin-bottom: 0;
    }
    
    .feature-icon {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.7rem;
        color: white;
        flex-shrink: 0;
        margin-right: 12px;
        margin-top: 2px;
        transition: all 0.3s ease;
    }
    
    .education-pillar .feature-icon {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .mentoring-pillar .feature-icon {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }
    
    .career-pillar .feature-icon {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }
    
    .pillar-features li:hover .feature-icon {
        transform: scale(1.2);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
    
    /* Fade in animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Responsive Design */
    @media (max-width: 992px) {
        .pillars-main-title {
            font-size: 2.8rem;
        }
        
        .pillars-subtitle {
            font-size: 1.2rem;
        }
        
        .pillar-card {
            min-height: 520px;
            margin-bottom: 2.5rem;
        }
        
        .pillar-card .card-body {
            padding: 2.5rem 2rem;
        }
        
        .pillar-icon {
            width: 80px;
            height: 80px;
            font-size: 2rem;
        }
        
        .pillar-title {
            font-size: 1.5rem;
        }
    }
    
    @media (max-width: 768px) {
        .pillars-section {
            padding: 80px 0;
        }
        
        .pillars-main-title {
            font-size: 2.2rem;
        }
        
        .pillars-subtitle {
            font-size: 1.1rem;
        }
        
        .pillars-row {
            margin-top: 3rem;
        }
        
        .pillar-card {
            min-height: 480px;
            margin-bottom: 2rem;
        }
        
        .pillar-card .card-body {
            padding: 2rem 1.5rem;
        }
        
        .pillar-icon {
            width: 70px;
            height: 70px;
            font-size: 1.8rem;
        }
        
        .pillar-title {
            font-size: 1.4rem;
        }
        
        .pillar-description {
            font-size: 0.95rem;
        }
        
        .pillar-features li {
            font-size: 0.9rem;
            margin-bottom: 0.8rem;
        }
        
        .feature-icon {
            width: 22px;
            height: 22px;
            margin-right: 10px;
        }
    }
    
    @media (max-width: 576px) {
        .pillars-badge .badge {
            font-size: 1rem;
            padding: 10px 20px;
        }
        
        .pillar-card .card-body {
            padding: 1.5rem 1.2rem;
        }
        
        .pillar-features li {
            padding: 0.4rem;
        }
        
        .pillar-features li:hover {
            padding-left: 0.8rem;
        }
    }

    /* General Styles */
    .value-props {
        background: rgba(165, 102, 28, 0.1);
        padding: 1.5rem;
        border-radius: 12px;
        border-left: 4px solid var(--primary-color);
    }
</style>

<?= $this->endSection() ?>
