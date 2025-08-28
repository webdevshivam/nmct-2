<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Professional Hero Section -->
<section class="hero-section-professional">
    <div class="container">
        <div class="row align-items-center min-vh-100 py-5">
            <!-- Left Content -->
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="hero-content">
                    <!-- Trust Badge -->
                    <div class="trust-badge mb-3">
                        <span class="badge bg-navy text-white px-3 py-2 rounded-pill">
                            <i class="fas fa-certificate me-2"></i>
                            Registered NGO • Audited Impact
                        </span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="hero-title mb-3">
                        Transforming Underprivileged Students into Industry-Ready Professionals
                    </h1>

                    <!-- Supporting Text -->
                    <p class="hero-subtitle mb-4">
                        Every underprivileged student deserves a chance to break the cycle of poverty. Through comprehensive education, professional mentoring and career placement, we transform potential into success—building dreams and creating sustainable prosperity for families.
                    </p>

                    <!-- Primary CTAs -->
                    <div class="hero-cta-section mb-4">
                        <a href="#support" class="btn btn-primary-navy btn-lg me-3 mb-3">
                            <i class="fas fa-heart me-2"></i>
                            Support Students
                        </a>
                        <a href="<?= base_url($language . '/beneficiaries') ?>" class="btn btn-outline-gold btn-lg mb-3">
                            <i class="fas fa-users me-2"></i>
                            Meet Beneficiaries
                        </a>
                    </div>

                    <!-- Trust Bar -->
                    <div class="trust-bar">
                        <div class="trust-stats">
                            <div class="stat-item">
                                <span class="stat-number">500+</span>
                                <span class="stat-label">Students Supported</span>
                            </div>
                            <div class="stat-divider"></div>
                            <div class="stat-item">
                                <span class="stat-number">95%</span>
                                <span class="stat-label">Employment Rate</span>
                            </div>
                            <div class="stat-divider"></div>
                            <div class="stat-item">
                                <span class="stat-number">Audited</span>
                                <span class="stat-label">
                                    <a href="#impact-report" class="text-gold text-decoration-none">
                                        See Annual Report
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Visual -->
            <div class="col-lg-6 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="hero-image-container">
                    <div class="hero-image-frame">
                        <img src="<?= base_url('assets/images/bharatpur-hero-image.png') ?>"
                            alt="Real students in our professional development program"
                            class="hero-image"
                            onerror="this.src='https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop&crop=faces,entropy&auto=format&q=80'">

                        <!-- Impact Badge Overlay -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Three Pillars Section -->
<section class="pillars-section-professional">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title mb-4">Empowering Students Through Comprehensive Development</h2>
                <p class="section-subtitle">
                    Every deserving student receives a complete transformation journey—because we believe in turning potential into professional success, regardless of background
                </p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Education Pillar -->
            <div class="col-lg-4">
                <div class="pillar-card-professional h-100">
                    <div class="pillar-icon-container">
                        <div class="pillar-icon bg-navy">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                    </div>
                    <h3 class="pillar-title">Quality Education</h3>
                    <p class="pillar-description">
                        Complete academic fee coverage with modern learning tools and industry-relevant curriculum.
                    </p>
                    <ul class="pillar-features">
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
                <div class="pillar-card-professional h-100">
                    <div class="pillar-icon-container">
                        <div class="pillar-icon bg-navy">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <h3 class="pillar-title">Personal Mentoring</h3>
                    <p class="pillar-description">
                        One-on-one guidance from industry professionals for both career and personal development.
                    </p>
                    <ul class="pillar-features">
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
                <div class="pillar-card-professional h-100">
                    <div class="pillar-icon-container">
                        <div class="pillar-icon bg-navy">
                            <i class="fas fa-briefcase"></i>
                        </div>
                    </div>
                    <h3 class="pillar-title">Career Placement</h3>
                    <p class="pillar-description">
                        Job placement assistance and professional training for sustainable, well-paying careers.
                    </p>
                    <ul class="pillar-features">
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
                <h2 class="section-title text-white mb-4">Hearts Touched, Lives Changed Forever</h2>
                <p class="section-subtitle text-white-75">
                    Behind every number is a family that now has hope, a student who can dream big, and a community that's growing stronger
                </p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="impact-card">
                    <div class="impact-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="impact-number"><?= $total_beneficiaries ?? '500' ?>+</div>
                    <div class="impact-label">Underprivileged Lives Transformed</div>
                    <div class="impact-sublabel">From struggle to success</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="impact-card">
                    <div class="impact-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="impact-number">95%</div>
                    <div class="impact-label">Employment Rate</div>
                    <div class="impact-sublabel">In chosen fields</div>
                </div>
            </div>



            <div class="col-lg-3 col-md-6">
                <div class="impact-card">
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
                <h2 class="section-title mb-4">Meet Our Amazing Students</h2>
                <p class="section-subtitle">
                    Dedicated students who are transforming their lives through education and determination
                </p>
            </div>
        </div>

        <?php 
        $beneficiaryModel = new \App\Models\BeneficiaryModel();
        $featured_beneficiaries = $beneficiaryModel->getActiveBeneficiaries(3);
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

