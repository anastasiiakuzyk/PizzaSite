<div class="container">
    <script>
        const top_scroll = localStorage.getItem("scroll") ?? 0;
        console.log(top_scroll);
        if (top_scroll !== null && document.location.search !== "") {
            setTimeout(() => {
                window.scroll(0,top_scroll);
                localStorage.removeItem('scroll')
            }, 300)
        }
    </script>
    <div class="our_pizzas">
        <h2>Наші піци</h2>

        <form method="get" action="">
            <input type="hidden" name="more" value="{{$more}}" />
            <select onchange="this.form.submit()" name="sort" class ="combik" title="Сортування">
                <option value="all" selected>Сортування</option>
                <option value="meat" {{ $sort === "meat" ? "selected" : "" }}>М'ясні</option>
                <option value="hot" {{ $sort === "hot" ? "selected" : "" }}>Гострі</option>
                <option value="veg" {{ $sort === "veg" ? "selected" : "" }}>Вегетаріанські</option>
            </select>
        </form>

        <div class="pizza_row">
            @for($i = 0; $i < count($pizzas); $i++)
                @component('Components/pizza')
                    @slot('img')
                        {{$pizzas[$i]['image_title']}}
                    @endslot
                    @slot('name')
                        {{$pizzas[$i]['name']}}
                    @endslot
                    @slot('price')
                        {{$pizzas[$i]['price']}}
                    @endslot
                    @slot('ingredients')
                        @foreach($pizzas[$i]->ingredients as $item)
                            {{$item->name}},
                        @endforeach
                    @endslot
                    @slot('id')
                        {{$pizzas[$i]['id']}}
                    @endslot
                @endcomponent
            @endfor
        </div>
        @if(!$all)
            <form style="display: flex" onsubmit="localStorage.setItem('scroll', document.documentElement.scrollTop)" method="get" action="">
                <input type="hidden" name="sort" value="{{$sort}}" />
                <input type="hidden" name="more" value="{{$more + 10}}" />
                <input type="submit" value="Load more" id="btn_more" class="loadMore" />
            </form>
        @endif

    </div>
</div>
<div class="container ctor_image">
    <h3>Або збери сам у нашому конструкторі</h3>

    <p class="ctorBtn"><a href="/constructor">Перейти до конструктора</a></p>
</div>

<div class="container drinks">
    <h2>Напої</h2>
    <div class="pizza_row">
    @for($i = 0; $i < count($drinks); $i++)
        @component('Components.drink')
            @slot('img')
                {{$drinks[$i]['image_title']}}
            @endslot
            @slot('name')
                {{$drinks[$i]['name']}}
            @endslot
            @slot('price')
                {{$drinks[$i]['price']}}
            @endslot
            @slot('volume')
                {{$drinks[$i]['volume']}}
            @endslot
            @slot('id')
                {{$drinks[$i]['id']}}
            @endslot
        @endcomponent
    @endfor
    </div>
</div>
