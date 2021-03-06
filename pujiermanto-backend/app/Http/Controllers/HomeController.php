<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
    public function index(Request $request)
    {
        $context = [
            'title' => Auth::user()->username.' Dashboard | WebDev::Project',
            'brand' => 'WebDev::Project',
            'url' => $request->segment(1),
            'second_url' => $request->segment(2)
        ];

        return view('pages.dashboard.index', $context);
    }
}
