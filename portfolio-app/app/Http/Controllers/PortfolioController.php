<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('content.content');
    }

    public function about()
    {
        $testimonials = Testimonial::limit(5)->get();
        return view('content.about', ['testimonials' => $testimonials]);
    }

    public function contact()
    {
        return view('content.contact');
    }
}
