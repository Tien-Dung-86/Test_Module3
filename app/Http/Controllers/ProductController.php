<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('backend.products.list', compact('products'));
    }

    public function create()
    {
        return view('backend.products.create');
    }


    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('img', 'public');
            $product->image = $path;
        }
        $product->type = $request->input('type');
        $product->save();
        $message = "Tạo mới sản phẩm $request->name thành công";
        session::flash('success', $message);
        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.products.update', compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('img', 'public');
            $product->image = $path;
        }
        $product->type = $request->input('type');
        $product->save();
        $message = "Tạo mới sản phẩm $request->name thành công";
        session::flash('success', $message);
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        $message = "Xóa sản phẩm thành công";
        session::flash('success', $message);
        return redirect()->route('products.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('products.index');
        }
        $products = Product::where('name', 'LIKE', '%' . $keyword . '%');
        return view('products.list', compact('products'));
    }
}
