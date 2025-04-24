<?php

namespace App\Http\Controllers\Frontend\ForUsers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user()->load('favoriteStores');
        return view('frontend.ForUsers.profile', compact('user'));
    }
}
