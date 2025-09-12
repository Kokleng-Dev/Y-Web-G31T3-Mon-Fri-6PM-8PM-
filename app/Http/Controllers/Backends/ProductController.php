<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Shop;
use Validator;
use Storage;

class ProductController extends Controller
{
    public function index(){
        
        $products = Product::with('category','shop')->paginate(20);

        $shops = Shop::all();

        return view('backends.products.index', ['products' => $products, 'shops' => $shops]);
    }

    public function create(){

        $categories = ProductCategory::all();
        $shops = Shop::all();

        return view('backends.products.create', ['categories' => $categories, 'shops' => $shops]);
    }
    public function store(Request $r){
        $validation = Validator::make($r->all(),[
            'name' => 'required|string',
            'price' => 'required|numeric',
            'product_category_id' => 'required|integer',
            'qty' => 'required|integer',
            'photo'=>'mimes:jpg,png,jpeg,webp|max:2048',
            'shop_id' => 'required|integer'
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
        $product->shop_id = $r->shop_id;
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = ProductCategory::all();
        $shops = Shop::all();
        return view('backends.products.edit', ['product' => $product, 'categories' => $categories, 'shops' => $shops]);
    }

    public function update(Request $r, $id){
        $validation = Validator::make($r->all(),[
            'name' => 'required|string',
            'price' => 'required|numeric',
            'product_category_id' => 'required|integer',
            'qty' => 'required|integer',
            'photo'=>'mimes:jpg,png,jpeg,webp|max:2048',
            'shop_id' => 'required|integer'
        ]);

        if($validation->fails()){
            // dd( $validation->errors());
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $product = Product::find($id);
        $product->name = $r->get('name');
        $product->price = $r->price;
        $product->product_category_id = $r->product_category_id;
        $product->qty = $r->qty;
        $product->shop_id = $r->shop_id;
        if($r->hasFile('photo')){
            if(Storage::disk('custom')->exists($product->photo)){
                Storage::disk('custom')->delete($product->photo);
            }
            $product->photo = $r->file('photo')->store('products','custom');
        }
        $product->save();
        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    public function delete($id){
        $product = Product::find($id);
        if(Storage::disk('custom')->exists($product->photo)){
            Storage::disk('custom')->delete($product->photo);
        }
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
