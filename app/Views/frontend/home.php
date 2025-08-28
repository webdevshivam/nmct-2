<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Enhanced Hero Section with Background Image -->
<section class="hero-section-enhanced">
    <!-- Traditional Border -->
    <div class="traditional-border"></div>

    <!-- Background Overlay -->
    <div class="hero-bg-overlay position-absolute top-0 start-0 w-100 h-100"></div>

    <!-- Decorative Elements -->
    <div class="hero-decorative-elements">
        <div class="mandala-element mandala-1">⚛</div>
        <div class="mandala-element mandala-2">☸</div>
        <div class="mandala-element mandala-3">✦</div>
    </div>

    <!-- Floating Elements -->
    <div class="floating-elements">
        <div class="float-element float-element-1"></div>
        <div class="float-element float-element-2"></div>
        <div class="float-element float-element-3"></div>
        <div class="float-element float-element-4"></div>
        <div class="float-element float-element-5"></div>
    </div>

    <!-- Paisley Elements -->
    <div class="paisley-element paisley-1"></div>
    <div class="paisley-element paisley-2"></div>
    <div class="paisley-element paisley-3"></div>

    <!-- Hindi Decorative Elements -->
    <div class="hindi-decorative hindi-1">॥ श्री ॥</div>
    <div class="hindi-decorative hindi-2">॥ गुरु ॥</div>
    <div class="hindi-decorative hindi-3">॥ जय ॥</div>

    <div class="container">
        <div class="row align-items-center min-vh-100 py-5">
            <div class="col-12">
                <div class="hero-content-enhanced text-center">
                    <!-- Logo -->
                    <div class="logo-container mx-auto mb-4">
                        <img src="<?= base_url('assets/images/bharatpur-hero-image.png') ?>"
                            alt="Bharatpur Foundation Logo"
                            class="bharatpur-logo-hero"
                            onerror="this.style.display='none'">
                    </div>

                    <!-- Disclaimer Badge -->
                    <div class="disclaimer-badge mb-4">
                        <div class="badge bg-warning text-dark px-4 py-2 rounded-pill">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Unofficial Version</strong> - Official Website:
                            <a href="https://nayantaratrust.com" target="_blank" class="text-dark text-decoration-none fw-bold">
                                nayantaratrust.com
                            </a>
                        </div>
                    </div>

                    <!-- Main Title -->
                    <h1 class="hero-title text-center mb-3">
                        Transforming Underprivileged Students into Industry-Ready Professionals
                    </h1>

                    <!-- Subtitle -->
                    <p class="hero-subtitle text-center mb-4">
                        Bharatpur Foundation - Empowering Dreams Through Education
                    </p>

                    <!-- Main Description -->
                    <div class="hero-description text-center mb-5">
                        Every underprivileged student deserves a chance to break the cycle of poverty. Through comprehensive education, professional mentoring and career placement, we transform potential into success—building dreams and creating sustainable prosperity for families.
                    </div>

                    <!-- Journey Steps -->
                    <div class="journey-steps mx-auto mb-5">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="journey-step">
                                    <div class="step-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <h6>Quality Education</h6>
                                    <small>Complete academic coverage with modern tools</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="journey-step">
                                    <div class="step-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <h6>Personal Mentoring</h6>
                                    <small>One-on-one guidance from industry professionals</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="journey-step">
                                    <div class="step-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <h6>Career Placement</h6>
                                    <small>Job placement and professional training</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="hero-buttons text-center">
                        <a href="#support" class="btn btn-hero-primary btn-lg me-3 mb-3">
                            <i class="fas fa-graduation-cap me-2"></i>
                            Partner With Us
                        </a>
                        <a href="<?= base_url($language . '/beneficiaries') ?>" class="btn btn-hero-secondary btn-lg me-3 mb-3">
                            <i class="fas fa-users me-2"></i>
                            Meet Students
                        </a>
                        <a href="<?= base_url($language . '/ngo-works') ?>" class="btn btn-hero-outline btn-lg mb-3">
                            <i class="fas fa-info-circle me-2"></i>
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wave Separator -->
    <div class="hero-wave">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>
</section>

