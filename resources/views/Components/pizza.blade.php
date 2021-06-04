<div class="pizza">
    <img src="{{ asset('images/pizzas/'.$img)}}" alt="{{$name}}">
    <div class="pizza_tag">
        <p>{{$name}}</p>
        <p>{{$price}}грн</p>
    </div>
    <div class="ingredients"><b>Інгредієнти:</b> {{ $ingredients }}</div>


    <div class="cart_btn" type="pizza" value="{{$id}}">У кошик</div>
</div>
