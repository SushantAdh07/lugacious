<?php

namespace App\Http\Controllers\Frontend\ForUsers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $favorites = auth()->user()->load('favoriteStores');
        return view('frontend.ForUsers.profile', compact('favorites'));
    }
}
