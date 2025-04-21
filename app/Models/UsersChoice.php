<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersChoice extends Model
{
    protected $fillable = ['users_choice'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
