<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with("image")->get();
        return view('dashbord.product.view', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashbord.product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        try {
            DB::beginTransaction();


            $products = $request->except("image");

            $image = $request->only("image");

            $data = Product::create($request->toArray());

            Image::saveImage($data->id, $image);


            DB::commit();
            return to_route("product.index");
        } catch (\Throwable $th) {
            DB::rollBack();
            return to_route("product.create");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('dashbord.product.edit', compact("product"));
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
        if ($request->hasFile('image')) {
            // $product=$request->except("_token","_method","image");
            // $image=$request->only("image");
            // Image::deleteImage($id);
            // Image::where("product_id",$id)->delete();
            // product::where("id",$id)->update($product);
            // Image::saveImage($id,$image["image"]);
            // return to_route("product.index");



            // Delete Old Image From DB And Storage
            Image::deleteImage($id);
            Image::where("product_id", $id)->delete();
            // 1-Select Request Except("_token", "_method", "image")->To Make Update For Just Product
            $product = $request->except("_token", "_method", "image");
            // 2-Select Only Image To Make a Update For Just It
            $image = $request->only("image");
            //Make Update And Save For Just Products
            product::where("id", $id)->update($product);
            //Make Update And Save For Just Images
            Image::saveImage($id, $image["image"]);
            // Back To Route 
            return to_route("product.index");
        } else {

            $data = $request->except("_token", "_method");
            Product::where("id", $id)->update($data);
            return to_route("product.index");
        }

        // return $request->$id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Image::deleteImage($id);
        Product::where("id", $id)->delete();
        return to_route("product.index");
    }
}
