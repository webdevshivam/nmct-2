<?php

namespace App\Controllers;

use App\Models\BeneficiaryModel;
use App\Models\SuccessStoryModel;

class Home extends BaseController
{
    private $language = 'en';
    private $translations = [];

    public function __construct()
    {
        $this->loadTranslations();
    }

    private function loadTranslations()
    {
        $this->translations = [
            'en' => [
                'site_title' => 'Bharatpur Foundation',
                'hero_title' => 'Bharatpur Foundation',
                'hero_tagline' => 'Transforming Students into Professionals',
                'hero_description' => 'Beyond financial aid - we create careers through education, mentoring, and professional development.',
                'quality_education' => 'Quality Education',
                'complete_academic_support' => 'Complete academic support',
                'personal_mentoring' => 'Personal Mentoring',
                'industry_guidance' => 'Industry guidance',
                'career_development' => 'Career Development',
                'job_placement_support' => 'Job placement support',
                'our_approach' => 'Our Approach',
                'support_students' => 'Support Students',
                'nav_home' => 'Home',
                'nav_beneficiaries' => 'Beneficiaries',
                'nav_success_stories' => 'Success Stories',
                'nav_our_works' => 'Our Works',
                'our_difference' => 'Our Difference',
                'creating_professionals' => 'Creating Professionals, Not Just Providing Aid',
                'professionals_description' => 'Most NGOs only offer monetary help. We create complete professionals through Education + Mentoring + Career Placement.',
                'holistic_development' => 'Holistic Development',
                'mind_skills_career' => 'Mind + Skills + Career',
                'industry_ready' => 'Industry Ready',
                'real_world_skills' => 'Real-World Skills',
                'meet_beneficiaries' => 'Meet Beneficiaries',
                'our_three_pillars' => 'Our Three Pillars',
                'complete_transformation' => 'Complete Transformation Journey',
                'transformation_description' => 'The first NGO to offer comprehensive empowerment through our unique three-pillar approach',
                'real_impact' => 'Real Impact, Real Results',
                'impact_description' => 'Numbers that prove our comprehensive approach works',
                'students_transformed' => 'Students Transformed',
                'into_professionals' => 'Into industry professionals',
                'employment_rate' => 'Employment Rate',
                'in_chosen_fields' => 'In their chosen fields',
                'industry_mentors' => 'Industry Mentors',
                'professional_guidance' => 'Professional guidance',
                'average_salary' => 'Average Starting Salary',
                'sustainable_livelihoods' => 'Sustainable livelihoods',
                'how_we_work' => 'How We Work',
                'empowerment_process' => 'Comprehensive Empowerment Process',
                'process_description' => 'Our systematic approach to creating professionals, not just providing aid',
                'professional_success' => 'Professional Success',
                'from_students' => 'From Students to Professionals',
                'success_description' => 'Real stories of transformation through our comprehensive approach',
                'view_all_stories' => 'View All Success Stories',
                'education_revolution' => 'Join the Education Revolution',
                'revolution_description' => 'Help us transform students into industry professionals through our unique approach.',
                'become_mentor' => 'Become Mentor',
                'full_academic_coverage' => 'Full academic coverage',
                'modern_learning_tools' => 'Modern learning tools',
                'skill_workshops' => 'Skill workshops',
                'industry_mentors_text' => 'Industry mentors',
                'regular_guidance' => 'Regular guidance',
                'personality_development' => 'Personality development',
                'job_placement' => 'Job placement',
                'interview_training' => 'Interview training',
                'career_support' => 'Career support'
            ],
            'hi' => [
                'site_title' => 'भरतपुर फाउंडेशन',
                'hero_title' => 'भरतपुर फाउंडेशन',
                'hero_tagline' => 'छात्रों को पेशेवरों में बदलना',
                'hero_description' => 'वित्तीय सहायता से कहीं अधिक - हम शिक्षा, मार्गदर्शन और व्यावसायिक विकास के माध्यम से करियर बनाते हैं।',
                'quality_education' => 'गुणवत्तापूर्ण शिक्षा',
                'complete_academic_support' => 'संपूर्ण शैक्षणिक सहायता',
                'personal_mentoring' => 'व्यक्तिगत मार्गदर्शन',
                'industry_guidance' => 'उद्योग मार्गदर्शन',
                'career_development' => 'करियर विकास',
                'job_placement_support' => 'नौकरी प्लेसमेंट सहायता',
                'our_approach' => 'हमारा दृष्टिकोण',
                'support_students' => 'छात्रों की सहायता करें',
                'nav_home' => 'होम',
                'nav_beneficiaries' => 'लाभार्थी',
                'nav_success_stories' => 'सफलता की कहानियां',
                'nav_our_works' => 'हमारे कार्य',
                'our_difference' => 'हमारा अंतर',
                'creating_professionals' => 'केवल सहायता नहीं, पेशेवर बनाना',
                'professionals_description' => 'अधिकांश एनजीओ केवल वित्तीय सहायता प्रदान करते हैं। हम शिक्षा + मार्गदर्शन + करियर प्लेसमेंट के माध्यम से संपूर्ण पेशेवर तैयार करते हैं।',
                'holistic_development' => 'समग्र विकास',
                'mind_skills_career' => 'मन + कौशल + करियर',
                'industry_ready' => 'उद्योग तैयार',
                'real_world_skills' => 'वास्तविक-विश्व कौशल',
                'meet_beneficiaries' => 'लाभार्थियों से मिलें',
                'our_three_pillars' => 'हमारे तीन स्तंभ',
                'complete_transformation' => 'संपूर्ण परिवर्तन यात्रा',
                'transformation_description' => 'हमारे अनूठे तीन-स्तंभीय दृष्टिकोण के माध्यम से व्यापक सशक्तिकरण प्रदान करने वाला पहला एनजीओ',
                'real_impact' => 'वास्तविक प्रभाव, वास्तविक परिणाम',
                'impact_description' => 'ऐसे आंकड़े जो साबित करते हैं कि हमारा व्यापक दृष्टिकोण काम करता है',
                'students_transformed' => 'छात्र परिवर्तित',
                'into_professionals' => 'उद्योग पेशेवरों में',
                'employment_rate' => 'रोजगार दर',
                'in_chosen_fields' => 'अपने चुने गए क्षेत्रों में',
                'industry_mentors' => 'उद्योग मार्गदर्शक',
                'professional_guidance' => 'पेशेवर मार्गदर्शन',
                'average_salary' => 'औसत शुरुआती वेतन',
                'sustainable_livelihoods' => 'टिकाऊ आजीविका',
                'how_we_work' => 'हम कैसे काम करते हैं',
                'empowerment_process' => 'व्यापक सशक्तिकरण प्रक्रिया',
                'process_description' => 'केवल सहायता प्रदान नहीं, बल्कि पेशेवर बनाने के लिए हमारा व्यवस्थित दृष्टिकोण',
                'professional_success' => 'पेशेवर सफलता',
                'from_students' => 'छात्रों से पेशेवरों तक',
                'success_description' => 'हमारे व्यापक दृष्टिकोण के माध्यम से परिवर्तन की वास्तविक कहानियां',
                'view_all_stories' => 'सभी सफलता की कहानियां देखें',
                'education_revolution' => 'शिक्षा क्रांति में शामिल हों',
                'revolution_description' => 'हमारे अनूठे दृष्टिकोण के माध्यम से छात्रों को उद्योग पेशेवरों में बदलने में हमारी सहायता करें।',
                'become_mentor' => 'मेंटर बनें',
                'full_academic_coverage' => 'पूर्ण शैक्षणिक कवरेज',
                'modern_learning_tools' => 'आधुनिक शिक्षण उपकरण',
                'skill_workshops' => 'कौशल कार्यशालाएं',
                'industry_mentors_text' => 'उद्योग मेंटर्स',
                'regular_guidance' => 'नियमित मार्गदर्शन',
                'personality_development' => 'व्यक्तित्व विकास',
                'job_placement' => 'नौकरी प्लेसमेंट',
                'interview_training' => 'साक्षात्कार प्रशिक्षण',
                'career_support' => 'करियर सहायता'
            ]
        ];
    }

