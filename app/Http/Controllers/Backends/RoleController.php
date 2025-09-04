<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('backends.roles.index', ['roles' => $roles]);
    }

    public function create(){
        return view('backends.roles.create');
    }

    public function store(Request $request){
        $new_role = new Role;
        $new_role->name = $request->get('name');
        $new_role->note = $request->get('note');
        $new_role->save();
        return redirect()->route('role.index')->with('success', 'Create Successfully');
    }

    public function edit($id){
        $role = Role::find($id);
        return view('backends.roles.edit', ['role' => $role]);
    }

    public function update(Request $request, $id){
        $new_role = Role::find($id);
        $new_role->name = $request->get('name');
        $new_role->note = $request->get('note');
        $new_role->save();
        return redirect()->route('role.index')->with('success', 'Update Successfully');
    }

    public function delete($id){
        // if user has this role
        $users = User::where('role_id', $id)->exists();
        if($users){
            return redirect()->route('role.index')->with('error', 'This role has users');
        }
        Role::find($id)->delete();
        return redirect()->route('role.index')->with('success', 'Delete Successfully');
    }
}
