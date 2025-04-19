<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = [
        'store_name',
        'store_description',
        'store_category',
        'store_image',
        'store_insta' 
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