<!-- Community Impact Section -->
<section class="community-impact-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="impact-content">
                    <h2 class="section-title mb-4">Creating Ripple Effects in Communities</h2>
                    <p class="lead mb-4">
                        When we educate one student, we transform an entire family and strengthen the whole community. 
                        Our approach creates lasting change that spans generations.
                    </p>

                    <div class="impact-features">
                        <div class="feature-item">
                            <div class="feature-icon-small">
                                <i class="fas fa-home"></i>
                            </div>
                            <div>
                                <h6>Family Transformation</h6>
                                <p>Breaking cycles of poverty, one family at a time</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon-small">
                                <i class="fas fa-users"></i>
                            </div>
                            <div>
                                <h6>Community Leadership</h6>
                                <p>Our graduates become mentors and role models</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon-small">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <div>
                                <h6>Sustainable Growth</h6>
                                <p>Creating economic opportunities in rural areas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="impact-visual">
                    <div class="stats-grid">
                        <div class="stat-box">
                            <div class="stat-number">200+</div>
                            <div class="stat-label">Families Supported</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">85%</div>
                            <div class="stat-label">Stay in Rural Areas</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">100+</div>
                            <div class="stat-label">Mentorship Hours</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">25+</div>
                            <div class="stat-label">Partner Companies</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Preview -->
