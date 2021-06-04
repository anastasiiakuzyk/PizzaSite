<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $cart_id = $request->cookie('cart_id');

        $cart = null;
        $summary = 0;
        if ($cart_id != null) {
            $cart = \App\Models\Cart::find($cart_id);
            $summary = count($cart->pizzas) + count($cart->drinks) + count($cart->cpizzas);
        }
        view()->share('count_cart', $summary);

        return $next($request);
    }
}
