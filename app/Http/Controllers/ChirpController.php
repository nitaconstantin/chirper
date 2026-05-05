<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;

class ChirpController extends Controller
{
    use AuthorizesRequests;
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
        auth()->user()->chirps()->create($validated);

        return redirect('/')->with('success', 'Your chirp has been posted!');
    }

    public function edit(Chirp $chirp)
    {
        $this->authorize('update', $chirp);
        return view('chirps.edit', compact('chirp'));
    }

    public function update(Request $request, Chirp $chirp)
    {
        $this->authorize('update', $chirp);
         // Validate the request
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ],
        [
            'message.required' => 'Please write something to chirp!',
            'message.max' => 'Chirps must be 255 characters or less'
        ]);

        // Update the chirp (no user for now - we'll add auth later)
       $chirp->update($validated);

        return redirect('/')->with('success', 'Your chirp has been updated!');
    }

    public function destroy( Chirp $chirp)
    {
        $this->authorize('update', $chirp);
        $chirp->delete($chirp);
        return redirect('/')->with('success', 'Your chirp has been deleted');
    }
}
