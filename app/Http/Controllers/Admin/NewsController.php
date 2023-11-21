<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function add()
    {
        return view('adamin.news.create');
    }
    
    public function edit()
    {
        
    }
    
    public function update(Request $request)
    {

    }

}
