<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('index', ['title' => 'Home']);
    }

    public function posts(){
        return view('pages.posts', ['title' => 'Posts']);
    }

    public function singlePost(){
        return view('pages.singlePost', ['title' => 'Posts']);
    }

    public function about(){
        return view('pages.about', ['title' => 'About']);
    }

    public function dashboard(){
        return view('dashboard', ['title' => 'dashboard']);
    }

    public function db_users(){
        return view('pages.db_users', ['title' => 'users']);
    }

    public function db_activity(){
        return view('pages.db_activity', ['title' => 'activity']);
    }

    public function db_testimoni(){
        return view('pages.db_testimoni', ['title' => 'testimoni']);
    }
}
