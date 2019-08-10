<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/icomoon.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="css/intlTelInput.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUQRPhKgYtyccVVeOdsco5QwI_pT4OoCg&libraries=places"></script>

    @if(isset($mainPage))
        <script src="https://use.fontawesome.com/45f4a7cac2.js"></script>

    @else
        <script src="https://kit.fontawesome.com/25759144a8.js"></script>

    @endif
    <script src="js/progressbar.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <title>card-credit</title>
</head>
<body>
<header class="page-header">
    <div class="wrapper">
        <div class="page-header-wrap">
            <a href="/" class="logo wow fadeInLeft" data-wow-duration="1.5s">
                <img src="img/logo.png" alt="logo" width="114" height="31">
            </a>
            <nav class="main-nav">
                <button class="main-nav__toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="main-nav__list wow fadeInRight" data-wow-duration="1.2s">
                    <li class="main-nav__item">
                        <a href="/rate" class="main-nav__link">Процентная ставка</a>
                    </li>
                    <li class="main-nav__item">
                        <a href="#" class="main-nav__link">Отзывы</a>
                    </li>
                    <li class="main-nav__item">
                        <a href="/money" class="main-nav__link">Деньги в вашем городе</a>
                    </li>
                    <li class="main-nav__item">
                        <a href="/history" class="main-nav__link">Плохая кредитная история</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>


@yield('content')

<footer class="page-footer">
    <div class="wrapper wow zoomIn" data-wow-duration="1.5s">
        <a class="page-footer__link" href="https://card-credit.net">https://card-credit.net</a> - 2019
    </div>
</footer>
@if(!isset($notTel))
    <script src="js/intlTelInput.js"></script>
@endif
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
@if(!isset($notTel))
<script src="js/intlTelInput-jquery.js"></script>
@endif
@if(!isset($notTel))

<script>
    // jQuery
    $("#telephone").intlTelInput({
        autoPlaceholder: "polite",
        utilsScript :'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.2/js/utils.js',
        initialCountry: "ru",
        separateDialCode:true,
        placeholderNumberType : 'FIXED_LINE'
    });
</script>
@endif

<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/checking.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
@if(!isset($notCust))
<script type="text/javascript" src="js/custom.js"></script>
@endif
</body>
</html>
