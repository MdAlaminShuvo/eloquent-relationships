<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    public function ingradients(){
        return $this->belongsToMany(Ingradient::class);
    }

    public function reviews(){
        return $this->belongsToMany(Review::class);
    }
}
