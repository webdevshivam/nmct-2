<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section with Image Gallery -->
<section class="hero-section position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center min-vh-100 py-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="hero-content">
                    <div class="d-flex align-items-center justify-content-center mb-4">
            <img src="<?= base_url('assets/images/bharatpur-logo.png') ?>" alt="Bharatpur Foundation Logo" style="height: 80px; margin-right: 20px;" onerror="this.style.display='none'">
            <h1 class="font-display">Welcome to Bharatpur Foundation</h1>
        </div>
        <p class="lead">Empowering communities through education, healthcare, and sustainable development. Building a stronger foundation for tomorrow's leaders.</p>
                    <div class="hero-buttons d-flex flex-wrap gap-3">
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-primary btn-lg px-4 py-3">
                            <i class="fas fa-graduation-cap me-2"></i> Meet Our Beneficiaries
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
                                     alt="Students studying" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="hero-image-card rounded-3 overflow-hidden shadow-lg">
                                <img src="https://images.unsplash.com/photo-1544717297-fa95b6ee9643?w=400&h=300&fit=crop" 
                                     alt="Graduate celebration" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="hero-image-card rounded-3 overflow-hidden shadow-lg">
                                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=300&h=200&fit=crop" 
                                     alt="Learning together" class="img-fluid w-100" style="height: 130px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="hero-image-card rounded-3 overflow-hidden shadow-lg">
                                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=300&h=200&fit=crop" 
                                     alt="Books and learning" class="img-fluid w-100" style="height: 130px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="hero-image-card rounded-3 overflow-hidden shadow-lg">
                                <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=300&h=200&fit=crop" 
                                     alt="Student success" class="img-fluid w-100" style="height: 130px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="section-padding bg-soft">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="about-image-container position-relative">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&h=600&fit=crop" 
                         alt="Nayantar Memorial Trust Founder" class="img-fluid rounded-4 shadow-lg">
                    <div class="position-absolute bottom-0 start-0 bg-white p-4 rounded-3 shadow-lg m-4">
                        <h6 class="text-primary fw-bold mb-1">5+ Years</h6>
                        <small class="text-muted">Of Dedicated Service</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">About Us</span>
                    <h2 class="section-title font-display mb-4">Building Brighter Futures Through Education</h2>
                    <p class="lead mb-4">Nayantar Memorial Charitable Trust was founded with a vision to break the cycle of poverty through quality education and comprehensive student support.</p>
                    <p class="text-muted mb-4">We believe that every student, regardless of their economic background, deserves access to quality education and the opportunity to pursue their dreams. Our comprehensive approach includes financial assistance, mentorship, career guidance, and skill development programs.</p>

                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-primary text-white rounded-3 p-3 me-3">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Excellence</h6>
                                    <small class="text-muted">in Education Support</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-success text-white rounded-3 p-3 me-3">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Community</h6>
                                    <small class="text-muted">Focused Approach</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-primary">Learn More</a>
                        <a href="<?= base_url('ngo-works') ?>" class="btn btn-outline-primary">Our Work</a>
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
                <h2 class="section-title text-white font-display mb-4">Our Impact in Numbers</h2>
                <p class="lead text-white-50">See how we're making a difference in the lives of students across our community</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-users fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2"><?= $total_beneficiaries ?>+</h3>
                    <h5 class="fw-semibold mb-2">Total Beneficiaries</h5>
                    <p class="text-white-50 mb-0">Students supported through our programs</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-user-graduate fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2"><?= $active_beneficiaries ?>+</h3>
                    <h5 class="fw-semibold mb-2">Active Students</h5>
                    <p class="text-white-50 mb-0">Currently pursuing education</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-trophy fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2"><?= count($success_stories) ?>+</h3>
                    <h5 class="fw-semibold mb-2">Success Stories</h5>
                    <p class="text-white-50 mb-0">Graduates who achieved dreams</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-handshake fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2">5+</h3>
                    <h5 class="fw-semibold mb-2">Years of Service</h5>
                    <p class="text-white-50 mb-0">Dedicated years of service</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section class="section-padding bg-soft">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">Our Programs</span>
                <h2 class="section-title font-display mb-4">Comprehensive Support Programs</h2>
                <p class="lead text-muted">We offer a range of programs designed to support students throughout their educational journey</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg h-100 program-card" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                    <div class="card-body p-5">
                        <div class="icon-box bg-white text-primary rounded-3 p-3 mb-4" style="width: 70px; height: 70px;">
                            <i class="fas fa-graduation-cap fs-3"></i>
                        </div>
                        <h4 class="card-title font-display mb-3">Scholarship Programs</h4>
                        <p class="card-text mb-4">Comprehensive financial assistance covering tuition fees, books, and other educational expenses to ensure no deserving student is left behind due to financial constraints.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Full tuition coverage</li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Books and materials</li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Monthly stipends</li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Examination fees</li>
                        </ul>
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-light text-primary fw-semibold">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg h-100 program-card" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white;">
                    <div class="card-body p-5">
                        <div class="icon-box bg-white text-primary rounded-3 p-3 mb-4" style="width: 70px; height: 70px;">
                            <i class="fas fa-compass fs-3"></i>
                        </div>
                        <h4 class="card-title font-display mb-3">Career Guidance</h4>
                        <p class="card-text mb-4">Professional mentorship and career counseling to help students make informed decisions about their future and develop essential skills for success.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check me-2"></i> One-on-one mentoring</li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Industry workshops</li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Resume building</li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> Interview preparation</li>
                        </ul>
                        <a href="<?= base_url('success-stories') ?>" class="btn btn-light text-primary fw-semibold">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How We Work Section -->
