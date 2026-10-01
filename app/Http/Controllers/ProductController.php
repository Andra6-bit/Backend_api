<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private function rules(): array
    {
        return [
            'name'  => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
        ];
    }

    public function index()
    {
        return response()->json(Product::all());
    }

    public function show(Product $product)
    {
        return response()->json($product);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->validate($this->rules()));

        return response()->json($product, 201);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->validate($this->rules()));

        return response()->json($product);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json(['message' => 'Produk dihapus']);
    }
}