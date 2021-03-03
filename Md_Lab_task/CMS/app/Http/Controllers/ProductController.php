<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Validator;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data1 = Product::where('status', 'existing')->get();
        $data2 = Product::where('status', 'upcoming')->get();
        return view('superadmin.Productmanage', ['data1' => $data1, 'data2' => $data2]);
    }
    public function add()
    {
        //return 'hello';
        return view('superadmin.add');
    }
    public function addProduct(Request $req)
    {
        $validation = validator::make($req->all(), [
            'product_name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'status' => 'required',
            'category_name' => 'required',
        ]);
        if ($validation->fails()) {
            return redirect()->route('product.addProduct')->with('errors', $validation->errors())->withInput();
        }
        $product = new Product();
        $product->product_name = $req->product_name;
        $product->quantity = $req->quantity;
        $product->price = $req->price;
        $product->status = $req->status;
        $product->category_name = $req->category_name;
        $product->save();
        return redirect()->route('superadmin.Productmanage');
    }
    public function existing()
    {
        $data1 = Product::where('status', 'existing')->paginate(15);
        //return 'hello';
        return view('superadmin.existing', ['item' => $data1]);
    }
    public function upcoming()
    {
        $data1 = Product::where('status', 'upcoming')->get();
        //return 'hello';
        return view('superadmin.existing', ['item' => $data1]);
    }
}
