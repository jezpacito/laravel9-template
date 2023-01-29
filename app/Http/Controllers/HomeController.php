<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $salesWholesale = Purchase::where('pricing_type', '=', 'wholesale_price');
        $salesRegular = Purchase::where('pricing_type', '=', 'regular_price');
        $salesOverall = Purchase::sum('total_amount');
        $totalItemSold = Purchase::sum('total_product');
        $totalItems = Product::count();

        return view('home', compact('salesWholesale', 'salesRegular', 'salesOverall', 'totalItemSold', 'totalItems'));
    }
}
