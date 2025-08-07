
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section with Enhanced Messaging -->
<section class="hero-section position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center min-vh-100 py-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="hero-content">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <img src="<?= base_url('assets/images/bharatpur-logo.png') ?>" alt="Bharatpur Foundation Logo" style="height: 80px; margin-right: 20px;" onerror="this.style.display='none'">
                        <h1 class="font-display">Beyond Financial Aid</h1>
                    </div>
                    <p class="lead mb-4">We don't just provide money - we create professionals. Through education, mentoring, and career development, we deliver real empowerment at the ground level to uplift society.</p>
                    
                    <!-- Unique Value Proposition -->
                    <div class="value-props mb-4">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <span class="fw-semibold">Education + Mentoring + Employment</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <span class="fw-semibold">Industry-Ready Professional Development</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <span class="fw-semibold">Sustainable Career Support</span>
                        </div>
                    </div>
                    
                    <div class="hero-buttons d-flex flex-wrap gap-3">
                        <a href="<?= base_url('ngo-works') ?>" class="btn btn-primary btn-lg px-4 py-3">
                            <i class="fas fa-rocket me-2"></i> See Our Unique Approach
                        </a>
                        <a href="<?= base_url('success-stories') ?>" class="btn btn-outline-primary btn-lg px-4 py-3">
                            <i class="fas fa-star me-2"></i> Success Stories
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-gallery">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="hero-image-card rounded-3 overflow-hidden shadow-lg">
                                <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?w=400&h=300&fit=crop"
                                     alt="Professional development" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="hero-image-card rounded-3 overflow-hidden shadow-lg">
                                <img src="https://images.unsplash.com/photo-1544717297-fa95b6ee9643?w=400&h=300&fit=crop"
                                     alt="Career success" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="hero-image-card rounded-3 overflow-hidden shadow-lg">
                                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=300&h=200&fit=crop"
                                     alt="Mentoring sessions" class="img-fluid w-100" style="height: 130px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="hero-image-card rounded-3 overflow-hidden shadow-lg">
                                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=300&h=200&fit=crop"
                                     alt="Skill development" class="img-fluid w-100" style="height: 130px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="hero-image-card rounded-3 overflow-hidden shadow-lg">
                                <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=300&h=200&fit=crop"
                                     alt="Professional growth" class="img-fluid w-100" style="height: 130px; object-fit: cover;">
                            </div>
                        </div>
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
