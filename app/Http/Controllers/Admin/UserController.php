<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('Admin.user.login');

    }
    public function getRegister(){
        return view('Admin.user.register');
    }
}
