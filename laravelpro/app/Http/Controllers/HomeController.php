<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Builder\Property;

class HomeController extends Controller
{
    public $userlist = [
        ['id' => 1, 'name' => 'Mahmud', 'salary' => 1200],
        ['id' => 2, 'name' => 'Jahid', 'salary' => 1500]
    ];
    public function index()
    {
        //return view('home.index',['name'=>'Mahmud Jahid']);
        return view('home.index')->with('name', 'Rana')->with('id', 123);
    }
    public function userlist()
    {
        //$userlist = $this->getUser();
        return view('home.list')->with('userlist', $this->userlist);
    }
    public function create()
    {
        return view('home.create');
    }
    public function add(Request $req)
    {
        $userlistarr = ['id' => $req->id, 'name' => $req->username, 'salary' => $req->salary];
        array_push($this->userlist, $userlistarr);
        return view('home.list')->with('userlist', $this->userlist);
    }
    public function update($id)
    {
        $list = [];
        $userlist = $this->getUser();
        for ($i = 0; $i < count($userlist); $i++) {
            if ($userlist[$i]['id'] == $id) {
                $list = ['id' => $id, 'name' => $userlist[$i]['name'], 'salary' => $userlist[$i]['salary']];
            }
        }
        return view('home.edit')->with('user', $list);
    }
    public function updatedPost(Request $req)
    {
        $id = $req->id;

        for ($i = 0; $i < count($this->userlist); $i++) {
            if ($this->userlist[$i]['id'] == $id) {
                $this->userlist[$i] = ['id' => $id, 'name' => $req->name, 'salary' => $req->salary];
            }
        }
        return view('home.list')->with('userlist', $this->userlist);
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
        for ($i = 0; $i < count($this->userlist); $i++) {
            if ($this->userlist[$i]['id'] == $id) {
                $this->userlist[$i] = ['id' => '', 'name' => '', 'salary' => ''];
                break;
            }
        }
        return view('home.list')->with('userlist', $this->userlist);
    }
}
