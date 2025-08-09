<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Simple Hero Section -->
<section class="hero-section-simple">
    <div class="hero-background">
        <img src="<?= base_url('assets/images/bharatpur-hero-image.png') ?>" alt="Bharatpur Foundation" class="hero-bg-image">
        <div class="hero-overlay"></div>
    </div>
    
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content">
                    <h1 class="hero-title mb-4">
                        <?= $translations['hero_title'] ?>
                    </h1>
                    <h2 class="hero-subtitle mb-4">
                        <?= $translations['hero_tagline'] ?>
                    </h2>
                    <p class="hero-description mb-5">
                        <?= $translations['hero_description'] ?>
                    </p>
                    
                    <!-- Simple Feature Icons -->
                    <div class="row g-4 mb-5">
                        <div class="col-md-4">
                            <div class="hero-feature">
                                <i class="fas fa-graduation-cap mb-3"></i>
                                <h6><?= $translations['quality_education'] ?></h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hero-feature">
                                <i class="fas fa-user-tie mb-3"></i>
                                <h6><?= $translations['personal_mentoring'] ?></h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hero-feature">
                                <i class="fas fa-briefcase mb-3"></i>
                                <h6><?= $translations['career_development'] ?></h6>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Call to Action Buttons -->
                    <div class="hero-actions">
                        <a href="<?= base_url($language . '/ngo-works') ?>" class="btn btn-primary btn-lg me-3 mb-3">
                            <?= $translations['our_approach'] ?>
                        </a>
                        <a href="<?= base_url($language . '/beneficiaries') ?>" class="btn btn-outline-light btn-lg mb-3">
                            <?= $translations['support_students'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
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

                    <!-- Hindi Decorative Elements on Image -->
                    <div class="image-overlay-decorations">
                        <div class="hindi-symbol symbol-1">🕉️</div>
                        <div class="hindi-symbol symbol-2">🪔</div>
                        <div class="hindi-symbol symbol-3">🌺</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">
                        <?= $translations['our_difference'] ?>
                    </span>
                    <h2 class="section-title font-display mb-4">
                        <?= $translations['creating_professionals'] ?>
                    </h2>
                    <p class="lead mb-4">
                        <?= $translations['professionals_description'] ?>
                    </p>

                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-primary text-white rounded-3 p-3 me-3">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1"><?= $translations['holistic_development'] ?></h6>
                                    <small class="text-muted"><?= $translations['mind_skills_career'] ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-success text-white rounded-3 p-3 me-3">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1"><?= $translations['industry_ready'] ?></h6>
                                    <small class="text-muted"><?= $translations['real_world_skills'] ?></small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="<?= base_url($language . '/ngo-works') ?>" class="btn btn-primary"><?= $translations['our_approach'] ?></a>
                        <a href="<?= base_url($language . '/beneficiaries') ?>" class="btn btn-outline-primary"><?= $translations['meet_beneficiaries'] ?></a>
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
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">
                    <?= $translations['our_three_pillars'] ?>
                </span>
                <h2 class="section-title font-display mb-4">
                    <?= $translations['complete_transformation'] ?>
                </h2>
                <p class="lead text-muted">
                    <?= $translations['transformation_description'] ?>
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100 pillar-card" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 20px;">
                    <div class="card-body p-5 text-center">
                        <div class="pillar-icon mb-4">
                            <i class="fas fa-graduation-cap fa-4x"></i>
                        </div>
                        <h3 class="card-title font-display mb-4"><?= $translations['quality_education'] ?></h3>
                        <p class="card-text mb-4"><?= $translations['complete_academic_support'] ?> with modern learning tools and industry-relevant skills.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2"></i> <?= $translations['full_academic_coverage'] ?></li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> <?= $translations['modern_learning_tools'] ?></li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> <?= $translations['skill_workshops'] ?></li>
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
                        <h3 class="card-title font-display mb-4"><?= $translations['personal_mentoring'] ?></h3>
                        <p class="card-text mb-4">Personal guidance from industry professionals for career and personal growth.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2"></i> <?= $translations['industry_mentors_text'] ?></li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> <?= $translations['regular_guidance'] ?></li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> <?= $translations['personality_development'] ?></li>
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
                        <h3 class="card-title font-display mb-4"><?= $translations['career_development'] ?></h3>
                        <p class="card-text mb-4">Job placement assistance and professional training for sustainable careers.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2"></i> <?= $translations['job_placement'] ?></li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> <?= $translations['interview_training'] ?></li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> <?= $translations['career_support'] ?></li>
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
    /* Simple Hero Section */
    .hero-section-simple {
        position: relative;
        min-height: 100vh;
        overflow: hidden;
        display: flex;
        align-items: center;
    }
    
    .hero-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }
    
    .hero-bg-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.6) 0%, rgba(165, 102, 28, 0.3) 50%, rgba(0, 0, 0, 0.6) 100%);
        z-index: 2;
    }
    
    .hero-content {
        position: relative;
        z-index: 10;
        color: white;
    }
    
    .hero-title {
        font-size: 3.5rem;
        font-weight: 800;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        font-family: 'Playfair Display', serif;
    }
    
    .hero-subtitle {
        font-size: 2rem;
        font-weight: 600;
        color: #ffd700;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        font-family: 'Merriweather', serif;
    }
    
    .hero-description {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.95);
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }
    
    .hero-feature {
        text-align: center;
        color: white;
    }
    
    .hero-feature i {
        font-size: 3rem;
        color: #ffd700;
        display: block;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
    }
    
    .hero-feature h6 {
        font-size: 1.1rem;
        font-weight: 600;
        color: white;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        margin: 0;
    }
    
    .hero-actions .btn {
        font-size: 1.1rem;
        font-weight: 600;
        padding: 12px 30px;
        border-radius: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .btn-outline-light {
        border: 2px solid rgba(255, 255, 255, 0.8);
        color: white;
    }
    
    .btn-outline-light:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: white;
        color: white;
    }

    

    /* Responsive Design */
    @media (max-width: 992px) {
        .hero-title {
            font-size: 3rem;
        }
        
        .hero-subtitle {
            font-size: 1.8rem;
        }
        
        .hero-feature i {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
        }
        
        .hero-description {
            font-size: 1.1rem;
        }
        
        .hero-feature i {
            font-size: 2rem;
        }
    }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .hero-subtitle {
            font-size: 1.3rem;
        }
        
        .hero-actions .btn {
            display: block;
            width: 100%;
            margin: 0 0 1rem 0;
        }
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
