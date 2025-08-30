
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-pattern"></div>
    <div class="hero-overlay"></div>
    
    <div class="container-fluid">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-6 hero-content">
                <div class="hero-text-wrapper">
                    <!-- Organization Badge -->
                    <div class="org-badge">
                        <div class="badge-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <span class="badge-text">Nayantara Memorial Charitable Trust</span>
                    </div>
                    
                    <!-- Main Headline -->
                    <h1 class="hero-title">
                        Empowering <span class="text-highlight">Dreams</span>
                        <br>Through <span class="text-secondary">Education</span>
                    </h1>
                    
                    <!-- Subtitle -->
                    <p class="hero-subtitle">
                        Transforming lives of underprivileged students across Bihar through 
                        comprehensive educational support, mentorship, and career guidance.
                    </p>
                    
                    <!-- Statistics Row -->
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-number"><?= $student_stats['total'] ?? 0 ?></div>
                            <div class="stat-label">Total Students</div>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <div class="stat-number"><?= $student_stats['active'] ?? 0 ?></div>
                            <div class="stat-label">Active Beneficiaries</div>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <div class="stat-number"><?= $student_stats['graduated'] ?? 0 ?></div>
                            <div class="stat-label">Success Stories</div>
                        </div>
                    </div>
                    
                    <!-- CTA Buttons -->
                    <div class="hero-actions">
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-primary btn-hero">
                            <i class="fas fa-users me-2"></i>
                            Meet Our Students
                        </a>
                        <a href="<?= base_url('success-stories') ?>" class="btn btn-outline-light btn-hero">
                            <i class="fas fa-star me-2"></i>
                            Success Stories
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Visual Column -->
            <div class="col-lg-6 hero-visual">
                <div class="visual-container">
                    <div class="floating-card card-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="card-content">
                            <h6>Quality Education</h6>
                            <p>Comprehensive learning support</p>
                        </div>
                    </div>
                    
                    <div class="floating-card card-2">
                        <div class="card-icon bg-success">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="card-content">
                            <h6>Mentorship</h6>
                            <p>Guidance from industry experts</p>
                        </div>
                    </div>
                    
                    <div class="floating-card card-3">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="card-content">
                            <h6>Career Success</h6>
                            <p>Professional development</p>
                        </div>
                    </div>
                    
                    <div class="floating-card card-4">
                        <div class="card-icon bg-info">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="card-content">
                            <h6>Life Support</h6>
                            <p>Holistic development approach</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="mission-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <div class="section-badge">Our Mission</div>
                <h2 class="section-title">Breaking Barriers, Building Futures</h2>
                <p class="section-description">
                    We believe education is the most powerful weapon to change the world. Our mission is to provide 
                    comprehensive support to deserving students, ensuring they have every opportunity to succeed.
                </p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-scholarship"></i>
                    </div>
                    <h4>Financial Support</h4>
                    <p>Complete educational funding including tuition, books, accommodation, and living expenses to ensure no financial barrier stands in the way of education.</p>
                    <div class="mission-decoration"></div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="mission-card featured">
                    <div class="mission-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h4>Academic Excellence</h4>
                    <p>Providing additional coaching, study materials, and academic support to ensure our students excel in their chosen fields of study.</p>
                    <div class="mission-decoration"></div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h4>Career Development</h4>
                    <p>Professional mentorship, skill development programs, internship opportunities, and job placement assistance for successful career transitions.</p>
                    <div class="mission-decoration"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Students Showcase -->
<?php if (!empty($students)): ?>
<section class="students-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <div class="section-badge">Our Students</div>
                <h2 class="section-title">Brilliant Minds We Support</h2>
                <p class="section-description">
                    Meet some of the exceptional students who are shaping the future with our support and their determination.
                </p>
            </div>
        </div>
        
        <div class="row g-4 mb-5">
            <?php foreach (array_slice($students, 0, 6) as $index => $student): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="student-card">
                        <div class="student-header">
                            <div class="student-avatar">
                                <span><?= strtoupper(substr($student['name'], 0, 2)) ?></span>
                            </div>
                            <div class="student-info">
                                <h5 class="student-name"><?= esc($student['name']) ?></h5>
                                <p class="student-course"><?= esc($student['course']) ?></p>
                            </div>
                            <div class="student-status">
                                <span class="status-badge status-<?= $student['status'] ?>">
                                    <?= ucfirst($student['status']) ?>
                                </span>
                            </div>
                        </div>
                        
                        <div class="student-details">
                            <div class="detail-item">
                                <i class="fas fa-university"></i>
                                <span><?= esc($student['institution']) ?></span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span><?= esc($student['city'] ?? 'India') ?></span>
                            </div>
                            <?php if (!empty($student['linkedin_url'])): ?>
                            <div class="detail-item">
                                <i class="fab fa-linkedin"></i>
                                <a href="<?= esc($student['linkedin_url']) ?>" target="_blank">LinkedIn Profile</a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center">
            <a href="<?= base_url('beneficiaries') ?>" class="btn btn-primary btn-lg">
                <i class="fas fa-users me-2"></i>
                View All Students
                <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Success Stories Preview -->
