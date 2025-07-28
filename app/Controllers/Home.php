<?php

namespace App\Controllers;

use App\Models\BeneficiaryModel;
use App\Models\SuccessStoryModel;

class Home extends BaseController
{
    public function index()
    {
        $successStoryModel = new SuccessStoryModel();
        $beneficiaryModel = new BeneficiaryModel();
        
        $data = [
            'success_stories' => $successStoryModel->getPublishedStories(),
            'total_beneficiaries' => $beneficiaryModel->countAll(),
            'active_beneficiaries' => $beneficiaryModel->where('status', 'Active')->countAllResults()
        ];
        
        return view('frontend/home', $data);
    }
    
    public function beneficiaries()
    {
        $beneficiaryModel = new BeneficiaryModel();
        $data = [
            'beneficiaries' => $beneficiaryModel->where('status', 'Active')->findAll()
        ];
        
        return view('frontend/beneficiaries', $data);
    }
    
    public function success_stories()
    {
        $successStoryModel = new SuccessStoryModel();
        $data = [
            'success_stories' => $successStoryModel->getPublishedStories()
        ];
        
        return view('frontend/success_stories', $data);
    }
}