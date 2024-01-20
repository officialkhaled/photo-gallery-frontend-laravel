<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Contact;

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

    public function contactSend(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:100'
        ]);

        // Storing input values in a variable
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');


        Contact::create([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        ]);

        return redirect()->route('contact');
    }
}
