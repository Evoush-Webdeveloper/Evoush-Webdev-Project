<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function home()
    {
    	$context = [
            'title' => 'PujiErmanto | Website::Project',
            'canonical' => 'https://pujiermanto.herokuapp.com/',
            'meta_desc' => 'PujiErmanto | Website::Project',
            'meta_key' => 'PujiErmanto WebDeveloper Projects',
            'meta_author' => 'PujiErmanto | Website::Project',
            'og_title' => 'PujiErmanto | Website::Project',
            'og_site_name' => 'PujiErmanto | Website::Project',
            'og_desc' => 'Coffe Again Script Again',
            'og_image' => 'https://raw.githubusercontent.com/codesyariah122/bahan-evoush/main/images/banner/about/2%20kn.jpg',
            'og_url' => 'https://pujiermanto.herokuapp.com/',
                // 'user' => User::where('name', Auth::user()->name)
        ];

        return view('Home.index', $context);
    }
}
