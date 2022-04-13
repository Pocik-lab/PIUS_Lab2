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

        $query = Buyer::query();
        $query->when($request->filled('name'), function ($q) use ($request) {
            $q->where('name', 'like', $request->name);
        });
        $query->when($request->filled('surname'), function ($q) use ($request) {
            $q->where('surname', 'like', $request->surname);
        });
        $query->when($request->filled('email'), function ($q) use ($request) {
            $q->where('email', 'like', $request->email);
        });
        $query->when($request->filled('phone'), function ($q) use ($request) {
            $q->where('phone', 'like', $request->phone);
        });
        $query->when($request->filled('blocked'), function ($q) use ($request) {
            $q->where('blocked', $request->blocked);
        });

        $customers = $query->simplePaginate(25);

        return view('customers', ['customers' => $customers]);
    }


    public function currCustomer($id)
    {
        $customers = DB::table('buyers')->where('id', '=', $id)->get();
        $adresses = DB::table('adresses')->where('buyer_id', '=', $id)->orderByRaw('add_time DESC')->get();
        return view('current_customer', ['customers' => $customers, 'adresses' => $adresses]);
    }
}
