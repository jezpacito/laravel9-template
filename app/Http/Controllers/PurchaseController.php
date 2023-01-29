<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.purchases.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $prices = Purchase::$prices;

        return view('pages.purchases.create', compact('products', 'prices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        if ($request->pricing_type === 'wholesale_price') {
            $price = $product->wholesale_price;
        } else {
            $price = $product->regular_price;
        }

        if ($request->total_product > $product->stocks_available) {
            return redirect()->back()->withErrors(['Insufficient stocks, '.'current available: '.$product->stocks_available]);
        }

        DB::transaction(function () use ($product, $request, $price) {
            $decreasedStocks = $product->stocks_available - $request->total_product;
            // dd($decreasedStocks);
            $product->update(['stocks_available' => $decreasedStocks]);
            $totalAmount = $request->total_product * $price;

            Purchase::create(array_merge($request->all(), [
                'price_per_pcs' => $price,
                'total_amount' => $totalAmount,
            ]));
        });

        return redirect()->route('purchases.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
