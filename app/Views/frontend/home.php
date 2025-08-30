
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<section class="gradient-bg text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                    Empowering Dreams Through
                    <span class="text-yellow-300">Education</span>
                </h1>
                <p class="text-xl text-gray-100 leading-relaxed">
                    Nayantara Memorial Charitable Trust is dedicated to providing educational opportunities and scholarships to underprivileged students in Bihar, India.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="<?= base_url('students') ?>" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 text-center">
                        Meet Our Students
                    </a>
                    <a href="<?= base_url('success-stories') ?>" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors duration-200 text-center">
                        Success Stories
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-yellow-300"><?= $site_settings['total_students_helped'] ?? '500' ?>+</div>
                            <div class="text-gray-100">Students Helped</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-yellow-300">₹<?= number_format(($site_settings['total_scholarships_given'] ?? 2500000) / 100000) ?>L+</div>
                            <div class="text-gray-100">Scholarships Given</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-yellow-300"><?= $site_settings['years_of_service'] ?? '15' ?>+</div>
                            <div class="text-gray-100">Years of Service</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-yellow-300"><?= $site_settings['active_programs'] ?? '8' ?></div>
                            <div class="text-gray-100">Active Programs</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Current Students Section -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Our Current Students</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                Meet some of the brilliant minds we're supporting on their educational journey.
            </p>
        </div>

        <?php if (!empty($students)): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach (array_slice($students, 0, 6) as $student): ?>
            <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-primary-500 rounded-full flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">
                            <?= strtoupper(substr($student['name'], 0, 1)) ?>
                        </span>
                    </div>
                    <div class="ml-4">
                        <h3 class="font-semibold text-gray-900 dark:text-white"><?= esc($student['name']) ?></h3>
                        <span class="inline-block px-2 py-1 bg-green-100 dark:bg-green-800 text-green-800 dark:text-green-200 text-xs rounded-full">
                            <?= esc($student['status']) ?>
                        </span>
                    </div>
                </div>
                
                <div class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                    <p><i class="fas fa-graduation-cap mr-2 text-primary-500"></i><?= esc($student['course']) ?></p>
                    <p><i class="fas fa-university mr-2 text-primary-500"></i><?= esc($student['institution']) ?></p>
                    <p><i class="fas fa-calendar mr-2 text-primary-500"></i><?= esc($student['year']) ?></p>
                    <?php if ($student['scholarship_amount']): ?>
                    <p><i class="fas fa-rupee-sign mr-2 text-primary-500"></i>Scholarship: <?= esc($student['scholarship_amount']) ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12">
            <a href="<?= base_url('students') ?>" class="bg-primary-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-colors duration-200">
                View All Students
            </a>
        </div>
        <?php else: ?>
        <div class="text-center text-gray-500 dark:text-gray-400">
            <i class="fas fa-users text-6xl mb-4"></i>
            <p class="text-xl">No students data available.</p>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Success Stories Section -->
<?php if (!empty($success_stories)): ?>
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Success Stories</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                Inspiring journeys of our alumni who have achieved great success.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <?php foreach ($success_stories as $story): ?>
            <div class="bg-white dark:bg-gray-800 rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2"><?= esc($story['title']) ?></h3>
                    <?php if ($story['current_position']): ?>
                    <p class="text-primary-600 dark:text-primary-400 font-semibold"><?= esc($story['current_position']) ?></p>
                    <?php endif; ?>
                    <?php if ($story['company_organization']): ?>
                    <p class="text-gray-600 dark:text-gray-300"><?= esc($story['company_organization']) ?></p>
                    <?php endif; ?>
                </div>
                
                <p class="text-gray-700 dark:text-gray-300 mb-6 line-clamp-4">
                    <?= esc(substr($story['story'], 0, 200)) ?>...
                </p>
                
                <?php if ($story['achievement']): ?>
                <div class="bg-primary-50 dark:bg-primary-900 p-4 rounded-lg">
                    <p class="text-primary-800 dark:text-primary-200 font-semibold text-sm">
                        <i class="fas fa-trophy mr-2"></i><?= esc($story['achievement']) ?>
                    </p>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12">
            <a href="<?= base_url('success-stories') ?>" class="bg-primary-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-colors duration-200">
                Read More Stories
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Recent Activities Section -->
<?php if (!empty($recent_activities)): ?>
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Recent Activities</h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                Stay updated with our latest initiatives and community programs.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($recent_activities as $activity): ?>
            <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center justify-between mb-4">
                    <span class="inline-block px-3 py-1 bg-<?= $activity['status'] == 'completed' ? 'green' : ($activity['status'] == 'ongoing' ? 'blue' : 'yellow') ?>-100 dark:bg-<?= $activity['status'] == 'completed' ? 'green' : ($activity['status'] == 'ongoing' ? 'blue' : 'yellow') ?>-800 text-<?= $activity['status'] == 'completed' ? 'green' : ($activity['status'] == 'ongoing' ? 'blue' : 'yellow') ?>-800 dark:text-<?= $activity['status'] == 'completed' ? 'green' : ($activity['status'] == 'ongoing' ? 'blue' : 'yellow') ?>-200 text-xs rounded-full">
                        <?= ucfirst($activity['status']) ?>
                    </span>
                    <span class="text-gray-500 dark:text-gray-400 text-sm">
                        <?= date('M d, Y', strtotime($activity['activity_date'])) ?>
                    </span>
                </div>
                
                <h3 class="font-bold text-gray-900 dark:text-white mb-3"><?= esc($activity['title']) ?></h3>
                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                    <?= esc(substr($activity['description'], 0, 120)) ?>...
                </p>
                
                <div class="flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
                    <div>
                        <i class="fas fa-map-marker-alt mr-1"></i>
                        <?= esc($activity['location']) ?>
                    </div>
                    <?php if ($activity['participants_count'] > 0): ?>
                    <div>
                        <i class="fas fa-users mr-1"></i>
                        <?= $activity['participants_count'] ?> participants
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12">
            <a href="<?= base_url('activities') ?>" class="bg-primary-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-colors duration-200">
                View All Activities
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Call to Action Section -->
<section class="py-20 bg-primary-500 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-6">Join Us in Making a Difference</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">
            Your support can transform lives and create opportunities for deserving students. Together, we can build a brighter future.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="bg-white text-primary-500 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                Donate Now
            </a>
            <a href="#" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-primary-500 transition-colors duration-200">
                Become a Volunteer
            </a>
        </div>
    </div>
</section>
<?= $this->endsection() ?>
