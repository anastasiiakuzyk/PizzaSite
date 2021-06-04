<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $table = 'cart';

    public function pizzas() {
        return $this->belongsToMany('App\Models\Pizza', 'cart_pizzas', 'cart_id', 'pizza_id')->withPivot('count');
    }

    public function drinks() {
        return $this->belongsToMany('App\Models\Drink', 'cart_drinks', 'cart_id', 'drink_id')->withPivot('count');
    }

    public function cpizzas() {
        return $this->belongsToMany('App\Models\CustomPizza', 'cart_custom_pizzas', 'cart_id', 'custom_pizza_id')->withPivot('count');
    }
}
