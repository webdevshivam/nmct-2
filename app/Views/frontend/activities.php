
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold text-primary">Our Activities</h1>
                <p class="lead text-muted">Discover the meaningful work we do to empower communities</p>
            </div>
        </div>
    </div>

    <?php if (!empty($activities)): ?>
        <div class="row g-4">
            <?php foreach ($activities as $activity): ?>
                <div class="col-lg-6 col-xl-4">
                    <div class="card h-100 shadow-sm border-0">
                        <?php if (!empty($activity['images'])): ?>
                            <?php $images = json_decode($activity['images'], true); ?>
                            <?php if ($images && !empty($images[0])): ?>
                                <img src="<?= base_url('uploads/ngo_works/' . $images[0]) ?>"
                                     class="card-img-top" alt="<?= esc($activity['title']) ?>"
                                     style="height: 250px; object-fit: cover;">
                            <?php endif; ?>
                        <?php else: ?>
                            <div class="card-img-top bg-primary d-flex align-items-center justify-content-center" 
                                 style="height: 250px;">
                                <i class="fas fa-heart fa-3x text-white"></i>
                            </div>
                        <?php endif; ?>
                        
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-primary rounded-pill"><?= esc($activity['category']) ?></span>
                            </div>
                            
                            <h5 class="card-title"><?= esc($activity['title']) ?></h5>
                            <p class="card-text text-muted"><?= esc(substr($activity['description'], 0, 150)) ?>...</p>
                            
                            <div class="mt-auto">
                                <div class="row text-center small text-muted mb-3">
                                    <div class="col-6">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div><?= esc($activity['location'] ?? 'Not specified') ?></div>
                                    </div>
                                    <div class="col-6">
                                        <i class="fas fa-users"></i>
                                        <div><?= number_format($activity['beneficiaries_count'] ?? 0) ?> Beneficiaries</div>
                                    </div>
                                </div>
                                
                                <?php if (!empty($activity['date_completed'])): ?>
                                    <div class="text-center">
                                        <small class="text-muted">
                                            <i class="fas fa-calendar"></i>
                                            Completed: <?= date('M d, Y', strtotime($activity['date_completed'])) ?>
                                        </small>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if (!empty($activity['achievements'])): ?>
                                    <div class="mt-2">
                                        <small class="text-success">
                                            <i class="fas fa-trophy"></i>
                                            <?= esc(substr($activity['achievements'], 0, 100)) ?>...
                                        </small>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="row">
            <div class="col-12">
                <div class="text-center py-5">
                    <i class="fas fa-heart fa-4x text-muted mb-4"></i>
                    <h3 class="text-muted">No Activities Found</h3>
                    <p class="text-muted">We're working on amazing projects. Check back soon!</p>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?= $this->endsection() ?>
