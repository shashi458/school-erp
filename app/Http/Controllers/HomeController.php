<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
     public function index()
    {
        return view('pages.home');

    }
      public function about()
    {
        return view('pages.about');
    }

    public function academics()
    {
        return view('pages.academics');
    }

    public function admission()
    {
        return view('pages.admission');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
