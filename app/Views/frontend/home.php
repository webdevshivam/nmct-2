<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #f59e0b;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
            --text-light: #9ca3af;
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --bg-accent: #f1f5f9;
            --border-color: #e5e7eb;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1);
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--bg-primary);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 1rem 0;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
        }

        .header-content {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .nav {
            display: flex;
            gap: 2rem;
        }

        .nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.3s ease;
        }

        .nav a:hover {
            opacity: 0.8;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-accent) 100%);
            padding: 4rem 0;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 2px,
                rgba(37, 99, 235, 0.02) 2px,
                rgba(37, 99, 235, 0.02) 4px
            );
        }

        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 2rem;
            line-height: 1.7;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1rem 2rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: var(--shadow-lg);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }

        /* Stats Section */
        .stats {
            padding: 3rem 0;
            background: var(--bg-primary);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .stat-card {
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            text-align: center;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-color);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .stat-icon {
            width: 3rem;
            height: 3rem;
            margin: 0 auto 1rem;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .stat-icon.total { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
        .stat-icon.active { background: linear-gradient(135deg, #10b981, #047857); }
        .stat-icon.passout { background: linear-gradient(135deg, #f59e0b, #d97706); }
        .stat-icon.studying { background: linear-gradient(135deg, #8b5cf6, #7c3aed); }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--text-secondary);
            font-weight: 500;
        }

        /* Section Headers */
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-primary);
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Featured Beneficiaries */
        .featured-section {
            padding: 4rem 0;
            background: var(--bg-secondary);
        }

        .beneficiaries-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .beneficiary-card {
            background: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid var(--border-color);
        }

        .beneficiary-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
        }

        .beneficiary-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1.5rem;
            position: relative;
        }

        .beneficiary-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--accent-color);
        }

        .beneficiary-name {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .beneficiary-course {
            opacity: 0.9;
            font-size: 0.95rem;
        }

        .beneficiary-body {
            padding: 1.5rem;
        }

        .beneficiary-info {
            display: grid;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .info-row {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .info-icon {
            width: 1.25rem;
            height: 1.25rem;
            color: var(--primary-color);
        }

        .info-text {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .company-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--bg-accent);
            color: var(--primary-color);
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }

        .company-link:hover {
            background: var(--border-color);
        }

        /* Success Stories Preview */
        .success-preview {
            padding: 4rem 0;
            background: white;
        }

        .stories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .story-card {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-color);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .story-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .story-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .story-avatar {
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .story-name {
            font-weight: 600;
            color: var(--text-primary);
        }

        .story-position {
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        .story-excerpt {
            color: var(--text-secondary);
            line-height: 1.6;
        }

        /* Footer */
        .footer {
            background: var(--text-primary);
            color: white;
            padding: 2rem 0;
            text-align: center;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: var(--accent-color);
        }

        .footer-section p, .footer-section a {
            color: var(--text-light);
            text-decoration: none;
        }

        .footer-section a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid #374151;
            padding-top: 1rem;
            color: var(--text-light);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            .nav {
                gap: 1rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .beneficiaries-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-heart"></i> Nayantara Trust
                </div>
                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#beneficiaries">Beneficiaries</a>
                    <a href="#success-stories">Success Stories</a>
                    <a href="#contact">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Empowering Dreams Through Education</h1>
                <p>Nayantara Memorial Charitable Trust is dedicated to transforming lives through quality education and unwavering support. We believe every student deserves the opportunity to reach their full potential, regardless of their financial background.</p>
                <a href="#beneficiaries" class="cta-button">
                    <i class="fas fa-graduation-cap"></i> See Our Impact
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Impact in Numbers</h2>
                <p class="section-subtitle">Every number represents a life transformed, a dream fulfilled, and a future brightened through education.</p>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon total">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number"><?= $beneficiary_stats['total'] ?></div>
                    <div class="stat-label">Total Beneficiaries</div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon active">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="stat-number"><?= $beneficiary_stats['active'] ?></div>
                    <div class="stat-label">Active Students</div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon passout">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="stat-number"><?= $beneficiary_stats['passouts'] ?></div>
                    <div class="stat-label">Graduates</div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon studying">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="stat-number"><?= $beneficiary_stats['currently_studying'] ?></div>
                    <div class="stat-label">Currently Studying</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Beneficiaries -->
    <section class="featured-section" id="beneficiaries">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Success Stories in Progress</h2>
                <p class="section-subtitle">Meet some of our remarkable beneficiaries who have successfully transitioned from students to professionals, making their mark in the industry.</p>
            </div>

            <div class="beneficiaries-grid">
                <?php if (!empty($featured_beneficiaries)): ?>
                    <?php foreach ($featured_beneficiaries as $beneficiary): ?>
                        <div class="beneficiary-card">
                            <div class="beneficiary-header">
                                <div class="beneficiary-name"><?= esc($beneficiary['name']) ?></div>
                                <div class="beneficiary-course"><?= esc($beneficiary['course']) ?></div>
                            </div>
                            <div class="beneficiary-body">
                                <div class="beneficiary-info">
                                    <div class="info-row">
                                        <i class="fas fa-graduation-cap info-icon"></i>
                                        <span class="info-text"><?= esc($beneficiary['education_level']) ?></span>
                                    </div>
                                    <div class="info-row">
                                        <i class="fas fa-university info-icon"></i>
                                        <span class="info-text"><?= esc($beneficiary['institution']) ?></span>
                                    </div>
                                    <div class="info-row">
                                        <i class="fas fa-calendar info-icon"></i>
                                        <span class="info-text">Age: <?= esc($beneficiary['age']) ?> years</span>
                                    </div>
                                    <?php if (!empty($beneficiary['phone'])): ?>
                                        <div class="info-row">
                                            <i class="fas fa-phone info-icon"></i>
                                            <span class="info-text"><?= esc($beneficiary['phone']) ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <?php if (!empty($beneficiary['company_name'])): ?>
                                    <a href="<?= !empty($beneficiary['company_link']) ? esc($beneficiary['company_link']) : '#' ?>" 
                                       class="company-link" 
                                       <?= !empty($beneficiary['company_link']) ? 'target="_blank"' : '' ?>>
                                        <i class="fas fa-building"></i>
                                        <?= esc($beneficiary['company_name']) ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-span-full text-center text-gray-500 py-8">
                        <i class="fas fa-users text-4xl mb-4"></i>
                        <p>Featured beneficiaries will be displayed here soon.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
        <section class="mission-section">
            <div class="container">
                <div class="mission-grid">
                    <div class="mission-item">
                        <div class="mission-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Our Mission</h3>
                        <p>To provide quality education and opportunities to underprivileged students, enabling them to achieve their full potential and contribute meaningfully to society.</p>
                    </div>
                    <div class="mission-item">
                        <div class="mission-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Our Vision</h3>
                        <p>A world where every child has access to quality education regardless of their economic background, creating a more equitable and prosperous society.</p>
                    </div>
                    <div class="mission-item">
                        <div class="mission-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3>Our Values</h3>
                        <p>We believe in transparency, accountability, and making a lasting impact through education, mentorship, and community support.</p>
                    </div>
                </div>
            </div>
        </section>

    <!-- Success Stories Preview -->
    <?php if (!empty($success_stories)): ?>
    <section class="success-preview" id="success-stories">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Inspiring Success Stories</h2>
                <p class="section-subtitle">Real stories of transformation, perseverance, and achievement from our beneficiaries who have made their mark in their respective fields.</p>
            </div>

            <div class="stories-grid">
                <?php foreach ($success_stories as $story): ?>
                    <div class="story-card">
                        <div class="story-header">
                            <div class="story-avatar">
                                <?= strtoupper(substr(esc($story['name']), 0, 1)) ?>
                            </div>
                            <div>
                                <div class="story-name"><?= esc($story['name']) ?></div>
                                <div class="story-position"><?= esc($story['current_position']) ?></div>
                            </div>
                        </div>
                        <div class="story-excerpt">
                            <?= esc(substr($story['story'], 0, 150)) ?>...
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-envelope"></i> admin@nayantar.org</p>
                    <p><i class="fas fa-phone"></i> +91 98765 43210</p>
                    <p><i class="fas fa-map-marker-alt"></i> Patna, Bihar, India</p>
                </div>
                <div class="footer-section">
                    <h3>Our Mission</h3>
                    <p>Empowering underprivileged students through quality education, mentorship, and financial support to build a brighter future.</p>
                </div>
                <div class="footer-section">
                    <h3>Get Involved</h3>
                    <p><a href="#volunteer">Become a Volunteer</a></p>
                    <p><a href="#donate">Make a Donation</a></p>
                    <p><a href="#partner">Partner with Us</a></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Nayantara Memorial Charitable Trust. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>