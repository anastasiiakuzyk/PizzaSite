<!DOCTYPE html>

<html lang="ru">
<head>
    <title>PizzaBoom</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@400;700&display=swap" rel="stylesheet">

    <script type=text/javascript>
        function setScreenWidthCookie() {
            document.cookie = 'sw = '+ screen.width;
            return true;
        }
    </script>
</head>
<div class="wrapper">
    <div class="container header">
        <a href="/">
            <div class="logo_title">
                <div class="logo">

                </div>
                <div class="title">
                    <h2>PIZZAboom</h2>
                </div>
            </div>
        </a>


        <div class="nav">
            <ul>
                <li>
                    @if($page === 'main')
                        <strong>Головна</strong>
                    @else
                        <a href="/">Головна</a>
                    @endif
                </li>
                <li>
                    @if($page === 'menu')
                        <strong>Меню</strong>
                    @else
                        <a href="/menu">Меню</a>
                    @endif
                </li>
                <li>
                    @if($page === 'ctor')
                        <strong>Конструктор піци</strong>
                    @else
                        <a href="/constructor">Конструктор піци</a>
                    @endif
                </li>
                <li>
                    @if($page === 'about')
                        <strong>Про нас</strong>
                    @else
                        <a href="/about_us">Про нас</a>
                    @endif
                </li>
                <li>
                    @if($page === 'delivery')
                        <strong>Доставка та оплата</strong>
                    @else
                        <a href="/delivery">Доставка та оплата</a>
                    @endif
                </li>
            </ul>
        </div>
        <div class="nav__images">
            <ul>
                <li>
                    <a href="tel:380506195880"><img src="/images/phone.svg" alt="phone"></a>
                </li>
                <li>
                    @if($page === 'cart')
                    <img src="/images/cart.svg" alt="cart">
                    @else
                    <div id="cart__count">
                        {{$count_cart}}
                    </div>
                    <a href="/cart"><img src="/images/cart.svg" alt="cart"></a>
                    @endif
                </li>
            </ul>
        </div>
        <div class="burger__wrapper">
            <div class="burger" id="burger">
                <div class="burger__line"></div>
                <div class="burger__line"></div>
                <div class="burger__line"></div>
            </div>
            <div class="mobile__menu" id="mob__menu">
                <div class="nav__mobile">
                    <ul>
                        <li>
                            @if($page === 'main')
                            <strong>Головна</strong>
                            @else
                            <a href="/">Головна</a>
                            @endif
                        </li>
                        <li>
                            @if($page === 'menu')
                            <strong>Меню</strong>
                            @else
                            <a href="menu">Меню</a>
                            @endif
                        </li>
                        <li>
                            @if($page === 'ctor')
                            <strong>Конструктор піци</strong>
                            @else
                            <a href="constructor">Конструктор піци</a>
                            @endif
                        </li>
                        <li>
                            @if($page === 'about')
                            <strong>Про нас</strong>
                            @else
                            <a href="about_us">Про нас</a>
                            @endif
                        </li>
                        <li>
                            @if($page === 'delivery')
                            <strong>Доставка та оплата</strong>
                            @else
                            <a href="delivery">Доставка та оплата</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <div class="container footer">
        <div class="footer_columns">
            <div class="first_footer_column">
                <div class="footer_title">
                    <div class="logo"></div>

                    <h4>Смачна піца у нас!</h4>
                </div>
                <div class="credit_cards">
                    <img src="/images/masterCard.svg" alt="">
                    <img src="/images/creaditBack.svg" alt="">
                </div>
            </div>

            <div class="second_footer_column">
                <ul>
                    <div class="footer_nav_first_col">
                        <li>
                            @if($page === 'main')
                                <strong>Головна</strong>
                            @else
                                <a href="/">Головна</a>
                            @endif
                        </li>
                        <li>
                            @if($page === 'menu')
                                <strong>Меню</strong>
                            @else
                                <a href="menu">Меню</a>
                            @endif
                        </li>
                        <li>
                            @if($page === 'ctor')
                                <strong>Конструктор піци</strong>
                            @else
                                <a href="constructor">Конструктор піци</a>
                            @endif
                        </li>
                    </div>
                    <div class="footer_nav_second_col">
                        <li>
                            @if($page === 'about')
                                <strong>Про нас</strong>
                            @else
                                <a href="about_us">Про нас</a>
                            @endif
                        </li>
                        <li>
                            @if($page === 'delivery')
                                <strong>Доставка та оплата</strong>
                            @else
                                <a href="delivery">Доставка та оплата</a>
                            @endif
                        </li>
                    </div>
                    <div class="footer_nav_third_col">
                        <li>Київ</li>
                    </div>
                </ul>
            </div>

            <div class="third_footer_column">
                <img src="/images/telegram.svg" alt="telegram">
                <img src="/images/inst.svg" alt="instagram">
                <img src="/images/facebook.svg" alt="facebook">
            </div>
        </div>

        <div class="copyright">
            <h5>УСІ ПРАВА ЗАХИЩЕНІ<img src="/images/copyright.svg" alt="">2021</h5>
        </div>
    </div>
    <script src="/js/app.js"></script>
</div>
</html>
