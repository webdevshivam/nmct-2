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
            'active_beneficiaries' => $beneficiaryModel->where('status', 'active')->countAllResults()
        ];

        return view('frontend/home', $data);
    }

    public function beneficiaries()
    {
        $beneficiaryModel = new BeneficiaryModel();
        $search = $this->request->getGet('search');
        $perPage = 9; // 3 columns x 3 rows

        // Build query
        $builder = $beneficiaryModel->where('status', 'active');

        if ($search) {
            $builder->groupStart()
                ->like('name', $search)
                ->orLike('course', $search)
                ->orLike('institution', $search)
                ->groupEnd();
        }

        // Get paginated results
        $beneficiaries = $builder->paginate($perPage, 'default');
        $pager = $beneficiaryModel->pager;

        // Get total results for search info
        $totalResults = null;
        if ($search) {
            $countBuilder = $beneficiaryModel->where('status', 'active')
                ->groupStart()
                ->like('name', $search)
                ->orLike('course', $search)
                ->orLike('institution', $search)
                ->groupEnd();
            $totalResults = $countBuilder->countAllResults();
        }

        $data = [
            'beneficiaries' => $beneficiaries,
            'pager' => $pager,
            'search' => $search,
            'total_results' => $totalResults,
            'title' => 'Our Beneficiaries'
        ];

        return view('frontend/beneficiaries', $data);
    }

    public function success_stories()
    {
        $successStoryModel = new SuccessStoryModel();
        $data = [
            'success_stories' => $successStoryModel->getPublishedStories(),
            'title' => 'Success Stories'
        ];

        return view('frontend/success_stories', $data);
    }
}
