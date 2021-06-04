<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomPizza extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function ingredients() {
        return $this->belongsToMany('App\Models\Ingredient');
    }
}