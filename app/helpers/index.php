<?php

// $my_title = "home";

function my_title(){
  return "home";
}

function testing($txt){
  return $txt . " 123";
}



function auth_data(){

  return DB::table('users')->find(auth()->user()->id);
}
function test(){
  return '10';
}

function checkPermission($permission_key,$feature_key){

  $role_id = auth()->user()->role_id;

  // check permission
  $permission = DB::table('permissions')->where('key', $permission_key)->first();
  if(!$permission){
    return false;
  }
  
  $feature = DB::table('permission_features')->where([
    'key' => $feature_key,
    'permission_id' => $permission->id
  ])->first();

  if (!$feature){
    return false;
  }

  // dd($feature, $permission);
  $is_permission_exist = DB::table('role_permissions')->where([
    'role_id' => $role_id,
    'permission_id' => $permission->id,
    'permission_feature_id' => $feature->id
  ])->exists();

  return $is_permission_exist;

}