<section class="section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">Our Process</span>
                <h2 class="section-title font-display mb-4">How We Transform Lives</h2>
                <p class="lead text-muted">Our systematic approach to empowering students through education</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-lg h-100 text-center process-card">
                    <div class="card-body p-5">
                        <div class="process-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" 
                             style="width: 70px; height: 70px; font-size: 1.5rem; font-weight: bold;">1</div>
                        <div class="icon-box bg-primary-light text-primary rounded-3 p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                            <i class="fas fa-user-plus fs-4"></i>
                        </div>
                        <h5 class="card-title font-display mb-3">Be a Donor</h5>
                        <p class="card-text text-muted">Join our community of supporters and make a direct impact on a student's educational journey through your generous contributions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-lg h-100 text-center process-card">
                    <div class="card-body p-5">
                        <div class="process-number bg-success text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" 
                             style="width: 70px; height: 70px; font-size: 1.5rem; font-weight: bold;">2</div>
                        <div class="icon-box bg-success-light text-success rounded-3 p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                            <i class="fas fa-hands-helping fs-4"></i>
                        </div>
                        <h5 class="card-title font-display mb-3">Be a Volunteer</h5>
                        <p class="card-text text-muted">Share your time and expertise to mentor students, conduct workshops, and contribute to their personal and professional development.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-lg h-100 text-center process-card">
                    <div class="card-body p-5">
                        <div class="process-number bg-warning text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" 
                             style="width: 70px; height: 70px; font-size: 1.5rem; font-weight: bold;">3</div>
                        <div class="icon-box bg-warning-light text-warning rounded-3 p-3 mb-3 mx-auto" style="width: 60px; height: 60px;">
                            <i class="fas fa-star fs-4"></i>
                        </div>
                        <h5 class="card-title font-display mb-3">Be a Mentor</h5>
                        <p class="card-text text-muted">Guide and inspire students with your professional experience, helping them navigate challenges and achieve their career goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<?php if (!empty($success_stories)): ?>
<section class="section-padding bg-soft">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">Success Stories</span>
                <h2 class="section-title font-display mb-4">Inspiring Success Stories</h2>
                <p class="lead text-muted">Meet some of our incredible graduates who have transformed their lives through education</p>
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
                                <i class="fas fa-trophy me-1"></i> Graduate
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

