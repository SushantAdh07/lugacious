<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function storeDetails($id){
        $store = Store::findOrFail($id);
        return view('frontend.store.storedetails', compact('store'));
    }
}
