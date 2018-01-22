<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class ViewBlogsController extends Controller
{
    public function ShowBlobsList(Request $request)
    {
        $users = User::all();
        return view('showBlogs',['users'=>$users]);
    }
}
