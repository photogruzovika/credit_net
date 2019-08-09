@extends('layouts.app')

@section('content')
    <section class="rate">
        <div class="wrapper">
            <div class="rate-wrap wow zoomIn" data-wow-duration="1s">
                <h1 class="rate__headline"><b>Выбор суммы</b></h1>
                <p class="rate__text">Здравствуйте <span style="color:green;">qwer qwer</span>! Вы успешно подтвердили свои данные, Вам одобрена кредитная карта на сумму <span style="color:green;">200 000</span> рублей</p>
                <img src="img/card.jpeg" style="    width: 100%;
    height: 100%;
    display: block;
    max-width: 100%;
    margin-top: 30px;">
                <h4 style="margin-top:50px;padding-bottom: 50px;">Выберите сумму на карте</h4>
                <li class="page-item " >
                    <a class="comments__btn" id="1_but" onclick="changePrice(1);"
                       style="cursor:pointer;">50 000 ₽</a>
                    <a class="comments__btn" id="2_but" onclick="changePrice(2);"
                       style="cursor:pointer;">100 000 ₽</a>
                    <a class="comments__btn" id="3_but" onclick="changePrice(3);"
                       style="cursor:pointer;">150 000 ₽</a>
                    <a class="comments__btn" id="4_but" onclick="changePrice(4);"
                       style="cursor:pointer;">200 000 ₽</a>
                </li>
                <button class="contact-form__button wow fadeInRight" style="    padding: 10px 50px 10px;" onclick="nextPage();"><span>Продолжить</span></button>

            </div>
        </div>

    </section>

    <div id="app" style="margin-top: 50px;">
        <reviews rews="{{$reviews}}"></reviews>
    </div>
@endsection