    private function setLanguage($lang)
    {
        $this->language = in_array($lang, ['en', 'hi']) ? $lang : 'en';
        return $this->language;
    }

    private function translate($key)
    {
        return $this->translations[$this->language][$key] ?? $key;
    }

    public function index($lang = 'en')
    {
        $this->setLanguage($lang);

        $successStoryModel = new SuccessStoryModel();
        $beneficiaryModel = new BeneficiaryModel();

        $data = [
            'success_stories' => $successStoryModel->getPublishedStories(),
            'total_beneficiaries' => $beneficiaryModel->countAll(),
            'active_beneficiaries' => $beneficiaryModel->where('status', 'active')->countAllResults(),
            'language' => $this->language,
            'translations' => $this->translations[$this->language],
            'title' => $this->translate('site_title')
        ];

        return view('frontend/home', $data);
    }

    public function beneficiaries($lang = 'en')
    {
        $language = $this->setLanguage($lang);

        $beneficiaryModel = new \App\Models\BeneficiaryModel();
        $beneficiaries = $beneficiaryModel->findAll();

        $pageTranslations = [
            'en' => [
                'page_title' => 'Beneficiaries',
                'beneficiaries_title' => 'Our Beneficiaries',
                'beneficiaries_subtitle' => 'Students on their journey to success',
                'beneficiaries_description' => 'Meet the amazing students who are part of our comprehensive empowerment program.',
                'age' => 'Age',
                'years_old' => 'years old',
                'course' => 'Course',
                'contact' => 'Contact',
                'email' => 'Email',
                'phone' => 'Phone',
                'no_beneficiaries' => 'No beneficiaries available at the moment.',
                'back_to_home' => 'Back to Home'
            ],
            'hi' => [
                'page_title' => 'लाभार्थी',
                'beneficiaries_title' => 'हमारे लाभार्थी',
                'beneficiaries_subtitle' => 'सफलता की यात्रा पर छात्र',
                'beneficiaries_description' => 'उन अद्भुत छात्रों से मिलें जो हमारे व्यापक सशक्तिकरण कार्यक्रम का हिस्सा हैं।',
                'age' => 'आयु',
                'years_old' => 'साल की उम्र',
                'course' => 'कोर्स',
                'contact' => 'संपर्क',
                'email' => 'ईमेल',
                'phone' => 'फोन',
                'no_beneficiaries' => 'फिलहाल कोई लाभार्थी उपलब्ध नहीं है।',
                'back_to_home' => 'होम पर वापस जाएं'
            ]
        ];

        $allTranslations = array_merge($this->translations[$language], $pageTranslations[$language]);

        $data = [
            'title' => $pageTranslations[$language]['page_title'],
            'beneficiaries' => $beneficiaries,
            'language' => $language,
            'translations' => $allTranslations
        ];

        return view('frontend/layout', $data, ['yield' => view('frontend/beneficiaries', $data)]);
    }


