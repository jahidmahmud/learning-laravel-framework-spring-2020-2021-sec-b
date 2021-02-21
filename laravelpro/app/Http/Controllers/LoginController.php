<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\user;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.test');
    }
    /*public function verify(Request $req)
    {
        $user = user::where('username', $req->username)
            ->where('password', $req->password)->get();
        //var_dump($user[0]);
        //echo (count($user));
        if (count($user) > 0) {
            return Redirect('/home');
        } else {
            return Redirect('/login');
        }
        //echo $req->username;
        //$req->session()->put('name', $req->username);
        // echo $req->session()->get('name');
        // $req->session()->forget('name');
        // $req->session()->flush();
        //$req->session()->has('name');
        //$req->session()->flash('errMsg', 'Incorrect Input');
        //echo $req->session()->get('errMsg');
        //$req->session()->keep('errMsg');
        //session(['key' => 'value']);
        //echo session('key');
        //return Redirect('/home');
        //$user = user::all();
        //var_dump($user[0]);
        //print_r($user);
    }*/
    public function verify(Request $req)
    {

        // $user = user::where('password', $req->password)
        //     ->where('username', $req->username)
        //     ->get();
        //echo count($user);
        $user = DB::table('users')->where('password', $req->password)
            ->where('username', $req->username)
            ->get();

        if ($req->username == "" || $req->password == "") {
            $req->session()->flash('msg', 'null username or password...');
            return redirect('/login');
        } elseif (count($user) > 0) {
            //$req->session()->put('password', $req->password);
            //$req->session()->get('name');
            //$req->session()->forget('name');
            //$req->session()->flush();
            //$req->session()->has('name');

            //$req->session()->flash('msg', 'Invalid user info...');
            //$req->session()->flash('error', 'Bad request error...');
            //$req->session()->get('msg');
            //$req->session()->keep('msg');
            //$req->session()->get('msg');
            //$req->session()->reflash();
            //$req->session()->pull('name');

            $req->session()->put('username', $req->username);
            return redirect('/home');
        } else {

            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
    }
    public function logout()
    {
        return Redirect('/login');
    }
}
