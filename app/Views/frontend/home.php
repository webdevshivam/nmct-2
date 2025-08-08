<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Enhanced Hero Section with Optimized Height -->
<section class="hero-section-enhanced d-flex align-items-center"
    style="background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.4) 0%, rgba(165, 102, 28, 0.2) 50%, rgba(0, 0, 0, 0.4) 100%), url('<?= base_url('assets/images/bharatpur-hero-image.png') ?>'); background-size: cover; background-position: center center; background-attachment: fixed; min-height: 70vh;">

    <!-- Traditional Indian Border -->
    <div class="traditional-border"></div>

    <!-- Background Overlay -->
    <div class="hero-bg-overlay position-absolute w-100 h-100"></div>

    <!-- Indian Decorative Elements -->
    <div class="hero-decorative-elements">
        <div class="mandala-element mandala-1">❋</div>
        <div class="mandala-element mandala-2">✧</div>
        <div class="mandala-element mandala-3">❃</div>
        <div class="paisley-element paisley-1">🪷</div>
        <div class="paisley-element paisley-2">🕉️</div>
        <div class="paisley-element paisley-3">🪔</div>
        <div class="hindi-decorative hindi-1">ॐ</div>
        <div class="hindi-decorative hindi-2">श्री</div>
        <div class="hindi-decorative hindi-3">गणेश</div>
    </div>

    <!-- Floating Indian Elements -->
    <div class="floating-elements position-absolute w-100 h-100">
        <div class="float-element float-element-1">🌺</div>
        <div class="float-element float-element-2">🪔</div>
        <div class="float-element float-element-3">🙏</div>
        <div class="float-element float-element-4">⚛️</div>
        <div class="float-element float-element-5">🕉️</div>
        <div class="float-element float-element-6">🪷</div>
    </div>

    <div class="container position-relative" style="z-index: 10;">
        <div class="row align-items-center justify-content-center" style="min-height: 60vh;">
            <div class="col-lg-10 text-center">
                <div class="hero-content-enhanced">
                    <!-- Logo Section -->
                    <div class="mb-4">
                        <div class="logo-container mx-auto mb-3">
                            <img src="<?= base_url('assets/images/bharatpur-logo.png') ?>" alt="Bharatpur Foundation Logo" class="bharatpur-logo-hero">
                        </div>
                    </div>

                    <!-- Main Title -->
                    <h1 class="hero-title font-display mb-3">
                        <span class="lang-en">Bharatpur Foundation</span>
                        <span class="lang-hi d-none">भरतपुर फाउंडेशन</span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="hero-subtitle mb-3">
                        <span class="lang-en">Empowering Communities Through Education</span>
                        <span class="lang-hi d-none">शिक्षा के माध्यम से समुदायों को सशक्त बनाना</span>
                    </p>

                    <h2 class="hero-tagline mb-4">
                        <span class="lang-en">
                            Transforming <span class="text-gradient-hero">Students</span> into
                            <span class="text-gradient-hero">Professionals</span>
                        </span>
                        <span class="lang-hi d-none">
                            <span class="text-gradient-hero">छात्रों</span> को 
                            <span class="text-gradient-hero">पेशेवरों</span> में बदलना
                        </span>
                    </h2>

                    <!-- Simple Description -->
                    <p class="hero-description mb-4">
                        <span class="lang-en">Beyond financial aid - we create careers through education, mentoring, and professional development.</span>
                        <span class="lang-hi d-none">वित्तीय सहायता से कहीं अधिक - हम शिक्षा, मार्गदर्शन और व्यावसायिक विकास के माध्यम से करियर बनाते हैं।</span>
                    </p>

                    <!-- Call to Action Buttons -->
                    <div class="hero-actions d-flex flex-wrap justify-content-center gap-3 mt-4">
                        <a href="<?= base_url('ngo-works') ?>" class="btn btn-hero-primary btn-lg">
                            <span class="lang-en">Our Approach</span>
                            <span class="lang-hi d-none">हमारा दृष्टिकोण</span>
                        </a>
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-hero-outline btn-lg">
                            <span class="lang-en">Support Students</span>
                            <span class="lang-hi d-none">छात्रों की सहायता करें</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Wave -->
    <div class="hero-wave">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="currentColor"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="currentColor"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="currentColor"></path>
        </svg>
    </div>
</section>

