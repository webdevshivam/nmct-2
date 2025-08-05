
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-5 fw-bold mb-3">Success Stories</h1>
                <p class="lead text-muted mb-4">Inspiring journeys of our graduates who transformed their dreams into reality</p>
                <div class="d-flex justify-content-center gap-3">
                    <span class="badge bg-primary fs-6 px-3 py-2">
                        <i class="fas fa-star me-1"></i><?= count($success_stories) ?> Stories
                    </span>
                    <span class="badge bg-success fs-6 px-3 py-2">
                        <i class="fas fa-graduation-cap me-1"></i>Graduates
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Grid -->
<section class="py-5">
    <div class="container">
        <?php if (!empty($success_stories)): ?>
        <div class="row g-4">
            <?php foreach($success_stories as $index => $story): ?>
            <div class="col-lg-6 col-xl-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <!-- Image Container -->
                    <?php if (!empty($story['image'])): ?>
                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="<?= base_url('writable/uploads/success_stories/' . $story['image']) ?>" 
                             class="card-img-top h-100 w-100" alt="<?= esc($story['name']) ?>" 
                             style="object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-success px-2 py-1">
                                <i class="fas fa-star me-1"></i>Success
                            </span>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Header -->
                    <div class="card-header bg-gradient-primary text-white">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-white bg-opacity-20 p-2 me-3">
                                <i class="fas fa-user-tie text-white"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1 fw-bold"><?= esc($story['name']) ?></h5>
                                <p class="mb-0 opacity-75">
                                    <i class="fas fa-briefcase me-1"></i><?= esc($story['current_position']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Body -->
                    <div class="card-body p-4">
                        <!-- Story Preview -->
                        <div class="mb-4">
                            <p class="text-muted mb-0" style="font-style: italic; line-height: 1.6;">
                                "<?= substr(strip_tags($story['story']), 0, 120) ?>..."
                            </p>
                        </div>
                        
                        <!-- Key Info -->
                        <div class="row g-3 mb-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-building text-info me-2"></i>
                                    <div>
                                        <small class="text-muted d-block">Company</small>
                                        <span class="fw-semibold small">
                                            <?php if (!empty($story['company_link'])): ?>
                                                <a href="<?= esc($story['company_link']) ?>" target="_blank" class="text-decoration-none">
                                                    <?= esc($story['company']) ?>
                                                </a>
                                            <?php else: ?>
                                                <?= esc($story['company']) ?>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-graduation-cap text-success me-2"></i>
                                    <div>
                                        <small class="text-muted d-block">Education</small>
                                        <span class="fw-semibold small"><?= esc($story['education']) ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt text-warning me-2"></i>
                                    <div>
                                        <small class="text-muted d-block">Location</small>
                                        <span class="fw-semibold small"><?= esc($story['city'] . ', ' . $story['state']) ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar text-secondary me-2"></i>
                                    <div>
                                        <small class="text-muted d-block">Age</small>
                                        <span class="fw-semibold small"><?= esc($story['age']) ?> years</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Achievements Preview -->
                        <?php if (!empty($story['achievements'])): ?>
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-trophy text-warning me-2 mt-1"></i>
                                <div>
                                    <small class="text-muted d-block">Key Achievement</small>
                                    <span class="small text-dark"><?= substr(strip_tags($story['achievements']), 0, 80) ?>...</span>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <!-- Action Buttons -->
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary btn-sm flex-grow-1 read-full-story" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#storyModal"
                                    data-story='<?= json_encode($story) ?>'>
                                <i class="fas fa-book-open me-1"></i>Read Full Story
                            </button>
                            <?php if (!empty($story['linkedin_url'])): ?>
                            <a href="<?= esc($story['linkedin_url']) ?>" target="_blank" class="btn btn-outline-info btn-sm">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <!-- Footer -->
                    <div class="card-footer bg-light border-0 text-center">
                        <small class="text-muted">
                            <i class="fas fa-clock me-1"></i>
                            Published <?= date('M j, Y', strtotime($story['created_at'])) ?>
                        </small>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <?php else: ?>
        <!-- Empty State -->
        <div class="text-center py-5">
            <div class="mb-4">
                <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center" style="width: 120px; height: 120px;">
                    <i class="fas fa-star fa-3x text-muted"></i>
                </div>
            </div>
            <h3 class="text-muted mb-3">No Success Stories Yet</h3>
            <p class="text-muted mb-4">Check back soon for inspiring stories from our beneficiaries.</p>
            <a href="<?= base_url('beneficiaries') ?>" class="btn btn-primary">
                <i class="fas fa-users me-2"></i>Meet Our Students
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Success Story Modal -->
<div class="modal fade" id="storyModal" tabindex="-1" aria-labelledby="storyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="storyModalLabel">
                    <i class="fas fa-star me-2"></i>Success Story
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="storyModalContent">
                <!-- Content populated by JavaScript -->
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h3 class="mb-3">Be Part of Their Success</h3>
                <p class="mb-4">Join us in empowering more students to achieve their dreams and create their own success stories.</p>
                <div class="row g-3 justify-content-center">
                    <div class="col-md-4">
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-light btn-lg w-100">
                            <i class="fas fa-users me-2"></i> Meet Students
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('ngo-works') ?>" class="btn btn-outline-light btn-lg w-100">
                            <i class="fas fa-hands-helping me-2"></i> Our Work
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url() ?>" class="btn btn-outline-light btn-lg w-100">
                            <i class="fas fa-home me-2"></i> Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.hover-lift {
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

.hover-lift:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}

.bg-gradient-primary {
    background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);
}

