<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;
use Illuminate\Support\Facades\DB;

class BuyerController extends Controller
{
    public function index(Request $request)
    {
        $customers = DB::table('buyers')->simplePaginate(25);
    
        if($request->filled('name')) {
            $customers = DB::table('buyers')->where('name', 'like', "$request->name")->simplePaginate(25);
        }
        if($request->filled('surname')) {
            $customers = DB::table('buyers')->where('surname', 'like', "$request->surname")->simplePaginate(25);
        }
        if($request->filled('email')) {
            $customers = DB::table('buyers')->where('email', 'like', "$request->email%")->simplePaginate(25);
        }
        if($request->filled('phone')) {
            $customers = DB::table('buyers')->where('phone', 'like', "$request->phone")->simplePaginate(25);
        }
        if($request -> has('isBlocked')) {
            $customers = DB::table('buyers')->where('blocked', $request->isBlocked)->simplePaginate(25);
        }
        
        return view('customers', ['customers' => $customers]);
    }

    public function currCustomer($id)
    {
        $customers = DB::table('buyers')->where('id', '=', $id)->get();
        $adresses = DB::table('adresses')->where('buyer_id', '=', $id)->orderByRaw('add_time DESC')->get();
        return view('current_customer', ['customers' => $customers, 'adresses' => $adresses]);
    }
}
