<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section with Background Image -->
<section class="hero-section-background">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="row min-vh-100 align-items-center justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="hero-content">
                    <!-- Foundation Logo/Icon -->
                    <div class="hero-logo mb-4">
                        <div class="logo-circle">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                    </div>
                    
                    <h1 class="hero-title mb-4">
                        <?= $translations['hero_title'] ?>
                    </h1>
                    <h2 class="hero-subtitle mb-4">
                        <?= $translations['hero_tagline'] ?>
                    </h2>
                    <p class="hero-description mb-5">
                        <?= $translations['hero_description'] ?>
                    </p>
                    
                    <!-- Feature Pills -->
                    <div class="hero-features mb-5">
                        <div class="feature-pill">
                            <i class="fas fa-graduation-cap me-2"></i>
                            <?= $translations['quality_education'] ?>
                        </div>
                        <div class="feature-pill">
                            <i class="fas fa-user-tie me-2"></i>
                            <?= $translations['personal_mentoring'] ?>
                        </div>
                        <div class="feature-pill">
                            <i class="fas fa-briefcase me-2"></i>
                            <?= $translations['career_development'] ?>
                        </div>
                    </div>
                    
                    <!-- Call to Action Buttons -->
                    <div class="hero-actions">
                        <a href="<?= base_url($language . '/ngo-works') ?>" class="btn btn-hero-primary btn-lg me-3 mb-3">
                            <i class="fas fa-rocket me-2"></i><?= $translations['our_approach'] ?>
                        </a>
                        <a href="<?= base_url($language . '/beneficiaries') ?>" class="btn btn-hero-outline btn-lg mb-3">
                            <i class="fas fa-users me-2"></i><?= $translations['support_students'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="hero-decorative-elements">
        <div class="float-element float-1">🌟</div>
        <div class="float-element float-2">📚</div>
        <div class="float-element float-3">🎓</div>
        <div class="float-element float-4">💼</div>
        <div class="float-element float-5">🎯</div>
        <div class="float-element float-6">✨</div>
    </div>
    
    <!-- Bottom Wave -->
    <div class="hero-wave">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
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
    /* Background Hero Section */
    .hero-section-background {
        min-height: 100vh;
        background: 
            linear-gradient(135deg, rgba(0, 0, 0, 0.4) 0%, rgba(165, 102, 28, 0.2) 50%, rgba(0, 0, 0, 0.4) 100%),
            url('<?= base_url('assets/images/bharatpur-hero-image.png') ?>');
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
    
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 30% 20%, rgba(255, 215, 0, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 70% 80%, rgba(165, 102, 28, 0.1) 0%, transparent 50%),
            linear-gradient(135deg, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.3) 100%);
        z-index: 1;
    }
    
    .hero-content {
        position: relative;
        z-index: 10;
        text-align: center;
    }
    
    .hero-logo {
        display: flex;
        justify-content: center;
        margin-bottom: 2rem;
    }
    
    .logo-circle {
        width: 100px;
        height: 100px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(20px);
        box-shadow: 
            0 8px 32px rgba(0, 0, 0, 0.3), 
            0 4px 16px rgba(165, 102, 28, 0.2),
            inset 0 1px 0 rgba(255, 255, 255, 0.4);
        border: 3px solid rgba(255, 215, 0, 0.3);
        animation: glow 3s ease-in-out infinite alternate;
    }
    
    .logo-circle i {
        font-size: 2.5rem;
        color: #ffd700;
        text-shadow: 0 0 20px rgba(255, 215, 0, 0.5);
    }
    
    @keyframes glow {
        0% { 
            box-shadow: 
                0 8px 32px rgba(0, 0, 0, 0.3), 
                0 4px 16px rgba(165, 102, 28, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.4),
                0 0 20px rgba(255, 215, 0, 0.2);
        }
        100% { 
            box-shadow: 
                0 8px 32px rgba(0, 0, 0, 0.3), 
                0 4px 16px rgba(165, 102, 28, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.4),
                0 0 40px rgba(255, 215, 0, 0.4);
        }
    }
    
    .hero-title {
        font-size: 4rem;
        font-weight: 800;
        color: white;
        font-family: 'Playfair Display', serif;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        text-shadow: 
            0 4px 12px rgba(0, 0, 0, 0.7), 
            0 2px 6px rgba(0, 0, 0, 0.9),
            0 1px 0 rgba(255, 215, 0, 0.3);
        background: linear-gradient(135deg, #ffd700 0%, #ff8c00 30%, #ffa500 70%, #ff6347 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .hero-subtitle {
        font-size: 2.2rem;
        font-weight: 700;
        color: white;
        font-family: 'Merriweather', serif;
        line-height: 1.3;
        margin-bottom: 1.5rem;
        text-shadow: 
            0 4px 12px rgba(0, 0, 0, 0.7), 
            0 2px 6px rgba(0, 0, 0, 0.9);
    }
    
    .hero-description {
        font-size: 1.3rem;
        color: rgba(255, 255, 255, 0.95);
        line-height: 1.7;
        margin-bottom: 2rem;
        font-family: 'Lora', serif;
        font-weight: 500;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .hero-features {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 3rem;
    }
    
    .feature-pill {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        padding: 1rem 1.5rem;
        border-radius: 50px;
        color: white;
        font-weight: 600;
        font-size: 0.95rem;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        transition: all 0.3s ease;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }
    
    .feature-pill:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
    }
    
    .feature-pill i {
        color: #ffd700;
        text-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
    }
    
    .btn-hero-primary {
        background: linear-gradient(135deg, #ffd700 0%, #ffb000 100%);
        border: none;
        color: #333;
        font-weight: 700;
        padding: 15px 35px;
        border-radius: 12px;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        box-shadow: 0 8px 25px rgba(255, 215, 0, 0.3);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        text-shadow: none;
    }
    
    .btn-hero-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(255, 215, 0, 0.5);
        color: #333;
        background: linear-gradient(135deg, #fff700 0%, #ffb000 100%);
    }
    
    .btn-hero-outline {
        background: transparent;
        border: 3px solid rgba(255, 255, 255, 0.8);
        color: white;
        font-weight: 700;
        padding: 12px 32px;
        border-radius: 12px;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .btn-hero-outline:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: white;
        transform: translateY(-3px);
        color: white;
        box-shadow: 0 8px 25px rgba(255, 255, 255, 0.2);
    }
    
    /* Decorative Elements */
    .hero-decorative-elements {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2;
        pointer-events: none;
    }
    
    .float-element {
        position: absolute;
        font-size: 2.5rem;
        opacity: 0.6;
        animation: float 8s ease-in-out infinite;
        color: rgba(255, 215, 0, 0.8);
        text-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
    }
    
    .float-1 {
        top: 15%;
        left: 10%;
        animation-delay: 0s;
    }
    
    .float-2 {
        top: 25%;
        right: 15%;
        animation-delay: -2s;
    }
    
    .float-3 {
        top: 60%;
        left: 5%;
        animation-delay: -4s;
    }
    
    .float-4 {
        bottom: 25%;
        right: 8%;
        animation-delay: -1s;
    }
    
    .float-5 {
        top: 45%;
        left: 15%;
        animation-delay: -3s;
    }
    
    .float-6 {
        bottom: 15%;
        left: 20%;
        animation-delay: -5s;
    }
    
    @keyframes float {
        0%, 100% { 
            transform: translateY(0px) rotate(0deg); 
            opacity: 0.4; 
        }
        33% { 
            transform: translateY(-25px) rotate(5deg); 
            opacity: 0.8; 
        }
        66% { 
            transform: translateY(-15px) rotate(-3deg); 
            opacity: 0.6; 
        }
    }
    
    /* Wave Bottom */
    .hero-wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
        z-index: 5;
    }
    
    .hero-wave svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 80px;
        fill: #ffffff;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .hero-title {
            font-size: 3.2rem;
        }
        
        .hero-subtitle {
            font-size: 1.8rem;
        }
        
        .logo-circle {
            width: 80px;
            height: 80px;
        }
        
        .logo-circle i {
            font-size: 2rem;
        }
        
        .hero-features {
            flex-direction: column;
            align-items: center;
        }
        
        .feature-pill {
            max-width: 300px;
        }
    }

    @media (max-width: 768px) {
        .hero-section-background {
            background-attachment: scroll;
        }
        
        .hero-title {
            font-size: 2.8rem;
        }
        
        .hero-subtitle {
            font-size: 1.6rem;
        }
        
        .hero-description {
            font-size: 1.1rem;
        }
        
        .float-element {
            font-size: 2rem;
        }
        
        .btn-hero-primary,
        .btn-hero-outline {
            padding: 12px 25px;
            font-size: 1rem;
            margin-bottom: 0.5rem;
            display: block;
            width: 100%;
            max-width: 300px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 2.4rem;
        }
        
        .hero-subtitle {
            font-size: 1.4rem;
        }
        
        .hero-description {
            font-size: 1rem;
        }
        
        .logo-circle {
            width: 70px;
            height: 70px;
        }
        
        .logo-circle i {
            font-size: 1.8rem;
        }
        
        .float-element {
            display: none;
        }
        
        .feature-pill {
            font-size: 0.9rem;
            padding: 0.8rem 1.2rem;
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
