<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Str;

class GoogleController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleAuth()
    {
        $googleUser = Socialite::driver('google')->user();

            
            $user = User::updateOrCreate(
                ['email' => $googleUser->email], 
                [
                    'name' => $googleUser->name,
                    'google_id' => $googleUser->id,
                    'password' => bcrypt(Str::random(40)),
                    'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),    
                ]
            );

            Auth::login($user);
            return redirect('/');
    }
}
