<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index(Request $request)
    {
    	$context = [
            'title' => 'PujiErmanto | WebDev::Project',
            'canonical' => 'https://pujiermanto.herokuapp.com/',
            'meta_desc' => 'PujiErmanto | WebDev::Project',
            'meta_key' => 'Script Again Coffee Again',
            'meta_author' => 'PujiErmanto | WebDev::Project',
            'og_title' => 'PujiErmanto | WebDev::Project',
            'og_site_name' => 'PujiErmanto | WebDev::Project',
            'og_desc' => 'Script Again Coffee Again',
            'og_image' => 'https://avatars.githubusercontent.com/u/13291805?v=4',
            'og_url' => 'https://pujiermanto.herokuapp.com/',
                // 'user' => User::where('name', Auth::user()->name),
            'url' => $request->segment(1)
        ];
        return view('pages.home.index', $context);
    }
}
