<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(Auth::id());
        return view('home', compact('user'));
    }

    public function about()
    {
        $user = User::find(Auth::id());
        return view('about', compact('user'));
    }

    public function resume()
    {
        $user = User::find(Auth::id());
        return view('resume', compact('user'));
    }
}
