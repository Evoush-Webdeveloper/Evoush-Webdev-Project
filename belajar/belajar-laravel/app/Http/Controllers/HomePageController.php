<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    public function index()
    {
    	$data = [
    		'title' => 'Belajar Laravel',
    		'content' => 'lorem ipsum dolor sit amet',
    		'embed' => 'https://www.youtube.com/embed/PhVNZp3ckhY'
    	];
    	return view('HomePage', $data);
    }
}
