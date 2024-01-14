<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function index()
    {
        $data = [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
    ];
        return response()->json($data);
    }
}