<!-- Three Pillars Section -->
<section class="pillars-section-professional">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title text-center mb-4">Empowering Students Through Comprehensive Development</h2>
                <p class="section-subtitle text-center">
                    Every deserving student receives a complete transformation journey—because we believe in turning potential into professional success, regardless of background
                </p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Education Pillar -->
            <div class="col-lg-4">
                <div class="pillar-card-professional h-100 text-center">
                    <div class="pillar-icon-container">
                        <div class="pillar-icon bg-navy">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                    </div>
                    <h3 class="pillar-title text-center">Quality Education</h3>
                    <p class="pillar-description text-center">
                        Complete academic fee coverage with modern learning tools and industry-relevant curriculum.
                    </p>
                    <ul class="pillar-features text-start">
                        <li>
                            <i class="fas fa-check text-gold me-2"></i>
                            Full academic coverage
                        </li>
                        <li>
                            <i class="fas fa-check text-gold me-2"></i>
                            Modern learning tools
                        </li>
                        <li>
                            <i class="fas fa-check text-gold me-2"></i>
                            Industry-relevant skills
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Mentoring Pillar -->
            <div class="col-lg-4">
                <div class="pillar-card-professional h-100 text-center">
                    <div class="pillar-icon-container">
                        <div class="pillar-icon bg-navy">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <h3 class="pillar-title text-center">Personal Mentoring</h3>
                    <p class="pillar-description text-center">
                        One-on-one guidance from industry professionals for both career and personal development.
                    </p>
                    <ul class="pillar-features text-start">
                        <li>
                            <i class="fas fa-check text-gold me-2"></i>
                            Industry mentors
                        </li>
                        <li>
                            <i class="fas fa-check text-gold me-2"></i>
                            Regular guidance sessions
                        </li>
                        <li>
                            <i class="fas fa-check text-gold me-2"></i>
                            Personality development
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Career Development Pillar -->
            <div class="col-lg-4">
                <div class="pillar-card-professional h-100 text-center">
                    <div class="pillar-icon-container">
                        <div class="pillar-icon bg-navy">
                            <i class="fas fa-briefcase"></i>
                        </div>
                    </div>
                    <h3 class="pillar-title text-center">Career Placement</h3>
                    <p class="pillar-description text-center">
                        Job placement assistance and professional training for sustainable, well-paying careers.
                    </p>
                    <ul class="pillar-features text-start">
                        <li>
                            <i class="fas fa-check text-gold me-2"></i>
                            Job placement support
                        </li>
                        <li>
                            <i class="fas fa-check text-gold me-2"></i>
                            Interview training
                        </li>
                        <li>
                            <i class="fas fa-check text-gold me-2"></i>
                            Career advancement
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Statistics -->
<section class="impact-section">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title text-white text-center mb-4">Hearts Touched, Lives Changed Forever</h2>
                <p class="section-subtitle text-white-75 text-center">
                    Behind every number is a family that now has hope, a student who can dream big, and a community that's growing stronger
                </p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="impact-card text-center">
                    <div class="impact-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="impact-number"><?= $total_beneficiaries ?? '500' ?>+</div>
                    <div class="impact-label">Underprivileged Lives Transformed</div>
                    <div class="impact-sublabel">From struggle to success</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="impact-card text-center">
                    <div class="impact-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="impact-number">95%</div>
                    <div class="impact-label">Employment Rate</div>
                    <div class="impact-sublabel">In chosen fields</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="impact-card text-center">
                    <div class="impact-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="impact-number">200+</div>
                    <div class="impact-label">Families Supported</div>
                    <div class="impact-sublabel">Breaking poverty cycles</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="impact-card text-center">
                    <div class="impact-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="impact-number">50+</div>
                    <div class="impact-label">Industry Mentors</div>
                    <div class="impact-sublabel">Professional guidance</div>
                </div>
            </div>
        </div>

        <!-- Transparency Link -->
        <div class="text-center mt-5">
            <a href="#impact-report" class="btn btn-outline-light btn-lg">
                <i class="fas fa-file-alt me-2"></i>
                View Full Impact Report
            </a>
        </div>
    </div>
</section>

