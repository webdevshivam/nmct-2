<?php

namespace App\Controllers;

use App\Models\StudentModel;
use App\Models\SuccessStoryModel;
use App\Models\ActivityModel;
use App\Models\SiteSettingsModel;

class Home extends BaseController
{
    public function index()
    {
        $studentModel = new StudentModel();
        $successStoryModel = new SuccessStoryModel();
        $activityModel = new ActivityModel();
        $siteSettingsModel = new SiteSettingsModel();

        $data = [
            'title' => 'Nayantara Memorial Charitable Trust',
            'students' => $studentModel->getActiveStudents(),
            'student_stats' => $studentModel->getStudentStats(),
            'success_stories' => $successStoryModel->where('status', 'published')->orderBy('created_at', 'DESC')->limit(3)->findAll(),
            'recent_activities' => $activityModel->getRecentActivities(3),
            'site_settings' => $siteSettingsModel->getAllSettings()
        ];

        return view('frontend/home', $data);
    }

    public function students()
    {
        $studentModel = new StudentModel();

        $data = [
            'title' => 'Our Students - Nayantara Memorial Charitable Trust',
            'students' => $studentModel->getActiveStudents()
        ];

        return view('frontend/students', $data);
    }

    public function successStories()
    {
        $successStoryModel = new SuccessStoryModel();

        $data = [
            'title' => 'Success Stories - Nayantara Memorial Charitable Trust',
            'success_stories' => $successStoryModel->select('success_stories.*, students.name as student_name, students.course, students.institution')
                                                  ->join('students', 'students.id = success_stories.student_id', 'left')
                                                  ->where('success_stories.status', 'published')
                                                  ->orderBy('success_stories.created_at', 'DESC')
                                                  ->findAll()
        ];

        return view('frontend/success_stories', $data);
    }

    public function activities()
    {
        $activityModel = new ActivityModel();

        $data = [
            'title' => 'Our Activities - Nayantara Memorial Charitable Trust',
            'activities' => $activityModel->orderBy('activity_date', 'DESC')->findAll()
        ];

        return view('frontend/activities', $data);
    }
}