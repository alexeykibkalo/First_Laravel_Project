<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class SingleBlogViewController extends Controller
{
    public function View(Request $request)
    {
        $blog = Blog::find($request->id);
        return view('readBlog',['blog'=>$blog]);
      
    }
}
