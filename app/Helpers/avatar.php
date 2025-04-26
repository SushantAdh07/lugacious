<?php

use App\Models\User;

if (!function_exists('userAvatar')) {
    function userAvatar(User $user): string
    {
        if ($user->image) {
            return '<img src="'.asset('storage/'.$user->image).'" class="w-full h-full object-cover">';
        }
        
        $initial = strtoupper(substr($user->name, 0, 1));
        
        return '<div class="w-full h-full flex items-center justify-center bg-white text-[#BF8e43] font-bold rounded-full" style="font-size: 120px; line-height: 0.8; margin-top: -10px;">'
              .$initial.
              '</div>';
    }
}