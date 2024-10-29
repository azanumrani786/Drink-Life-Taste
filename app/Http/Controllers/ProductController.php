<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

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

    public function generatePDF()
    {
        $products = Product::all();
        
        // Set the binary path with quotes
        $pdf = PDF::loadView('product.pdf', compact('products'))
                ->setPaper('a4')
                ->setOption('margin-top', '0mm')
                ->setOption('margin-bottom', '0mm')
                ->setOption('binary', 'C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf.exe'); // Here is the change

        return $pdf->download('product.pdf');
    }
}
