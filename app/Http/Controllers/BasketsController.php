<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BasketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id = null)
    {
        if ($id != null){
            $product = Product::select('name_en','price', 'id')->findOrFail($id);
            Basket::create([
                'name'=> $product->name_en,
                'price'=> $product->price,
                'product_id'=> $product->id,
            ]);
        }
        $basket = Basket::all();
        return view('basket', compact('basket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $basket = Basket::findOrFail($id);
        $basket->delete();
        return redirect(route('basket'));
    }
}
