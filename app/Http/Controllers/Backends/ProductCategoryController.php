<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    //
    public function index(){
        $categories = ProductCategory::all();
        return view('backends.product_categories.index', ['product_categories' => $categories]);
    }
    public function create(){
        return view('backends.product_categories.create');
    }
    public function edit($id){
        $category = ProductCategory::find($id);
        return view('backends.product_categories.edit', ['product_category' => $category]);
    }
    public function store(Request $request){
        $category = new ProductCategory();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('product_category.index')->with('success', 'Create Successfully');
    }
    public function update(Request $request, $id){
        $category = ProductCategory::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('product_category.index')->with('success', 'Update Successfully');
    }
    public function delete($id){
        $category = ProductCategory::find($id);
        $category->delete();
        return redirect()->route('product_category.index')->with('success', 'Delete Successfully');
    }
}