<!-- News Section -->
<section class="section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">Latest News</span>
                <h2 class="section-title font-display mb-4">Updates from Our Trust</h2>
                <p class="lead text-muted">Stay updated with our latest activities and achievements</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100 news-card">
                    <div class="card-img-top position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=400&h=250&fit=crop" 
                             alt="New scholarship program" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-primary px-3 py-2">New Program</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title font-display mb-3">New Scholarship Program Launched</h5>
                        <p class="card-text text-muted mb-3">We're excited to announce our expanded scholarship program, now covering technical education and skill development courses.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                            <small class="text-muted">Jan 15, 2025</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100 news-card">
                    <div class="card-img-top position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=400&h=250&fit=crop" 
                             alt="Partnership announcement" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-success px-3 py-2">Partnership</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title font-display mb-3">Partnership with Local Universities</h5>
                        <p class="card-text text-muted mb-3">Strategic partnerships established with leading universities to provide better educational opportunities and career guidance.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                            <small class="text-muted">Jan 10, 2025</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100 news-card">
                    <div class="card-img-top position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=400&h=250&fit=crop" 
                             alt="Annual report" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-warning px-3 py-2">Report</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title font-display mb-3">Annual Impact Report 2024</h5>
                        <p class="card-text text-muted mb-3">Our comprehensive annual report showcasing the achievements and impact of our programs throughout 2024.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                            <small class="text-muted">Jan 5, 2025</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section-padding" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">Testimonials</span>
                <h2 class="section-title font-display mb-4">What Our Community Says</h2>
                <p class="lead text-muted">Hear from our beneficiaries, donors, and partners about their experience with our trust</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg testimonial-card bg-white p-4">
                    <div class="card-body">
                        <div class="quote-icon mb-3">
                            <i class="fas fa-quote-left fa-2x text-primary"></i>
                        </div>
                        <p class="card-text fs-5 mb-4 text-muted">"The support I received from Nayantar Trust changed my entire life. From financial assistance to career guidance, they were with me every step of the way. Today, I'm proud to be working as a software engineer and giving back to the community."</p>
                        <div class="d-flex align-items-center">
                            <div class="avatar-circle bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" 
                                 style="width: 50px; height: 50px;">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">Priya Sharma</h6>
                                <small class="text-muted">Software Engineer, TCS</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg testimonial-card bg-white p-4">
                    <div class="card-body">
                        <div class="quote-icon mb-3">
                            <i class="fas fa-quote-left fa-2x text-success"></i>
                        </div>
                        <p class="card-text fs-5 mb-4 text-muted">"Not just financial support, but the mentorship and emotional support I received made me who I am today. The trust believed in me when no one else did. Forever grateful to this amazing organization and their dedicated team."</p>
                        <div class="d-flex align-items-center">
                            <div class="avatar-circle bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" 
                                 style="width: 50px; height: 50px;">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">Rajesh Kumar</h6>
                                <small class="text-muted">Doctor, Apollo Hospital</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding" style="background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%); color: white;">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="font-display mb-4 display-5">Join Our Mission to Transform Lives</h2>
                <p class="lead mb-5 fs-4">Together, we can create more success stories and build a brighter future for deserving students. Every contribution, no matter how small, makes a significant difference.</p>
                <div class="row justify-content-center g-3">
                    <div class="col-md-4">
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-light btn-lg w-100 py-3">
                            <i class="fas fa-hands-helping me-2"></i> Support Our Cause
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('success-stories') ?>" class="btn btn-outline-light btn-lg w-100 py-3">
                            <i class="fas fa-book-open me-2"></i> Read More Stories
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('ngo-works') ?>" class="btn btn-outline-light btn-lg w-100 py-3">
                            <i class="fas fa-users me-2"></i> Join as Volunteer
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>