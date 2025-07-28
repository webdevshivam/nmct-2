<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h4><i class="fas fa-star"></i> Manage Success Stories</h4>
    <a href="<?= base_url('admin/success-stories/create') ?>" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add New Story
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0"><i class="fas fa-list"></i> All Success Stories</h5>
    </div>
    <div class="card-body">
        <?php if (!empty($stories)): ?>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Student Name</th>
                        <th>Achievement</th>
                        <th>Graduation Year</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($stories as $story): ?>
                    <tr>
                        <td><strong><?= esc($story['title']) ?></strong></td>
                        <td><?= esc($story['student_name']) ?></td>
                        <td><?= esc($story['achievement']) ?></td>
                        <td><?= esc($story['graduation_year'] ?? 'N/A') ?></td>
                        <td>
                            <span class="badge bg-<?= $story['status'] == 'Published' ? 'success' : 'warning' ?>">
                                <?= esc($story['status']) ?>
                            </span>
                        </td>
                        <td><?= date('M j, Y', strtotime($story['created_at'])) ?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="<?= base_url('admin/success-stories/edit/' . $story['id']) ?>" 
                                   class="btn btn-sm btn-outline-warning" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('admin/success-stories/delete/' . $story['id']) ?>" 
                                   class="btn btn-sm btn-outline-danger" title="Delete"
                                   onclick="return confirm('Are you sure you want to delete this success story?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php else: ?>
        <div class="text-center py-5">
            <i class="fas fa-star fa-5x text-muted mb-4"></i>
            <h4 class="text-muted">No Success Stories Found</h4>
            <p class="text-muted">Start by adding your first success story to inspire others.</p>
            <a href="<?= base_url('admin/success-stories/create') ?>" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add First Success Story
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>

<script>
var page_title = 'Manage Success Stories';
</script>

<?= $this->endSection() ?>