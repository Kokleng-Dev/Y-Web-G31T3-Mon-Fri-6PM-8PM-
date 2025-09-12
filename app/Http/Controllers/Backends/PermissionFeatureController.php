<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PermissionFeature;

class PermissionFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($permission_id)
    {
        //
        $permission_features = PermissionFeature::where('permission_id', $permission_id)->get();

        return view('backends.permission_features.index',compact('permission_features','permission_id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $permission_id = $request->permission_id;
        return view('backends.permission_features.create',compact('permission_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $permission_feature = new PermissionFeature();
        $permission_feature->name = $request->name;
        $permission_feature->key = $request->key;
        $permission_feature->permission_id = $request->permission_id;
        $permission_feature->save();

        return redirect()->route('permission_feature.index', $request->permission_id)->with('success', 'Create Successfully');
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
        $permission_feature = PermissionFeature::find($id);
        return view('backends.permission_features.edit',compact('permission_feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $permission_feature = PermissionFeature::find($id);
        $permission_feature->name = $request->name;
        $permission_feature->key = $request->key;
        $permission_feature->save();

        return redirect()->route('permission_feature.index', $permission_feature->permission_id)->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $permission_feature = PermissionFeature::find($id);
        $permission_feature->delete();

        return redirect()->route('permission_feature.index', $permission_feature->permission_id)->with('success', 'Delete Successfully');
    }
}
