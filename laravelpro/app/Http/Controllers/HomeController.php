<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Builder\Property;
use App\Models\user;

class HomeController extends Controller
{
    public $userlist = [
        ['id' => 1, 'name' => 'Mahmud', 'salary' => 1200],
        ['id' => 2, 'name' => 'Jahid', 'salary' => 1500]
    ];
    public function index(Request $req)
    {
        if ($req->session()->has('username')) {
            //echo $req->username;
            //return view('home.index',['name'=>'Mahmud Jahid']);->with('name', 'Rana')->with('id', 123);
            return view('home.index')->with('name', 'mike');
        }
    }
    public function userlist()
    {
        //$userlist = $this->getUser();
        $user = user::all();
        //return view('home.list')->with('userlist', $this->userlist);
        return view('home.list')->with('userlist', $user);
    }
    public function create()
    {
        return view('home.create');
    }
    public function add(Request $req)
    {
        //$userlistarr = ['id' => $req->id, 'name' => $req->username, 'salary' => $req->salary];
        //array_push($this->userlist, $userlistarr);\
        $user = new user();
        $user->id = $req->id;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->type = $req->type;
        $user->save();
        return redirect('/home/userlist');
    }
    public function update($id)
    {
        //$list = [];
        //$userlist = $this->getUser();
        $user = user::find($id);
        return view('home.edit')->with('user', $user);
    }
    public function updatedPost($id, Request $req)
    {
        $user = user::find($id);
        $user->id = $req->id;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->type = $req->type;
        $user->save();
        return redirect('/home/userlist');
    }
    public function getUser()
    {
        return [
            ['id' => 1, 'name' => 'Mahmud', 'salary' => 1200],
            ['id' => 2, 'name' => 'Jahid', 'salary' => 1500]
        ];
    }
    public function delete($id)
    {
        return view('home.delete')->with('id', $id);
    }
    public function confirmDelete($id)
    {
        if (user::destroy($id)) {
            return redirect('/home/userlist');
        } else {
            return redirect('home/delete/' . $id);
        }
    }
}
