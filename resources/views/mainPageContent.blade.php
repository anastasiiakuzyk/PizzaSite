<div class="container title_image">
    <h3>Роби замовлення та отримай знижку -30% на другу</h3>
</div>

<div class="container">

    <div class="top_pizzas">

        <h2>Наші ТОП-3 піци</h2>

        <div class="pizzas">
            @component('Components/pizza')
                @slot('img')
                    karbonara.png
                @endslot
                @slot('name')
                    Карбонара
                @endslot
                @slot('price')
                    195
                @endslot
                @slot('ingredients')
                    твердий сир, бекон, яйце, гриби,
                @endslot
                @slot('id')
                    25
                @endslot
            @endcomponent
            @component('Components/pizza')
                @slot('img')
                    4cheese.png
                @endslot
                @slot('name')
                    4 сири
                @endslot
                @slot('price')
                    175
                @endslot
                @slot('ingredients')
                    твердий сир, томатний соус,
                @endslot
                @slot('id')
                    26
                @endslot
            @endcomponent
            @component('Components/pizza')
                @slot('img')
                    chikenMushrooms.png
                @endslot
                @slot('name')
                    З куркою та грибами
                @endslot
                @slot('ingredients')
                    твердий сир, курятина, кукурудза, гриби,
                @endslot
                @slot('price')
                    205
                @endslot
                @slot('id')
                    27
                @endslot
            @endcomponent
        </div>
    </div>
</div>

<div class="container treasures">
    <h2>Цінності піцерії</h2>

    <div class="treasure_rects">
        <div class="first_treasure_rect">
            <ul>
                <li>Повернемо кошти, якщо клієнт незадоволений</li>
                <li>Перероблюємо 87% сміття та використаних матеріалів</li>
                <li>Незалежно від карантинних умов дезінфікуємо приміщення, кухню та руки. Чистота - запорука нашого
                    успіху
                </li>
                <li>Швидко та якісно готуємо наші смачні та соковиті піци</li>
            </ul>
        </div>

        <div class="second_treasure_rect">
            <ul>
                <li>Швидко та якісно готуємо наші смачні та соковиті піци</li>
                <li>Ми за усвідомлене споживання пластику! Тому наші коробки та пакети з картону, столові прибори з
                    крохмалю, вологі та сухі серветки з бавовни, а напої в картонних упаковках Tetra Pak
                </li>
                <li>Можете відправити нам назад усе сміття та ми відправимо його на переробку!</li>
            </ul>
        </div>
    </div>
</div>
<div class="container expander"></div>
<div class="container make_order">
    <h3>Безконтактна доставка за 30 хвилин</h3>

    <p class="make_order_btn"><a href="/constructor">Зробити замовлення</a></p>
</div>

<div class="container">
    <div class="comments">
        <h2>Відгуки</h2>

        <div class="comment_clouds">
            @foreach($comments as $comment)
                @component('Components.comment')
                    @slot('img')
                        {{$comment['user_image']}}
                    @endslot
                    @slot('comment')
                        {{$comment['comment']}}
                    @endslot
                    @slot('username')
                        {{$comment['user_name']}}
                    @endslot
                @endcomponent
            @endforeach
        </div>
    </div>


    <div class="form">
        <h2>Залиште нам свій відгук</h2>
        <form action="{{route('comment.add')}}" method="post">
            @csrf
            <div class="user_info">
                <input type="text" name="userName" placeholder="Ім'я" class="input textblock" required>
                <input type="email" name="email" placeholder="E-mail" class="input textblock" required>
            </div>
            <textarea name="message" cols="50" rows="5" class="textblock" placeholder="Повідомлення" required></textarea>
            <input type="submit" class="submit_btn" value="Відправити">
        </form>
    </div>
</div>
