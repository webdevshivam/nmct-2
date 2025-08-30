
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900 py-24">
    <div class="absolute inset-0 bg-black/30"></div>
    
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
            <defs>
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)"/>
        </svg>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="space-y-6">
            <h1 class="text-5xl lg:text-7xl font-bold text-white leading-tight">
                Our
                <span class="bg-gradient-to-r from-orange-400 to-yellow-400 bg-clip-text text-transparent">
                    Beneficiaries
                </span>
            </h1>
            <p class="text-xl lg:text-2xl text-blue-100 max-w-4xl mx-auto leading-relaxed">
                Meet the brilliant minds whose lives are being transformed through education. These are the students we're proud to support on their journey to success.
            </p>
            
            <!-- Quick Stats -->
            <div class="flex justify-center items-center space-x-8 pt-8">
                <div class="text-center">
                    <div class="text-3xl font-bold text-orange-400"><?= count($beneficiaries) ?></div>
                    <div class="text-blue-200">Total Students</div>
                </div>
                <div class="w-px h-12 bg-blue-400/30"></div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-orange-400">
                        <?= count(array_filter($beneficiaries, fn($b) => $b['status'] === 'active')) ?>
                    </div>
                    <div class="text-blue-200">Active</div>
                </div>
                <div class="w-px h-12 bg-blue-400/30"></div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-orange-400">
                        <?= count(array_filter($beneficiaries, fn($b) => ($b['is_passout'] ?? '') === 'passout')) ?>
                    </div>
                    <div class="text-blue-200">Graduated</div>
                </div>
            </div></div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>

<!-- Filter Section -->
<div class="bg-white border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0">
            <div class="flex items-center space-x-4">
                <h3 class="text-lg font-semibold text-gray-900">Filter Students</h3>
                <select id="statusFilter" class="rounded-lg border-gray-300 text-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="passout">Graduated</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            
            <div class="relative">
                <input type="text" id="searchInput" placeholder="Search by name, course, or institution..." 
                       class="pl-10 pr-4 py-2 w-80 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
            </div>
        </div>
    </div>
</div>

