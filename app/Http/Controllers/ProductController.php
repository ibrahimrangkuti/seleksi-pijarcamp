<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|min:3',
            'keterangan' => 'required|min:6',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        Product::create([
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ]);

        return redirect(route('product.index'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $product->nama_produk = $request->nama_produk;
        $product->keterangan = $request->keterangan;
        $product->harga = $request->harga;
        $product->jumlah = $request->jumlah;
        $product->update();

        return redirect(route('product.index'));
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect(route('product.index'));
    }
}
