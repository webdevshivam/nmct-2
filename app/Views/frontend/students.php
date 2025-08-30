
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>
<!-- Header Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Students</h1>
            <p class="text-xl text-gray-100 max-w-3xl mx-auto">
                Meet the bright minds we're supporting on their educational journey towards success.
            </p>
        </div>
    </div>
</section>

<!-- Students Grid -->
<section class="py-16 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (!empty($students)): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($students as $student): ?>
            <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <!-- Student Avatar -->
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold text-xl">
                            <?= strtoupper(substr($student['name'], 0, 1)) ?>
                        </span>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white"><?= esc($student['name']) ?></h3>
                        <span class="inline-block px-3 py-1 bg-green-100 dark:bg-green-800 text-green-800 dark:text-green-200 text-sm rounded-full">
                            <?= esc($student['status']) ?>
                        </span>
                    </div>
                </div>

                <!-- Student Details -->
                <div class="space-y-3">
                    <div class="flex items-start">
                        <i class="fas fa-graduation-cap text-blue-500 mt-1 mr-3"></i>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white"><?= esc($student['course']) ?></p>
                            <p class="text-gray-600 dark:text-gray-300 text-sm"><?= esc($student['institution']) ?></p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <i class="fas fa-calendar text-blue-500 mr-3"></i>
                        <span class="text-gray-700 dark:text-gray-300"><?= esc($student['year']) ?></span>
                    </div>

                    <?php if ($student['address']): ?>
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt text-blue-500 mr-3"></i>
                        <span class="text-gray-700 dark:text-gray-300"><?= esc($student['address']) ?></span>
                    </div>
                    <?php endif; ?>

                    <?php if ($student['phone']): ?>
                    <div class="flex items-center">
                        <i class="fas fa-phone text-blue-500 mr-3"></i>
                        <span class="text-gray-700 dark:text-gray-300"><?= esc($student['phone']) ?></span>
                    </div>
                    <?php endif; ?>

                    <?php if ($student['scholarship_amount']): ?>
                    <div class="bg-blue-50 dark:bg-blue-900 p-3 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-rupee-sign text-blue-600 dark:text-blue-400 mr-2"></i>
                            <span class="text-blue-800 dark:text-blue-200 font-semibold">
                                Scholarship: <?= esc($student['scholarship_amount']) ?>
                            </span>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Additional Info -->
                <?php if ($student['father_name'] || $student['family_income']): ?>
                <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-600">
                    <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Family Background</h4>
                    <?php if ($student['father_name']): ?>
                    <p class="text-sm text-gray-600 dark:text-gray-300">
                        <strong>Father:</strong> <?= esc($student['father_name']) ?>
                        <?php if ($student['father_occupation']): ?>
                        (<?= esc($student['father_occupation']) ?>)
                        <?php endif; ?>
                    </p>
                    <?php endif; ?>
                    <?php if ($student['family_income']): ?>
                    <p class="text-sm text-gray-600 dark:text-gray-300">
                        <strong>Family Income:</strong> <?= esc($student['family_income']) ?>
                    </p>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div class="text-center text-gray-500 dark:text-gray-400 py-16">
            <i class="fas fa-users text-6xl mb-4"></i>
            <h3 class="text-2xl font-semibold mb-2">No Students Found</h3>
            <p class="text-lg">There are currently no students in our database.</p>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-16 bg-white dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Student Statistics</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-8 rounded-xl text-center">
                <i class="fas fa-users text-4xl mb-4"></i>
                <div class="text-3xl font-bold"><?= count($students) ?></div>
                <div class="text-blue-100">Total Students</div>
            </div>
            
            <div class="bg-gradient-to-r from-green-500 to-green-600 text-white p-8 rounded-xl text-center">
                <i class="fas fa-graduation-cap text-4xl mb-4"></i>
                <div class="text-3xl font-bold">
                    <?= count(array_filter($students, function($s) { return $s['status'] === 'Active'; })) ?>
                </div>
                <div class="text-green-100">Active Students</div>
            </div>
            
            <div class="bg-gradient-to-r from-purple-500 to-purple-600 text-white p-8 rounded-xl text-center">
                <i class="fas fa-university text-4xl mb-4"></i>
                <div class="text-3xl font-bold">
                    <?= count(array_unique(array_column($students, 'institution'))) ?>
                </div>
                <div class="text-purple-100">Institutions</div>
            </div>
        </div>
    </div>
</section>
<?= $this->endsection() ?>
