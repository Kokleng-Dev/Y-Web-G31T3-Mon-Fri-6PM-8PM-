<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use Validator;
use Storage;

class ProductController extends Controller
{
    public function index(){
        
        $products = Product::with('category')->paginate(20);


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
            'photo'=>'mimes:jpg,png,jpeg,webp|max:2048'

        ]);

        if($validation->fails()){
            // dd( $validation->errors());
            return redirect()->back()->withErrors($validation)->withInput();
        }

        // if($r->hasFile('photo')){
        //     $validation = Validator::make($r->all(),[
        //     ]);

        //     if($validation->fails()){
        //         return redirect()->back()->withErrors($validation)->withInput();
        //     }
        // }

        $photo = '';
        if($r->hasFile('photo')){
            $photo = $r->file('photo')->store('products','custom');
        }

        // delete photo
        // Storage::disk('custom')->delete($photo);
        // $photo = '';
        

        

        $product = new Product();
        $product->name = $r->get('name');
        $product->price = $r->price;
        $product->product_category_id = $r->product_category_id;
        $product->qty = $r->qty;
        $product->photo = $photo;
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }
}