<?php if (!empty($success_stories)): ?>
<section class="success-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <div class="section-badge">Success Stories</div>
                <h2 class="section-title">Inspiring Journeys of Transformation</h2>
                <p class="section-description">
                    These stories showcase the incredible potential that emerges when talent meets opportunity and determination.
                </p>
            </div>
        </div>
        
        <div class="row g-4 mb-5">
            <?php foreach ($success_stories as $story): ?>
                <div class="col-lg-4">
                    <div class="success-card">
                        <div class="success-header">
                            <div class="success-avatar">
                                <?php if (!empty($story['image'])): ?>
                                    <img src="<?= base_url('uploads/success_stories/' . $story['image']) ?>" alt="<?= esc($story['name']) ?>">
                                <?php else: ?>
                                    <span><?= strtoupper(substr($story['name'], 0, 2)) ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="success-info">
                                <h5 class="success-name"><?= esc($story['name']) ?></h5>
                                <p class="success-position"><?= esc($story['current_position']) ?></p>
                                <p class="success-company"><?= esc($story['company']) ?></p>
                            </div>
                        </div>
                        
                        <div class="success-story">
                            <p><?= esc(substr(strip_tags($story['story']), 0, 150)) ?>...</p>
                        </div>
                        
                        <div class="success-footer">
                            <span class="success-age">Age: <?= esc($story['age']) ?></span>
                            <span class="success-education"><?= esc($story['education']) ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center">
            <a href="<?= base_url('success-stories') ?>" class="btn btn-warning btn-lg">
                <i class="fas fa-star me-2"></i>
                Read All Success Stories
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Call to Action -->
<section class="cta-section">
    <div class="cta-pattern"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="cta-content">
                    <h2 class="cta-title">Be Part of the Change</h2>
                    <p class="cta-description">
                        Every contribution creates ripples of positive change. Help us empower more students 
                        to achieve their dreams and build a brighter future for our society.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 text-end">
                <div class="cta-actions">
                    <a href="#" class="btn btn-light btn-lg me-3">
                        <i class="fas fa-heart me-2"></i>
                        Donate Now
                    </a>
                    <a href="#" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-hands-helping me-2"></i>
                        Volunteer
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Import Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap');

/* CSS Variables */
:root {
    --primary-color: #2563eb;
    --secondary-color: #f59e0b;
    --success-color: #10b981;
    --warning-color: #f59e0b;
    --info-color: #06b6d4;
    --dark-color: #1f2937;
    --light-color: #f8fafc;
    --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --gradient-secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    --gradient-success: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    --font-primary: 'Poppins', sans-serif;
    --font-display: 'Playfair Display', serif;
    --font-body: 'Inter', sans-serif;
    --shadow-soft: 0 10px 40px rgba(0,0,0,0.1);
    --shadow-medium: 0 20px 60px rgba(0,0,0,0.15);
    --border-radius: 20px;
}

/* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: var(--font-body);
    line-height: 1.6;
    color: var(--dark-color);
}

/* Hero Section */
.hero-section {
    position: relative;
    min-height: 100vh;
    background: var(--gradient-primary);
    overflow: hidden;
    display: flex;
    align-items: center;
}

.hero-pattern {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='4'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    z-index: 1;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.3);
    z-index: 2;
}

.hero-content {
    position: relative;
    z-index: 3;
    padding: 80px 40px;
}

.hero-text-wrapper {
    max-width: 600px;
}

.org-badge {
    display: inline-flex;
    align-items: center;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 50px;
    padding: 12px 24px;
    margin-bottom: 30px;
    color: white;
}

