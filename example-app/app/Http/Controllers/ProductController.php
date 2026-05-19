<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Menampilkan semua data produk
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    // Form tambah data
    public function create()
    {
        return view('products.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        return redirect('/products');
    }

    // Menampilkan detail satu data
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    // Form edit data
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    // Mengubah data di database
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        return redirect('/products');
    }

    // Menghapus data dari database
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
}