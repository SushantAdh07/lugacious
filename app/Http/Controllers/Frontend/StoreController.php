<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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

    public function createStore(Request $request){
        Store::insert([
            'store_name'=>$request->store_name,
            'store_description'=>$request->store_description,
            'store_category'=>$request->store_category,
            'store_image' =>$request->store_image,
            'store_followers'=>$request->store_followers,
            'store_insta'=>$request->store_insta,
        ]);

        return redirect()->back();
    }

    
}
