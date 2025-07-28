<?php

namespace App\Controllers;

use App\Models\SuccessStoryModel;

class AdminSuccessStories extends BaseController
{
    protected $session;
    protected $successStoryModel;
    
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->successStoryModel = new SuccessStoryModel();
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
            'stories' => $this->successStoryModel->findAll()
        ];
        
        return view('admin/success_stories/index', $data);
    }
    
    public function create()
    {
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;
        
        return view('admin/success_stories/create');
    }
    
    public function store()
    {
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;
        
        $data = [
            'title' => $this->request->getPost('title'),
            'student_name' => $this->request->getPost('student_name'),
            'story' => $this->request->getPost('story'),
            'achievement' => $this->request->getPost('achievement'),
            'current_position' => $this->request->getPost('current_position'),
            'graduation_year' => $this->request->getPost('graduation_year'),
            'status' => $this->request->getPost('status')
        ];
        
        if ($this->successStoryModel->save($data)) {
            $this->session->setFlashdata('success', 'Success story added successfully');
            return redirect()->to('/admin/success-stories');
        } else {
            $this->session->setFlashdata('error', 'Failed to add success story');
            $this->session->setFlashdata('validation', $this->successStoryModel->errors());
            return redirect()->back()->withInput();
        }
    }
    
    public function edit($id)
    {
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;
        
        $data = [
            'story' => $this->successStoryModel->find($id)
        ];
        
        if (!$data['story']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Success story not found');
        }
        
        return view('admin/success_stories/edit', $data);
    }
    
    public function update($id)
    {
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;
        
        $data = [
            'title' => $this->request->getPost('title'),
            'student_name' => $this->request->getPost('student_name'),
            'story' => $this->request->getPost('story'),
            'achievement' => $this->request->getPost('achievement'),
            'current_position' => $this->request->getPost('current_position'),
            'graduation_year' => $this->request->getPost('graduation_year'),
            'status' => $this->request->getPost('status')
        ];
        
        if ($this->successStoryModel->update($id, $data)) {
            $this->session->setFlashdata('success', 'Success story updated successfully');
            return redirect()->to('/admin/success-stories');
        } else {
            $this->session->setFlashdata('error', 'Failed to update success story');
            $this->session->setFlashdata('validation', $this->successStoryModel->errors());
            return redirect()->back()->withInput();
        }
    }
    
    public function delete($id)
    {
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;
        
        if ($this->successStoryModel->delete($id)) {
            $this->session->setFlashdata('success', 'Success story deleted successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to delete success story');
        }
        
        return redirect()->to('/admin/success-stories');
    }
}