<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of User_test
 *
 * @author chiha
 */
class User extends \Illuminate\Database\Eloquent\Model 
{
//    public $firstName;

//    public $secondName;

//    public $phone;

//    public function __construct($first, $second, $phone)

//    {

// 	   $this->firstName=$first;

// 	   $this->secondName=$second;

// 	   $this->phone=$phone;

//    }
protected $table = 'users';
   public function blogs()
   {
       return $this->hasMany(Blog::class);
   }

}