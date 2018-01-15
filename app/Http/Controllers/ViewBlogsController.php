<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;

class ViewBlogsController extends Controller
{
    public function ShowBlobsList(Request $request)
    {
        $blogs = Blog::all();
        return view('showBlogs',['blogs'=>$blogs]);
    }
}
