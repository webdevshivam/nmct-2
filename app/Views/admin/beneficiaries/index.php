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
                                    <span class="badge bg-<?= $beneficiary['status'] == 'active' ? 'success' : 'secondary' ?>">
                                        <?= esc(ucfirst($beneficiary['status'])) ?>
                                    </span>
                                </td>
                                <td>
                                    <small>
                                        <?php if (!empty($beneficiary['phone'])): ?>
                                            <i class="fas fa-phone"></i> <?= esc($beneficiary['phone']) ?><br>
                                        <?php endif; ?>
                                        <?php if (!empty($beneficiary['email'])): ?>
                                            <i class="fas fa-envelope"></i> <?= esc($beneficiary['email']) ?>
                                        <?php endif; ?>
                                    </small>
                                </td>
                                <td>
                                    <small>
                                        <?php
                                        $location = [];
                                        if (!empty($beneficiary['city'])) $location[] = esc($beneficiary['city']);
                                        if (!empty($beneficiary['state'])) $location[] = esc($beneficiary['state']);
                                        echo !empty($location) ? implode(', ', $location) : 'Not specified';
                                        ?>
                                    </small>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="<?= base_url('admin/beneficiaries/view/' . $beneficiary['id']) ?>"
                                            class="btn btn-sm btn-outline-primary" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#"
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.31/jspdf.plugin.autotable.min.js"></script>
<script>
    var page_title = 'Manage Beneficiaries';
    
    document.addEventListener('DOMContentLoaded', function() {
        const selectAllCheckbox = document.getElementById('selectAll');
        const checkboxes = document.querySelectorAll('.beneficiary-checkbox');
        const bulkActions = document.getElementById('bulkActions');
        const selectedCount = document.getElementById('selectedCount');
        const deleteSelectedBtn = document.getElementById('deleteSelectedBtn');
        const clearSelectionBtn = document.getElementById('clearSelectionBtn');
        const exportPdfBtn = document.getElementById('exportPdfBtn');

        // Handle select all functionality
        selectAllCheckbox.addEventListener('change', function() {
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
            updateBulkActions();
        });

        // Handle individual checkbox changes
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                updateBulkActions();
                updateSelectAllState();
            });
        });

        // Update bulk actions visibility and count
        function updateBulkActions() {
            const selectedCheckboxes = document.querySelectorAll('.beneficiary-checkbox:checked');
            const count = selectedCheckboxes.length;
            
            if (count > 0) {
                bulkActions.style.display = 'block';
                selectedCount.textContent = count + ' selected';
            } else {
                bulkActions.style.display = 'none';
            }
        }

        // Update select all checkbox state
        function updateSelectAllState() {
            const totalCheckboxes = checkboxes.length;
            const checkedCheckboxes = document.querySelectorAll('.beneficiary-checkbox:checked').length;
            
            if (checkedCheckboxes === 0) {
                selectAllCheckbox.indeterminate = false;
                selectAllCheckbox.checked = false;
            } else if (checkedCheckboxes === totalCheckboxes) {
                selectAllCheckbox.indeterminate = false;
                selectAllCheckbox.checked = true;
            } else {
                selectAllCheckbox.indeterminate = true;
            }
        }

        // Clear selection
        clearSelectionBtn.addEventListener('click', function() {
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
            selectAllCheckbox.checked = false;
            selectAllCheckbox.indeterminate = false;
            updateBulkActions();
        });

        // Delete selected beneficiaries
        deleteSelectedBtn.addEventListener('click', function() {
            const selectedIds = Array.from(document.querySelectorAll('.beneficiary-checkbox:checked'))
                                   .map(cb => cb.value);
            
            if (selectedIds.length === 0) return;

            if (confirm(`Are you sure you want to delete ${selectedIds.length} selected beneficiaries? This action cannot be undone.`)) {
                // Create form and submit
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '<?= base_url('admin/beneficiaries/delete-multiple') ?>';
                
                // Add CSRF token if available
                const csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
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

        // Export to PDF functionality
        exportPdfBtn.addEventListener('click', function() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            
            // Add title
            doc.setFontSize(16);
            doc.text('Beneficiaries Report', 14, 20);
            
            // Add date
            doc.setFontSize(10);
            doc.text('Generated on: ' + new Date().toLocaleDateString(), 14, 30);
            
            // Prepare table data
            const tableData = [];
            const rows = document.querySelectorAll('#beneficiariesTable tbody tr');
            
            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                if (cells.length > 1) { // Skip checkbox column
                    tableData.push([
                        cells[1].textContent.trim(), // ID
                        cells[2].textContent.trim(), // Name
                        cells[3].textContent.trim(), // Course
                        cells[4].textContent.trim(), // Institution
                        cells[5].textContent.trim(), // Status
                        cells[6].textContent.trim().replace(/\n/g, ' '), // Contact
                        cells[7].textContent.trim() // Location
                    ]);
                }
            });

            // Create table
            doc.autoTable({
                head: [['ID', 'Name', 'Course', 'Institution', 'Status', 'Contact', 'Location']],
                body: tableData,
                startY: 40,
                styles: { fontSize: 8 },
                headStyles: { fillColor: [41, 128, 185] }
            });
            
            // Save the PDF
            doc.save('beneficiaries-report.pdf');
        });
    });
</script>

<?= $this->endSection() ?>
