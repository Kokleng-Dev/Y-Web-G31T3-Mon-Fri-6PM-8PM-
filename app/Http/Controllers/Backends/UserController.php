<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index(){

        $users = User::with('role')->get();

        return view('backends.users.index', ['users' => $users]);
    }

    public function create(){

        return view('backends.users.create',['roles' => Role::all()]);
    }

    public function store(Request $request){

        $new_user = new User;
        $new_user->name = $request->get('name');
        $new_user->email = $request->get('email');
        $new_user->password = bcrypt($request->get('password'));
        $new_user->role_id = $request->get('role_id');
        $new_user->save();

        return redirect()->route('user.index')->with('success', 'Create Successfully');
    }

    public function edit($id){
        return view('backends.users.edit', ['user' => User::find($id), 'roles' => Role::all()]);
    }

    public function update(Request $request, $id){
        $new_user = User::find($id);
        $new_user->name = $request->get('name');
        $new_user->email = $request->get('email');
        $new_user->role_id = $request->get('role_id');
        if($request->get('password') != null){
            $new_user->password = bcrypt($request->get('password'));
        }
        $new_user->save();

        return redirect()->route('user.index')->with('success', 'Update Successfully');
    }

    public function delete($id){
        User::find($id)->delete();
        return redirect()->route('user.index')->with('success', 'Delete Successfully');
    }
}
