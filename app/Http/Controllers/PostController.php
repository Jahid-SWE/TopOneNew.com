<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts;
 public function allPost(){
     $this->posts= Post::all();
return view('post.all', ['posts'=>$this->posts]);

 }
}
