<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Comment;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller {
    public function add(Request $request) {
        // Cart should exists
        $cart_id = $request->cookie('cart_id');
        $validated = $request->validate([
            'name' => 'required|min:3',
            'surname' => 'required|min:3',
            'email' => 'required|email|min:3',
            'street' => 'required|min:3',
        ]);
        $cart = $this->initCart($cart_id);
        if (count($cart->pizzas) == 0 && count($cart->drinks) == 0 && count($cart->pizzas) == 0) {
            $error = "Перед тим як зробити замовлення, будь ласка, додайте піцу або напій";
            return redirect('/cart?error='.$error);
        }
        $userName = $request->input('userName');
        $email = $request->input('email');
        $userSurname = $request->input('surname');
        $street = $request->input('street');
        $payment = $request->input('payment');

        $user = User::getByEmail($email);

        if ($user === null) {
            $user = new User();
            $user->name = $userSurname." ".$userName;
            $user->email = $email;
            $user->save();
        }

        $order = new Order();
        $order->cart_id = $cart_id;
        $order->user_id = $user->id;
        $order->payType = $payment;
        $order->street = $street;


        $order->save();



        $cart = new Cart();
        $cart->save();

        return response(view('thankYouPage', ['object'=>'заказ', 'page' => 'order_complete']))->cookie('cart_id', $cart->id, 3600);
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

    public function getHolder() {
        return view('thankYouPage', ['object'=>'замовлення', 'page' => 'order_complete', 'text' => "Ми зв'яжемося з Вами в найближчий час для уточнення деталей"]);
    }
}
