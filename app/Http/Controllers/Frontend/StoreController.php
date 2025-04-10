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

    public function feed(){
        $links = [
            'https://www.instagram.com/trendy_corner02',
            'https://www.instagram.com/dreamclosetnp',
            'https://www.instagram.com/street___kulture',
            'https://www.instagram.com/avenue_outlet',
            'https://www.instagram.com/dresscamp_mens_officials',
            'https://www.instagram.com/the_white_tonee_bhaktapur',
            'https://www.instagram.com/skcloset2.o/',
            'https://www.instagram.com/nep.aesthetics/',
            'https://www.instagram.com/adaptnepal/',
            'https://www.instagram.com/s_sclothing_nepal/',
            'https://www.instagram.com/unico.clo.np/',
            'https://www.instagram.com/korean_fashion_nepal/',
            'https://www.instagram.com/kaalo_fhalaamofficial/',
            'https://www.instagram.com/bspokeclo/',
            'https://www.instagram.com/huba.official/',
            'https://www.instagram.com/thapacollection_official/',
            'https://www.instagram.com/s_matching_nepal/',
            'https://www.instagram.com/dripcreationbyjibica/',
            'https://www.instagram.com/unanimous.np/',
            'https://www.instagram.com/evan_originals/',
            'https://www.instagram.com/arlo.nepal/',
            'https://www.instagram.com/lamad_closet/',
            'https://www.instagram.com/instylenepalofficial/',
            'https://www.instagram.com/newstyle_fashionwear_official/',

        ];
        return view('frontend.store.feed', compact('links'));
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
