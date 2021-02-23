<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Builder\Property;
use App\Models\user;
use Illuminate\Auth\Events\Validated;
use Validator;
use App\Http\Requests\UserRequest;

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
    public function add(UserRequest $req)
    {
        // $this->validate($req, [
        //     'username' => 'required',
        //     'password' => 'required|min:5'
        // ]);
        // $req->validate([
        //     'username' => 'required',
        //     'password' => 'required|min:5'
        // ]);
        // $validation = validator::make($req->all(), [
        //     'username' => 'required|max:5',
        //     'email' => 'required'
        // ]);
        // if ($validation->fails()) {
        //     return redirect()->route('home.create')->with('errors', $validation->errors())->withInput();
        // }
        //$userlistarr = ['id' => $req->id, 'name' => $req->username, 'salary' => $req->salary];
        //array_push($this->userlist, $userlistarr);\
        $user = new user();
        $user->id = $req->id;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->type = $req->type;
        $user->save();
        //return redirect('/home/userlist');
        return redirect()->route('home.list');
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
        return redirect()->route('home.list');
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
            return redirect()->route('home.list');
        } else {
            return redirect('home/delete/' . $id);
        }
    }
}
