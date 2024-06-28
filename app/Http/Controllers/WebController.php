<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('aboutPage'));
    }

    public function aboutPage()
    {
        $reviews = Review::all();
        return view('pages.about', ['reviews' => $reviews]);
    }
}
