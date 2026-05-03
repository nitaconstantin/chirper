<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;

class ChirpController extends Controller
{
    public function index(){
        $chirps = Chirp::with('user')
        ->latest()
        ->take(50)
        ->get();
        return view('home', ['chirps' => $chirps]);
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ],
        [
            'message.required' => 'Please write something to chirp!',
            'message.max' => 'Chirps must be 255 characters or less'
        ]);

        // Create the chirp (no user for now - we'll add auth later)
        Chirp::create([
            'message' =>$validated['message'],
            'user_id' => null, // We'll add authentication in lesson 11
        ]);

        return redirect('/')->with('success', 'Your chirp has been posted!');
    }
}
