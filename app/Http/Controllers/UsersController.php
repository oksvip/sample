<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * 注册action
     */
    public function create()
    {
        return view('users.create');
    }


}