<!-- Beneficiaries Showcase Section -->
<section class="beneficiaries-showcase-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title text-center mb-4">Meet Our Amazing Students</h2>
                <p class="section-subtitle text-center">
                    Dedicated students who are transforming their lives through education and determination
                </p>
            </div>
        </div>

        <?php
        $beneficiaryModel = new \App\Models\BeneficiaryModel();
        $featured_beneficiaries = $beneficiaryModel->getActiveBeneficiaries(6);
        ?>

        <?php if (!empty($featured_beneficiaries)): ?>
            <div class="row g-4">
                <?php foreach ($featured_beneficiaries as $beneficiary): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="beneficiary-showcase-card h-100">
                            <div class="beneficiary-header">
                                <div class="beneficiary-avatar">
                                    <?php if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])): ?>
                                        <img src="<?= base_url('uploads/beneficiaries/' . $beneficiary['image']) ?>"
                                            alt="<?= esc($beneficiary['name']) ?>" class="avatar-img">
                                    <?php else: ?>
                                        <div class="avatar-placeholder">
                                            <i class="fas fa-user-graduate"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="beneficiary-info">
                                    <h5 class="beneficiary-name"><?= esc($beneficiary['name']) ?></h5>
                                    <p class="beneficiary-course"><?= esc($beneficiary['course']) ?></p>
                                    <span class="badge bg-primary-soft text-primary">
                                        <i class="fas fa-graduation-cap me-1"></i>
                                        <?= $beneficiary['is_passout'] ? 'Alumni' : 'Active Student' ?>
                                    </span>
                                </div>
                            </div>
                            <div class="beneficiary-content">
                                <div class="institution-info">
                                    <i class="fas fa-university me-2 text-navy"></i>
                                    <span><?= esc($beneficiary['institution']) ?></span>
                                </div>
                                <?php if (!empty($beneficiary['city'])): ?>
                                    <div class="location-info">
                                        <i class="fas fa-map-marker-alt me-2 text-navy"></i>
                                        <span><?= esc($beneficiary['city']) ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-5">
                <a href="<?= base_url(($language ?? 'en') . '/beneficiaries') ?>" class="btn btn-outline-navy btn-lg">
                    <i class="fas fa-users me-2"></i>
                    Meet All Our Students
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Success Stories Preview -->
<?php if (!empty($success_stories)): ?>
    <section class="success-stories-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title text-center mb-4">Inspiring Success Stories</h2>
                    <p class="section-subtitle text-center">
                        Meet the brave souls who refused to let their circumstances define them. Their journeys from hardship to hope will inspire you
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <?php foreach (array_slice($success_stories, 0, 3) as $story): ?>
                    <div class="col-lg-4">
                        <div class="success-story-card h-100">
                            <div class="story-image">
                                <?php if (!empty($story['image'])): ?>
                                    <img src="<?= base_url('uploads/success_stories/' . $story['image']) ?>"
                                        alt="<?= esc($story['name']) ?>" class="card-img-top">
                                <?php else: ?>
                                    <div class="story-placeholder">
                                        <i class="fas fa-star"></i>
                                    </div>
                                <?php endif; ?>
                                <div class="story-overlay">
                                    <span class="badge bg-success">
                                        <i class="fas fa-check-circle me-1"></i>
                                        Success Story
                                    </span>
                                </div>
                            </div>
                            <div class="story-content">
                                <h5 class="story-name"><?= esc($story['name']) ?></h5>
                                <p class="story-position"><?= esc($story['current_position']) ?></p>
                                <p class="story-excerpt"><?= esc(substr($story['story'], 0, 120)) ?>...</p>
                                <div class="story-meta">
                                    <small class="text-muted">
                                        <i class="fas fa-calendar me-1"></i>
                                        Graduate <?= date('Y', strtotime($story['created_at'] ?? 'now')) ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-5">
                <a href="<?= base_url($language . '/success-stories') ?>" class="btn btn-outline-navy btn-lg">
                    <i class="fas fa-arrow-right me-2"></i>
                    View All Success Stories
                </a>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Call to Action -->
<section class="cta-section" id="support">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="cta-title text-center mb-4">Join Our Mission to Transform Lives Through Education</h2>
                <p class="cta-description text-center mb-5">
                    Your partnership enables life-changing transformations. Support our proven program that takes deserving students from poverty to professional success, creating sustainable prosperity for entire families. Together, we build futures.
                </p>

                <div class="cta-buttons text-center mb-5">
                    <a href="#donate" class="btn btn-cta-primary btn-xl me-3 mb-3">
                        <i class="fas fa-graduation-cap me-2"></i>
                        Partner With Us
                    </a>
                    <a href="<?= base_url($language . '/ngo-works') ?>" class="btn btn-cta-secondary btn-xl mb-3">
                        <i class="fas fa-info-circle me-2"></i>
                        Learn More
                    </a>
                </div>

                <!-- Payment Security -->
                <div class="payment-security text-center">
                    <p class="security-text">
                        <i class="fas fa-shield-alt me-2"></i>
                        Secure payments • 80G Tax benefits • Transparent usage
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&family=Crimson+Text:ital,wght@0,400;0,600;1,400;1,600&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap');

