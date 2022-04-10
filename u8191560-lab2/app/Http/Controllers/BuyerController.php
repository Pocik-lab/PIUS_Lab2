<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;

class BuyerController extends Controller
{
    public function index()
    {
        $customers = Buyer::all();
        return view('customers', compact('customers'));
    }
}
