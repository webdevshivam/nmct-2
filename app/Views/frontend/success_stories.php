
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-emerald-900 via-teal-900 to-cyan-900 py-24">
    <div class="absolute inset-0 bg-black/20"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl lg:text-7xl font-bold text-white mb-6 leading-tight">
            Success
            <span class="bg-gradient-to-r from-orange-400 to-yellow-400 bg-clip-text text-transparent">
                Stories
            </span>
        </h1>
        <p class="text-xl lg:text-2xl text-teal-100 max-w-4xl mx-auto leading-relaxed">
            Inspiring journeys of transformation, achievement, and hope. These stories showcase the incredible impact of education and community support.
        </p>
    </div>
</div>

<!-- Success Stories Grid -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (!empty($success_stories)): ?>
            <div class="grid lg:grid-cols-2 gap-8">
                <?php foreach ($success_stories as $story): ?>
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                        <div class="relative bg-gradient-to-br from-emerald-600 to-teal-600 p-6 text-white">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center space-x-4">
                                    <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                        <i class="fas fa-star text-2xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold group-hover:text-orange-300 transition-colors">
                                            <?= esc($story['title']) ?>
                                        </h3>
                                        <p class="text-emerald-100 text-sm">
                                            <?= esc($story['category']) ?>
                                        </p>
                                    </div>
                                </div>
                                <span class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-medium">
                                    <?= date('M d, Y', strtotime($story['created_at'])) ?>
                                </span>
                            </div>
                        </div>

                        <div class="p-6">
                            <?php if (!empty($story['student_name'])): ?>
                                <div class="flex items-center space-x-2 mb-4 text-sm text-gray-600">
                                    <i class="fas fa-user text-blue-600"></i>
                                    <span class="font-medium"><?= esc($story['student_name']) ?></span>
                                    <?php if (!empty($story['course'])): ?>
                                        <span class="text-gray-400">•</span>
                                        <span><?= esc($story['course']) ?></span>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <div class="prose prose-gray max-w-none">
                                <p class="text-gray-700 leading-relaxed">
                                    <?= esc(substr(strip_tags($story['content']), 0, 300)) ?>...
                                </p>
                            </div>

                            <div class="mt-6 flex items-center justify-between">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                    <i class="fas fa-heart w-3 h-3 mr-1"></i>
                                    <?= esc($story['category']) ?>
                                </span>
                                
                                <button class="text-emerald-600 hover:text-emerald-800 font-semibold text-sm transition-colors"
                                        onclick="showStoryDetails(<?= htmlspecialchars(json_encode($story)) ?>)">
                                    Read Full Story →
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-20">
                <div class="w-32 h-32 bg-gradient-to-br from-emerald-100 to-teal-100 rounded-full flex items-center justify-center mx-auto mb-8">
                    <i class="fas fa-book-open text-emerald-600 text-4xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">No Stories Yet</h3>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">
                    We're collecting inspiring stories from our community. Check back soon for amazing tales of transformation and success!
                </p>
                <a href="<?= base_url() ?>" 
                   class="inline-flex items-center px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl transition-all duration-300">
                    <i class="fas fa-home mr-2"></i>
                    Back to Home
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Story Details Modal -->
<div id="storyModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-gradient-to-r from-emerald-600 to-teal-600 text-white p-6 rounded-t-2xl">
            <div class="flex justify-between items-start">
                <div>
                    <h3 id="modalStoryTitle" class="text-2xl font-bold"></h3>
                    <p id="modalStoryCategory" class="text-emerald-100 mt-1"></p>
                </div>
                <button onclick="closeStoryModal()" class="text-white hover:text-gray-300 transition-colors">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
        </div>
        
        <div id="modalStoryContent" class="p-6">
            <!-- Content will be populated by JavaScript -->
        </div>
    </div>
</div>

<script>
function showStoryDetails(story) {
    document.getElementById('modalStoryTitle').textContent = story.title;
    document.getElementById('modalStoryCategory').textContent = story.category;
    
    const modalContent = document.getElementById('modalStoryContent');
    modalContent.innerHTML = `
        <div class="space-y-6">
            ${story.student_name ? `
                <div class="bg-emerald-50 rounded-xl p-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-emerald-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-emerald-800">${story.student_name}</h4>
                            ${story.course ? `<p class="text-emerald-600 text-sm">${story.course}</p>` : ''}
                            ${story.institution ? `<p class="text-emerald-600 text-sm">${story.institution}</p>` : ''}
                        </div>
                    </div>
                </div>
            ` : ''}
            
            <div class="prose prose-gray max-w-none">
                <div class="text-gray-700 leading-relaxed whitespace-pre-line">${story.content}</div>
            </div>
            
            <div class="flex items-center justify-between pt-4 border-t">
                <span class="text-sm text-gray-500">Published on ${new Date(story.created_at).toLocaleDateString()}</span>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                    ${story.category}
                </span>
            </div>
        </div>
    `;
    
    document.getElementById('storyModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeStoryModal() {
    document.getElementById('storyModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.getElementById('storyModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeStoryModal();
    }
});

// Close modal with escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeStoryModal();
    }
});
</script>

<?= $this->endSection() ?>
