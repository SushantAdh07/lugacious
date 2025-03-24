<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Store;
use Illuminate\Http\Request;


class StoreController extends Controller
{
    public function newStore(){
        return view('frontend.store.createstore');
    }
    
    public function storeDetails($id){
        $store = Store::findOrFail($id);
        return view('frontend.store.storedetails', compact('store'));
    }

    public function createStore(Store $store, StoreRequest $request){
        $store->create($request->validated());

        return redirect()->back();
    }

    
}