<!-- Three Pillars Section -->
<section class="section-padding bg-soft">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">
                    <span class="lang-en">Our Three Pillars</span>
                    <span class="lang-hi d-none">हमारे तीन स्तंभ</span>
                </span>
                <h2 class="section-title font-display mb-4">
                    <span class="lang-en">Complete Transformation Journey</span>
                    <span class="lang-hi d-none">संपूर्ण परिवर्तन यात्रा</span>
                </h2>
                <p class="lead text-muted">
                    <span class="lang-en">The first NGO to offer comprehensive empowerment through our unique three-pillar approach</span>
                    <span class="lang-hi d-none">हमारे अनूठे तीन-स्तंभीय दृष्टिकोण के माध्यम से व्यापक सशक्तिकरण प्रदान करने वाला पहला एनजीओ</span>
                </p>
            </div>
        </div>

        <!-- Journey Steps -->
        <div class="journey-steps mb-5">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="journey-step">
                        <div class="step-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h6 class="lang-en">Quality Education</h6>
                        <h6 class="lang-hi d-none">गुणवत्तापूर्ण शिक्षा</h6>
                        <small class="lang-en">Complete academic support with industry-relevant curriculum</small>
                        <small class="lang-hi d-none">उद्योग-प्रासंगिक पाठ्यक्रम के साथ संपूर्ण शैक्षणिक सहायता</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="journey-step">
                        <div class="step-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h6 class="lang-en">Personal Mentoring</h6>
                        <h6 class="lang-hi d-none">व्यक्तिगत मार्गदर्शन</h6>
                        <small class="lang-en">One-on-one guidance from industry professionals</small>
                        <small class="lang-hi d-none">उद्योग पेशेवरों से एक-पर-एक मार्गदर्शन</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="journey-step">
                        <div class="step-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h6 class="lang-en">Career Development</h6>
                        <h6 class="lang-hi d-none">करियर विकास</h6>
                        <small class="lang-en">Job placement and continuous career support</small>
                        <small class="lang-hi d-none">नौकरी प्लेसमेंट और निरंतर करियर सहायता</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100 pillar-card" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 20px;">
                    <div class="card-body p-5 text-center">
                        <div class="pillar-icon mb-4">
                            <i class="fas fa-graduation-cap fa-4x"></i>
                        </div>
                        <h3 class="card-title font-display mb-4">
                            <span class="lang-en">Quality Education</span>
                            <span class="lang-hi d-none">गुणवत्तापूर्ण शिक्षा</span>
                        </h3>
                        <p class="card-text mb-4">
                            <span class="lang-en">Complete academic support with modern learning tools and industry-relevant skills.</span>
                            <span class="lang-hi d-none">आधुनिक शिक्षा उपकरणों और उद्योग-प्रासंगिक कौशल के साथ संपूर्ण शैक्षणिक सहायता।</span>
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2"></i> 
                                <span class="lang-en">Full academic coverage</span>
                                <span class="lang-hi d-none">पूर्ण शैक्षणिक कवरेज</span>
                            </li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> 
                                <span class="lang-en">Modern learning tools</span>
                                <span class="lang-hi d-none">आधुनिक शिक्षण उपकरण</span>
                            </li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> 
                                <span class="lang-en">Skill workshops</span>
                                <span class="lang-hi d-none">कौशल कार्यशालाएं</span>
                            </li>
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
                        <h3 class="card-title font-display mb-4">
                            <span class="lang-en">Personal Mentoring</span>
                            <span class="lang-hi d-none">व्यक्तिगत मार्गदर्शन</span>
                        </h3>
                        <p class="card-text mb-4">
                            <span class="lang-en">Personal guidance from industry professionals for career and personal growth.</span>
                            <span class="lang-hi d-none">करियर और व्यक्तिगत विकास के लिए उद्योग पेशेवरों से व्यक्तिगत मार्गदर्शन।</span>
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2"></i> 
                                <span class="lang-en">Industry mentors</span>
                                <span class="lang-hi d-none">उद्योग सलाहकार</span>
                            </li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> 
                                <span class="lang-en">Regular guidance</span>
                                <span class="lang-hi d-none">नियमित मार्गदर्शन</span>
                            </li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> 
                                <span class="lang-en">Personality development</span>
                                <span class="lang-hi d-none">व्यक्तित्व विकास</span>
                            </li>
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
                        <h3 class="card-title font-display mb-4">
                            <span class="lang-en">Career Development</span>
                            <span class="lang-hi d-none">करियर विकास</span>
                        </h3>
                        <p class="card-text mb-4">
                            <span class="lang-en">Job placement assistance and professional training for sustainable careers.</span>
                            <span class="lang-hi d-none">टिकाऊ करियर के लिए नौकरी प्लेसमेंट सहायता और व्यावसायिक प्रशिक्षण।</span>
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2"></i> 
                                <span class="lang-en">Job placement</span>
                                <span class="lang-hi d-none">नौकरी प्लेसमेंट</span>
                            </li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> 
                                <span class="lang-en">Interview training</span>
                                <span class="lang-hi d-none">इंटरव्यू प्रशिक्षण</span>
                            </li>
                            <li class="mb-2"><i class="fas fa-check me-2"></i> 
                                <span class="lang-en">Career support</span>
                                <span class="lang-hi d-none">करियर सहायता</span>
                            </li>
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
                <h2 class="section-title text-white font-display mb-4">
                    <span class="lang-en">Real Impact, Real Results</span>
                    <span class="lang-hi d-none">वास्तविक प्रभाव, वास्तविक परिणाम</span>
                </h2>
                <p class="lead text-white-50">
                    <span class="lang-en">Numbers that prove our comprehensive approach works</span>
                    <span class="lang-hi d-none">संख्याएं जो साबित करती हैं कि हमारा व्यापक दृष्टिकोण काम करता है</span>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-users fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2"><?= $total_beneficiaries ?? '200' ?>+</h3>
                    <h5 class="fw-semibold mb-2">
                        <span class="lang-en">Students Transformed</span>
                        <span class="lang-hi d-none">छात्र परिवर्तित</span>
                    </h5>
                    <p class="text-white-50 mb-0">
                        <span class="lang-en">Into industry professionals</span>
                        <span class="lang-hi d-none">उद्योग पेशेवरों में</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-briefcase fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2">95%</h3>
                    <h5 class="fw-semibold mb-2">
                        <span class="lang-en">Employment Rate</span>
                        <span class="lang-hi d-none">रोजगार दर</span>
                    </h5>
                    <p class="text-white-50 mb-0">
                        <span class="lang-en">In their chosen fields</span>
                        <span class="lang-hi d-none">उनके चुने गए क्षेत्रों में</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-user-tie fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2">50+</h3>
                    <h5 class="fw-semibold mb-2">
                        <span class="lang-en">Industry Mentors</span>
                        <span class="lang-hi d-none">उद्योग सलाहकार</span>
                    </h5>
                    <p class="text-white-50 mb-0">
                        <span class="lang-en">Professional guidance</span>
                        <span class="lang-hi d-none">व्यावसायिक मार्गदर्शन</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center text-white">
                    <div class="icon-box bg-white text-primary rounded-3 p-4 mb-3 mx-auto" style="width: 80px; height: 80px;">
                        <i class="fas fa-rupee-sign fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-2">₹50K+</h3>
                    <h5 class="fw-semibold mb-2">
                        <span class="lang-en">Average Starting Salary</span>
                        <span class="lang-hi d-none">औसत प्रारंभिक वेतन</span>
                    </h5>
                    <p class="text-white-50 mb-0">
                        <span class="lang-en">Sustainable livelihoods</span>
                        <span class="lang-hi d-none">टिकाऊ आजीविका</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach Section -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="about-image-container position-relative">
                    <img src="<?= base_url('assets/images/our-difference-image.jpg') ?>"
                        alt="Creating Professionals - Students in professional training"
                        class="img-fluid rounded-4 shadow-lg"
                        style="width: 100%; height: 450px; object-fit: cover;"
                        onerror="this.src='https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=450&fit=crop&crop=faces,entropy&auto=format&q=80'">

                    <!-- Hindi Decorative Elements on Image -->
                    <div class="image-overlay-decorations">
                        <div class="hindi-symbol symbol-1">🕉️</div>
                        <div class="hindi-symbol symbol-2">🪔</div>
                        <div class="hindi-symbol symbol-3">🌺</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">
                        <span class="lang-en">Our Difference</span>
                        <span class="lang-hi d-none">हमारा अंतर</span>
                    </span>
                    <h2 class="section-title font-display mb-4">
                        <span class="lang-en">Creating Professionals, Not Just Providing Aid</span>
                        <span class="lang-hi d-none">केवल सहायता नहीं, पेशेवर बनाना</span>
                    </h2>
                    <p class="lead mb-4">
                        <span class="lang-en">Most NGOs only offer monetary help. We create complete professionals through Education + Mentoring + Career Placement.</span>
                        <span class="lang-hi d-none">अधिकांश एनजीओ केवल वित्तीय सहायता प्रदान करते हैं। हम शिक्षा + मार्गदर्शन + करियर प्लेसमेंट के माध्यम से संपूर्ण पेशेवर तैयार करते हैं।</span>
                    </p>

                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-primary text-white rounded-3 p-3 me-3">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">
                                        <span class="lang-en">Holistic Development</span>
                                        <span class="lang-hi d-none">सर्वांगीण विकास</span>
                                    </h6>
                                    <small class="text-muted">
                                        <span class="lang-en">Mind + Skills + Career</span>
                                        <span class="lang-hi d-none">मन + कौशल + करियर</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-success text-white rounded-3 p-3 me-3">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">
                                        <span class="lang-en">Industry Ready</span>
                                        <span class="lang-hi d-none">उद्योग तैयार</span>
                                    </h6>
                                    <small class="text-muted">
                                        <span class="lang-en">Real-World Skills</span>
                                        <span class="lang-hi d-none">वास्तविक-विश्व कौशल</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="<?= base_url('ngo-works') ?>" class="btn btn-primary">
                            <span class="lang-en">Our Approach</span>
                            <span class="lang-hi d-none">हमारा दृष्टिकोण</span>
                        </a>
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-outline-primary">
                            <span class="lang-en">Meet Beneficiaries</span>
                            <span class="lang-hi d-none">लाभार्थियों से मिलें</span>
                        </a>
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
                    <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">
                        <span class="lang-en">Professional Success</span>
                        <span class="lang-hi d-none">व्यावसायिक सफलता</span>
                    </span>
                    <h2 class="section-title font-display mb-4">
                        <span class="lang-en">From Students to Professionals</span>
                        <span class="lang-hi d-none">छात्रों से पेशेवरों तक</span>
                    </h2>
                    <p class="lead text-muted">
                        <span class="lang-en">Real stories of transformation through our comprehensive approach</span>
                        <span class="lang-hi d-none">हमारे व्यापक दृष्टिकोण के माध्यम से परिवर्तन की वास्तविक कहानियां</span>
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <?php foreach (array_slice($success_stories, 0, 3) as $index => $story): ?>
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
                                        <i class="fas fa-briefcase me-1"></i> 
                                        <span class="lang-en">Professional</span>
                                        <span class="lang-hi d-none">पेशेवर</span>
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
                    <i class="fas fa-arrow-right me-2"></i> 
                    <span class="lang-en">View All Success Stories</span>
                    <span class="lang-hi d-none">सभी सफलता की कहानियां देखें</span>
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
                <h2 class="font-display mb-4 display-5">
                    <span class="lang-en">Join the Education Revolution</span>
                    <span class="lang-hi d-none">शिक्षा क्रांति में शामिल हों</span>
                </h2>
                <p class="lead mb-5 fs-4">
                    <span class="lang-en">Help us transform students into industry professionals through our unique approach.</span>
                    <span class="lang-hi d-none">हमारे अनूठे दृष्टिकोण के माध्यम से छात्रों को उद्योग पेशेवरों में बदलने में हमारी सहायता करें।</span>
                </p>
                <div class="row justify-content-center g-3">
                    <div class="col-md-4">
                        <a href="<?= base_url('ngo-works') ?>" class="btn btn-light btn-lg w-100 py-3">
                            <i class="fas fa-rocket me-2"></i> 
                            <span class="lang-en">Our Approach</span>
                            <span class="lang-hi d-none">हमारा दृष्टिकोण</span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-outline-light btn-lg w-100 py-3">
                            <i class="fas fa-users me-2"></i> 
                            <span class="lang-en">Support Students</span>
                            <span class="lang-hi d-none">छात्रों की सहायता करें</span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('success-stories') ?>" class="btn btn-outline-light btn-lg w-100 py-3">
                            <i class="fas fa-handshake me-2"></i> 
                            <span class="lang-en">Become Mentor</span>
                            <span class="lang-hi d-none">मार्गदर्शक बनें</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>