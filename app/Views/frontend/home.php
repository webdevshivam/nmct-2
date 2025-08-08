<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Enhanced Hero Section with Indian Elements -->
<section class="hero-section-enhanced d-flex align-items-center"
    style="background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.4) 0%, rgba(165, 102, 28, 0.2) 50%, rgba(0, 0, 0, 0.4) 100%), url('<?= base_url('assets/images/bharatpur-hero-image.png') ?>'); background-size: cover; background-position: right center; background-attachment: fixed;">

    <!-- Traditional Indian Border -->
    <div class="traditional-border"></div>

    <!-- Background Overlay -->
    <div class="hero-bg-overlay position-absolute w-100 h-100"></div>

    <!-- Indian Decorative Elements -->
    <div class="hero-decorative-elements">
        <div class="mandala-element mandala-1">❋</div>
        <div class="mandala-element mandala-2">✧</div>
        <div class="mandala-element mandala-3">❃</div>
        <div class="paisley-element paisley-1"></div>
        <div class="paisley-element paisley-2"></div>
        <div class="paisley-element paisley-3"></div>
    </div>

    <!-- Floating Indian Elements -->
    <div class="floating-elements position-absolute w-100 h-100">
        <div class="float-element float-element-1"></div>
        <div class="float-element float-element-2"></div>
        <div class="float-element float-element-3"></div>
        <div class="float-element float-element-4"></div>
        <div class="float-element float-element-5"></div>
    </div>

    <div class="container position-relative" style="z-index: 10;">
        <div class="row align-items-center justify-content-center min-vh-100 py-5">
            <div class="col-lg-8 text-center">
                <div class="hero-content-enhanced">


                    <!-- Main Title -->
                    <h1 class="hero-title font-display mb-3">Bharatpur Foundation</h1>
                    <h2 class="hero-tagline mb-4">
                        Transforming <span class="text-gradient-hero">Students</span> into
                        <span class="text-gradient-hero">Professionals</span>
                    </h2>

                    <!-- Simple Description -->
                    <p class="hero-description mb-5">
                        Beyond financial aid - we create careers through education, mentoring, and professional development.
                    </p>

                    <!-- Call to Action Buttons -->
                    <div class="hero-actions d-flex flex-wrap justify-content-center gap-3">
                        <a href="<?= base_url('ngo-works') ?>" class="btn btn-hero-primary btn-lg">
                            Our Approach
                        </a>
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-hero-outline btn-lg">
                            Support Students
                        </a>
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
                    <img src="<?= base_url('assets/images/our-difference-image.jpg') ?>"
                        alt="Creating Professionals - Students in professional training"
                        class="img-fluid rounded-4 shadow-lg"
                        style="width: 100%; height: 450px; object-fit: cover;"
                        onerror="this.src='https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=450&fit=crop&crop=faces,entropy&auto=format&q=80'">

                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">Our Difference</span>
                    <h2 class="section-title font-display mb-4">Creating Professionals, Not Just Providing Aid</h2>
                    <p class="lead mb-4">Most NGOs only offer monetary help. We create complete professionals through Education + Mentoring + Career Placement.</p>

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
                        <p class="card-text mb-4">Complete academic support with modern learning tools and industry-relevant skills.</p>
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
                        <p class="card-text mb-4">Personal guidance from industry professionals for career and personal growth.</p>
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
                        <p class="card-text mb-4">Job placement assistance and professional training for sustainable careers.</p>
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
                        <h5 class="card-title font-display mb-3">Personal Mentoring</h5>
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
                        <h5 class="card-title font-display mb-3">Career Placement</h5>
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
                    <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">Professional Success</span>
                    <h2 class="section-title font-display mb-4">From Students to Professionals</h2>
                    <p class="lead text-muted">Real stories of transformation through our comprehensive approach</p>
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
                <h2 class="font-display mb-4 display-5">Join the Education Revolution</h2>
                <p class="lead mb-5 fs-4">Help us transform students into industry professionals through our unique approach.</p>
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
    /* Hero Section Enhancements */
    .hero-section-enhanced {
        position: relative;
        overflow: hidden;
        padding-top: 150px; /* Adjust as needed for content */
        padding-bottom: 150px; /* Adjust as needed for content */
    }

    /* Traditional Indian Border */
    .traditional-border {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 10px; /* Height of the border */
        background: linear-gradient(90deg, #daa520 0%, #ffd700 50%, #daa520 100%); /* Golden Indian border */
        z-index: 5;
    }
    .traditional-border::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 5px; /* Height of the border */
        background: linear-gradient(90deg, #b8860b 0%, #ffc107 50%, #b8860b 100%); /* Darker golden Indian border */
        z-index: 5;
    }


    /* Indian Decorative Elements */
    .hero-decorative-elements {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none; /* Allow interaction with elements behind */
    }

    .mandala-element {
        position: absolute;
        font-size: 3rem; /* Adjust size as needed */
        color: rgba(218, 165, 32, 0.5); /* Golden color with transparency */
        opacity: 0.8;
        text-shadow: 0 0 10px rgba(218, 165, 32, 0.8);
    }

    .mandala-1 { top: 10%; left: 15%; animation: spin 20s linear infinite; }
    .mandala-2 { top: 70%; left: 80%; animation: spin 25s linear reverse infinite; }
    .mandala-3 { top: 40%; left: 45%; animation: spin-slow 30s linear infinite; }

    .paisley-element {
        position: absolute;
        width: 50px;
        height: 50px;
        background-image: url('data:image/svg+xml;utf-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M50,10 C77.6,10 100,32.4 100,60 C100,87.6 77.6,110 50,110 C22.4,110 0,87.6 0,60 C0,32.4 22.4,10 50,10 Z M50,30 C61.0,30 70,39.0 70,50 C70,61.0 61.0,70 50,70 C39.0,70 30,61.0 30,50 C30,39.0 39.0,30 50,30 Z M70,60 C70,70.8 62.8,78 50,78 C37.2,78 30,70.8 30,60 C30,49.2 37.2,42 50,42 C62.8,42 70,49.2 70,60 Z" fill="%23daa520" transform="translate(0, -10)"/></svg>');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        opacity: 0.7;
    }

    .paisley-1 { top: 20%; left: 75%; transform: rotate(30deg); animation: float 5s ease-in-out infinite; }
    .paisley-2 { top: 50%; left: 25%; transform: rotate(-30deg); animation: float 6s ease-in-out infinite reverse; }
    .paisley-3 { top: 80%; left: 50%; transform: rotate(60deg); animation: float 4s ease-in-out infinite; }

    /* Floating Elements */
    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        overflow: hidden;
    }

    .float-element {
        position: absolute;
        color: rgba(255, 255, 255, 0.3); /* White with transparency */
        font-size: 2rem;
        animation: float 5s ease-in-out infinite alternate;
    }

    .float-element-1 { top: 10%; left: 5%; animation-delay: -1s; }
    .float-element-2 { top: 80%; left: 20%; animation-delay: -2s; font-size: 1.5rem; color: rgba(218, 165, 32, 0.2); }
    .float-element-3 { top: 40%; left: 60%; animation-delay: -3s; font-size: 2.5rem; }
    .float-element-4 { top: 60%; left: 90%; animation-delay: -4s; color: rgba(218, 165, 32, 0.3); }
    .float-element-5 { top: 25%; left: 35%; animation-delay: -5s; font-size: 1.8rem; animation-duration: 6s; }

    /* Font Enhancements */
    .font-display {
        font-family: 'Playfair Display', serif; /* Example display font */
    }

    .hero-title {
        font-size: 4rem; /* Larger for hero title */
        line-height: 1.2;
    }

    .hero-tagline {
        font-size: 2.5rem; /* Adjust as needed */
        line-height: 1.3;
    }

    .hero-description {
        font-size: 1.2rem; /* Slightly larger description */
    }

    .section-title {
        font-family: 'Playfair Display', serif; /* Apply to section titles */
        font-size: 2.8rem; /* Larger section titles */
    }

    /* Custom Button Styles for Hero */
    .btn-hero-primary {
        background-color: #e0a03a; /* Warm golden primary button */
        color: white;
        border: none;
        padding: 12px 30px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif; /* Modern font for buttons */
        transition: all 0.3s ease;
    }

    .btn-hero-primary:hover {
        background-color: #c48f31; /* Darker shade on hover */
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-hero-outline {
        background-color: transparent;
        color: #e0a03a; /* Golden outline */
        border: 2px solid #e0a03a;
        padding: 10px 30px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif; /* Modern font for buttons */
        transition: all 0.3s ease;
    }

    .btn-hero-outline:hover {
        background-color: #e0a03a; /* Fill with gold on hover */
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Text Gradient for Hero Tagline */
    .text-gradient-hero {
        background: linear-gradient(90deg, #f39c12 0%, #e67e22 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-weight: bold;
    }

    /* Animation Keyframes */
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    @keyframes spin-slow {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(-360deg); }
    }

    @keyframes float {
        0% { transform: translateY(0px) rotate(0deg); opacity: 0.8; }
        50% { transform: translateY(-20px) rotate(15deg); opacity: 1; }
        100% { transform: translateY(0px) rotate(0deg); opacity: 0.8; }
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .hero-title { font-size: 3rem; }
        .hero-tagline { font-size: 2rem; }
        .section-title { font-size: 2.5rem; }
    }

    @media (max-width: 768px) {
        .hero-title { font-size: 2.5rem; }
        .hero-tagline { font-size: 1.8rem; }
        .hero-section-enhanced { padding-top: 100px; padding-bottom: 100px; }
        .mandala-element { font-size: 2rem; }
    }

    @media (max-width: 576px) {
        .hero-actions .btn { width: 100%; }
    }

    /* General Styles from Original File */
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