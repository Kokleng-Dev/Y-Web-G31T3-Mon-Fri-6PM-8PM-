<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Customer;

use App\Exports\CustomersExport;
use App\Exports\CustomersDownload;
use App\Imports\ImportsCustomer;
use Maatwebsite\Excel\Facades\Excel;


class CustomerController extends Controller
{
    public function export_excel(){
        return Excel::download(new CustomersExport, 'customers.xlsx');
    }

    public function import_excel(Request $r){
        Excel::import(new ImportsCustomer, $r->file('excel'));
        return redirect()->back()->with('success','Import Successfully');
    }
    public function download(){
        // download existing excel
        return Excel::download(new CustomersDownload, 'customers_example.xlsx');
    }
    public function index(Request $request){

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

        // for($i=1;$i <=50; $i++){
        //     $insert = DB::table('customers')->insert([
        //         'full_name' => 'customer ' . $i,
        //         'phone' => random_int(1000000000,9999999999),
        //         'address' => 'address ' . $i
        //     ]);
        // }

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

        // $customers = DB::table('customers')
        //             ->select('customers.*','customer_types.name as customer_type_name')
        //             ->leftJoin('customer_types','customers.customer_type_id','=','customer_types.id')
        //             ->paginate($request->get('per_page',10));

        $customers = Customer::leftJoin('customer_types', 'customers.customer_type_id', '=', 'customer_types.id')
            ->select('customers.*', 'customer_types.name as customer_type_name')
            ->paginate($request->get('per_page', 10));

        $customer_types = DB::table('customer_types')->get();

        $customer = null;

        if($request->has('id')){
            $customer = DB::table('customers')->find($request->get('id'));
        }


        return view('backends.customers.index',['customers' => $customers,'customer_types' => $customer_types, 'customer' => $customer]);
    }

    public function create(Request $request){

        try {
            // query builder 
            // $i = DB::table('customers')->insert($request->except('_token'));

            // orm 
            // $customer = new Customer;
            // $customer->full_name = $request->get('full_name');
            // $customer->phone = $request->get('phone');
            // $customer->address = $request->get('address');
            // $customer->customer_type_id = $request->get('customer_type_id');

            // $i = $customer->save();


            // orm 
            // dd($request->except('_token'));
            $i = Customer::create($request->except('_token'));

            if($i){
                return redirect()->route('customer.index')->with('success', 'Create Successfully');
            } 
            
            return redirect()->route('customer.index')->with('error', 'Create Failed');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('customer.index')->with('error', 'Create Failed: ' . $th->getMessage());
        }
    }

    public function update(Request $request, $id){

        try {
            // query builder 
            // $i = DB::table('customers')->where('id',$id)->update($request->except('_token'));

            // orm 
            // $customer = Customer::find($id);
            // $customer->full_name = $request->get('full_name');
            // $customer->phone = $request->get('phone');

            // $i = $customer->save();

            $i = Customer::where('id',$id)->update($request->except('_token'));

            if($i){
                return redirect()->route('customer.index')->with('success', 'Update Successfully');
            } 
            
            return redirect()->route('customer.index')->with('error', 'Update Failed');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('customer.index')->with('error', 'Update Failed: ' . $th->getMessage());
        }
    }

    public function delete(Request $request, $id){
        $d = DB::table('customers')->where('id',$id)->delete();


        return redirect()->route('customer.index')->with('success', 'Delete Successfully');
    }

    public function test(Request $r){

        DB::beginTransaction(); // Start the transaction
        try {
            $id = DB::table('customer_types')->insertGetId([
                'name' => 'type test 1231'
            ]);

            DB::table('customers')->insert([
                'customer_type_id' => $id,
                'full_name' => 'test 123',
                'asdsa' => 123
            ]);
            

            DB::commit(); // Commit the transaction if all operations succeed
        } catch (\Exception $e) {
            DB::rollBack(); // Roll back the transaction if an error occurs
            // Handle the exception
        }
    }
}
