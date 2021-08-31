<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelTest extends Model
{
    use HasFactory;

    public $table= "table_belajar_laravel";

    protected $fillable = [
    	'title',
    	'content'
    ];
}
