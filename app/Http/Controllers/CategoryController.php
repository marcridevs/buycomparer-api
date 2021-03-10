<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /* Get all the categories of DB */
    public function getAll() {
        return response()->json(Category::all(), 200);
    }

    /* Get the info of one category */
    public function getCategory($id) {
        $category = Category::find($id);
        $code = 200;

        if(!$category) 
            $code = 404;

        return response()->json($category, $code);
    }

    /* Add a new category */
    public function saveCategory(Request $request) {
        $category = Category::create(array(
            'name' => $request->name
        ));
        $category->save();
        return response()->json("The category has been created", 200);
    }

    /* Edit a category */
    public function editCategory($id, Request $request) {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
    }

    /* Delete a category (Logical deletion) */
    public function deleteCategory($id) {
        $category = Category::find($id);
        $category->delete();
    }
}
