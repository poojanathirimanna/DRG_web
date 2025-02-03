<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'quantity', 'category', 'image'];

    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

