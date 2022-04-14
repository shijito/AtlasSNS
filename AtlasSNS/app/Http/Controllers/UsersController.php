<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //auth認証
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function profile(){
        return view('users.profile');
    }
    public function search(){
        return view('users.search');
    }
}