.badge-icon {
    width: 35px;
    height: 35px;
    background: var(--secondary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 12px;
    font-size: 16px;
    color: white;
}

.badge-text {
    font-family: var(--font-primary);
    font-weight: 500;
    font-size: 14px;
}

.hero-title {
    font-family: var(--font-display);
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.1;
    color: white;
    margin-bottom: 25px;
}

.text-highlight {
    background: linear-gradient(135deg, #fbbf24, #f59e0b);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.text-secondary {
    color: #a7f3d0;
}

.hero-subtitle {
    font-family: var(--font-body);
    font-size: 1.2rem;
    font-weight: 400;
    color: rgba(255,255,255,0.9);
    margin-bottom: 40px;
    line-height: 1.7;
}

.hero-stats {
    display: flex;
    align-items: center;
    margin-bottom: 40px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 15px;
    padding: 25px;
}

.stat-item {
    text-align: center;
    color: white;
    flex: 1;
}

.stat-number {
    font-family: var(--font-primary);
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--secondary-color);
    margin-bottom: 5px;
}

.stat-label {
    font-size: 0.9rem;
    font-weight: 500;
    opacity: 0.9;
}

.stat-divider {
    width: 1px;
    height: 40px;
    background: rgba(255,255,255,0.3);
    margin: 0 20px;
}

.hero-actions {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.btn-hero {
    padding: 15px 30px;
    font-family: var(--font-primary);
    font-weight: 600;
    font-size: 16px;
    border-radius: 12px;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.btn-primary.btn-hero {
    background: var(--secondary-color);
    color: white;
    box-shadow: 0 8px 25px rgba(245, 158, 11, 0.3);
}

.btn-primary.btn-hero:hover {
    background: #d97706;
    transform: translateY(-2px);
    box-shadow: 0 12px 35px rgba(245, 158, 11, 0.4);
}

.btn-outline-light.btn-hero {
    background: transparent;
    border: 2px solid rgba(255,255,255,0.8);
    color: white;
}

.btn-outline-light.btn-hero:hover {
    background: rgba(255,255,255,0.1);
    border-color: white;
    transform: translateY(-2px);
}

/* Hero Visual */
.hero-visual {
    position: relative;
    z-index: 3;
    padding: 40px;
}

.visual-container {
    position: relative;
    width: 100%;
    height: 600px;
}

.floating-card {
    position: absolute;
    background: white;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
    display: flex;
    align-items: center;
    gap: 15px;
    min-width: 250px;
}

.card-1 { top: 20%; left: 10%; }
.card-2 { top: 10%; right: 0%; }
.card-3 { bottom: 30%; left: 0%; }
.card-4 { bottom: 10%; right: 10%; }

.card-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    flex-shrink: 0;
}

.card-content h6 {
    font-family: var(--font-primary);
    font-weight: 600;
    font-size: 16px;
    margin-bottom: 5px;
    color: var(--dark-color);
}

.card-content p {
    font-size: 14px;
    color: #6b7280;
    margin: 0;
}

/* Section Styles */
.mission-section, .students-section, .success-section {
    padding: 100px 0;
    background: white;
}

.students-section {
    background: var(--light-color);
}

.section-badge {
    display: inline-block;
    background: var(--gradient-primary);
    color: white;
    padding: 8px 20px;
    border-radius: 25px;
    font-family: var(--font-primary);
    font-weight: 500;
    font-size: 14px;
    margin-bottom: 20px;
}

.section-title {
    font-family: var(--font-display);
    font-size: 2.8rem;
    font-weight: 600;
    color: var(--dark-color);
    margin-bottom: 20px;
    line-height: 1.2;
}

.section-description {
    font-family: var(--font-body);
    font-size: 1.1rem;
    color: #6b7280;
    line-height: 1.7;
    max-width: 600px;
    margin: 0 auto;
}

/* Mission Cards */
.mission-card {
    background: white;
    border-radius: var(--border-radius);
    padding: 40px 30px;
    text-align: center;
    box-shadow: var(--shadow-soft);
    border: 1px solid #e5e7eb;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    height: 100%;
}

.mission-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-medium);
}

.mission-card.featured {
    background: var(--gradient-primary);
    color: white;
    border: none;
}

.mission-card.featured .mission-icon {
    background: rgba(255,255,255,0.2);
    color: white;
}

.mission-icon {
    width: 80px;
    height: 80px;
    background: var(--gradient-success);
    color: white;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    margin: 0 auto 25px;
}

.mission-card h4 {
    font-family: var(--font-primary);
    font-weight: 600;
    font-size: 1.3rem;
    margin-bottom: 15px;
    color: inherit;
}

.mission-card p {
    font-family: var(--font-body);
    color: inherit;
    opacity: 0.8;
    line-height: 1.6;
}

.mission-decoration {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 60px;
    height: 60px;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23f59e0b' fill-opacity='0.1'%3E%3Cpath d='M36 30c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

/* Student Cards */
.student-card {
    background: white;
    border-radius: var(--border-radius);
    padding: 25px;
    box-shadow: var(--shadow-soft);
    border: 1px solid #e5e7eb;
    transition: all 0.3s ease;
    height: 100%;
}

.student-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.student-header {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    position: relative;
}

.student-avatar {
    width: 60px;
    height: 60px;
    background: var(--gradient-primary);
    color: white;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--font-primary);
    font-weight: 600;
    font-size: 18px;
    margin-right: 15px;
    flex-shrink: 0;
}

.student-info {
    flex: 1;
}

.student-name {
    font-family: var(--font-primary);
    font-weight: 600;
    font-size: 1.1rem;
    color: var(--dark-color);
    margin-bottom: 5px;
}

