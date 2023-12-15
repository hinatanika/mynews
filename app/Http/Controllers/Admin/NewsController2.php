<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\NewsController2;

class NewsController2 extends Controller
{
public function index()
    {
    Route::get('XXX', [NewsController2::class, 'index']);    
    }
}
