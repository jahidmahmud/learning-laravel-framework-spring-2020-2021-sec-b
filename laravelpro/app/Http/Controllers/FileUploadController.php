<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function index()
    {
        return view('Upload.file_upload');
    }
    public function upload(Request $req)
    {
        return $req->file('filename')->store('docs');
        //return $req->file('filename')->storeAs('docs', 'mike');
    }
}
