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
        try {
            $testimonials = Testimonial::limit(5)->get();
        } catch (\Exception $e) {
            // Log the error or handle it in a way that fits your application
            return view('errors.500'); // Display a generic error view
        }

        if (view()->exists('content.about')) {
            return view('content.about', ['testimonials' => $testimonials]);
        } else {
            return view('errors.404'); // Display a 404 view if the 'content.about' view does not exist
        }

//        $testimonials = Testimonial::limit(5)->get();
//        return view('content.about', ['testimonials' => $testimonials]);
    }

    public function contactPage()
    {
        return view('content.contact');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
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
            'message' => $message,
        ]);

        return redirect()->route('contact');
    }
}
