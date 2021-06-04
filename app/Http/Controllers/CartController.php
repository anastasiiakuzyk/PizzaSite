<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
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

    public function cart(Request $request) {
        $cart_id = $request->cookie('cart_id');
        $error = $request->input('error');
        $cart = $this->initCart($cart_id);

        $pizzas = $cart->pizzas;
        $drinks = $cart->drinks;
        $customPizzas = $cart->cpizzas;

        foreach ($pizzas as $pizza) {
            print_r($pizza->pivot_count);
        }

        $summary = 0;
        for ($i = 0; $i < count($pizzas); $i++) {
            $summary += $pizzas[$i]->price*$pizzas[$i]->pivot->count;
        }

        for ($i = 0; $i < count($drinks); $i++) {
            $summary += $drinks[$i]->price*$drinks[$i]->pivot->count;
        }

        $newCP = [];
        for ($i = 0; $i < count($customPizzas); $i++) {
            $tmp = [];
            if ($customPizzas[$i]->size === "big") {
                $tmp["size"] = 'Велика';
            }else {
                $tmp["size"] = 'Середня';
            }
            $tmp["ingredients"] = $customPizzas[$i]->ingredients;
            if ($customPizzas[$i]->border === 1) {
                $tmp["border"] = "С сосикой";
            }
            if ($customPizzas[$i]->border === 2) {
                $tmp["border"] = "С сыром";
            }
            if ($customPizzas[$i]->border === 3) {
                $tmp["border"] = "Двойная сосика";
            }
            if ($customPizzas[$i]->border === 4) {
                $tmp["border"] = "Без бортика";
            }
            $tmp['price'] = $customPizzas[$i]->price;
            $tmp['count'] = $customPizzas[$i]->pivot->count;
            $tmp['id'] = $customPizzas[$i]->id;

            array_push($newCP, $tmp);

            $summary += $customPizzas[$i]->price*$customPizzas[$i]->pivot->count;
        }

        return response(view('cart', ['page' => 'cart', 'pizzas' => $pizzas, 'drinks' => $drinks, 'sum' => $summary, 'cpizzas' => $newCP, 'error' => $error]))->cookie('cart_id', $cart->id, 36000);
    }

    public function add(Request $request) {
        $productId = $request->input('value');
        $type = $request->input('type');
        $cart_id = $request->cookie('cart_id');
        $cart = $this->initCart($cart_id);
        $result = false;
        if ($type === 'pizza') {
            if (DB::table("cart_pizzas")->where('cart_id', '=', $cart->id)->where('pizza_id', '=', $productId)->exists()) {
                DB::table("cart_pizzas")->where('cart_id', '=', $cart->id)->where('pizza_id', '=', $productId)->increment("count");
            }else {
                DB::table("cart_pizzas")->insert(['cart_id' => $cart->id, 'pizza_id' => $productId, 'count' => 1]);
            }
        }else if ($type === 'drink') {
            if (DB::table("cart_drinks")->where('cart_id', '=', $cart->id)->where('drink_id', '=', $productId)->exists()) {
                DB::table("cart_drinks")->where('cart_id', '=', $cart->id)->where('drink_id', '=', $productId)->increment("count");
            }else {
                DB::table("cart_drinks")->insert(['cart_id' => $cart->id, 'drink_id' => $productId, 'count' => 1]);
            }
        } else {
            if (DB::table("cart_custom_pizzas")->where('cart_id', '=', $cart->id)->where('custom_pizza_id', '=', $productId)->exists()) {
                DB::table("cart_custom_pizzas")->where('cart_id', '=', $cart->id)->where('custom_pizza_id', '=', $productId)->increment("count");
            }else {
                DB::table("cart_custom_pizzas")->insert(['cart_id' => $cart->id, 'custom_pizza_id' => $productId, 'count' => 1]);
            }
        }

        return response()->json(['result' => $result === null])->cookie('cart_id', $cart->id, 3600);
    }

    public function remove(Request $request) {
        $cart_id = $request->cookie('cart_id');
        $productId = $request->input('value');
        $type = $request->input('type');
        $cart = $this->initCart($cart_id);

        if ($type === 'pizza') {
            if (DB::table("cart_pizzas")->where('cart_id', '=', $cart->id)->where('pizza_id', '=', $productId)->exists()) {
                DB::table("cart_pizzas")->where('cart_id', '=', $cart->id)->where('pizza_id', '=', $productId)->decrement("count");
            }
        }else if ($type === 'drink') {
            if (DB::table("cart_drinks")->where('cart_id', '=', $cart->id)->where('drink_id', '=', $productId)->exists()) {
                DB::table("cart_drinks")->where('cart_id', '=', $cart->id)->where('drink_id', '=', $productId)->decrement("count");
            }
        }else {
            if (DB::table("cart_custom_pizzas")->where('cart_id', '=', $cart->id)->where('custom_pizza_id', '=', $productId)->exists()) {
                DB::table("cart_custom_pizzas")->where('cart_id', '=', $cart->id)->where('custom_pizza_id', '=', $productId)->decrement("count");
            }
        }

        DB::table("cart_drinks")->where("count", "=", 0)->delete();
        DB::table("cart_pizzas")->where("count", "=", 0)->delete();
        DB::table("cart_custom_pizzas")->where("count", "=", 0)->delete();


        return redirect()->back();
    }
}
