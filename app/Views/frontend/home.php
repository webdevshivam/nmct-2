
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 min-h-screen flex items-center">
    <div class="absolute inset-0 bg-black/20"></div>
    
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full">
            <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" class="fill-current text-white">
                <g fill="none" fill-rule="evenodd">
                    <g fill="currentColor" fill-opacity="0.1">
                        <circle cx="7" cy="7" r="2"/>
                        <circle cx="27" cy="7" r="2"/>
                        <circle cx="47" cy="7" r="2"/>
                        <circle cx="7" cy="27" r="2"/>
                        <circle cx="27" cy="27" r="2"/>
                        <circle cx="47" cy="27" r="2"/>
                        <circle cx="7" cy="47" r="2"/>
                        <circle cx="27" cy="47" r="2"/>
                        <circle cx="47" cy="47" r="2"/>
                    </g>
                </g>
            </svg>
        </div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column - Content -->
            <div class="text-white space-y-8">
                <div class="space-y-4">
                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight">
                        Empowering
                        <span class="bg-gradient-to-r from-orange-400 to-yellow-400 bg-clip-text text-transparent">
                            Education
                        </span>
                    </h1>
                    <p class="text-xl lg:text-2xl text-blue-100 font-light leading-relaxed">
                        Transforming lives through scholarships and support for underprivileged students across Bihar, India.
                    </p>
                </div>

                <!-- Statistics -->
                <div class="grid grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="text-3xl lg:text-4xl font-bold text-orange-400"><?= $student_stats['total'] ?? 0 ?></div>
                        <div class="text-sm text-blue-200">Total Students</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl lg:text-4xl font-bold text-orange-400"><?= $student_stats['active'] ?? 0 ?></div>
                        <div class="text-sm text-blue-200">Active Students</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl lg:text-4xl font-bold text-orange-400"><?= $student_stats['graduated'] ?? 0 ?></div>
                        <div class="text-sm text-blue-200">Graduated</div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="<?= base_url('beneficiaries') ?>" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <i class="fas fa-graduation-cap mr-2"></i>
                        Meet Our Students
                    </a>
                    <a href="<?= base_url('success-stories') ?>" 
                       class="inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-900 font-semibold rounded-xl transition-all duration-300">
                        <i class="fas fa-star mr-2"></i>
                        Success Stories
                    </a>
                </div>
            </div>

            <!-- Right Column - Visual Element -->
            <div class="relative">
                <div class="relative bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-orange-500/20 rounded-2xl p-6 text-center">
                            <i class="fas fa-book text-3xl text-orange-400 mb-4"></i>
                            <h3 class="text-white font-semibold mb-2">Education</h3>
                            <p class="text-blue-200 text-sm">Quality learning opportunities</p>
                        </div>
                        <div class="bg-blue-500/20 rounded-2xl p-6 text-center">
                            <i class="fas fa-heart text-3xl text-blue-400 mb-4"></i>
                            <h3 class="text-white font-semibold mb-2">Support</h3>
                            <p class="text-blue-200 text-sm">Comprehensive assistance</p>
                        </div>
                        <div class="bg-green-500/20 rounded-2xl p-6 text-center">
                            <i class="fas fa-trophy text-3xl text-green-400 mb-4"></i>
                            <h3 class="text-white font-semibold mb-2">Achievement</h3>
                            <p class="text-blue-200 text-sm">Celebrating success</p>
                        </div>
                        <div class="bg-purple-500/20 rounded-2xl p-6 text-center">
                            <i class="fas fa-users text-3xl text-purple-400 mb-4"></i>
                            <h3 class="text-white font-semibold mb-2">Community</h3>
                            <p class="text-blue-200 text-sm">Building together</p>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Elements -->
                <div class="absolute -top-4 -right-4 w-20 h-20 bg-orange-500/30 rounded-full animate-pulse"></div>
                <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-blue-500/30 rounded-full animate-pulse animation-delay-1000"></div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Our Mission</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Dedicated to breaking the cycle of poverty through education, we provide scholarships, mentorship, 
                and comprehensive support to deserving students across Bihar.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <div class="group">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 h-full transition-all duration-300 group-hover:shadow-xl group-hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-scholarship text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Financial Support</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Providing comprehensive scholarships covering tuition fees, books, and living expenses 
                        to ensure no deserving student is left behind.
                    </p>
                </div>
            </div>

            <div class="group">
                <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-8 h-full transition-all duration-300 group-hover:shadow-xl group-hover:-translate-y-2">
                    <div class="w-16 h-16 bg-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-user-tie text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Mentorship</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Connecting students with experienced mentors who provide guidance, career counseling, 
                        and personal development support throughout their journey.
                    </p>
                </div>
            </div>

            <div class="group">
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 h-full transition-all duration-300 group-hover:shadow-xl group-hover:-translate-y-2">
                    <div class="w-16 h-16 bg-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-briefcase text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Career Development</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Offering skill development programs, internship opportunities, and job placement assistance 
                        to ensure successful career transitions.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Students Showcase -->
