<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use PhpParser\Builder\Property;
use Illuminate\Auth\Events\Validated;
use App\Models\Ecommerce_channel;
use App\Models\Social_media_channel;
use App\Models\Physical_store_channel;
use Validator;
use PDF;


use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function physicalStore()
    {
        //jnhfudhsugfh
        $maxvaue = Physical_store_channel::max('total_price');
        $data = Physical_store_channel::where('total_price', $maxvaue)->get();
        $data1 = Physical_store_channel::whereDate('created_at', today())->get();
        $date = \Carbon\Carbon::today()->subDays(7);
        $data2 = Physical_store_channel::where('created_at', '>=', $date)->get();
        return \view('superadmin.physicalstore', ['data1' => $data1, 'data2' => $data2, 'data3' => $data]);
    }

    public function mediastore()
    {
        $data1 = Social_media_channel::whereDate('created_at', today())->get();
        $date = \Carbon\Carbon::today()->subDays(7);
        $data2 = Social_media_channel::where('created_at', '>=', $date)->get();
        return \view('superadmin.mediastore', ['data1' => $data1, 'data2' => $data2]);
    }

    public function ecommercestore()
    {
        $data1 = Ecommerce_channel::whereDate('created_at', today())->get();
        $date = \Carbon\Carbon::today()->subDays(7);
        $data2 = Ecommerce_channel::where('created_at', '>=', $date)->get();
        return \view('superadmin.ecommercestore', ['data1' => $data1, 'data2' => $data2]);
    }

    public function salesLog()
    {
        return \view('superadmin.salesLog');
    }
    public function salesLogData(Request $request)
    {
        $validation = validator::make($request->all(), [
            'customer_name' => 'required|max:30|min:3',
            'address' => 'required|max:50|min:3',
            'phone' => 'required|min:11|max:15',
            'product_id' => 'required',
            'product_name' => 'required',
            'unit_prics' => 'required|min:0',
            'quantity' => 'required|max:20|min:0',
            'total_price' => 'required|min:0',
            'payment_type' => 'required|max:5',
            'status' => 'required',
        ]);
        if ($validation->fails()) {
            return redirect()->route('Sales.physical.salesLog')->with('errors', $validation->errors())->withInput();
        }

        $data = new Physical_store_channel();

        $data->customer_name = $request->customer_name;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->product_id = $request->product_id;
        $data->product_name = $request->product_name;
        $data->unit_prics = $request->unit_prics;
        $data->quantity = $request->quantity;
        $data->total_price = $request->total_price;
        $data->payment_type = $request->payment_type;
        $data->status = $request->status;
        $data->save();
        return \back()->with('success', 'Successfully Done');
    }
    public function loggs()
    {
        return view('superadmin.log');
    }
    public function soldlog()
    {
        $physicalStore = Physical_store_channel::where('status', 'sold')->get();
        return view('superadmin.soldtable')->with('store', $physicalStore);
    }
    public function loggspending()
    {
        $physicalStore = Physical_store_channel::where('status', 'pending')->get();
        return view('superadmin.soldtable')->with('store', $physicalStore);
    }
    public function alltable()
    {
        $physicalStore = Physical_store_channel::all();
        return view('superadmin.soldtable')->with('store', $physicalStore);
    }
    public function upload()
    {
        return view('superadmin.upload');
    }

    public function download()
    {
        $data = Physical_store_channel::all();
        view()->share('Sales', $data);
        $pdf = PDF::loadView('superadmin.pdf_share', $data);
        return $pdf->download('pdf_file.pdf');
    }
}
