<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PermissionFeature;

class Permission extends Model
{
    public function permission_feature(){
        return $this->hasMany(PermissionFeature::class, 'permission_id', 'id');
    }
}
