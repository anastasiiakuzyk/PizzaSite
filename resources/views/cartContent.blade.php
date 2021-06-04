<div class="container">
    <form action="{{route('order.create')}}" method="post">
        @csrf
        <div class="order_column">
                <h2>Оформлення замовлення</h2>

                <div class="order">
                    <div class="order_user_info">
                        <input type="text" name="name" class="textblock" placeholder="Ім’я" required>
                        <input type="text" name="surname" class="textblock" placeholder="Прізвище" required>
                        <input type="text" name="street" class="textblock" placeholder="Адреса" required>
                        <input type="email" name="email" class="textblock" placeholder="Email" required>
                        <div class="payment_label">
                            <p>Спосіб оплати</p>

                            <div class="payments">
                                <div class="payment">
                                    <input type="radio" id="cardPayment" checked class="defRadio" name="payment" value="0">
                                    <label for="cardPayment">Оплата кур'єру банківською картою</label>
                                </div>
                                <div class="payment">
                                    <input type="radio" id="onlinePayment" class="defRadio" name="payment" value="1">
                                    <label for="onlinePayment">Оплата онлайн</label>
                                </div>
                            </div>
                        </div>
                        <div style="color: red; font-size: 18px; font-weight: bold;">{{ $error ?? '' }}</div>
                    </div>

                    <div class="user_cart">
                        <p id="users_order">Ваше замовлення:</p>

                        @foreach($pizzas as $item)
                            @component('Components.orderItem')
                                @slot('name')
                                    {{$item->name}}
                                @endslot
                                @slot('price')
                                    {{$item->price}}
                                @endslot
                                @slot('type')
                                    pizza
                                @endslot
                                @slot('count')
                                    {{$item->pivot->count}}
                                @endslot
                                @slot('ingredients')
                                    @foreach($item->ingredients as $iitem)
                                        {{$iitem->name}},
                                    @endforeach
                                @endslot
                                @slot('img')
                                    {{$item->image_title}}
                                @endslot
                                @slot('id')
                                    {{$item->id}}
                                @endslot
                            @endcomponent
                        @endforeach
                        @foreach($cpizzas as $item)
                            @component('Components.orderItem')
                                @slot('name')
                                    {{$item['size']}} зібрана піцца
                                @endslot
                                @slot('price')
                                    {{$item['price']}}
                                @endslot
                                @slot('type')
                                    cpizza
                                @endslot
                                @slot('count')
                                    {{$item['count']}}
                                @endslot
                                @slot('ingredients')
                                    @foreach($item['ingredients'] as $iitem)
                                        {{$iitem->name}},
                                    @endforeach
                                @endslot
                                @slot('img')
                                    bbq.png
                                @endslot
                                @slot('id')
                                    {{$item['id']}}
                                @endslot
                            @endcomponent
                        @endforeach
                        @foreach($drinks as $item)
                            @component('Components.orderItem')
                                @slot('name')
                                    {{$item->name}}
                                @endslot
                                @slot('type')
                                    drink
                                @endslot
                                @slot('price')
                                    {{$item->price}}
                                @endslot
                                @slot('count')
                                    {{$item->count}}
                                @endslot
                                @slot('ingredients')
                                    Test
                                @endslot
                                @slot('img')
                                    {{$item->image_title}}
                                @endslot
                                @slot('id')
                                    {{$item->id}}
                                @endslot
                            @endcomponent
                        @endforeach
                        <p id="total">Всього: {{$sum}} грн</p>
                    </div>
                </div>
                <div class="btn">
                    <input type="submit" class="submit_btn" value="Оформити замовлення">
                </div>


        </div>
    </form>
</div>
