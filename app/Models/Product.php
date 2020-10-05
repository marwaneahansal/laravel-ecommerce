<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'colors' => 'array',
        'sizes' => 'array'
    ];


    public function formatPrice()
    {
        return number_format($this->price, 2);
    }

    public function formatUrl() {
        return str_replace(' ', '-', $this->name);
    }
}
