<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['feedback'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
