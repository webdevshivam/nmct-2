
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Enhanced Hero Section with Beautiful Background -->
<section class="hero-section-enhanced position-relative overflow-hidden">
    <!-- Background Image Overlay -->
    <div class="hero-bg-overlay position-absolute w-100 h-100"></div>
    
    <!-- Floating Elements -->
    <div class="floating-elements position-absolute w-100 h-100">
        <div class="float-element float-element-1"><i class="fas fa-graduation-cap"></i></div>
        <div class="float-element float-element-2"><i class="fas fa-book"></i></div>
        <div class="float-element float-element-3"><i class="fas fa-lightbulb"></i></div>
        <div class="float-element float-element-4"><i class="fas fa-trophy"></i></div>
        <div class="float-element float-element-5"><i class="fas fa-star"></i></div>
    </div>
    
    <div class="container position-relative" style="z-index: 10;">
        <div class="row align-items-center min-vh-100 py-5">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="hero-content-enhanced">
                    <!-- Logo and Tagline -->
                    <div class="hero-brand mb-4">
                        <div class="d-flex align-items-center justify-content-start mb-3">
                            <div class="logo-container me-3">
                                <img src="<?= base_url('assets/images/bharatpur-logo.png') ?>" 
                                     alt="Bharatpur Foundation" 
                                     class="bharatpur-logo-hero" 
                                     onerror="this.style.display='none'">
                            </div>
                            <div>
                                <h1 class="hero-title font-display mb-2">Beyond Financial Aid</h1>
                                <div class="hero-subtitle">Bharatpur Foundation</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Main Message -->
                    <div class="hero-message mb-5">
                        <h2 class="hero-tagline mb-4">
                            Transforming <span class="text-gradient-hero">Students</span> into 
                            <span class="text-gradient-hero">Professionals</span>
                        </h2>
                        <p class="hero-description">
                            We don't just provide money - we create careers. Through comprehensive education, 
                            personal mentoring, and professional development, we deliver real empowerment 
                            that transforms lives and uplifts society.
                        </p>
                    </div>
                    
                    <!-- Journey Steps -->
                    <div class="journey-steps mb-5">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="journey-step">
                                    <div class="step-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <h6>Quality Education</h6>
                                    <small>Foundation for Growth</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="journey-step">
                                    <div class="step-icon">
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                    <h6>Personal Mentoring</h6>
                                    <small>Individual Guidance</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="journey-step">
                                    <div class="step-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <h6>Career Success</h6>
                                    <small>Professional Achievement</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Call to Action Buttons -->
                    <div class="hero-actions d-flex flex-wrap gap-3">
                        <a href="<?= base_url('ngo-works') ?>" class="btn btn-hero-primary btn-lg">
                            <i class="fas fa-rocket me-2"></i> 
                            Our Unique Approach
                        </a>
                        <a href="<?= base_url('success-stories') ?>" class="btn btn-hero-secondary btn-lg">
                            <i class="fas fa-star me-2"></i> 
                            Success Stories
                        </a>
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-hero-outline btn-lg">
                            <i class="fas fa-heart me-2"></i> 
                            Support Students
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Hero Visual -->
            <div class="col-lg-5">
                <div class="hero-visual position-relative">
                    <!-- Main Hero Image -->
                    <div class="hero-main-image">
                        <img src="<?= base_url('assets/images/bharatpur-hero-image.jpg') ?>" 
                             alt="Educational Journey - From Student to Professional" 
                             class="img-fluid rounded-4 shadow-2xl">
                    </div>
                    
                    <!-- Stats Floating Cards -->
                    <div class="floating-stat floating-stat-1">
                        <div class="stat-number"><?= $total_beneficiaries ?>+</div>
                        <div class="stat-label">Students Transformed</div>
                    </div>
                    
                    <div class="floating-stat floating-stat-2">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Employment Rate</div>
                    </div>
                    
                    <div class="floating-stat floating-stat-3">
                        <div class="stat-number">₹50K+</div>
                        <div class="stat-label">Avg. Starting Salary</div>
                    </div>
                    
                    <!-- Arrow Elements -->
                    <div class="success-arrow success-arrow-1">
                        <i class="fas fa-arrow-up"></i>
                    </div>
                    <div class="success-arrow success-arrow-2">
                        <i class="fas fa-arrow-up"></i>
                    </div>
                    <div class="success-arrow success-arrow-3">
                        <i class="fas fa-arrow-up"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bottom Wave -->
    <div class="hero-wave">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="currentColor"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="currentColor"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="currentColor"></path>
        </svg>
    </div>
</section>

