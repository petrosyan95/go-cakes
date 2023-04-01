<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::query();
        if ($request->search) {
            $query->where('name_en', 'like', '%' . request('search') . '%');
        }
        if ($request->category && $request->category != 1) {
            $query->where('product_category_id', $request->category);
        }
        if ($request->taste) {
            $query->where('taste', $request->taste);
        }
        if ($request->min_price && $request->min_price > 0) {
            $query->where('price', '>', $request->min_price);
        }
        if ($request->max_price && $request->max_price > 0) {
            $query->where('price', '<', $request->max_price);
        }
        $products = $query->get();

        return view('index', compact('products'));

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
    public function show(int $id)
    {
        $product = Product::findOrFail($id);
        return view('separately', compact('product'));
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
    public function destroy(string $id)
    {
        //
    }
}
