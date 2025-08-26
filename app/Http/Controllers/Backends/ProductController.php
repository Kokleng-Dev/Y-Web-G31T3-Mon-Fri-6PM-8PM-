<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use Validator;
class ProductController extends Controller
{
    public function index(){
        
        $products = Product::with('category')->paginate(2);


        return view('backends.products.index', ['products' => $products]);
    }

    public function create(){

        $categories = ProductCategory::all();

        return view('backends.products.create', ['categories' => $categories]);
    }
    public function store(Request $r){
        $validation = Validator::make($r->all(),[
            'name' => 'required|string',
            'price' => 'required|numeric',
            'product_category_id' => 'required|integer',
            'qty' => 'required|integer',
        ]);

        if($validation->fails()){
            // dd( $validation->errors());
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $product = new Product();
        $product->name = $r->get('name');
        $product->price = $r->price;
        $product->product_category_id = $r->product_category_id;
        $product->qty = $r->qty;
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }
}
