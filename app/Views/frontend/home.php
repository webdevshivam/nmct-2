
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>
<?php $lang = session()->get('language') ?? 'en'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="animate-fade-in-up">
                    <h1 class="hero-title font-display">
                        <?= $lang === 'hi' 
                            ? 'भरतपुर फाउंडेशन'
                            : 'Bharatpur Foundation' 
                        ?>
                    </h1>
                    <p class="hero-subtitle">
                        <?= $lang === 'hi'
                            ? 'शिक्षा के माध्यम से जीवन को बदलना, छात्रों को सशक्त बनाना और एक उज्ज्वल भविष्य का निर्माण करना।'
                            : 'Transforming lives through education, empowering students and building a brighter future for all.'
                        ?>
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-primary btn-lg">
                            <i class="fas fa-users"></i>
                            <?= $lang === 'hi' ? 'लाभार्थी देखें' : 'View Beneficiaries' ?>
                        </a>
                        <a href="<?= base_url('success-stories') ?>" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-trophy"></i>
                            <?= $lang === 'hi' ? 'सफलता की कहानियां' : 'Success Stories' ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="stats-card">
                                <span class="stats-number"><?= $total_beneficiaries ?? 0 ?></span>
                                <div class="stats-label">
                                    <?= $lang === 'hi' ? 'कुल लाभार्थी' : 'Total Beneficiaries' ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stats-card">
                                <span class="stats-number"><?= $active_beneficiaries ?? 0 ?></span>
                                <div class="stats-label">
                                    <?= $lang === 'hi' ? 'सक्रिय छात्र' : 'Active Students' ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stats-card">
                                <span class="stats-number"><?= count($success_stories ?? []) ?></span>
                                <div class="stats-label">
                                    <?= $lang === 'hi' ? 'सफलता की कहानियां' : 'Success Stories' ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stats-card">
                                <span class="stats-number">10+</span>
                                <div class="stats-label">
                                    <?= $lang === 'hi' ? 'वर्षों का अनुभव' : 'Years Experience' ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Mission Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title font-heading">
                <?= $lang === 'hi' ? 'हमारा मिशन' : 'Our Mission' ?>
            </h2>
            <p class="section-subtitle">
                <?= $lang === 'hi'
                    ? 'हम शिक्षा की शक्ति में विश्वास करते हैं और प्रत्येक छात्र के सपनों को साकार करने में सहायता करते हैं।'
                    : 'We believe in the power of education and help every student achieve their dreams through dedicated support and guidance.'
                ?>
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="modern-card p-4 text-center h-100">
                    <div class="feature-icon primary mx-auto">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4 class="font-heading mb-3">
                        <?= $lang === 'hi' ? 'शिक्षा सहायता' : 'Education Support' ?>
                    </h4>
                    <p class="text-muted">
                        <?= $lang === 'hi'
                            ? 'छात्रों को उच्च शिक्षा प्राप्त करने के लिए वित्तीय सहायता और मार्गदर्शन प्रदान करते हैं।'
                            : 'Providing financial assistance and guidance to students for pursuing higher education and achieving their academic goals.'
                        ?>
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="modern-card p-4 text-center h-100">
                    <div class="feature-icon secondary mx-auto">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h4 class="font-heading mb-3">
                        <?= $lang === 'hi' ? 'समुदायिक विकास' : 'Community Development' ?>
                    </h4>
                    <p class="text-muted">
                        <?= $lang === 'hi'
                            ? 'समुदाय के कल्याण के लिए विभिन्न कार्यक्रमों का संचालन और सामाजिक विकास में योगदान।'
                            : 'Running various programs for community welfare and contributing to social development through education initiatives.'
                        ?>
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="modern-card p-4 text-center h-100">
                    <div class="feature-icon accent mx-auto">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4 class="font-heading mb-3">
                        <?= $lang === 'hi' ? 'करियर मार्गदर्शन' : 'Career Guidance' ?>
                    </h4>
                    <p class="text-muted">
                        <?= $lang === 'hi'
                            ? 'छात्रों को उनके करियर में सही दिशा दिखाना और व्यावसायिक विकास में सहायता करना।'
                            : 'Guiding students in their career paths and helping them with professional development and job placement.'
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<?php if (!empty($success_stories)): ?>
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title font-heading">
                <?= $lang === 'hi' ? 'सफलता की कहानियां' : 'Success Stories' ?>
            </h2>
            <p class="section-subtitle">
                <?= $lang === 'hi'
                    ? 'हमारे छात्रों की प्रेरणादायक यात्राएं और उनकी उपलब्धियां जो दूसरों के लिए प्रेरणा का स्रोत हैं।'
                    : 'Inspiring journeys of our students and their achievements that serve as motivation for others to pursue their dreams.'
                ?>
            </p>
        </div>
        
        <div class="row g-4">
            <?php foreach (array_slice($success_stories, 0, 3) as $story): ?>
            <div class="col-lg-4">
                <div class="modern-card overflow-hidden h-100">
                    <?php if (!empty($story['image'])): ?>
                    <div class="position-relative" style="height: 250px; overflow: hidden;">
                        <img src="<?= base_url('uploads/success_stories/' . $story['image']) ?>" 
                             alt="<?= esc($story['title']) ?>" 
                             class="w-100 h-100" style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 w-100 h-100" 
                             style="background: linear-gradient(45deg, rgba(102, 126, 234, 0.8), rgba(118, 75, 162, 0.8));"></div>
                    </div>
                    <?php endif; ?>
                    
                    <div class="p-4">
                        <h5 class="font-heading mb-3">
                            <?= esc($story['title']) ?>
                        </h5>
                        <p class="text-muted mb-4">
                            <?= character_limiter(strip_tags($story['content']), 120) ?>
                        </p>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-arrow-right me-2"></i>
                            <?= $lang === 'hi' ? 'और पढ़ें' : 'Read More' ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-5">
            <a href="<?= base_url('success-stories') ?>" class="btn btn-primary btn-lg">
                <i class="fas fa-trophy me-2"></i>
                <?= $lang === 'hi' ? 'सभी कहानियां देखें' : 'View All Stories' ?>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Call to Action Section -->
<section class="section-padding" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
    <div class="container text-center">
        <h2 class="font-heading mb-4" style="color: white;">
            <?= $lang === 'hi' ? 'हमारे साथ जुड़ें' : 'Join Our Mission' ?>
        </h2>
        <p class="lead mb-5" style="opacity: 0.9; max-width: 600px; margin: 0 auto;">
            <?= $lang === 'hi'
                ? 'शिक्षा के माध्यम से समाज को बेहतर बनाने के हमारे मिशन में शामिल हों और बदलाव का हिस्सा बनें।'
                : 'Join our mission to make society better through education and be part of the positive change in students\' lives.'
            ?>
        </p>
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="<?= base_url('beneficiaries') ?>" class="btn btn-outline-light btn-lg">
                <i class="fas fa-users me-2"></i>
                <?= $lang === 'hi' ? 'छात्रों से मिलें' : 'Meet Our Students' ?>
            </a>
            <a href="<?= base_url('ngo-works') ?>" class="btn btn-outline-light btn-lg">
                <i class="fas fa-hands-helping me-2"></i>
                <?= $lang === 'hi' ? 'हमारे कार्य देखें' : 'See Our Work' ?>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
