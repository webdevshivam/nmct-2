<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 class="mb-4">Nayantar Memorial Charitable Trust</h1>
        <p class="lead">Empowering Dreams, Transforming Lives Through Education</p>
        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-primary btn-lg me-3">
            <i class="fas fa-graduation-cap"></i> Meet Our Beneficiaries
        </a>
        <a href="<?= base_url('success-stories') ?>" class="btn btn-outline-light btn-lg">
            <i class="fas fa-star"></i> Success Stories
        </a>
    </div>
</section>

<!-- Statistics Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card stats-card">
                    <div class="card-body">
                        <span class="stats-number"><?= $total_beneficiaries ?></span>
                        <h5>Total Beneficiaries</h5>
                        <p>Students supported through our programs</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card stats-card">
                    <div class="card-body">
                        <span class="stats-number"><?= $active_beneficiaries ?></span>
                        <h5>Active Students</h5>
                        <p>Currently pursuing their education</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card stats-card">
                    <div class="card-body">
                        <span class="stats-number"><?= count($success_stories) ?></span>
                        <h5>Success Stories</h5>
                        <p>Graduates who achieved their dreams</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="text-gradient mb-4">Our Mission</h2>
                <p class="lead">At Nayantar Memorial Charitable Trust, we believe that education is the key to breaking the cycle of poverty and creating opportunities for a brighter future.</p>
                <p>We provide financial assistance, mentorship, and support to deserving students from underprivileged backgrounds, helping them pursue higher education and achieve their career goals.</p>
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span>Scholarship Programs</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span>Career Guidance</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span>Mentorship Support</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span>Skill Development</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body text-center p-5">
                        <i class="fas fa-graduation-cap fa-5x text-primary mb-4"></i>
                        <h4>Education for All</h4>
                        <p>We believe every student deserves the opportunity to pursue their dreams through quality education, regardless of their economic background.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Success Stories -->
<?php if (!empty($success_stories)): ?>
<section class="section-padding bg-light">
    <div class="container">
        <h2 class="text-center text-gradient mb-5">Recent Success Stories</h2>
        <div class="row">
            <?php foreach(array_slice($success_stories, 0, 3) as $story): ?>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($story['title']) ?></h5>
                        <h6 class="text-muted mb-3"><?= esc($story['student_name']) ?></h6>
                        <p class="card-text"><?= esc(substr($story['story'], 0, 150)) ?>...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="fas fa-trophy"></i> <?= esc($story['achievement']) ?>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <a href="<?= base_url('success-stories') ?>" class="btn btn-primary">
                View All Success Stories <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Call to Action -->
<section class="section-padding" style="background: linear-gradient(135deg, var(--primary-color), #34495e); color: white;">
    <div class="container text-center">
        <h2 class="mb-4">Join Us in Making a Difference</h2>
        <p class="lead mb-4">Together, we can transform lives through the power of education</p>
        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-light btn-lg">
            <i class="fas fa-hands-helping"></i> Support Our Cause
        </a>
    </div>
</section>

<?= $this->endSection() ?>