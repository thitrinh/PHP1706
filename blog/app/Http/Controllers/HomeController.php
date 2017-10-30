<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
   	public function index(){
         $posts = Post::paginate(24);
   		return view('home.index', compact('posts'));
   	}

   	public function cate($cateName = null){
   		
   		return view('cate.index', 
   					['a' => $cateName]);
   	}
}
