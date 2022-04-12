<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;
use Illuminate\Support\Facades\DB;

class BuyerController extends Controller
{
    public function index()
    {
        return view('customers', ['customers' => DB::table('buyers')->simplePaginate(25)]);
    }

    public function currCustomer($id)
    {
        $customers = DB::table('buyers')->where('id', '=', $id)->get();
        $adresses = DB::table('adresses')->where('buyer_id', '=', $id)->orderByRaw('add_time DESC')->get();
        return view('current_customer', ['customers' => $customers, 'adresses' => $adresses]);
    }
}
