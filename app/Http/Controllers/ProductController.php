<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAll()
    {
        $response;

        try {
            $response = response()->json(Product::all(), 200);
        } catch (QueryException $exception) {
            $response = response()->json($exception->getMessage(), 400);
        }

        return $response;
    }

    public function saveProduct(Request $request)
    {
        $response;

        try {
            Product::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'img_product' => $request->img_product,
            ]);

            $response = response()->json('Product created successfully', 200);
        } catch (QueryException $exception) {
            $response = response()->json($exception->getMessage(), 400);
        }

        return $response;
    }

    public function editProduct(Request $request, $id)
    {
        $response;
        $product = Product::find($id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->img_product = $request->img_product;

        try {
            $product->save();
            $response = response()->json("Updated successfully", 200);
        } catch (QueryException $exception) {
            $response = response()->json($exception->getMessage(), 400);
        }

        return $response;
    }

    public function deleteProduct($id)
    {
        $response;
        $product = Product::find($id);
        
        try {
            $product->delete();
            $response = response()->json("Deleted successfully", 200);
        } catch (QueryException $exception) {
            $response = response()->json($exception->getMessage(), 400);
        }

        return $response;
    }

    public function getProduct($id)
    {
        $response;

        try {
            $response = response()->json(Product::find($id), 200);
        } catch (QueryException $exception) {
            $response = response()->json($exception->getMessage(), 400);
        }

        return $response;
    }

}
