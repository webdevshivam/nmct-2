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
            'student_id' => $this->request->getPost('student_id'),
            'name' => $this->request->getPost('name'),
            'course' => $this->request->getPost('course'),
            'university' => $this->request->getPost('university'),
            'contact_phone' => $this->request->getPost('contact_phone'),
            'email' => $this->request->getPost('email'),
            'status' => $this->request->getPost('status'),
            'year' => $this->request->getPost('year'),
            'enrolled_date' => $this->request->getPost('enrolled_date'),
            'expected_graduation' => $this->request->getPost('expected_graduation'),
            'previous_education' => $this->request->getPost('previous_education'),
            'total_fees' => $this->request->getPost('total_fees'),
            'scholarship_amount' => $this->request->getPost('scholarship_amount'),
            'family_income' => $this->request->getPost('family_income'),
            'father_name' => $this->request->getPost('father_name'),
            'father_occupation' => $this->request->getPost('father_occupation'),
            'address' => $this->request->getPost('address')
        ];
        
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
            'student_id' => $this->request->getPost('student_id'),
            'name' => $this->request->getPost('name'),
            'course' => $this->request->getPost('course'),
            'university' => $this->request->getPost('university'),
            'contact_phone' => $this->request->getPost('contact_phone'),
            'email' => $this->request->getPost('email'),
            'status' => $this->request->getPost('status'),
            'year' => $this->request->getPost('year'),
            'enrolled_date' => $this->request->getPost('enrolled_date'),
            'expected_graduation' => $this->request->getPost('expected_graduation'),
            'previous_education' => $this->request->getPost('previous_education'),
            'total_fees' => $this->request->getPost('total_fees'),
            'scholarship_amount' => $this->request->getPost('scholarship_amount'),
            'family_income' => $this->request->getPost('family_income'),
            'father_name' => $this->request->getPost('father_name'),
            'father_occupation' => $this->request->getPost('father_occupation'),
            'address' => $this->request->getPost('address')
        ];
        
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
        
        if ($this->beneficiaryModel->delete($id)) {
            $this->session->setFlashdata('success', 'Beneficiary deleted successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to delete beneficiary');
        }
        
        return redirect()->to('/admin/beneficiaries');
    }
    
    public function view($id)
    {
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;
        
        $data = [
            'beneficiary' => $this->beneficiaryModel->find($id)
        ];
        
        if (!$data['beneficiary']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Beneficiary not found');
        }
        
        return view('admin/beneficiaries/view', $data);
    }
}