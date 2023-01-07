<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::paginate(20);
        $total_product = Product::count();
        $search_key  = $request->query('search_key');

        return view('admin.product.index', compact('products', 'total_product', 'search_key'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
//        $request->validate([
//            'title' => 'required|string|max:255',
//            'price' => 'required|numeric',
//        ]);

        $product = new Product();

//        $product->title = $request->title;
//        $product->price = floatval($request->price);
//        $product->save();

        $data = $request->only($product->getFillable());
        $data['price'] = floatval($data['price']);
        if ($request->hasFile('image')) {
            $path = $request->image->store('public/uploads');
            $data['image'] = $path ?: '';
        }
        $product->fill($data)->save();
        return redirect()->route('products.index')->with('success', 'Product has been created');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
       return view("admin.product.edit", ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product has been edited');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('success', 'Product has been deleted');
    }
}