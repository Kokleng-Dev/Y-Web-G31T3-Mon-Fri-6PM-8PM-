<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class LanguageController extends Controller
{
    public function locale($locale){
        Session::put('locale', $locale);

        return redirect()->back();
    }
}
