<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('content.content');
    }

    public function about()
    {
        return view('content.about');
    }

    public function contact()
    {
        return view('content.contact');
    }
}
