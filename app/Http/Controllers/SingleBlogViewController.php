<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;
class SingleBlogViewController extends Controller
{
    public function View(Request $request)
    {
        $blogs = User::find($request->id)->blogs;
        // echo $blogs;
            // print_r($blogs);
         return view('readBlog',['blogs'=>$blogs]);
              
    }
}
