<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    public function index(Request $r)
    {
        // // create a session with key = testing
        // $r->session()->put('testing','Hello world');

        // // // raw php
        // // $x = $_SESSION['testing'];

        // dd($r->session()->get('testing'));
        // Session::put('testing','hello world 123');

        // Session::put('testing','123');
        // Session::forget('testing');
        // dd(Session::has('testing'));

        // session()->flash('success','123');
        // return redirect()->route('product.index')->with('success','123');
        return view('backends.home.index');
    }
}