<?php if (!empty($students)): ?>
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Our Brilliant Students</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Meet some of the exceptional students we're proud to support on their educational journey.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <?php foreach (array_slice($students, 0, 6) as $student): ?>
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-600 to-purple-600 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-bold text-lg">
                                    <?= strtoupper(substr($student['name'], 0, 1)) ?>
                                </span>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-blue-600 transition-colors">
                                    <?= esc($student['name']) ?>
                                </h3>
                                <p class="text-gray-600 text-sm"><?= esc($student['course']) ?></p>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-university w-4 mr-2 text-blue-500"></i>
                                <span><?= esc($student['institution']) ?></span>
                            </div>
                            
                            <?php if (!empty($student['scholarship_amount'])): ?>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-award w-4 mr-2 text-orange-500"></i>
                                    <span>Scholarship: ₹<?= number_format($student['scholarship_amount']) ?></span>
                                </div>
                            <?php endif; ?>

                            <div class="pt-3">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    <?= esc($student['status']) ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center">
            <a href="<?= base_url('beneficiaries') ?>" 
               class="inline-flex items-center px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-users mr-2"></i>
                View All Students
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Success Stories Preview -->
<?php if (!empty($success_stories)): ?>
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Success Stories</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Inspiring journeys of transformation, achievement, and hope that fuel our mission every day.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8 mb-12">
            <?php foreach ($success_stories as $story): ?>
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-star text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900"><?= esc($story['title']) ?></h3>
                            <p class="text-gray-600 text-sm"><?= esc($story['category']) ?></p>
                        </div>
                    </div>
                    
                    <p class="text-gray-700 leading-relaxed mb-6">
                        <?= esc(substr(strip_tags($story['content']), 0, 150)) ?>...
                    </p>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">
                            <?= date('M d, Y', strtotime($story['created_at'])) ?>
                        </span>
                        <a href="<?= base_url('success-stories') ?>" 
                           class="text-blue-600 hover:text-blue-800 font-semibold text-sm transition-colors">
                            Read More →
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center">
            <a href="<?= base_url('success-stories') ?>" 
               class="inline-flex items-center px-8 py-4 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-xl transition-all duration-300">
                <i class="fas fa-book-open mr-2"></i>
                Read All Stories
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
            Be Part of the Change
        </h2>
        <p class="text-xl text-blue-100 mb-8 leading-relaxed">
            Every contribution, no matter how small, creates ripples of positive change. 
            Help us empower more students to achieve their dreams and build a brighter future.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" 
               class="inline-flex items-center px-8 py-4 bg-white text-blue-600 hover:bg-blue-50 font-semibold rounded-xl transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-heart mr-2"></i>
                Donate Now
            </a>
            <a href="#" 
               class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-600 font-semibold rounded-xl transition-all duration-300">
                <i class="fas fa-hands-helping mr-2"></i>
                Volunteer
            </a>
        </div>
    </div>
</section>

<style>
.animation-delay-1000 {
    animation-delay: 1s;
}

@keyframes pulse {
    0%, 100% {
        opacity: 0.3;
        transform: scale(1);
    }
    50% {
        opacity: 0.6;
        transform: scale(1.1);
    }
}
</style>

<?= $this->endSection() ?>
