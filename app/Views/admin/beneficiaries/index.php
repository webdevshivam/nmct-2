<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h4><i class="fas fa-graduation-cap"></i> Manage Beneficiaries</h4>
    <a href="<?= base_url('admin/beneficiaries/create') ?>" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add New Beneficiary
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0"><i class="fas fa-list"></i> All Beneficiaries</h5>
    </div>
    <div class="card-body">
        <?php if (!empty($beneficiaries)): ?>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>University</th>
                        <th>Status</th>
                        <th>Contact</th>
                        <th>Scholarship</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($beneficiaries as $beneficiary): ?>
                    <tr>
                        <td><strong><?= esc($beneficiary['student_id']) ?></strong></td>
                        <td><?= esc($beneficiary['name']) ?></td>
                        <td><?= esc($beneficiary['course']) ?></td>
                        <td><?= esc($beneficiary['university']) ?></td>
                        <td>
                            <span class="badge bg-<?= $beneficiary['status'] == 'Active' ? 'success' : ($beneficiary['status'] == 'Graduated' ? 'info' : 'secondary') ?>">
                                <?= esc($beneficiary['status']) ?>
                            </span>
                        </td>
                        <td>
                            <small>
                                <i class="fas fa-phone"></i> <?= esc($beneficiary['contact_phone']) ?><br>
                                <i class="fas fa-envelope"></i> <?= esc($beneficiary['email']) ?>
                            </small>
                        </td>
                        <td>
                            <strong>₹<?= number_format($beneficiary['scholarship_amount']) ?></strong>
                            <small class="text-muted d-block">
                                of ₹<?= number_format($beneficiary['total_fees']) ?>
                            </small>
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="<?= base_url('admin/beneficiaries/view/' . $beneficiary['id']) ?>" 
                                   class="btn btn-sm btn-outline-primary" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="<?= base_url('admin/beneficiaries/edit/' . $beneficiary['id']) ?>" 
                                   class="btn btn-sm btn-outline-warning" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('admin/beneficiaries/delete/' . $beneficiary['id']) ?>" 
                                   class="btn btn-sm btn-outline-danger" title="Delete"
                                   onclick="return confirm('Are you sure you want to delete this beneficiary?')">
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
            <i class="fas fa-graduation-cap fa-5x text-muted mb-4"></i>
            <h4 class="text-muted">No Beneficiaries Found</h4>
            <p class="text-muted">Start by adding your first beneficiary to the system.</p>
            <a href="<?= base_url('admin/beneficiaries/create') ?>" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add First Beneficiary
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>

<script>
var page_title = 'Manage Beneficiaries';
</script>

<?= $this->endSection() ?>