<!-- Beneficiaries Grid -->
<div class="py-16 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (!empty($beneficiaries)): ?>
            <div id="beneficiariesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <?php foreach ($beneficiaries as $beneficiary): ?>
                    <div class="beneficiary-card bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100 group transform hover:-translate_y-2"
                         data-status="<?= esc($beneficiary['status']) ?>"
                         data-passout="<?= esc($beneficiary['is_passout'] ?? '') ?>"
                         data-name="<?= esc(strtolower($beneficiary['name'])) ?>"
                         data-course="<?= esc(strtolower($beneficiary['course'])) ?>"
                         data-institution="<?= esc(strtolower($beneficiary['institution'])) ?>">
                        
                        <!-- Card Header -->
                        <div class="relative bg-gradient-to-br from-blue-600 to-purple-600 p-6 text-white">
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center ring-4 ring-white/30">
                                    <span class="text-2xl font-bold">
                                        <?= strtoupper(substr($beneficiary['name'], 0, 1)) ?>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold leading-tight group-hover:text-orange-300 transition-colors">
                                        <?= esc($beneficiary['name']) ?>
                                    </h3>
                                    <p class="text-blue-100 text-sm font-medium">
                                        <?= esc($beneficiary['education_level']) ?>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Status Badge -->
                            <div class="absolute top-4 right-4">
                                <?php 
                                $isPassout = $beneficiary['is_passout'] ?? '';
                                if ($isPassout === 'passout') {
                                    $config = ['bg-blue-500', 'text-white', 'Graduated'];
                                } elseif ($beneficiary['status'] === 'active') {
                                    $config = ['bg-green-500', 'text-white', 'Active'];
                                } else {
                                    $config = ['bg-gray-500', 'text-white', 'Inactive'];
                                }
                                ?>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium <?= $config[0] ?> <?= $config[1] ?>">
                                    <i class="fas fa-circle w-2 h-2 mr-2"></i>
                                    <?= $config[2] ?>
                                </span>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 space-y-4">
                            <!-- Course Information -->
                            <div class="space-y-2">
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <i class="fas fa-graduation-cap text-blue-600"></i>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h4 class="font-semibold text-gray-900 leading-tight">
                                            <?= esc($beneficiary['course']) ?>
                                        </h4>
                                        <p class="text-gray-600 text-sm mt-1 leading-relaxed" title="<?= esc($beneficiary['institution']) ?>">
                                            <?= esc(strlen($beneficiary['institution']) > 40 ? substr($beneficiary['institution'], 0, 40) . '...' : $beneficiary['institution']) ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Company Information -->
                            <?php if (!empty($beneficiary['company_name'])): ?>
                                <div class="bg-blue-50 rounded-xl p-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                            <i class="fas fa-building text-white text-sm"></i>
                                        </div>
                                        <div>
                                            <p class="text-blue-800 font-semibold text-sm">Company</p>
                                            <p class="text-blue-600 font-bold"><?= esc($beneficiary['company_name']) ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- Personal Information -->
                            <div class="space-y-3 pt-2">
                                <?php if (!empty($beneficiary['email'])): ?>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="fas fa-envelope w-4 text-blue-500"></i>
                                        <span class="truncate"><?= esc($beneficiary['email']) ?></span>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($beneficiary['phone'])): ?>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="fas fa-phone w-4 text-green-500"></i>
                                        <span><?= esc($beneficiary['phone']) ?></span>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($beneficiary['city']) && !empty($beneficiary['state'])): ?>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="fas fa-map-marker-alt w-4 text-purple-500"></i>
                                        <span><?= esc($beneficiary['city']) ?>, <?= esc($beneficiary['state']) ?></span>
                                    </div>
                                <?php elseif (!empty($beneficiary['city'])): ?>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="fas fa-map-marker-alt w-4 text-purple-500"></i>
                                        <span><?= esc($beneficiary['city']) ?></span>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($beneficiary['age'])): ?>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="fas fa-user w-4 text-orange-500"></i>
                                        <span><?= esc($beneficiary['age']) ?> years old</span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Additional Information -->
                            <?php if (!empty($beneficiary['family_background'])): ?>
                                <div class="bg-gray-50 rounded-xl p-4 space-y-2">
                                    <h5 class="font-semibold text-gray-800 text-sm flex items-center">
                                        <i class="fas fa-users w-4 mr-2 text-gray-600"></i>
                                        Background
                                    </h5>
                                    <p class="text-gray-600 text-sm">
                                        <?= esc(substr($beneficiary['family_background'], 0, 100)) ?><?= strlen($beneficiary['family_background']) > 100 ? '...' : '' ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Card Footer -->
                        <div class="px-6 pb-6">
                            <button class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-3 px-4 rounded-xl transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-200"
                                    onclick="showStudentDetails(<?= htmlspecialchars(json_encode($beneficiary)) ?>)">
                                <i class="fas fa-info-circle mr-2"></i>
                                View Details
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-16">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-search text-gray-400 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">No Students Found</h3>
                <p class="text-gray-600 max-w-md mx-auto">
                    Try adjusting your search criteria or filters to find what you're looking for.
                </p>
            </div>
        <?php else: ?>
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="w-32 h-32 bg-gradient-to-br from-blue-100 to-purple-100 rounded-full flex items-center justify-center mx-auto mb-8">
                    <i class="fas fa-graduation-cap text-blue-600 text-4xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">No Students Yet</h3>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">
                    We're working hard to onboard brilliant students. Check back soon to see the amazing people we're helping achieve their dreams!
                </p>
                <a href="<?= base_url() ?>" 
                   class="inline-flex items-center px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl transition-all duration-300">
                    <i class="fas fa-home mr-2"></i>
                    Back to Home
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Student Details Modal -->
<div id="studentModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-gradient-to-r from-blue-600 to-purple-600 text-white p-6 rounded-t-2xl">
            <div class="flex justify-between items-start">
                <div>
                    <h3 id="modalName" class="text-2xl font-bold"></h3>
                    <p id="modalCourse" class="text-blue-100 mt-1"></p>
                </div>
                <button onclick="closeModal()" class="text-white hover:text-gray-300 transition-colors">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
        </div>
        
        <div id="modalContent" class="p-6">
            <!-- Content will be populated by JavaScript -->
        </div>
    </div>
</div>

<script>
// Search and Filter Functionality
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const beneficiariesGrid = document.getElementById('beneficiariesGrid');
    const noResults = document.getElementById('noResults');

    function filterBeneficiaries() {
        const searchTerm = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value.toLowerCase();
        const cards = document.querySelectorAll('.beneficiary-card');
        let visibleCards = 0;

        cards.forEach(card => {
            const name = card.dataset.name;
            const course = card.dataset.course;
            const institution = card.dataset.institution;
            const status = card.dataset.status;
            const passout = card.dataset.passout;

            const matchesSearch = !searchTerm || 
                name.includes(searchTerm) || 
                course.includes(searchTerm) || 
                institution.includes(searchTerm);
            
            let matchesStatus = true;
            if (statusValue) {
                if (statusValue === 'passout') {
                    matchesStatus = passout === 'passout';
                } else {
                    matchesStatus = status === statusValue && passout !== 'passout';
                }
            }

            if (matchesSearch && matchesStatus) {
                card.style.display = 'block';
                visibleCards++;
            } else {
                card.style.display = 'none';
            }
        });

        if (visibleCards === 0) {
            beneficiariesGrid.style.display = 'none';
            noResults.classList.remove('hidden');
        } else {
            beneficiariesGrid.style.display = 'grid';
            noResults.classList.add('hidden');
        }
    }

    searchInput.addEventListener('input', filterBeneficiaries);
    statusFilter.addEventListener('change', filterBeneficiaries);
});

