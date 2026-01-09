<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VextempController extends Controller
{
    public function home(){
        return view('frontend.home');
    }
    public function contacts(){
        return view('frontend.contacts');
    }
    
    public function products(){
        return view('admin.dashboard');
    }
    public function blog(){
        return view('frontend.blog');
    }
}
