<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;
use Storage;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!checkPermission('shop','view')){
            return redirect()->back()->with('error','You do not have permission');
        }
        //
        $shops = Shop::paginate(10);
        return view('backends.shops.index',compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
          if(!checkPermission('shop','create')){
            return redirect()->back()->with('error','You do not have permission');
        }

        return view('backends.shops.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
          if(!checkPermission('shop','create')){
            return redirect()->back()->with('error','You do not have permission');
        }

        $shop = new Shop();
        $shop->name = $request->name;
        $shop->phone = $request->phone;
        $shop->note = $request->note;
        $shop->photo = $request->hasFile('photo') ? $request->file('photo')->store('shops','custom') : '';
        $shop->save();
        return redirect()->route('shop.index')->with('success','Shop created successfully');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
          if(!checkPermission('shop','edit')){
            return redirect()->back()->with('error','You do not have permission');
        }

        $shop = Shop::find($id);
        return view('backends.shops.edit',compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
          if(!checkPermission('shop','edit')){
            return redirect()->back()->with('error','You do not have permission');
        }

        $shop = Shop::find($id);
        $shop->name = $request->name;
        $shop->phone = $request->phone;
        $shop->note = $request->note;
        if($request->hasFile('photo')) {
            if(Storage::disk('custom')->exists($shop->photo)){
                Storage::disk('custom')->delete($shop->photo);
            }
            $shop->photo = $request->file('photo')->store('shops','custom');
        }
        $shop->save();
        return redirect()->route('shop.index')->with('success','Shop created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        if(!checkPermission('shop','delete')){
            return redirect()->back()->with('error','You do not have permission');
        }

        $shop = Shop::find($id);
        if(Storage::disk('custom')->exists($shop->photo)){
            Storage::disk('custom')->delete($shop->photo);
        }
        $shop->delete();
        return redirect()->route('shop.index')->with('success','Shop deleted successfully');
    }
}