    public function success_stories($lang = 'en')
    {
        $language = $this->setLanguage($lang);

        $successStoryModel = new \App\Models\SuccessStoryModel();
        $stories = $successStoryModel->findAll();

        $pageTranslations = [
            'en' => [
                'page_title' => 'Success Stories',
                'success_stories_title' => 'Success Stories',
                'success_stories_subtitle' => 'Real transformations, Real impact',
                'success_stories_description' => 'Discover inspiring journeys of students who transformed their lives through our comprehensive empowerment program.',
                'read_more' => 'Read More',
                'no_stories' => 'No success stories available at the moment.',
                'back_to_home' => 'Back to Home'
            ],
            'hi' => [
                'page_title' => 'सफलता की कहानियां',
                'success_stories_title' => 'सफलता की कहानियां',
                'success_stories_subtitle' => 'वास्तविक परिवर्तन, वास्तविक प्रभाव',
                'success_stories_description' => 'उन छात्रों की प्रेरणादायक यात्राओं को जानें जिन्होंने हमारे व्यापक सशक्तिकरण कार्यक्रम के माध्यम से अपना जीवन बदला।',
                'read_more' => 'और पढ़ें',
                'no_stories' => 'फिलहाल कोई सफलता की कहानी उपलब्ध नहीं है।',
                'back_to_home' => 'होम पर वापस जाएं'
            ]
        ];

        $allTranslations = array_merge($this->translations[$language], $pageTranslations[$language]);

        $data = [
            'title' => $pageTranslations[$language]['page_title'],
            'stories' => $stories,
            'language' => $language,
            'translations' => $allTranslations
        ];

        return view('frontend/layout', $data, ['yield' => view('frontend/success_stories', $data)]);
    }