/* Professional Color Palette - Navy & Gold Theme */
:root {
    --navy: #0F3A66;
    --navy-dark: #0A2644;
    --navy-light: #1A4F7A;
    --gold: #D69A2A;
    --gold-soft: #E0A95F;
    --gold-light: #F4B942;
    --cream: #FFF8F0;
    --gray-text: #4A5568;
    --success-color: #16A085;
    --navy-light-bg: rgba(15, 58, 102, 0.1);
    --gold-light-bg: rgba(214, 154, 42, 0.1);
}

/* Global Font Changes */
body {
    font-family: 'Inter', 'Segoe UI', 'Roboto', sans-serif;
}

h1, h2, h3, h4, h5, h6 {
    font-family: 'Playfair Display', 'Georgia', serif;
}

/* Disclaimer Badge */
.disclaimer-badge {
    margin-bottom: 2rem;
}

.disclaimer-badge .badge {
    font-size: 1rem;
    font-weight: 600;
    padding: 12px 24px;
    border: 2px solid #ffc107;
}

/* Enhanced Hero Section with Background Image */
.hero-section-enhanced {
    min-height: 100vh;
    background: linear-gradient(
        135deg,
        rgba(0, 0, 0, 0.6) 0%,
        rgba(15, 58, 102, 0.4) 50%,
        rgba(0, 0, 0, 0.6) 100%
    ),
    url('../images/bharatpur-hero-image.png');
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    position: relative;
    overflow: hidden;
    color: white;
    display: flex;
    align-items: center;
}

/* Center all text in hero section */
.hero-content-enhanced * {
    text-align: center !important;
}

/* Enhanced Typography with Better Fonts */
.hero-title {
    font-family: 'Playfair Display', 'Georgia', serif;
    font-size: 4.5rem;
    font-weight: 800;
    color: white;
    text-shadow:
        0 4px 8px rgba(0, 0, 0, 0.7),
        0 2px 4px rgba(0, 0, 0, 0.9);
    margin: 0;
    line-height: 1.1;
    letter-spacing: -0.02em;
    text-align: center;
}

.hero-subtitle {
    font-family: 'Crimson Text', 'Times', serif;
    font-size: 1.4rem;
    color: rgba(255, 255, 255, 0.95);
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-style: italic;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
    text-align: center;
}

.hero-description {
    font-family: 'Lora', 'Georgia', serif;
    font-size: 1.4rem;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.98);
    font-weight: 500;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
    font-style: italic;
    letter-spacing: 0.3px;
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

/* Section Titles - Better Font and Centering */
.section-title {
    font-family: 'Playfair Display', 'Georgia', serif;
    font-size: 3rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 1rem;
    text-align: center;
    line-height: 1.2;
}

.section-subtitle {
    font-family: 'Lora', 'Georgia', serif;
    font-size: 1.2rem;
    color: var(--gray-text);
    line-height: 1.6;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

/* Pillar Titles */
.pillar-title {
    font-family: 'Playfair Display', 'Georgia', serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 1rem;
    text-align: center;
}

.pillar-description {
    font-family: 'Inter', sans-serif;
    color: var(--gray-text);
    line-height: 1.6;
    margin-bottom: 1.5rem;
    text-align: center;
}

/* Three Pillars Section */
.pillars-section-professional {
    padding: 100px 0;
    background: #ffffff;
}

.pillar-card-professional {
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 20px;
    padding: 3rem 2rem;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    height: 100%;
}

.pillar-card-professional:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    border-color: var(--gold);
}

.pillar-icon-container {
    margin-bottom: 2rem;
}

.pillar-icon {
    width: 100px;
    height: 100px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    color: white;
    font-size: 2.5rem;
    transition: all 0.3s ease;
}

.pillar-card-professional:hover .pillar-icon {
    background: var(--gold) !important;
    transform: scale(1.1) rotateY(360deg);
}

