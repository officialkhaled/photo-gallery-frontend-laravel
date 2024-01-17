<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('content');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
