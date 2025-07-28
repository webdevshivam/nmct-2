<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<section class="hero-section">
    <div class="container">
        <h1 class="mb-4">Success Stories</h1>
        <p class="lead">Inspiring journeys of our graduates who have achieved their dreams</p>
    </div>
</section>

<!-- Success Stories -->
<section class="section-padding">
    <div class="container">
        <?php if (!empty($success_stories)): ?>
        <div class="row">
            <?php foreach($success_stories as $story): ?>
            <div class="col-lg-6 mb-5">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-1"><?= esc($story['title']) ?></h4>
                        <h6 class="text-light mb-0">
                            <i class="fas fa-user"></i> <?= esc($story['student_name']) ?>
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <p class="card-text"><?= nl2br(esc($story['story'])) ?></p>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6 class="text-primary">Achievement</h6>
                                <p class="mb-0">
                                    <i class="fas fa-trophy text-warning"></i> 
                                    <?= esc($story['achievement']) ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-primary">Graduation Year</h6>
                                <p class="mb-0">
                                    <i class="fas fa-calendar text-info"></i> 
                                    <?= esc($story['graduation_year']) ?>
                                </p>
                            </div>
                        </div>
                        
                        <?php if (!empty($story['current_position'])): ?>
                        <div class="row">
                            <div class="col-12">
                                <h6 class="text-primary">Current Position</h6>
                                <p class="mb-0">
                                    <i class="fas fa-briefcase text-success"></i> 
                                    <?= esc($story['current_position']) ?>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer bg-light">
                        <small class="text-muted">
                            <i class="fas fa-clock"></i> 
                            Published on <?= date('F j, Y', strtotime($story['created_at'])) ?>
                        </small>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div class="text-center py-5">
            <i class="fas fa-star fa-5x text-muted mb-4"></i>
            <h3 class="text-muted">No Success Stories Yet</h3>
            <p class="text-muted">We're excited to share the success stories of our graduates soon!</p>
        </div>
        <?php endif; ?>
    </div>
</section>

<?= $this->endSection() ?>