<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\View\View;
class HomeController extends Controller
{
     public function index(): View
    {
        $school = [
            'name' => 'Bright Future School',
            'tagline' => 'Learn Today, Lead Tomorrow',
            'principal' => 'Dr. Ananya Sharma',
            'welcome' => 'Welcome to our school. We believe every child deserves an opportunity to learn, grow, and achieve their full potential.',
        ];

        $notices = [
            [
                'category' => 'Admissions',
                'date' => '14 Oct 2026',
                'title' => 'Admissions Open for 2027–28',
                'description' => 'Applications are invited for the new academic session.',
            ],
            [
                'category' => 'Events',
                'date' => '12 Oct 2026',
                'title' => 'Annual Sports Day',
                'description' => 'Students can register for upcoming sports activities.',
            ],
            [
                'category' => 'Examinations',
                'date' => '10 Oct 2026',
                'title' => 'Examination Schedule',
                'description' => 'Please check the latest examination announcement.',
            ],
        ];

        return view('home', compact('school', 'notices'));
    }
}
