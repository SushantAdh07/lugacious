<?php

namespace App\Services;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreServices{
    
    public function createStore(Request $request)
{
        $imagePath = $request->file('store_image')->store('images', 'public');
        

        Store::insert([
            'user_id'=>Auth::id(),
            'store_name'=> $request->store_name,
            'store_description'=> $request->store_description,
            'store_category'=>$request->store_category,
            'store_image'=>$imagePath,
            'store_followers'=>$request->store_followers,
            'store_insta'=>$request->store_insta,
            
        ]);
        return redirect()->route('home');
}
}