<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logout extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // grab the user
        $user = $request->user();
        // logout the user
        Auth::logout($user);
        // redirect to /
        return redirect('/');


    }
}
