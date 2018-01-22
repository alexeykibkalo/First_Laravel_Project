<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;
use Validator;
class CreateNewBlogController extends Controller
{
    public function ShowView()
    {
        $user = new User;
        $users = User::all();
        return view('createNewBlog',['users'=>$users]);
    }
    public function Create(Request $request)
    {
        
        $validator = Validator::make(
            $request->all(),
            [
                'title'=>'requried|max:150|min:3',
                'user_id'=>'requried|exists:users,id'
            ]
            );
            if($validator ->fails()){
                return back()->withErrors($validator);
            }
        $blog = new Blog;
        $blog->user_id = $request->input('id');
        $blog->title = $request->input('blog_name');
        $blog->content = $request->input('content');
        $blog->save();
        return redirect()->route('root');
    }
}
