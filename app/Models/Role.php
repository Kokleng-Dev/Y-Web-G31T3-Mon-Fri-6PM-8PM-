<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\RolePermission;
use App\Models\Permission;
use App\Models\PermissionFeature;
class Role extends Model
{
    public function role_permission(){
        return $this->hasMany(RolePermission::class, 'role_id', 'id');
    }
    public function permission(){
        return $this->hasManyThrough(Permission::class, RolePermission::class, 'role_id', 'id', 'id', 'permission_id');
    }
    public function permission_feature(){
        return $this->hasManyThrough(PermissionFeature::class, RolePermission::class, 'role_id', 'id', 'id', 'permission_feature_id');
    }
}
