<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souscategory extends Model
{
    use HasFactory;

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

    public function category()
        { 
            return $this->belongsTo(Category::class); 
        }
}
