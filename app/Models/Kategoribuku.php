<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategoribuku extends Model
{
    use HasFactory;

    public function bukus()
     {
        return $this->hasMany(Buku::class);      
    }
}
