
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

        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[255]',
            'age' => 'required|integer|greater_than[0]',
            'education' => 'required|max_length[255]',
            'current_position' => 'required|max_length[255]',
            'company' => 'required|max_length[255]',
            'city' => 'required|max_length[100]',
            'state' => 'required|max_length[100]',
            'linkedin_url' => 'permit_empty|valid_url|max_length[500]',
            'company_link' => 'permit_empty|valid_url|max_length[500]',
            'story' => 'required|min_length[10]',
            'status' => 'required|in_list[active,inactive]',
            'image' => 'permit_empty|uploaded[image]|max_size[image,2048]|is_image[image]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'age' => $this->request->getPost('age'),
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

        if ($this->successStoryModel->insert($data)) {
            return redirect()->to('/admin/success-stories')->with('success', 'Success story added successfully.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to add success story.');
        }
    }

    public function edit($id)
    {
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;

        $story = $this->successStoryModel->find($id);
        if (!$story) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Success story not found');
        }

        $data = [
            'story' => $story
        ];

        return view('admin/success_stories/edit', $data);
    }

    public function update($id)
    {
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;

        $story = $this->successStoryModel->find($id);
        if (!$story) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Success story not found');
        }

        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[255]',
            'age' => 'required|integer|greater_than[0]',
            'education' => 'required|max_length[255]',
            'current_position' => 'required|max_length[255]',
            'company' => 'required|max_length[255]',
            'city' => 'required|max_length[100]',
            'state' => 'required|max_length[100]',
            'linkedin_url' => 'permit_empty|valid_url|max_length[500]',
            'company_link' => 'permit_empty|valid_url|max_length[500]',
            'story' => 'required|min_length[10]',
            'status' => 'required|in_list[active,inactive]',
            'image' => 'permit_empty|uploaded[image]|max_size[image,2048]|is_image[image]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'age' => $this->request->getPost('age'),
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
            if (!empty($story['image'])) {
                $oldImagePath = WRITEPATH . 'uploads/success_stories/' . $story['image'];
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            
            $newName = $image->getRandomName();
            $image->move(WRITEPATH . 'uploads/success_stories', $newName);
            $data['image'] = $newName;
        }

        if ($this->successStoryModel->update($id, $data)) {
            return redirect()->to('/admin/success-stories')->with('success', 'Success story updated successfully.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to update success story.');
        }
    }

    public function delete($id)
    {
        $auth = $this->checkAuth();
        if ($auth !== true) return $auth;

        $story = $this->successStoryModel->find($id);
        if (!$story) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Success story not found');
        }

        // Delete image if exists
        if (!empty($story['image'])) {
            $imagePath = WRITEPATH . 'uploads/success_stories/' . $story['image'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        if ($this->successStoryModel->delete($id)) {
            return redirect()->to('/admin/success-stories')->with('success', 'Success story deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to delete success story.');
        }
    }
}
