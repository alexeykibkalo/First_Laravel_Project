<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class CreateNewBlogController extends Controller
{
    public function Create(Request $request)
    {
        $blog = new Blog;
        $blog->username = $request->input('author');
        $blog->title = $request->input('blog_name');
        $blog->content = $request->input('content');
        $blog->save();
        
    }
}