// Modal Functions
function showStudentDetails(student) {
    document.getElementById('modalName').textContent = student.name;
    document.getElementById('modalCourse').textContent = student.course;
    
    const modalContent = document.getElementById('modalContent');
    modalContent.innerHTML = `
        <div class="space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-gray-900 border-b pb-2">Personal Information</h4>
                    <div class="space-y-3">
                        <div><span class="font-medium text-gray-700">Email:</span> <span class="text-gray-600">${student.email || 'Not provided'}</span></div>
                        <div><span class="font-medium text-gray-700">Phone:</span> <span class="text-gray-600">${student.phone || 'Not provided'}</span></div>
                        <div><span class="font-medium text-gray-700">Age:</span> <span class="text-gray-600">${student.age || 'Not provided'}</span></div>
                        <div><span class="font-medium text-gray-700">Location:</span> <span class="text-gray-600">${student.city ? (student.state ? student.city + ', ' + student.state : student.city) : 'Not provided'}</span></div>
                        <div><span class="font-medium text-gray-700">Status:</span> 
                            <span class="px-2 py-1 rounded-full text-xs font-medium ${getStatusClass(student.status, student.is_passout)}">${getStatusText(student.status, student.is_passout)}</span>
                        </div>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-gray-900 border-b pb-2">Academic Information</h4>
                    <div class="space-y-3">
                        <div><span class="font-medium text-gray-700">Institution:</span> <span class="text-gray-600">${student.institution}</span></div>
                        <div><span class="font-medium text-gray-700">Education Level:</span> <span class="text-gray-600">${student.education_level}</span></div>
                        <div><span class="font-medium text-gray-700">Course:</span> <span class="text-gray-600">${student.course}</span></div>
                    </div>
                </div>
            </div>
            
            ${student.company_name ? `
                <div class="bg-blue-50 rounded-xl p-4">
                    <h4 class="text-lg font-semibold text-blue-800 mb-3">Professional Information</h4>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div><span class="font-medium text-blue-700">Company:</span> <span class="text-blue-600 font-bold">${student.company_name}</span></div>
                        ${student.company_link ? `<div><span class="font-medium text-blue-700">Company Website:</span> <a href="${student.company_link}" target="_blank" class="text-blue-600 hover:underline">Visit Website</a></div>` : ''}
                    </div>
                </div>
            ` : ''}
            
            ${student.family_background || student.academic_achievements || student.career_goals ? `
                <div class="bg-gray-50 rounded-xl p-4">
                    <h4 class="text-lg font-semibold text-gray-800 mb-3">Additional Information</h4>
                    <div class="space-y-3">
                        ${student.family_background ? `<div><span class="font-medium text-gray-700">Background:</span> <p class="text-gray-600 mt-1">${student.family_background}</p></div>` : ''}
                        ${student.academic_achievements ? `<div><span class="font-medium text-gray-700">Achievements:</span> <p class="text-gray-600 mt-1">${student.academic_achievements}</p></div>` : ''}
                        ${student.career_goals ? `<div><span class="font-medium text-gray-700">Career Goals:</span> <p class="text-gray-600 mt-1">${student.career_goals}</p></div>` : ''}
                    </div>
                </div>
            ` : ''}
            
            ${student.linkedin_url ? `
                <div class="bg-indigo-50 rounded-xl p-4">
                    <h4 class="text-lg font-semibold text-indigo-800 mb-3">Professional Links</h4>
                    <div>
                        <a href="${student.linkedin_url}" target="_blank" class="text-indigo-600 hover:underline flex items-center">
                            <i class="fab fa-linkedin mr-2"></i>
                            LinkedIn Profile
                        </a>
                    </div>
                </div>
            ` : ''}
        </div>
    `;
    
    document.getElementById('studentModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    document.getElementById('studentModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function getStatusClass(status, isPassout) {
    if (isPassout === 'passout') {
        return 'bg-blue-100 text-blue-800';
    }
    const classes = {
        'active': 'bg-green-100 text-green-800',
        'inactive': 'bg-gray-100 text-gray-800'
    };
    return classes[status] || 'bg-gray-100 text-gray-800';
}

function getStatusText(status, isPassout) {
    if (isPassout === 'passout') {
        return 'Graduated';
    }
    return status.charAt(0).toUpperCase() + status.slice(1);
}

// Close modal when clicking outside
document.getElementById('studentModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

// Close modal with escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});
</script>

<?= $this->endSection() ?>
