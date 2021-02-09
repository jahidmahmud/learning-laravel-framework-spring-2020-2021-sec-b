<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.test');
    }
    public function verify(Request $req)
    {
        return Redirect('/home');
    }
    public function logout()
    {
        return Redirect('/login');
    }
}
