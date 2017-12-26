<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User as User;

/**
 * Description of CreateUserController
 *
 * @author chiha
 */
class CreateUserController 
{
    public function create(Request $request)
    {
        $user = new User($request->input('first_name'),$request->input('second_name'),$request->input('phone'));
            return view('show',['user'=>$user]);
      
    }
}
