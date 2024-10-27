<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);
        $data = $request->all();

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('productsimages'), $imageName);

        $data['image'] = 'productsimages/'.$imageName;

        Product::create($data);
        return redirect()->route('products.index')
                         ->with('success', 'Product created successfully.');
    }

    // public function show(Product $product)
    // {
    //     return view('products.show', compact('product'));
    // }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);
        $data = $request->all();

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('productsimages'), $imageName);

        $data['image'] = 'productsimages/'.$imageName;

        $product->update($data);
        return redirect()->route('products.index')
                         ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                         ->with('success', 'Product deleted successfully.');
    }
}