.student-course {
    font-size: 0.9rem;
    color: #6b7280;
    margin: 0;
}

.student-status {
    position: absolute;
    top: 0;
    right: 0;
}

.status-badge {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
    text-transform: capitalize;
}

.status-active {
    background: #dcfce7;
    color: #16a34a;
}

.student-details {
    space-y: 10px;
}

.detail-item {
    display: flex;
    align-items: center;
    margin-bottom: 8px;
    font-size: 0.9rem;
    color: #6b7280;
}

.detail-item i {
    width: 20px;
    margin-right: 10px;
    color: var(--primary-color);
}

.detail-item a {
    color: var(--primary-color);
    text-decoration: none;
}

.detail-item a:hover {
    text-decoration: underline;
}

/* Success Cards */
.success-card {
    background: white;
    border-radius: var(--border-radius);
    padding: 30px;
    box-shadow: var(--shadow-soft);
    border: 1px solid #e5e7eb;
    transition: all 0.3s ease;
    height: 100%;
}

.success-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.success-header {
    text-align: center;
    margin-bottom: 20px;
}

.success-avatar {
    width: 80px;
    height: 80px;
    border-radius: 20px;
    margin: 0 auto 15px;
    overflow: hidden;
    background: var(--gradient-secondary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-family: var(--font-primary);
    font-weight: 600;
    font-size: 24px;
}

.success-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.success-name {
    font-family: var(--font-primary);
    font-weight: 600;
    font-size: 1.2rem;
    color: var(--dark-color);
    margin-bottom: 8px;
}

.success-position {
    font-weight: 500;
    color: var(--primary-color);
    margin-bottom: 5px;
}

.success-company {
    font-size: 0.9rem;
    color: #6b7280;
    margin: 0;
}

.success-story {
    margin-bottom: 20px;
}

.success-story p {
    color: #4b5563;
    line-height: 1.6;
    font-style: italic;
}

.success-footer {
    display: flex;
    justify-content: space-between;
    padding-top: 15px;
    border-top: 1px solid #e5e7eb;
    font-size: 0.85rem;
    color: #6b7280;
}

/* CTA Section */
.cta-section {
    position: relative;
    background: var(--gradient-primary);
    padding: 80px 0;
    color: white;
    overflow: hidden;
}

.cta-pattern {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpolygon points='50 0 60 40 100 50 60 60 50 100 40 60 0 50 40 40'/%3E%3C/g%3E%3C/svg%3E");
}

.cta-title {
    font-family: var(--font-display);
    font-size: 2.5rem;
    font-weight: 600;
    margin-bottom: 15px;
}

.cta-description {
    font-family: var(--font-body);
    font-size: 1.1rem;
    opacity: 0.9;
    line-height: 1.6;
}

.cta-actions {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

/* Responsive Design */
@media (max-width: 992px) {
    .hero-title {
        font-size: 2.8rem;
    }
    
    .hero-stats {
        flex-direction: column;
        gap: 20px;
    }
    
    .stat-divider {
        width: 100%;
        height: 1px;
        margin: 0;
    }
    
    .visual-container {
        height: 400px;
    }
    
    .floating-card {
        position: relative;
        margin-bottom: 20px;
        min-width: auto;
        left: auto !important;
        right: auto !important;
        top: auto !important;
        bottom: auto !important;
    }
    
    .section-title {
        font-size: 2.2rem;
    }
    
    .cta-actions {
        justify-content: center;
        margin-top: 30px;
    }
}

@media (max-width: 768px) {
    .hero-content {
        padding: 40px 20px;
    }
    
    .hero-title {
        font-size: 2.2rem;
    }
    
    .hero-actions {
        flex-direction: column;
    }
    
    .btn-hero {
        width: 100%;
        text-align: center;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .mission-card, .student-card, .success-card {
        margin-bottom: 30px;
    }
}

/* Additional Professional Touches */
.btn {
    font-family: var(--font-primary);
    font-weight: 500;
    border-radius: 10px;
    padding: 12px 25px;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.btn-primary {
    background: var(--primary-color);
    color: white;
    box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
}

.btn-primary:hover {
    background: #1d4ed8;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
    color: white;
}

.btn-warning {
    background: var(--warning-color);
    color: white;
    box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
}

.btn-warning:hover {
    background: #d97706;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);
    color: white;
}

.btn-lg {
    padding: 15px 30px;
    font-size: 1.1rem;
}

/* Smooth scrolling */
html {
    scroll-behavior: smooth;
}

/* Focus states for accessibility */
.btn:focus,
.detail-item a:focus {
    outline: 2px solid var(--secondary-color);
    outline-offset: 2px;
}
</style>

<?= $this->endSection() ?>
