<?php

use App\Models\Comment;
use App\Models\Order;
use App\Models\Pizza;
use \App\Models\Drink;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\CartController;
use \App\Http\Controllers\OrderController;
use \App\Models\Ingredient;
use \App\Http\Controllers\ConstructorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    $comments = Comment::all();

    return view('mainPage', ['page'=>'main', 'comments'=>$comments]);
});

Route::get('menu', function(\Illuminate\Http\Request $request) {
    $sort = $request->input("sort");
    $more = $request->input("more");
    if ($more === null) {
        $more = 10;
    }
    $pizzas = [];
    $drinks = Drink::all();
    if ($sort === null || $sort === "all") {
        $pizzas = Pizza::take($more)->get();
    } elseif ($sort === "meat") {
        $pizzas = Pizza::where('is_meat', '=', '1')->take($more)->get();
    } elseif ($sort === "hot") {
        $pizzas = Pizza::where('is_hot', '=', '1')->take($more)->get();
    } else {
        $pizzas = Pizza::where('is_vegeterian', '=', '1')->take($more)->get();
    }

    $all = Pizza::all();
    $isAll = count($all) === count($pizzas);


    return view('menu', ['page'=>'menu', 'pizzas'=>$pizzas, 'drinks'=>$drinks, 'sort' => $sort, 'more' => $more, 'all' => $isAll]);
});

Route::get('constructor', function()
{
   $ingredients = Ingredient::all();
   return view('constructor', ['page'=>'ctor', 'ingredients' => $ingredients]);
});

Route::get('cart', function()
{
    $orders = [];
    foreach ($orders as $order)
    {
        if ($order->pizzaId)
        {
            $order->img = 'pizzas/'.Pizza::find($order->pizzaId)['image_title'];
        }
        else
        {
            $order->img = 'drinks/'.Drink::find($order->drinkId)['image_title'];
        }
    }

    return view('cart', ['page'=>'cart', 'order_list'=>$orders]);
});

Route::get('about_us', function() { return view('about', ['page'=>'about']); });

Route::get('delivery', function() { return view('delivery', ['page'=>'delivery']); });

Route::post('comment', [CommentController::class, 'add'])->name('comment.add');

Route::get('comment', [CommentController::class, 'getHolder'])->name('comment.holder');

Route::get('cart', [CartController::class, 'cart'])->name('cart');

Route::post('cart/add', [CartController::class, 'add'])->name('cart.add');

Route::post('cart/remove', [CartController::class, 'remove'])->name('cart.remove');

Route::post('order/create', [OrderController::class, 'add'])->name('order.create');

Route::get('order/create', [OrderController::class, 'getHolder'])->name('order.create.holder');

Route::post('constructor/create', [ConstructorController::class, 'create'])->name('constructor.create');
