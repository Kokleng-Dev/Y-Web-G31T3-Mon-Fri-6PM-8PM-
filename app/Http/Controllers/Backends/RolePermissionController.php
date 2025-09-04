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
        $isNew = false;
        if($role_permissions->isEmpty()){
          $isNew = true;
          // give default permission and permission feature
          $role_permissions = Permission::with('permission_feature')->get();
        } else {
          $role_permissions = RolePermission::where('role_id', $role_id)
                                ->with('permission', 'permission_feature')->get();
        }

        
        return view('backends.role_permissions.index', compact('role', 'role_permissions','isNew'));
    }
}
