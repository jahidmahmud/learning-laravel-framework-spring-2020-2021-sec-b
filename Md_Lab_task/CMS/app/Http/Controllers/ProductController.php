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
        return redirect()->route('product.index');
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
    public function edit($id)
    {
        $product = Product::find($id);
        return view('superadmin.editform')->with('product', $product);
    }
    public function editconfirm($id, Request $req)
    {
        $product = Product::find($id);
        $product->product_name = $req->product_name;
        $product->quantity = $req->quantity;
        $product->price = $req->price;
        $product->status = $req->status;
        $product->category_name = $req->category_name;
        $product->save();
        return redirect()->route('product.existing');
    }
    public function delete($id)
    {
        $product = Product::find($id);
        return view('superadmin.deleteform')->with('product', $product);
    }
    public function deleteconfirm($id)
    {
        if (Product::destroy($id)) {
            return redirect()->route('product.existing');
        }
    }
    public function details($id)
    {
        $product = Product::find($id);
        return view('superadmin.detailsform')->with('product', $product);
    }
    public function sort(Request $req)
    {
        if ($req->sort == 'date') {
            $product = Product::where('status', 'existing')->orderBy('created_at', 'DESC')->get();
            return view('superadmin.existing', ['item' => $product]);
        } elseif ($req->sort == 'quantity') {
            $product = Product::where('status', 'existing')->orderBy('quantity', 'DESC')->get();
            return view('superadmin.existing', ['item' => $product]);
        } elseif ($req->sort == 'category') {
            $product = Product::where('status', 'existing')->orderBy('category_name', 'DESC')->get();
            return view('superadmin.existing', ['item' => $product]);
        }
    }
}
