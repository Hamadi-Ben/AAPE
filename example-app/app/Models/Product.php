<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'file',
        'stock',
        'price',
    ];

        public function seller()
    {
        return $this->belongsto(User::class, 'user_id');
    }
}

