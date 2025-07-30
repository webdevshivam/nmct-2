
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="font-display mb-4">Success Stories</h1>
                <p class="lead mb-0">Inspiring journeys of our graduates who have achieved their dreams through education and hard work</p>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="section-padding">
    <div class="container">
        <?php if (!empty($success_stories)): ?>
        <div class="row">
            <?php foreach($success_stories as $story): ?>
            <div class="col-lg-6 mb-5">
                <div class="card h-100 border-0 shadow-lg">
                    <?php if (!empty($story['image'])): ?>
                    <div class="card-img-container" style="height: 200px; overflow: hidden;">
                        <img src="<?= base_url('writable/uploads/success_stories/' . $story['image']) ?>" 
                             class="card-img-top" alt="<?= esc($story['name']) ?>" 
                             style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <?php endif; ?>
                    <div class="card-header" style="background: var(--gradient-primary); color: white;">
                        <h4 class="mb-1"><?= esc($story['name']) ?></h4>
                        <h6 class="text-light mb-0">
                            <i class="fas fa-briefcase"></i> <?= esc($story['current_position']) ?>
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <p class="card-text"><?= nl2br(esc($story['story'])) ?></p>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6 class="text-primary">Company</h6>
                                <p class="mb-0">
                                    <i class="fas fa-building text-success"></i> 
                                    <?php if (!empty($story['company_link'])): ?>
                                        <a href="<?= esc($story['company_link']) ?>" target="_blank" class="text-decoration-none">
                                            <?= esc($story['company']) ?>
                                        </a>
                                    <?php else: ?>
                                        <?= esc($story['company']) ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-primary">Education</h6>
                                <p class="mb-0">
                                    <i class="fas fa-graduation-cap text-info"></i> 
                                    <?= esc($story['education']) ?>
                                </p>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6 class="text-primary">Location</h6>
                                <p class="mb-0">
                                    <i class="fas fa-map-marker-alt text-warning"></i> 
                                    <?= esc($story['city'] . ', ' . $story['state']) ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-primary">Age</h6>
                                <p class="mb-0">
                                    <i class="fas fa-calendar text-secondary"></i> 
                                    <?= esc($story['age']) ?> years old
                                </p>
                            </div>
                        </div>
                        
                        <?php if (!empty($story['achievements'])): ?>
                        <div class="row mb-3">
                            <div class="col-12">
                                <h6 class="text-primary">Achievements</h6>
                                <p class="mb-0">
                                    <i class="fas fa-trophy text-warning"></i> 
                                    <?= nl2br(esc($story['achievements'])) ?>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if (!empty($story['linkedin_url'])): ?>
                        <div class="text-center mt-3">
                            <a href="<?= esc($story['linkedin_url']) ?>" target="_blank" class="btn btn-primary btn-sm">
                                <i class="fab fa-linkedin"></i> Connect on LinkedIn
                            </a>
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
            <p class="text-muted">Check back soon for inspiring stories from our beneficiaries.</p>
        </div>
        <?php endif; ?>
    </div>
</section>

<?= $this->endSection() ?>
