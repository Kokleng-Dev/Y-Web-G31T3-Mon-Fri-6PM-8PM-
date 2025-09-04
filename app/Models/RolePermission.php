<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\Permission;
use App\Models\PermissionFeature;
class RolePermission extends Model
{
    public function role(){
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function permission(){
        return $this->belongsTo(Permission::class, 'permission_id', 'id');
    }

    public function permission_feature(){
        return $this->belongsTo(PermissionFeature::class, 'permission_feature_id', 'id');
    }
}
