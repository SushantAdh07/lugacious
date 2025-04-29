<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $stores = Store::orderBy('store_name', 'asc')->paginate(20);
        return view('frontend.Body.hero', compact('stores'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $results = Store::where('store_name', 'like', "%{$search}%")
            ->get();

        

        return view('frontend.store.search', compact('results', 'search'));
    }
}
