<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
            $chirps = Chirp::with('user')
                            ->latest()
                            ->limit(50)
                            ->get();
    //      $chirps = [
    //     [
    //         'author' => 'Jane Doe',
    //         'message' => 'Just deployed my first Laravel app! 🚀',
    //         'time' => '5 minutes ago'
    //     ],
    //     [
    //         'author' => 'John Smith',
    //         'message' => 'Laravel makes web development fun again!',
    //         'time' => '1 hour ago'
    //     ],
    //     [
    //         'author' => 'Alice Johnson',
    //         'message' => 'Working on something cool with Chirper...',
    //         'time' => '3 hours ago'
    //     ]
    // ];
        return view('home', ['chirps' =>$chirps]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // validate inputs
       $request->validate([
        'message' => ['required', 'max:255', 'min:5']
       ],
       [
        'message.required' => "Your message field can't be empty!" ,
        'message.max' => 'Your message must be less than 255 characters!'
       ]);
       // create chirp
       Chirp::create([
        'message' => $request->message,
        // 'user_id' => null
       ]);
       // redirect to home with a status success
       return redirect('/')->with('success', "You've created a new chirp!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
