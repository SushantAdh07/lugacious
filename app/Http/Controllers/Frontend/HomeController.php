<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $stores = Store::latest()->get();
        return view('frontend.Body.hero', compact('stores'));
    }
}
