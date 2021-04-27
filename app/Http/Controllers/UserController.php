<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {   
        $user = auth()->user()->current_team_id;
        if($user){
            return view('users.index'); 
        }
       
    }
}
