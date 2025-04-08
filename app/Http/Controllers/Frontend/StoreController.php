<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Store;
use App\Repositories\Interfaces\StoreRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class StoreController extends Controller
{
    protected $storeRepository;
    public function __construct(StoreRepositoryInterface $storeRepository)
    {
        $this->storeRepository = $storeRepository;
    }

    public function newStore(){
        return view('frontend.store.createstore');
    }
    
    public function storeDetails($id){
        $store = $this->storeRepository->find($id);

        if(!$store){
            return view('errors.404');
        }
        return view('frontend.store.storedetails', compact('store'));
    }

    public function createStore(StoreRequest $request)
    {
            $data = $request->validated();

            if ($request->hasFile('store_image')){
                $imagePath = $request->file('store_image')->store('images', 'public');
                $data['store_image'] = $imagePath;
            }

            $data['user_id'] = Auth::id();

            $this->storeRepository->create($data);
            
            return redirect()->route('home');
    }

    public function deleteStore($id){
        $this->storeRepository->delete($id);
        return redirect()->route('home');
    }
  
}
