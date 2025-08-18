<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
    public function index(){
        # select * from customers
        // $customers = DB::table('customers')->get();

        # select columns from customers
        // $customers = DB::table('customers')->select('full_name as name','phone')->get();

        # select * from customers limit 1 offset 0

        // $customers = DB::table('customers')->select('phone')->first();

        // $customers = DB::table('customers')->orderBy('id','desc')->first();

        // $customers = DB::table('customers')->find(1);

        // $customers = DB::table('customers')->where('full_name','like','%te%')->get();
        // $customers = DB::table('customers')->where('id',1)->first();
        // $customers = DB::table('customers')->whereBetween('id',[1,5])->get();
        // $customers = DB::table('customers')->limit(1)->offset(1)->first();

        // $insert = DB::table('customers')->insert([
        //     'full_name' => 'customer 3',
        //     'phone' => '0123456789',
        //     'address' => 'address 3'
        // ]);

        // $insert = DB::table('customers')->insertGetId([
        //     'full_name' => 'customer 3',
        //     'phone' => '0123456789',
        //     'address' => 'address 3'
        // ]);

        // dd($insert);

        // DB::table('customers')->where('id',2)->update([
        //     'full_name' => 'this is update ',
        //     'phone' => '888888888',
        //     'address' => 'address update'
        // ]);

        // DB::table('customers')->delete();
        // DB::table('customers')->truncate();

        // dd($customers);


        return view('backends.customers.index');
    }
}