/* Impact Section - Fixed Layout */
.impact-section {
    background: linear-gradient(135deg, var(--navy) 0%, #0d2f52 100%);
    padding: 100px 0;
    color: white;
}

.impact-card {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    padding: 3rem 2rem;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.impact-card:hover {
    background: rgba(255, 255, 255, 0.25);
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.impact-icon {
    width: 80px;
    height: 80px;
    background: var(--gold);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: white;
    font-size: 2rem;
    box-shadow: 0 8px 25px rgba(214, 154, 42, 0.4);
}

.impact-number {
    font-family: 'Playfair Display', serif;
    font-size: 3rem;
    font-weight: 800;
    color: white;
    line-height: 1;
    margin-bottom: 1rem;
}

.impact-label {
    font-family: 'Inter', sans-serif;
    font-size: 1.2rem;
    font-weight: 600;
    color: white;
    margin-bottom: 0.5rem;
}

.impact-sublabel {
    font-family: 'Inter', sans-serif;
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.8);
}

/* Success Stories - Enhanced Layout */
.success-stories-section {
    padding: 100px 0;
    background: var(--cream);
}

.success-story-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    height: 100%;
}

.success-story-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.story-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.story-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.success-story-card:hover .story-image img {
    transform: scale(1.1);
}

.story-placeholder {
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, var(--navy) 0%, var(--gold) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 3rem;
}

.story-overlay {
    position: absolute;
    top: 15px;
    right: 15px;
}

.story-content {
    padding: 2rem;
}

.story-name {
    font-family: 'Playfair Display', serif;
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 0.5rem;
}

.story-position {
    font-family: 'Inter', sans-serif;
    color: var(--gold);
    font-weight: 600;
    margin-bottom: 1rem;
}

.story-excerpt {
    font-family: 'Inter', sans-serif;
    color: var(--gray-text);
    line-height: 1.6;
    margin-bottom: 1rem;
}

/* Beneficiaries Section */
.beneficiaries-showcase-section {
    padding: 100px 0;
    background: white;
}

.beneficiary-showcase-card {
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 20px;
    padding: 2rem;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    height: 100%;
}

.beneficiary-showcase-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
}

.beneficiary-header {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
}

.beneficiary-avatar {
    margin-right: 1rem;
    flex-shrink: 0;
}

.avatar-img, .avatar-placeholder {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--gold);
}

.avatar-placeholder {
    background: var(--navy);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.8rem;
}

.beneficiary-name {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 0.25rem;
}

.beneficiary-course {
    font-family: 'Inter', sans-serif;
    font-size: 0.95rem;
    color: var(--gray-text);
    margin-bottom: 0.5rem;
}

/* Call to Action Section */
.cta-section {
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
    padding: 100px 0;
    color: white;
}

.cta-title {
    font-family: 'Playfair Display', serif;
    font-size: 3rem;
    font-weight: 700;
    color: white;
    text-align: center;
}

.cta-description {
    font-family: 'Lora', serif;
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.95);
    line-height: 1.6;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

/* Button Styles */
.btn-hero-primary, .btn-hero-secondary, .btn-hero-outline,
.btn-cta-primary, .btn-cta-secondary, .btn-outline-navy {
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    padding: 18px 36px;
    border-radius: 12px;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    text-decoration: none;
    border: none;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-hero-primary, .btn-cta-primary {
    background: linear-gradient(135deg, #D69A2A 0%, #E0A95F 100%);
    color: white;
    box-shadow: 0 8px 25px rgba(214, 154, 42, 0.3);
}

.btn-hero-primary:hover, .btn-cta-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(214, 154, 42, 0.5);
    color: white;
}

.btn-hero-secondary {
    background: linear-gradient(135deg, #0F3A66 0%, #0A2644 100%);
    color: white;
    box-shadow: 0 8px 25px rgba(15, 58, 102, 0.3);
}

.btn-hero-secondary:hover {
    transform: translateY(-3px);
    color: white;
}

.btn-hero-outline, .btn-cta-secondary {
    background: transparent;
    border: 3px solid rgba(255, 255, 255, 0.8);
    color: white;
}

.btn-hero-outline:hover, .btn-cta-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
    color: white;
}

.btn-outline-navy {
    background: transparent;
    border: 2px solid var(--navy);
    color: var(--navy);
}

.btn-outline-navy:hover {
    background: var(--navy);
    color: white;
}

/* Badge Styles */
.bg-primary-soft {
    background-color: rgba(15, 58, 102, 0.1) !important;
}

.text-primary {
    color: var(--navy) !important;
}

.text-gold {
    color: var(--gold) !important;
}

.text-navy {
    color: var(--navy) !important;
}

.text-white-75 {
    color: rgba(255, 255, 255, 0.75);
}

.bg-navy {
    background-color: var(--navy) !important;
}

/* Responsive Design */
@media (max-width: 992px) {
    .hero-title {
        font-size: 3.5rem;
    }

    .section-title {
        font-size: 2.5rem;
    }

    .impact-card {
        margin-bottom: 2rem;
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2.8rem;
    }

    .section-title {
        font-size: 2rem;
    }

    .hero-description {
        font-size: 1.2rem;
    }

    .pillar-card-professional {
        margin-bottom: 2rem;
    }

    .btn-hero-primary, .btn-hero-secondary, .btn-hero-outline,
    .btn-cta-primary, .btn-cta-secondary {
        width: 100%;
        margin-bottom: 1rem;
    }
}
</style>

<?= $this->endSection() ?>