<?php if (!empty($success_stories)): ?>
    <section class="success-stories-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title mb-4">From Tears of Struggle to Tears of Joy</h2>
                    <p class="section-subtitle">
                        Meet the brave souls who refused to let their circumstances define them. Their journeys from hardship to hope will touch your heart
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <?php foreach (array_slice($success_stories, 0, 3) as $story): ?>
                    <div class="col-lg-4">
                        <div class="success-card-professional h-100">
                            <div class="success-header">
                                <div class="success-avatar">
                                    <?php if (!empty($story['image'])): ?>
                                        <img src="<?= base_url('uploads/success_stories/' . $story['image']) ?>"
                                            alt="<?= esc($story['name']) ?>" class="avatar-img">
                                    <?php else: ?>
                                        <div class="avatar-placeholder">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="success-info">
                                    <h5 class="success-name"><?= esc($story['name']) ?></h5>
                                    <p class="success-position"><?= esc($story['current_position']) ?></p>
                                    <span class="badge bg-success-soft text-success">
                                        <i class="fas fa-check-circle me-1"></i>
                                        Employed
                                    </span>
                                </div>
                            </div>
                            <div class="success-content">
                                <p class="success-story"><?= esc(substr($story['story'], 0, 120)) ?>...</p>
                                <div class="success-meta">
                                    <small class="text-muted">
                                        <i class="fas fa-calendar me-1"></i>
                                        Program Graduate <?= date('Y', strtotime($story['created_at'] ?? 'now')) ?>
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
                <h2 class="cta-title mb-4">Join Our Mission to Transform Lives Through Education</h2>
                <p class="cta-description mb-5">
                    Your partnership enables life-changing transformations. Support our proven program that takes deserving students from poverty to professional success, creating sustainable prosperity for entire families. Together, we build futures.
                </p>

                <div class="cta-buttons mb-5">
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
                <div class="payment-security">
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

    /* Professional Hero Section */
    .hero-section-professional {
        background: linear-gradient(135deg, var(--navy) 0%, var(--navy-light) 50%, var(--gold) 100%);
        padding: 140px 0 100px 0;
        position: relative;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    /* Trust Badge */
    .trust-badge .badge {
        font-size: 0.9rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        padding: 8px 16px;
    }

    .bg-navy {
        background-color: var(--navy) !important;
    }

    /* Hero Typography */
    .hero-title {
        font-family: 'Playfair Display', serif;
        font-size: 3.2rem;
        font-weight: 700;
        color: white;
        line-height: 1.2;
        margin-bottom: 1.5rem;
    }

    .hero-subtitle {
        font-size: 1.25rem;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.6;
        font-weight: 400;
    }

    /* Professional Buttons */
    .btn-primary-navy {
        background: var(--navy);
        border: none;
        color: white;
        font-weight: 600;
        padding: 16px 32px;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(15, 58, 102, 0.3);
    }

    .btn-primary-navy:hover {
        background: var(--navy-dark);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(10, 38, 68, 0.4);
    }

    .btn-outline-gold {
        background: transparent;
        border: 2px solid var(--gold);
        color: var(--gold);
        font-weight: 600;
        padding: 14px 30px;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-outline-gold:hover {
        background: var(--gold);
        color: white;
        transform: translateY(-2px);
    }

    /* Trust Bar */
    .trust-bar {
        margin-top: 3rem;
    }

    .trust-stats {
        display: flex;
        align-items: center;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        display: block;
        font-size: 1.5rem;
        font-weight: 700;
        color: white;
        line-height: 1;
    }

    .stat-label {
        font-size: 0.875rem;
        color: rgba(255, 255, 255, 0.8);
        font-weight: 500;
    }

    .stat-divider {
        width: 1px;
        height: 30px;
        background: #e5e7eb;
    }

    .text-gold {
        color: var(--gold-light) !important;
    }

    /* Hero Image */
    .hero-image-container {
        position: relative;
        z-index: 10;
        background: #ffffff;
        border-radius: 20px;
        padding: 10px;
    }

    .hero-image-frame {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        border: 3px solid var(--gold);
        background: #ffffff;
    }

    .hero-image {
        width: 100%;
        height: 400px;
        object-fit: cover;
        display: block;
        background: #ffffff;
    }

    .impact-badge {
        position: absolute;
        bottom: 20px;
        left: 20px;
        background: #ffffff;
        padding: 16px 20px;
        border-radius: 12px;
        border: 2px solid var(--gold);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .impact-content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .impact-number {
        display: block;
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--navy);
        line-height: 1;
    }

    .impact-text {
        font-size: 0.875rem;
        color: var(--gray-text);
        font-weight: 500;
    }

    /* Professional Pillars Section */
    .pillars-section-professional {
        padding: 100px 0;
        background: #ffffff;
    }

    .section-title {
        font-family: 'Inter', 'Roboto', sans-serif;
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 1rem;
    }

    .section-subtitle {
        font-size: 1.125rem;
        color: var(--gray-text);
        line-height: 1.6;
    }

    .pillar-card-professional {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        padding: 2.5rem 2rem;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    .pillar-card-professional:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        border-color: var(--gold);
    }

    .pillar-icon-container {
        margin-bottom: 1.5rem;
    }

    .pillar-icon {
        width: 80px;
        height: 80px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        color: white;
        font-size: 2rem;
        transition: all 0.3s ease;
    }

    .pillar-card-professional:hover .pillar-icon {
        background: var(--gold) !important;
        transform: scale(1.1);
    }

    .pillar-title {
        font-size: 1.375rem;
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 1rem;
    }

    .pillar-description {
        color: var(--gray-text);
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .pillar-features {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: left;
    }

    .pillar-features li {
        padding: 0.5rem 0;
        font-size: 0.9rem;
        color: var(--gray-text);
        display: flex;
        align-items: center;
    }

    /* Impact Section */
    .impact-section {
        background: linear-gradient(135deg, var(--navy) 0%, #0d2f52 100%);
        padding: 100px 0;
        color: white;
    }

    .text-white-75 {
        color: rgba(255, 255, 255, 0.75);
    }

    .impact-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        padding: 2rem 1.5rem;
        text-align: center;
        transition: all 0.3s ease;
    }

    .impact-card:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-5px);
    }

    .impact-icon {
        width: 60px;
        height: 60px;
        background: var(--gold);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        color: white;
        font-size: 1.5rem;
    }

    .impact-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: white;
        line-height: 1;
        margin-bottom: 0.5rem;
    }

    .impact-label {
        font-size: 1.125rem;
        font-weight: 600;
        color: white;
        margin-bottom: 0.25rem;
    }

    .impact-sublabel {
        font-size: 0.875rem;
        color: rgba(255, 255, 255, 0.75);
    }

    /* Success Stories Section */
    .success-stories-section {
        padding: 100px 0;
        background: var(--cream);
    }

    .success-card-professional {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        padding: 1.5rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    .success-card-professional:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .success-header {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .success-avatar {
        margin-right: 1rem;
    }

    .avatar-img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid var(--gold);
    }

    .success-name {
        font-size: 1.125rem;
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 0.25rem;
    }

    .success-position {
        font-size: 0.9rem;
        color: var(--gray-text);
        margin-bottom: 0.5rem;
    }

    .bg-success-soft {
        background-color: rgba(22, 160, 133, 0.1) !important;
    }

    .text-success {
        color: var(--success-color) !important;
    }

    .success-story {
        color: var(--gray-text);
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .btn-outline-navy {
        background: transparent;
        border: 2px solid var(--navy);
        color: var(--navy);
        font-weight: 600;
        padding: 14px 30px;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-outline-navy:hover {
        background: var(--navy);
        color: white;
    }

    /* Call to Action Section */
    .cta-section {
        background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
        padding: 100px 0;
        color: white;
    }

    .cta-title {
        font-family: 'Inter', 'Roboto', sans-serif;
        font-size: 2.5rem;
        font-weight: 700;
        color: white;
    }

    .cta-description {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.6;
    }

    .btn-cta-primary {
        background: var(--navy);
        border: none;
        color: white;
        font-weight: 700;
        padding: 18px 36px;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 8px 20px rgba(15, 58, 102, 0.3);
    }

    .btn-cta-primary:hover {
        background: #0d2f52;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(15, 58, 102, 0.4);
    }

    .btn-cta-secondary {
        background: transparent;
        border: 2px solid white;
        color: white;
        font-weight: 700;
        padding: 16px 34px;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-cta-secondary:hover {
        background: white;
        color: var(--gold);
    }

    .payment-security {
        margin-top: 2rem;
    }

    .security-text {
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.8);
        margin: 0;
    }

    /* Beneficiaries Showcase Section */
    .beneficiaries-showcase-section {
        padding: 100px 0;
        background: var(--cream);
    }

    .beneficiary-showcase-card {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        padding: 1.5rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    .beneficiary-showcase-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .beneficiary-header {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .beneficiary-avatar {
        margin-right: 1rem;
        flex-shrink: 0;
    }

    .avatar-img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid var(--gold);
    }

    .avatar-placeholder {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: var(--navy);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
    }

    .beneficiary-name {
        font-size: 1.125rem;
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 0.25rem;
    }

    .beneficiary-course {
        font-size: 0.9rem;
        color: var(--gray-text);
        margin-bottom: 0.5rem;
    }

    .bg-primary-soft {
        background-color: rgba(15, 58, 102, 0.1) !important;
    }

    .text-primary {
        color: var(--navy) !important;
    }

    .beneficiary-content {
        margin-top: 1rem;
    }

    .institution-info, .location-info {
        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
        color: var(--gray-text);
    }

    /* Community Impact Section */
    .community-impact-section {
        padding: 100px 0;
        background: white;
    }

    .impact-features {
        margin-top: 2rem;
    }

    .feature-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
    }

    .feature-icon-small {
        width: 40px;
        height: 40px;
        background: var(--gold);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1rem;
        margin-right: 1rem;
        flex-shrink: 0;
    }

    .feature-item h6 {
        font-weight: 600;
        color: var(--navy);
        margin-bottom: 0.25rem;
    }

    .feature-item p {
        color: var(--gray-text);
        margin: 0;
        font-size: 0.9rem;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }

    .stat-box {
        background: var(--navy-light-bg);
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        padding: 1.5rem;
        text-align: center;
        transition: all 0.3s ease;
    }

    .stat-box:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .stat-box .stat-number {
        font-size: 2rem;
        font-weight: 700;
        color: var(--navy);
        display: block;
        line-height: 1;
        margin-bottom: 0.5rem;
    }

    .stat-box .stat-label {
        font-size: 0.875rem;
        color: var(--gray-text);
        font-weight: 500;
    }

    /* Remove gap before footer */
    .footer {
        margin-top: 0 !important;
    }

    /* Comprehensive Responsive Design */
    @media (max-width: 1200px) {
        .hero-section-enhanced .row {
            flex-direction: column-reverse;
        }

        .hero-visual-section {
            min-height: 60vh;
            margin-bottom: 2rem;
        }

        .stats-grid {
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1rem;
        }

        .floating-cards .success-card {
            position: relative;
            margin: 1rem 0;
            left: 0 !important;
            right: 0 !important;
            top: auto !important;
            bottom: auto !important;
        }
    }

    @media (max-width: 992px) {
        .pillars-section-modern {
            padding: 80px 0;
        }

        .section-header {
            margin-bottom: 3rem;
        }

        .pillars-container {
            margin: 2rem 0;
        }

        .journey-flow {
            padding: 2rem 0;
        }

        .flow-container {
            flex-direction: column;
            gap: 1rem;
        }

        .flow-arrow {
            transform: rotate(90deg);
        }

        .hero-title-modern {
            text-align: center;
        }

        .hero-subtitle-modern {
            text-align: center;
            max-width: 100%;
        }

        .title-decoration {
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (max-width: 768px) {
        .hero-section-enhanced {
            padding: 2rem 0;
        }

        .hero-content-modern {
            padding: 2rem 0;
            text-align: center;
        }

        .stats-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .stat-card {
            padding: 1.5rem;
        }

        .pillar-card-modern {
            margin-bottom: 2rem;
        }

        .card-header-modern {
            padding: 1.5rem 1.5rem 1rem;
        }

        .card-content {
            padding: 0 1.5rem 1rem;
        }

        .card-footer-modern {
            padding: 1rem 1.5rem 1.5rem;
        }

        .pillar-icon-modern {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }

        .pillar-number {
            width: 35px;
            height: 35px;
            font-size: 1rem;
        }

        .feature-item-modern {
            padding: 0.5rem;
        }

        .feature-item-modern span {
            font-size: 0.85rem;
        }

        .hero-image-enhanced {
            height: 300px;
        }

        .image-wrapper {
            transform: none;
        }

        .floating-cards {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .hero-section-enhanced {
            min-height: auto;
        }

        .hero-content-modern {
            padding: 1rem 0;
        }

        .btn-primary-modern,
        .btn-outline-modern {
            width: 100%;
            margin-bottom: 1rem;
            padding: 16px 20px;
            font-size: 1rem;
        }

        .cta-group {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .pillar-title-modern {
            font-size: 1.3rem;
        }

        .pillar-description-modern {
            font-size: 0.95rem;
        }

        .section-title-modern {
            font-size: 2rem;
        }

        .section-subtitle-modern {
            font-size: 1rem;
        }

        .stat-card {
            flex-direction: column;
            text-align: center;
            gap: 1rem;
        }

        .stat-icon {
            width: 45px;
            height: 45px;
            font-size: 1rem;
        }

        .stat-number {
            font-size: 1.5rem;
        }

        .flow-step span {
            font-size: 0.8rem;
        }

        .flow-icon {
            width: 40px;
            height: 40px;
            font-size: 1rem;
        }
    }

    /* Loading Animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .pillar-card-modern {
        animation: fadeInUp 0.6s ease forwards;
    }

    .pillar-card-modern:nth-child(2) {
        animation-delay: 0.2s;
    }

    .pillar-card-modern:nth-child(3) {
        animation-delay: 0.4s;
    }

    /* Smooth Scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Focus States for Accessibility */
    .btn-primary-modern:focus,
    .btn-outline-modern:focus {
        outline: 3px solid rgba(214, 154, 42, 0.5);
        outline-offset: 2px;
    }

    .pillar-card-modern:focus-within {
        box-shadow: var(--shadow-xl), 0 0 0 3px rgba(15, 58, 102, 0.2);
    }

    /* Print Styles */
    @media print {
        .hero-section-enhanced {
            background: white !important;
            color: black !important;
            min-height: auto !important;
        }

        .floating-cards,
        .badge-glow,
        .icon-glow {
            display: none !important;
        }
    }
</style>

<?= $this->endSection() ?>