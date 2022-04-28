<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'Human Admin') {
            $products = Product::where('type', 1)->get();
        } else if (auth()->user()->role == 'Animal Admin') {
            $products = Product::where('type', 2)->get();
        } else {
            $products = Product::all();
        }

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $product = new Product();

        return view('products.create', compact('product'));
    }

    public function store(ProductRequest $request)
    {
        $product = auth()->user()->products()->create([
            'luo_name' => $request->post('luo_name'),
            'scientific_name' => $request->post('scientific_name'),
            'type' => $request->post('type'),
            'treatment' => $request->post('treatment')
        ]);

        return redirect()->route('products.index')->withStatus(__($product->luo_name . ' successfully created.'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Product $product, ProductRequest $request)
    {
        $product->update($request->all('luo_name', 'scientific_name', 'type', 'treatment'));

        return redirect()->route('products.index')->withStatus(__($product->luo_name . ' successfully updated.'));
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->withStatus(__('Product successfully deleted.'));
    }
}
