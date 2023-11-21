<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\ProfileController;

class ProfileController extends Controller
{
  public function add()
    {
        return view('adamin.news.create');
    }
    
    public function edit()
    {
        
    }
    
    public function update(Request $request)
    {



Route::get('admin/profile/create', [ProfileController::class, 'add']);

Route::get('admin/profile/edit', [ProfileController::class, 'edit']);
    }

}