<!-- Unique Approach Section -->
<section class="section-padding bg-soft">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="about-image-container position-relative">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&h=600&fit=crop"
                         alt="Professional mentoring" class="img-fluid rounded-4 shadow-lg">
                    <div class="position-absolute bottom-0 start-0 bg-white p-4 rounded-3 shadow-lg m-4">
                        <h6 class="text-primary fw-bold mb-1">95% Employment</h6>
                        <small class="text-muted">Success Rate</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">Our Difference</span>
                    <h2 class="section-title font-display mb-4">Creating Professionals, Not Just Providing Aid</h2>
                    <p class="lead mb-4">Most NGOs in education only offer monetary help. We go beyond - we invest time in mentoring and getting students employment. Education + Mentoring + Professional Development.</p>
                    <p class="text-muted mb-4">Our comprehensive approach ensures every beneficiary becomes a self-reliant professional who can contribute back to society. This is real empowerment at the ground level.</p>

                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-primary text-white rounded-3 p-3 me-3">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Holistic Development</h6>
                                    <small class="text-muted">Mind + Skills + Career</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-success text-white rounded-3 p-3 me-3">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Industry Ready</h6>
                                    <small class="text-muted">Real-World Skills</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="<?= base_url('ngo-works') ?>" class="btn btn-primary">Our Approach</a>
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-outline-primary">Meet Beneficiaries</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Three Pillars Section -->
<section class="section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">Our Three Pillars</span>
                <h2 class="section-title font-display mb-4">Complete Transformation Journey</h2>
                <p class="lead text-muted">The first NGO to offer comprehensive empowerment through our unique three-pillar approach</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100 pillar-card" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 20px;">
                    <div class="card-body p-5 text-center">
                        <div class="pillar-icon mb-4">
                            <i class="fas fa-graduation-cap fa-4x"></i>
                        </div>
                        <h3 class="card-title font-display mb-4">Quality Education</h3>
                        <p class="card-text mb-4">Comprehensive academic support with modern learning methodologies and skill development programs tailored for industry needs.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Full academic coverage</li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Modern learning tools</li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Skill workshops</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100 pillar-card" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; border-radius: 20px;">
                    <div class="card-body p-5 text-center">
                        <div class="pillar-icon mb-4">
                            <i class="fas fa-users fa-4x"></i>
                        </div>
                        <h3 class="card-title font-display mb-4">Personal Mentoring</h3>
                        <p class="card-text mb-4">One-on-one guidance from industry professionals who invest time in personal and professional development of each student.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Industry mentors</li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Regular guidance</li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Personality development</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100 pillar-card" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; border-radius: 20px;">
                    <div class="card-body p-5 text-center">
                        <div class="pillar-icon mb-4">
                            <i class="fas fa-briefcase fa-4x"></i>
                        </div>
                        <h3 class="card-title font-display mb-4">Career Development</h3>
                        <p class="card-text mb-4">Professional training and employment assistance ensuring sustainable careers and long-term success in chosen fields.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Job placement</li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Interview training</li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Career support</li>
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
                <h2 class="section-title text-white font-display mb-4">Real Impact, Real Results</h2>
                <p class="lead text-white-50">Numbers that prove our comprehensive approach works</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-users fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2"><?= $total_beneficiaries ?>+</h3>
                    <h5 class="fw-semibold mb-2">Students Transformed</h5>
                    <p class="text-white-50 mb-0">Into industry professionals</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-briefcase fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2">95%</h3>
                    <h5 class="fw-semibold mb-2">Employment Rate</h5>
                    <p class="text-white-50 mb-0">In their chosen fields</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-user-tie fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2">50+</h3>
                    <h5 class="fw-semibold mb-2">Industry Mentors</h5>
                    <p class="text-white-50 mb-0">Professional guidance</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-rupee-sign fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2">₹50K+</h3>
                    <h5 class="fw-semibold mb-2">Average Starting Salary</h5>
                    <p class="text-white-50 mb-0">Sustainable livelihoods</p>
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
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">How We Work</span>
                <h2 class="section-title font-display mb-4">Comprehensive Empowerment Process</h2>
                <p class="lead text-muted">Our systematic approach to creating professionals, not just providing aid</p>
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
                        <h5 class="card-title font-display mb-3">Quality Education</h5>
                        <p class="card-text text-muted">Comprehensive academic support with modern learning tools and industry-relevant curriculum.</p>
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
                        <h5 class="card-title font-display mb-3">Personal Mentoring</h5>
                        <p class="card-text text-muted">One-on-one guidance from industry professionals for personal and career development.</p>
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
                        <h5 class="card-title font-display mb-3">Career Placement</h5>
                        <p class="card-text text-muted">Job placement assistance and ongoing professional support for sustainable careers.</p>
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
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">Professional Success</span>
                <h2 class="section-title font-display mb-4">From Students to Professionals</h2>
                <p class="lead text-muted">Real stories of transformation through our comprehensive approach</p>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach(array_slice($success_stories, 0, 3) as $index => $story): ?>
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
            <a href="<?= base_url('success-stories') ?>" class="btn btn-primary btn-lg px-5">
                <i class="fas fa-arrow-right me-2"></i> View All Success Stories
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
                <h2 class="font-display mb-4 display-5">Join the Revolution in Education</h2>
                <p class="lead mb-5 fs-4">Be part of the first NGO that creates professionals, not just provides aid. Help us transform students into industry-ready professionals through our comprehensive approach.</p>
                <div class="row justify-content-center g-3">
                    <div class="col-md-4">
                        <a href="<?= base_url('ngo-works') ?>" class="btn btn-light btn-lg w-100 py-3">
                            <i class="fas fa-rocket me-2"></i> Our Approach
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-outline-light btn-lg w-100 py-3">
                            <i class="fas fa-users me-2"></i> Support Students
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('success-stories') ?>" class="btn btn-outline-light btn-lg w-100 py-3">
                            <i class="fas fa-handshake me-2"></i> Become Mentor
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.pillar-card {
    transition: all 0.3s ease;
}

.pillar-card:hover {
    transform: translateY(-10px);
}

.value-props {
    background: rgba(165, 102, 28, 0.1);
    padding: 1.5rem;
    border-radius: 12px;
    border-left: 4px solid var(--primary-color);
}
</style>

<?= $this->endSection() ?>
