<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function index()
    {
        $page_title = "Home";
        return view('index',compact('page_title'));
    }

    public function packages()
    {
        $page_title = "Packages";
        return view('package',compact('page_title'));
    }

    public function contact()
    {
        $page_title = "Contact Us";
        return view('contact',compact('page_title'));
    }
    
    public function about()
    {
        $page_title = "About Us";
        return view('about',compact('page_title'));
    }
    public function privacy()
    {
        $page_title = "Privacy Policy";
        return view('privacy',compact('page_title'));
    }
    
    public function faqs()
    {
        $page_title = "FAQS";
        return view('faqs',compact('page_title'));
    }
    
   
}
