<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function cart() {
        return Order::hosOne('App\Models\Cart');
    }

    public function user() {
        return Order::hasOne('App\Models\User');
    }
}