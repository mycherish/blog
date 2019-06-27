<?php

namespace App\Http\Controllers\Home\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('home.auth.login');
    }
}
