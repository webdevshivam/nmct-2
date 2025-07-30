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
            'name' => $this->request->getPost('name'),
            'age' => (int)$this->request->getPost('age'),
            'education' => $this->request->getPost('education'),
            'current_position' => $this->request->getPost('current_position'),
            'company' => $this->request->getPost('company'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'linkedin_url' => $this->request->getPost('linkedin_url'),
            'company_link' => $this->request->getPost('company_link'),
            'story' => $this->request->getPost('story'),
            'achievements' => $this->request->getPost('achievements'),
            'status' => $this->request->getPost('status')
        ];

        // Handle image upload
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(WRITEPATH . 'uploads/success_stories', $newName);
            $data['image'] = $newName;
        }

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
            'name' => $this->request->getPost('name'),
            'age' => (int)$this->request->getPost('age'),
            'education' => $this->request->getPost('education'),
            'current_position' => $this->request->getPost('current_position'),
            'company' => $this->request->getPost('company'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'linkedin_url' => $this->request->getPost('linkedin_url'),
            'company_link' => $this->request->getPost('company_link'),
            'story' => $this->request->getPost('story'),
            'achievements' => $this->request->getPost('achievements'),
            'status' => $this->request->getPost('status')
        ];

        // Handle image upload
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Delete old image if exists
            $oldStory = $this->successStoryModel->find($id);
            if ($oldStory && $oldStory['image']) {
                $oldImagePath = WRITEPATH . 'uploads/success_stories/' . $oldStory['image'];
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $newName = $image->getRandomName();
            $image->move(WRITEPATH . 'uploads/success_stories', $newName);
            $data['image'] = $newName;
        }

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

        // Delete image if exists
        $story = $this->successStoryModel->find($id);
        if ($story && $story['image']) {
            $imagePath = WRITEPATH . 'uploads/success_stories/' . $story['image'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        if ($this->successStoryModel->delete($id)) {
            $this->session->setFlashdata('success', 'Success story deleted successfully');
        } else {
            $this->session->setFlashdata('error', 'Failed to delete success story');
        }

        return redirect()->to('/admin/success-stories');
    }
}
