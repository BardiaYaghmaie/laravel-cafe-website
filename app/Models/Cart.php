<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'menu_id', 'quantity', 'cart_code'
    ];

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu', 'menu_id');
    }
}
