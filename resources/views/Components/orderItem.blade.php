<div class="order_item">
    <div class="order_item_image" style = "background: url({{asset('/images/'.$type.'s/'.$img)}}) no-repeat; background-size: contain;">
    </div>

    <div class="order_item_description">
        <div class="order_item_name">
            <p>{{$name}}</p>
        </div>
        <div class="order_item_ingredients">
            <p>{{$ingredients}}</p>
        </div>

        <div class="order_item_functions">
            <div class="order_item_count">
                <div productId="{{$id}}" type="{{$type}}" id="order-minus">-</div>
                <p>{{$count}}</p>
                <div productId="{{$id}}" type="{{$type}}" id="order-plus">+</div>
            </div>
            <div class="order_item_price"><p>{{$price}} грн</p></div>
        </div>
    </div>
</div>
