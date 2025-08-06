<?php

namespace App\Controllers;

use App\Models\BeneficiaryModel;

class AdminBeneficiaries extends BaseController
{
    protected $session;
    protected $beneficiaryModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->beneficiaryModel = new BeneficiaryModel();
    }

    private function checkAuth()
    {
        if (!$this->session->get('admin_logged_in')) {
            return redirect()->to('/admin/login');
        }
        return true;
    }

    public function index()
    {
        $authCheck = $this->checkAuth();
        if ($authCheck !== true) return $authCheck;

        $data = [
            'beneficiaries' => $this->beneficiaryModel->orderBy('created_at', 'DESC')->findAll()
        ];

        return view('admin/beneficiaries/index', $data);
    }

    public function create()
    {
        $authCheck = $this->checkAuth();
        if ($authCheck !== true) return $authCheck;

        return view('admin/beneficiaries/create');
    }

    public function store()
    {
        $authCheck = $this->checkAuth();
        if ($authCheck !== true) return $authCheck;

        $data = [
            'name' => $this->request->getPost('name'),
            'age' => $this->request->getPost('age') ? (int)$this->request->getPost('age') : null,
            'education_level' => $this->request->getPost('education_level'),
            'course' => $this->request->getPost('course'),
            'institution' => $this->request->getPost('institution'),
            'city' => $this->request->getPost('city') ?: null,
            'state' => $this->request->getPost('state') ?: null,
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'linkedin_url' => $this->request->getPost('linkedin_url'),
            'company_link' => $this->request->getPost('company_link'),
            'family_background' => $this->request->getPost('family_background'),
            'academic_achievements' => $this->request->getPost('academic_achievements'),
            'career_goals' => $this->request->getPost('career_goals'),
            'status' => $this->request->getPost('status'),
            'is_passout' => $this->request->getPost('is_passout') ? 1 : 0
        ];

        // Handle image upload
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            if (!is_dir(WRITEPATH . 'uploads/beneficiaries')) {
                mkdir(WRITEPATH . 'uploads/beneficiaries', 0755, true);
            }
            $image->move(WRITEPATH . 'uploads/beneficiaries', $newName);
            $data['image'] = $newName;
        }

        if ($this->beneficiaryModel->insert($data)) {
            $this->session->setFlashdata('success', 'Beneficiary added successfully');
            return redirect()->to('/admin/beneficiaries');
        } else {
            $this->session->setFlashdata('error', 'Failed to add beneficiary');
            return redirect()->back()->withInput();
        }
    }

    public function view($id)
    {
        $authCheck = $this->checkAuth();
        if ($authCheck !== true) return $authCheck;

        $beneficiary = $this->beneficiaryModel->find($id);
        if (!$beneficiary) {
            $this->session->setFlashdata('error', 'Beneficiary not found');
            return redirect()->to('/admin/beneficiaries');
        }

        $data = ['beneficiary' => $beneficiary];
        return view('admin/beneficiaries/view', $data);
    }

    public function edit($id)
    {
        $authCheck = $this->checkAuth();
        if ($authCheck !== true) return $authCheck;

        $beneficiary = $this->beneficiaryModel->find($id);
        if (!$beneficiary) {
            $this->session->setFlashdata('error', 'Beneficiary not found');
            return redirect()->to('/admin/beneficiaries');
        }

        $data = ['beneficiary' => $beneficiary];
        return view('admin/beneficiaries/edit', $data);
    }

    public function update($id)
    {
        $authCheck = $this->checkAuth();
        if ($authCheck !== true) return $authCheck;

        $beneficiary = $this->beneficiaryModel->find($id);
        if (!$beneficiary) {
            $this->session->setFlashdata('error', 'Beneficiary not found');
            return redirect()->to('/admin/beneficiaries');
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'age' => $this->request->getPost('age') ? (int)$this->request->getPost('age') : null,
            'education_level' => $this->request->getPost('education_level'),
            'course' => $this->request->getPost('course'),
            'institution' => $this->request->getPost('institution'),
            'city' => $this->request->getPost('city') ?: null,
            'state' => $this->request->getPost('state') ?: null,
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'linkedin_url' => $this->request->getPost('linkedin_url'),
            'company_link' => $this->request->getPost('company_link'),
            'family_background' => $this->request->getPost('family_background'),
            'academic_achievements' => $this->request->getPost('academic_achievements'),
            'career_goals' => $this->request->getPost('career_goals'),
            'status' => $this->request->getPost('status'),
            'is_passout' => $this->request->getPost('is_passout') ? 1 : 0
        ];

        // Handle image upload
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            if (!is_dir(WRITEPATH . 'uploads/beneficiaries')) {
                mkdir(WRITEPATH . 'uploads/beneficiaries', 0755, true);
            }
            $image->move(WRITEPATH . 'uploads/beneficiaries', $newName);
            $data['image'] = $newName;

            // Delete old image if exists
            if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])) {
                unlink(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image']);
            }
        }

        if ($this->beneficiaryModel->update($id, $data)) {
            $this->session->setFlashdata('success', 'Beneficiary updated successfully');
            return redirect()->to('/admin/beneficiaries');
        } else {
            $this->session->setFlashdata('error', 'Failed to update beneficiary');
            return redirect()->back()->withInput();
        }
    }

    public function delete($id)
    {
        $authCheck = $this->checkAuth();
        if ($authCheck !== true) return $authCheck;

        $beneficiary = $this->beneficiaryModel->find($id);
        if (!$beneficiary) {
            $this->session->setFlashdata('error', 'Beneficiary not found');
            return redirect()->to('/admin/beneficiaries');
        }

        // Delete image if exists
        if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])) {
            unlink(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image']);
        }

        if ($this->beneficiaryModel->delete($id)) {
            $this->session->setFlashdata('success', 'Beneficiary deleted successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to delete beneficiary');
        }

        return redirect()->to('/admin/beneficiaries');
    }

    public function deleteMultiple()
    {
        $authCheck = $this->checkAuth();
        if ($authCheck !== true) return $authCheck;

        $ids = $this->request->getPost('ids');
        
        if (!$ids || !is_array($ids)) {
            $this->session->setFlashdata('error', 'No beneficiaries selected for deletion');
            return redirect()->to('/admin/beneficiaries');
        }

        $deletedCount = 0;
        $errors = [];

        foreach ($ids as $id) {
            $beneficiary = $this->beneficiaryModel->find($id);
            if ($beneficiary) {
                // Delete image if exists
                if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])) {
                    unlink(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image']);
                }

                if ($this->beneficiaryModel->delete($id)) {
                    $deletedCount++;
                } else {
                    $errors[] = "Failed to delete beneficiary: " . $beneficiary['name'];
                }
            }
        }

        if ($deletedCount > 0) {
            $this->session->setFlashdata('success', "$deletedCount beneficiary(ies) deleted successfully");
        }

        if (!empty($errors)) {
            $this->session->setFlashdata('error', implode('<br>', $errors));
        }

        return redirect()->to('/admin/beneficiaries');
    }

    public function exportPdf()
    {
        $authCheck = $this->checkAuth();
        if ($authCheck !== true) return $authCheck;

        // Get all beneficiaries
        $beneficiaries = $this->beneficiaryModel->orderBy('created_at', 'DESC')->findAll();

        // Set response headers for PDF download
        $this->response->setHeader('Content-Type', 'application/pdf');
        $this->response->setHeader('Content-Disposition', 'attachment; filename="beneficiaries-report.pdf"');

        // For now, we'll create a simple HTML to PDF conversion
        // In a production environment, you might want to use a proper PDF library
        $html = $this->generatePdfContent($beneficiaries);
        
        return $this->response->setBody($html);
    }

    private function generatePdfContent($beneficiaries)
    {
        $html = '<!DOCTYPE html>
        <html>
        <head>
            <title>Beneficiaries Report</title>
            <style>
                body { font-family: Arial, sans-serif; }
                table { width: 100%; border-collapse: collapse; margin-top: 20px; }
                th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
                th { background-color: #f2f2f2; }
                .header { text-align: center; margin-bottom: 20px; }
            </style>
        </head>
        <body>
            <div class="header">
                <h1>Beneficiaries Report</h1>
                <p>Generated on: ' . date('Y-m-d H:i:s') . '</p>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Institution</th>
                        <th>Status</th>
                        <th>Contact</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>';

        foreach ($beneficiaries as $beneficiary) {
            $contact = '';
            if (!empty($beneficiary['phone'])) $contact .= $beneficiary['phone'] . ' ';
            if (!empty($beneficiary['email'])) $contact .= $beneficiary['email'];

            $location = '';
            if (!empty($beneficiary['city'])) $location .= $beneficiary['city'];
            if (!empty($beneficiary['state'])) $location .= (!empty($location) ? ', ' : '') . $beneficiary['state'];
            
            $html .= '<tr>
                <td>' . esc($beneficiary['id']) . '</td>
                <td>' . esc($beneficiary['name']) . '</td>
                <td>' . esc($beneficiary['course']) . '</td>
                <td>' . esc($beneficiary['institution']) . '</td>
                <td>' . esc(ucfirst($beneficiary['status'])) . '</td>
                <td>' . esc($contact) . '</td>
                <td>' . esc($location) . '</td>
            </tr>';
        }

        $html .= '</tbody>
            </table>
        </body>
        </html>';

        return $html;
    }
}