    public function ngo_works($lang = 'en')
    {
        $this->setLanguage($lang);

        helper('text');
        $model = new \App\Models\NgoWorkModel();
        $data = [
            'ngo_works' => $model->getPublishedWorks(),
            'language' => $this->language,
            'translations' => $this->translations[$this->language],
            'title' => $this->translate('nav_our_works')
        ];

        return view('frontend/ngo_works', $data);
    }

    public function loadMoreBeneficiaries()
    {
        $beneficiaryModel = new BeneficiaryModel();
        $search = $this->request->getGet('search');
        $perPage = 9;
        $currentPage = (int)($this->request->getGet('page') ?? 1);
        $offset = ($currentPage - 1) * $perPage;

        $beneficiaries = $beneficiaryModel->getActiveBeneficiaries($perPage, $offset, $search);
        $total = $beneficiaryModel->countActiveBeneficiaries($search);
        $hasMore = ($offset + $perPage) < $total;

        if (empty($beneficiaries)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'No more beneficiaries found'
            ]);
        }

        // Generate HTML for new beneficiaries
        $html = '';
        foreach ($beneficiaries as $beneficiary) {
            $html .= $this->generateBeneficiaryCard($beneficiary);
        }

        return $this->response->setJSON([
            'success' => true,
            'html' => $html,
            'has_more' => $hasMore
        ]);
    }

    private function generateBeneficiaryCard($beneficiary)
    {
        ob_start();
?>
        <div class="col-lg-6 col-xl-4 mb-4 beneficiary-card">
            <div class="card h-100 border-0 shadow-lg">
                <div class="card-header text-center bg-light py-2">
                    <div class="feature-icon mx-auto mb-2" style="width: 60px; height: 60px; font-size: 1.5rem; background: var(--gradient-soft); color: var(--primary-color); overflow: hidden; border-radius: 50%;">
                        <?php if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])): ?>
                            <img src="<?= base_url('uploads/beneficiaries/' . $beneficiary['image']) ?>"
                                alt="<?= esc($beneficiary['name']) ?>"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        <?php else: ?>
                            <i class="fas fa-user-graduate"></i>
                        <?php endif; ?>
                    </div>
                    <h6 class="mb-1 font-display text-dark">
                        <?= esc($beneficiary['name']) ?>
                    </h6>
                    <?php if (!empty($beneficiary['age'])): ?>
                        <p class="text-muted small mb-1" style="font-size: 0.75rem;"><?= esc($beneficiary['age']) ?> years old</p>
                    <?php endif; ?>

                    <span class="badge bg-success px-2 py-1 small">
                        <?= esc(ucfirst($beneficiary['status'])) ?>
                    </span>
                </div>
                <div class="card-body p-4">
                    <!-- Course & University -->
                    <div class="mb-3">
                        <h6 class="text-primary mb-2 fw-bold">
                            <i class="fas fa-graduation-cap me-2"></i>Course & University
                        </h6>
                        <p class="mb-1 text-dark fw-semibold"><?= esc($beneficiary['course']) ?></p>
                        <p class="text-muted small mb-0"><?= esc($beneficiary['institution']) ?></p>
                    </div>

                    <!-- Education Level -->
                    <div class="mb-3">
                        <h6 class="text-primary mb-2 fw-bold">
                            <i class="fas fa-certificate me-2"></i>Education Level
                        </h6>
                        <p class="mb-0 text-dark"><?= esc($beneficiary['education_level']) ?></p>
                    </div>

                    <!-- Contact -->
                    <?php if (!empty($beneficiary['phone'])): ?>
                        <div class="mb-3">
                            <h6 class="text-primary mb-2 fw-bold">
                                <i class="fas fa-phone me-2"></i>Contact
                            </h6>
                            <p class="mb-0">
                                <a href="tel:<?= esc($beneficiary['phone']) ?>" class="text-dark text-decoration-none fw-semibold">
                                    <?= esc($beneficiary['phone']) ?>
                                </a>
                            </p>
                        </div>
                    <?php endif; ?>

                    <!-- Contact Information -->
                    <?php if (!empty($beneficiary['phone']) || !empty($beneficiary['email'])): ?>
                        <div class="mb-4">
                            <h6 class="text-primary mb-2 fw-bold">
                                <i class="fas fa-address-book me-2"></i>Contact Information
                            </h6>
                            <?php if (!empty($beneficiary['phone'])): ?>
                                <p class="mb-1 small text-dark">
                                    <i class="fas fa-phone me-2 text-muted"></i>
                                    <a href="tel:<?= esc($beneficiary['phone']) ?>" class="text-dark text-decoration-none">
                                        <?= esc($beneficiary['phone']) ?>
                                    </a>
                                </p>
                            <?php endif; ?>
                            <?php if (!empty($beneficiary['email'])): ?>
                                <p class="mb-0 small text-dark">
                                    <i class="fas fa-envelope me-2 text-muted"></i>
                                    <a href="mailto:<?= esc($beneficiary['email']) ?>" class="text-dark text-decoration-none">
                                        <?= esc($beneficiary['email']) ?>
                                    </a>
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Action Buttons -->
                    <div class="mb-3">
                        <div class="row g-2">
                            <?php if (!empty($beneficiary['email'])): ?>
                                <div class="col-6">
                                    <a href="mailto:<?= esc($beneficiary['email']) ?>" class="btn btn-outline-primary btn-sm w-100">
                                        <i class="fas fa-envelope me-1"></i>Email
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($beneficiary['linkedin_url'])): ?>
                                <div class="col-6">
                                    <a href="<?= esc($beneficiary['linkedin_url']) ?>" target="_blank" class="btn btn-outline-info btn-sm w-100">
                                        <i class="fab fa-linkedin me-1"></i>LinkedIn
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Read More Button -->
                    <div class="text-center">
                        <button class="btn btn-primary btn-sm read-more-btn"
                            data-beneficiary-id="<?= $beneficiary['id'] ?>"
                            data-beneficiary-name="<?= esc($beneficiary['name']) ?>"
                            data-beneficiary-age="<?= esc($beneficiary['age'] ?? '') ?>"
                            data-beneficiary-education="<?= esc($beneficiary['education_level']) ?>"
                            data-beneficiary-course="<?= esc($beneficiary['course']) ?>"
                            data-beneficiary-institution="<?= esc($beneficiary['institution']) ?>"
                            data-beneficiary-city="<?= esc($beneficiary['city'] ?? '') ?>"
                            data-beneficiary-state="<?= esc($beneficiary['state'] ?? '') ?>"
                            data-beneficiary-phone="<?= esc($beneficiary['phone'] ?? '') ?>"
                            data-beneficiary-email="<?= esc($beneficiary['email'] ?? '') ?>"
                            data-beneficiary-linkedin="<?= esc($beneficiary['linkedin_url'] ?? '') ?>"
                            data-beneficiary-company-name="<?= esc($beneficiary['company_name'] ?? '') ?>"
                            data-beneficiary-family="<?= esc($beneficiary['family_background'] ?? '') ?>"
                            data-beneficiary-achievements="<?= esc($beneficiary['academic_achievements'] ?? '') ?>"
                            data-beneficiary-goals="<?= esc($beneficiary['career_goals'] ?? '') ?>"
                            data-beneficiary-company="<?= esc($beneficiary['company_link'] ?? '') ?>"
                            data-beneficiary-status="<?= esc($beneficiary['status']) ?>">
                            <i class="fas fa-info-circle me-1"></i>Read More
                        </button>
                    </div>
                </div>
            </div>
        </div>
<?php
        return ob_get_clean();
    }

    public function serveBeneficiaryImage($filename)
    {
        $filepath = WRITEPATH . 'uploads/beneficiaries/' . $filename;

        if (!file_exists($filepath)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Image not found');
        }

        $mime = mime_content_type($filepath);

        return $this->response
            ->setHeader('Content-Type', $mime)
            ->setHeader('Content-Length', filesize($filepath))
            ->setBody(file_get_contents($filepath));
    }
}