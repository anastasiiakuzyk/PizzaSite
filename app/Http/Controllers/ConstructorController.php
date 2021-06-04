<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Comment;
use App\Models\CustomPizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConstructorController extends Controller {
    public function create(Request $request) {
        $size = $request->input("size");
        $topings = $request->input("toping");
        $border = $request->input("border");
        $souse = $request->input("souse");
        $price = $request->input("price");

        $pizza = new CustomPizza();
        $pizza->size = $size;
        $pizza->border = $border;
        $pizza->souse = $souse;
        $pizza->price = $price;
        $pizza->save();

        $pizza->ingredients()->attach($topings);

        $cart_id = $request->cookie('cart_id');
        $cart = $this->initCart($cart_id);

        if (DB::table("cart_custom_pizzas")->where('cart_id', '=', $cart->id)->where('custom_pizza_id', '=', $pizza->id)->exists()) {
            DB::table("cart_custom_pizzas")->where('cart_id', '=', $cart->id)->where('custom_pizza_id', '=', $pizza->id)->increment("count");
        }else {
            DB::table("cart_custom_pizzas")->insert(['cart_id' => $cart->id, 'custom_pizza_id' => $pizza->id, 'count' => 1]);
        }


        return response()->json(["result" => "success"]);
    }

    private function initCart($id) {
        $cart = null;
        if ($id == null) {
            $cart = new Cart();
            $cart->save();
        } else {
            $cart = Cart::find($id);
        }
        return $cart;
    }
}