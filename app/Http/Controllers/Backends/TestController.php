<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\Test;
use App\Models\CustomerType;

class TestController extends Controller
{
    public function test(){
        // use queue 
        Test::dispatch();
        //  for($i=0; $i<1000000; $i++){
        //     $new_customer_type = new CustomerType;
        //     $new_customer_type->name = 'Customer Type '.$i;
        //     $new_customer_type->save();
        // }
        return redirect()->route('home')->with('success', 'Test Successfully');
    }
}
