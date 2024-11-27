<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function architecture()
    {
        return view('pages.architecture');
    }
    public function contactus()
    {
        return view('pages.contact_us');
    }
    public function interior()
    {
        return view('pages.interior');
    }
    public function profile()
    {
        return view('pages.profile');
    }
    public function blogDetails()
    {
        return view('pages.blog_details');
    }
}