.card-header {
    border-bottom: none;
}

.card-footer {
    border-top: 1px solid rgba(0,0,0,0.125);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const storyModal = new bootstrap.Modal(document.getElementById('storyModal'));
    const storyModalContent = document.getElementById('storyModalContent');

    document.addEventListener('click', function(e) {
        if (e.target.closest('.read-full-story')) {
            const btn = e.target.closest('.read-full-story');
            const story = JSON.parse(btn.dataset.story);
            const content = generateStoryModalContent(story);
            storyModalContent.innerHTML = content;
            storyModal.show();
        }
    });

    function generateStoryModalContent(story) {
        return `
            <div class="text-center mb-4">
                ${story.image ? `
                    <div class="mb-3">
                        <img src="<?= base_url('writable/uploads/success_stories/') ?>${story.image}" 
                             alt="${story.name}" 
                             class="rounded-circle" 
                             style="width: 100px; height: 100px; object-fit: cover;">
                    </div>
                ` : `
                    <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 100px;">
                        <i class="fas fa-user-tie fa-3x text-primary"></i>
                    </div>
                `}
                <h4 class="mb-1">${story.name}</h4>
                <p class="text-primary fw-bold">${story.current_position}</p>
                <span class="badge bg-success px-3 py-2">
                    <i class="fas fa-star me-1"></i>Success Story
                </span>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <h6 class="text-primary mb-3"><i class="fas fa-briefcase me-2"></i>Professional Info</h6>
                    <div class="mb-3">
                        <strong>Position:</strong><br>
                        <span class="text-muted">${story.current_position}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Company:</strong><br>
                        ${story.company_link ? 
                            `<a href="${story.company_link}" target="_blank" class="text-decoration-none">${story.company}</a>` :
                            `<span class="text-muted">${story.company}</span>`
                        }
                    </div>
                    <div class="mb-3">
                        <strong>Education:</strong><br>
                        <span class="text-muted">${story.education}</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <h6 class="text-primary mb-3"><i class="fas fa-info-circle me-2"></i>Personal Info</h6>
                    <div class="mb-3">
                        <strong>Age:</strong><br>
                        <span class="text-muted">${story.age} years old</span>
                    </div>
                    <div class="mb-3">
                        <strong>Location:</strong><br>
                        <span class="text-muted">${story.city}, ${story.state}</span>
                    </div>
                    ${story.linkedin_url ? `
                        <div class="mb-3">
                            <strong>LinkedIn:</strong><br>
                            <a href="${story.linkedin_url}" target="_blank" class="text-decoration-none">
                                <i class="fab fa-linkedin me-1"></i>View Profile
                            </a>
                        </div>
                    ` : ''}
                </div>
            </div>

            <hr class="my-4">
            
            <div class="mb-4">
                <h6 class="text-primary mb-3"><i class="fas fa-book-open me-2"></i>Success Story</h6>
                <div class="bg-light p-3 rounded">
                    <p class="mb-0" style="line-height: 1.7; font-style: italic;">
                        "${story.story.replace(/\n/g, '<br>')}"
                    </p>
                </div>
            </div>

            ${story.achievements ? `
                <div class="mb-4">
                    <h6 class="text-primary mb-3"><i class="fas fa-trophy me-2"></i>Key Achievements</h6>
                    <div class="bg-warning bg-opacity-10 p-3 rounded border-start border-warning border-4">
                        <p class="mb-0">${story.achievements.replace(/\n/g, '<br>')}</p>
                    </div>
                </div>
            ` : ''}

            <div class="text-center mt-4">
                <small class="text-muted">
                    <i class="fas fa-clock me-1"></i>
                    Published on ${new Date(story.created_at).toLocaleDateString('en-US', { 
                        year: 'numeric', 
                        month: 'long', 
                        day: 'numeric' 
                    })}
                </small>
            </div>
        `;
    }
});
</script>

<?= $this->endSection() ?>
