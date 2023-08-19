<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index(){
        $posts = DB::table('activity')->get();

        return view('index', ['title' => 'Home', 'posts' => $posts]);
    }

    public function posts(){
        $allposts = DB::table('activity')->get();

        return view('pages.posts', ['title' => 'Posts', 'allposts' => $allposts]);
    }

    public function singlePost($id){
        $allposts = DB::table('activity')->get();

        $post = DB::table('activity')->where('id', $id)->first();

        return view('pages.singlePost', ['title' => 'Posts', 'post' => $post, 'allposts' => $allposts]);
    }

    public function about(){
        return view('pages.about', ['title' => 'About']);
    }

    public function dashboard(){
        return view('dashboard', ['title' => 'dashboard']);
    }

    public function db_testimoni(){
        return view('pages.db_testimoni', ['title' => 'testimoni']);
    }
}
