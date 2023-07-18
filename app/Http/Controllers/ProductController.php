<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = $request->post();

        $product = new Product();
        $product->product_name = $post['productName'];
        $product->product_description = $post['description'];
        $product->price = $post['price'];
        $product->image_url = "";

        $product->save();

        return redirect("/product");
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
        return view('product.edit', ["product" => Product::all()->where("id", "=", $id)->first()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            "productCode" => "required",
            "productName" => "required",
            "description" => "required",
            "price" => "required",
        ]);

        $post = $request->post();

        $product = Product::all()->where("id", "=", $post['productCode'])->first();
        $product->product_name = $post["productName"];
        $product->product_description = $post["description"];
        $product->price = $post["price"];
        $product->save();

        return redirect("/product/edit/" . $post['productCode']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy([$id]);
        return redirect("/product");
    }
}
