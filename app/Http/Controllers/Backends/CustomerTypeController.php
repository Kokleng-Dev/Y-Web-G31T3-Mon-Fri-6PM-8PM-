<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerType;

class CustomerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer_types = CustomerType::paginate(10);

        return view('backends.customer_types.index',compact('customer_types'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backends.customer_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $new_customer_type = new CustomerType;
        $new_customer_type->name = $request->get('name');
        $new_customer_type->save();
        return redirect()->route('customer_type.index')->with('success', 'Create Successfully');
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
        $customer_type = CustomerType::find($id);
        return view('backends.customer_types.edit',compact('customer_type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $new_customer_type = CustomerType::find($id);
        $new_customer_type->name = $request->get('name');
        $new_customer_type->save();
        return redirect()->route('customer_type.index')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        CustomerType::find($id)->delete();
        return redirect()->route('customer_type.index')->with('success', 'Delete Successfully');
    }
}
