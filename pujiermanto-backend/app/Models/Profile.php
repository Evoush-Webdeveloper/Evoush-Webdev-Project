<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [

    	'quotes',
    	'cover',
    	'about',
    	'gallery',
    	'about',
    	'instagram',
    	'facebook',
    	'youtube',
    	'city',
    	'province'
    ];

    public function users()
    {
    	return $this->belongsToMany('App\Models\User');
    }
}
