<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\Permission;
use App\Models\PermissionFeature;

class RolePermissionController extends Controller
{
    public function role_permission($role_id){
        // left join
        $role = Role::find($role_id);

        // right join to see role with permission and permission feature
        $role_permissions = RolePermission::where('role_id', $role_id)->get();
        $permissions = Permission::with('permission_feature')->get();

        // $role_permissions = RolePermission::where('role_id', $role_id)
        //                         ->with('permission', 'permission_feature')->get();
        // dd($role_permissions);
        
        return view('backends.role_permissions.index', compact('role','permissions'));
    }

    public function set_role_permission(Request $r){
      // dd($r->all(), $r->role_id);

      // set permission
      $role_permissions = $r->role_permissions;

      // dd($role_permissions);

      foreach($role_permissions as $permission){
        if(isset($permission['features'])){
           foreach($permission['features'] as $feature){
            // check if this feature id is already exist
            $check = RolePermission::where(['role_id' => $r->role_id, 'permission_id' => $permission['permission_id'], 'permission_feature_id' => $feature['feature_id']])->first();
            if($check && !isset($feature['value'])){
              $check->delete();
            } else if(!$check && isset($feature['value']) && $feature['value'] == 1){
              $new_role_permission = new RolePermission();
              $new_role_permission->role_id = $r->role_id;
              $new_role_permission->permission_id = $permission['permission_id'];
              $new_role_permission->permission_feature_id = $feature['feature_id'];
              $new_role_permission->save();
            }
          }
        }
      }

      return redirect()->route('role_permission.index', $r->role_id)->with('success', 'Set Permission Successfully');
    }
}
