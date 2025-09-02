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
