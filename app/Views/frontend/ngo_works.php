
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3">Our NGO Works</h1>
        <p class="lead">Discover the impactful projects and initiatives we've undertaken to make a difference in our community</p>
    </div>
</section>

<!-- Filter Section -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h5 class="mb-0">Filter by Category:</h5>
            </div>
            <div class="col-md-4">
                <select class="form-select" id="categoryFilter">
                    <option value="">All Categories</option>
                    <option value="Education">Education</option>
                    <option value="Healthcare">Healthcare</option>
                    <option value="Environment">Environment</option>
                    <option value="Community Service">Community Service</option>
                    <option value="Women Empowerment">Women Empowerment</option>
                    <option value="Child Welfare">Child Welfare</option>
                    <option value="Disaster Relief">Disaster Relief</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- NGO Works Grid -->
<section class="py-5">
    <div class="container">
        <?php if (empty($ngo_works)): ?>
            <div class="text-center py-5">
                <i class="fas fa-heart fa-3x text-muted mb-3"></i>
                <h4 class="text-muted">No NGO works found</h4>
                <p class="text-muted">Check back later for updates on our projects and initiatives.</p>
            </div>
        <?php else: ?>
            <div class="row" id="ngoWorksContainer">
                <?php foreach ($ngo_works as $work): ?>
                    <div class="col-lg-4 col-md-6 mb-4 ngo-work-card" data-category="<?= esc($work['category']) ?>">
                        <div class="card h-100 shadow-sm">
                            <?php if (!empty($work['images'])): ?>
                                <?php $images = json_decode($work['images'], true); ?>
                                <?php if ($images && !empty($images[0])): ?>
                                    <img src="<?= base_url('uploads/ngo_works/' . $images[0]) ?>" 
                                         class="card-img-top" alt="<?= esc($work['title']) ?>" 
                                         style="height: 200px; object-fit: cover;">
                                <?php endif; ?>
                            <?php endif; ?>
                            
                            <div class="card-body d-flex flex-column">
                                <div class="mb-2">
                                    <span class="badge bg-info"><?= esc($work['category']) ?></span>
                                    <?php if ($work['location']): ?>
                                        <small class="text-muted ms-2">
                                            <i class="fas fa-map-marker-alt"></i> <?= esc($work['location']) ?>
                                        </small>
                                    <?php endif; ?>
                                </div>
                                
                                <h5 class="card-title"><?= esc($work['title']) ?></h5>
                                <p class="card-text flex-grow-1"><?= character_limiter(esc($work['description']), 120) ?></p>
                                
                                <div class="mt-auto">
                                    <div class="row text-center mb-3">
                                        <?php if ($work['beneficiaries_count']): ?>
                                            <div class="col">
                                                <div class="small text-muted">Beneficiaries</div>
                                                <div class="fw-bold text-primary"><?= number_format($work['beneficiaries_count']) ?></div>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <?php if ($work['date_completed']): ?>
                                            <div class="col">
                                                <div class="small text-muted">Completed</div>
                                                <div class="fw-bold text-success"><?= date('M Y', strtotime($work['date_completed'])) ?></div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <button class="btn btn-primary btn-sm w-100" data-bs-toggle="modal" 
                                            data-bs-target="#workModal<?= $work['id'] ?>">
                                        <i class="fas fa-eye"></i> View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Modals for Work Details -->
<?php foreach ($ngo_works as $work): ?>
<div class="modal fade" id="workModal<?= $work['id'] ?>" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= esc($work['title']) ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <?php if (!empty($work['images'])): ?>
                    <?php $images = json_decode($work['images'], true); ?>
                    <?php if ($images): ?>
                        <div id="carousel<?= $work['id'] ?>" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach ($images as $index => $image): ?>
                                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                        <img src="<?= base_url('uploads/ngo_works/' . $image) ?>" 
                                             class="d-block w-100" alt="Project Image" 
                                             style="height: 300px; object-fit: cover;">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php if (count($images) > 1): ?>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $work['id'] ?>" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $work['id'] ?>" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Category:</strong> <span class="badge bg-info"><?= esc($work['category']) ?></span>
                    </div>
                    <div class="col-md-6">
                        <strong>Location:</strong> <?= $work['location'] ? esc($work['location']) : 'Not specified' ?>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <?php if ($work['date_completed']): ?>
                        <div class="col-md-6">
                            <strong>Date Completed:</strong> <?= date('M d, Y', strtotime($work['date_completed'])) ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($work['beneficiaries_count']): ?>
                        <div class="col-md-6">
                            <strong>Beneficiaries:</strong> <?= number_format($work['beneficiaries_count']) ?>
                        </div>
                    <?php endif; ?>
                </div>
                
                <?php if ($work['budget_amount']): ?>
                    <div class="mb-3">
                        <strong>Budget:</strong> ₹ <?= number_format($work['budget_amount'], 2) ?>
                    </div>
                <?php endif; ?>
                
                <div class="mb-3">
                    <strong>Description:</strong>
                    <p><?= nl2br(esc($work['description'])) ?></p>
                </div>
                
                <?php if ($work['partners']): ?>
                    <div class="mb-3">
                        <strong>Partner Organizations:</strong>
                        <p><?= nl2br(esc($work['partners'])) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if ($work['achievements']): ?>
                    <div class="mb-3">
                        <strong>Key Achievements:</strong>
                        <p><?= nl2br(esc($work['achievements'])) ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<script>
document.getElementById('categoryFilter').addEventListener('change', function() {
    const selectedCategory = this.value;
    const workCards = document.querySelectorAll('.ngo-work-card');
    
    workCards.forEach(card => {
        if (selectedCategory === '' || card.dataset.category === selectedCategory) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});
</script>

<?= $this->endSection() ?>
