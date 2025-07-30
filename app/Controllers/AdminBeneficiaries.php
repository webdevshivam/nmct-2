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
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;

        $data = [
            'beneficiaries' => $this->beneficiaryModel->findAll()
        ];

        return view('admin/beneficiaries/index', $data);
    }

    public function create()
    {
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;

        return view('admin/beneficiaries/create');
    }

    public function store()
    {
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;

        $data = [
            'name' => $this->request->getPost('name'),
            'age' => (int)$this->request->getPost('age'),
            'education_level' => $this->request->getPost('education_level'),
            'course' => $this->request->getPost('course'),
            'institution' => $this->request->getPost('institution'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'linkedin_url' => $this->request->getPost('linkedin_url'),
            'company_link' => $this->request->getPost('company_link'),
            'family_background' => $this->request->getPost('family_background'),
            'academic_achievements' => $this->request->getPost('academic_achievements'),
            'career_goals' => $this->request->getPost('career_goals'),
            'status' => $this->request->getPost('status')
        ];

        // Handle image upload
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(WRITEPATH . 'uploads/beneficiaries', $newName);
            $data['image'] = $newName;
        }

        if ($this->beneficiaryModel->save($data)) {
            $this->session->setFlashdata('success', 'Beneficiary added successfully');
            return redirect()->to('/admin/beneficiaries');
        } else {
            $this->session->setFlashdata('error', 'Failed to add beneficiary');
            $this->session->setFlashdata('validation', $this->beneficiaryModel->errors());
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;

        $data = [
            'beneficiary' => $this->beneficiaryModel->find($id)
        ];

        if (!$data['beneficiary']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Beneficiary not found');
        }

        return view('admin/beneficiaries/edit', $data);
    }

    public function update($id)
    {
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;

        $data = [
            'name' => $this->request->getPost('name'),
            'age' => (int)$this->request->getPost('age'),
            'education_level' => $this->request->getPost('education_level'),
            'course' => $this->request->getPost('course'),
            'institution' => $this->request->getPost('institution'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'linkedin_url' => $this->request->getPost('linkedin_url'),
            'company_link' => $this->request->getPost('company_link'),
            'family_background' => $this->request->getPost('family_background'),
            'academic_achievements' => $this->request->getPost('academic_achievements'),
            'career_goals' => $this->request->getPost('career_goals'),
            'status' => $this->request->getPost('status')
        ];

        // Handle image upload
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Delete old image if exists
            $oldBeneficiary = $this->beneficiaryModel->find($id);
            if ($oldBeneficiary && $oldBeneficiary['image']) {
                $oldImagePath = WRITEPATH . 'uploads/beneficiaries/' . $oldBeneficiary['image'];
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $newName = $image->getRandomName();
            $image->move(WRITEPATH . 'uploads/beneficiaries', $newName);
            $data['image'] = $newName;
        }

        if ($this->beneficiaryModel->update($id, $data)) {
            $this->session->setFlashdata('success', 'Beneficiary updated successfully');
            return redirect()->to('/admin/beneficiaries');
        } else {
            $this->session->setFlashdata('error', 'Failed to update beneficiary');
            $this->session->setFlashdata('validation', $this->beneficiaryModel->errors());
            return redirect()->back()->withInput();
        }
    }

    public function delete($id)
    {
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;

        // Delete image if exists
        $beneficiary = $this->beneficiaryModel->find($id);
        if ($beneficiary && $beneficiary['image']) {
            $imagePath = WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        if ($this->beneficiaryModel->delete($id)) {
            $this->session->setFlashdata('success', 'Beneficiary deleted successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to delete beneficiary');
        }

        return redirect()->to('/admin/beneficiaries');
    }
}
