
<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h4><i class="fas fa-graduation-cap"></i> Manage Beneficiaries</h4>
    <div>
        <button id="exportPdfBtn" class="btn btn-success me-2">
            <i class="fas fa-file-pdf"></i> Export PDF
        </button>
        <a href="<?= base_url('admin/beneficiaries/create') ?>" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Beneficiary
        </a>
    </div>
</div>

<!-- Multiple Actions Bar (Initially Hidden) -->
<div id="bulkActions" class="card mb-3" style="display: none;">
    <div class="card-body py-2">
        <div class="d-flex align-items-center justify-content-between">
            <span id="selectedCount">0 selected</span>
            <div>
                <button id="deleteSelectedBtn" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"></i> Delete Selected
                </button>
                <button id="clearSelectionBtn" class="btn btn-secondary btn-sm">
                    Clear Selection
                </button>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0"><i class="fas fa-list"></i> All Beneficiaries</h5>
    </div>
    <div class="card-body">
        <?php if (!empty($beneficiaries)): ?>
            <div class="table-responsive">
                <table class="table table-hover" id="beneficiariesTable">
                    <thead>
                        <tr>
                            <th width="40">
                                <input type="checkbox" id="selectAll" class="form-check-input">
                            </th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Institution</th>
                            <th>Status</th>
                            <th>Contact</th>
                            <th>Location</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($beneficiaries as $beneficiary): ?>
                            <tr>
                                <td>
                                    <input type="checkbox" class="form-check-input beneficiary-checkbox" 
                                           value="<?= $beneficiary['id'] ?>">
                                </td>
                                <td><strong>#<?= esc($beneficiary['id']) ?></strong></td>
                                <td><?= esc($beneficiary['name']) ?></td>
                                <td><?= esc($beneficiary['course']) ?></td>
                                <td><?= esc($beneficiary['institution']) ?></td>
                                <td>
                                    <?php if ($beneficiary['status'] === 'active'): ?>
                                        <span class="badge bg-success">Active</span>
                                    <?php elseif ($beneficiary['status'] === 'inactive'): ?>
                                        <span class="badge bg-secondary">Inactive</span>
                                    <?php else: ?>
                                        <span class="badge bg-warning">Pending</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if (!empty($beneficiary['phone'])): ?>
                                        <div><i class="fas fa-phone text-muted"></i> <?= esc($beneficiary['phone']) ?></div>
                                    <?php endif; ?>
                                    <?php if (!empty($beneficiary['email'])): ?>
                                        <div><i class="fas fa-envelope text-muted"></i> <?= esc($beneficiary['email']) ?></div>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php
                                    $location = [];
                                    if (!empty($beneficiary['city'])) $location[] = $beneficiary['city'];
                                    if (!empty($beneficiary['state'])) $location[] = $beneficiary['state'];
                                    echo esc(implode(', ', $location));
                                    ?>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="<?= base_url('admin/beneficiaries/view/' . $beneficiary['id']) ?>" 
                                           class="btn btn-sm btn-outline-info" title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="<?= base_url('admin/beneficiaries/edit/' . $beneficiary['id']) ?>" 
                                           class="btn btn-sm btn-outline-warning" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-outline-danger delete-single" 
                                                data-id="<?= $beneficiary['id'] ?>" 
                                                data-name="<?= esc($beneficiary['name']) ?>" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
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
document.addEventListener('DOMContentLoaded', function() {
    const selectAllCheckbox = document.getElementById('selectAll');
    const beneficiaryCheckboxes = document.querySelectorAll('.beneficiary-checkbox');
    const bulkActions = document.getElementById('bulkActions');
    const selectedCount = document.getElementById('selectedCount');
    const deleteSelectedBtn = document.getElementById('deleteSelectedBtn');
    const clearSelectionBtn = document.getElementById('clearSelectionBtn');
    const exportPdfBtn = document.getElementById('exportPdfBtn');

    // Select All functionality
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            beneficiaryCheckboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
            updateBulkActions();
        });
    }

    // Individual checkbox functionality
    beneficiaryCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            updateSelectAll();
            updateBulkActions();
        });
    });

    // Update Select All checkbox state
    function updateSelectAll() {
        if (!selectAllCheckbox) return;
        
        const checkedCount = document.querySelectorAll('.beneficiary-checkbox:checked').length;
        const totalCount = beneficiaryCheckboxes.length;
        
        if (checkedCount === totalCount && totalCount > 0) {
            selectAllCheckbox.checked = true;
            selectAllCheckbox.indeterminate = false;
        } else if (checkedCount > 0) {
            selectAllCheckbox.checked = false;
            selectAllCheckbox.indeterminate = true;
        } else {
            selectAllCheckbox.checked = false;
            selectAllCheckbox.indeterminate = false;
        }
    }

    // Update bulk actions visibility
    function updateBulkActions() {
        const checkedCount = document.querySelectorAll('.beneficiary-checkbox:checked').length;
        
        if (checkedCount > 0) {
            bulkActions.style.display = 'block';
            selectedCount.textContent = `${checkedCount} selected`;
        } else {
            bulkActions.style.display = 'none';
        }
    }

    // Clear selection
    if (clearSelectionBtn) {
        clearSelectionBtn.addEventListener('click', function() {
            beneficiaryCheckboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
            if (selectAllCheckbox) {
                selectAllCheckbox.checked = false;
                selectAllCheckbox.indeterminate = false;
            }
            updateBulkActions();
        });
    }

    // Delete selected beneficiaries
    if (deleteSelectedBtn) {
        deleteSelectedBtn.addEventListener('click', function() {
            const selectedIds = Array.from(document.querySelectorAll('.beneficiary-checkbox:checked'))
                                   .map(cb => cb.value);
            
            if (selectedIds.length === 0) {
                alert('Please select at least one beneficiary to delete.');
                return;
            }

            if (confirm(`Are you sure you want to delete ${selectedIds.length} selected beneficiaries? This action cannot be undone.`)) {
                // Show loading state
                this.disabled = true;
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Deleting...';
                
                // Create form and submit
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '<?= base_url('admin/beneficiaries/delete-multiple') ?>';
                
                // Add CSRF token if available
                const csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '<?= csrf_token() ?>';
                csrfInput.value = '<?= csrf_hash() ?>';
                form.appendChild(csrfInput);
                
                // Add selected IDs
                selectedIds.forEach(id => {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'ids[]';
                    input.value = id;
                    form.appendChild(input);
                });
                
                document.body.appendChild(form);
                form.submit();
            }
        });
    }

    // Single delete functionality
    document.querySelectorAll('.delete-single').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.getAttribute('data-id');
            const name = this.getAttribute('data-name');
            
            if (confirm(`Are you sure you want to delete "${name}"? This action cannot be undone.`)) {
                // Show loading state
                this.disabled = true;
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
                
                // Create form and submit
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '<?= base_url('admin/beneficiaries/delete/') ?>' + id;
                
                // Add CSRF token
                const csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '<?= csrf_token() ?>';
                csrfInput.value = '<?= csrf_hash() ?>';
                form.appendChild(csrfInput);
                
                document.body.appendChild(form);
                form.submit();
            }
        });
    });

    // Export PDF functionality
    if (exportPdfBtn) {
        exportPdfBtn.addEventListener('click', function() {
            this.disabled = true;
            this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Generating...';
            
            window.location.href = '<?= base_url('admin/beneficiaries/export-pdf') ?>';
            
            // Re-enable button after a delay
            setTimeout(() => {
                this.disabled = false;
                this.innerHTML = '<i class="fas fa-file-pdf"></i> Export PDF';
            }, 2000);
        });
    }
});
</script>

<?= $this->endSection() ?>
