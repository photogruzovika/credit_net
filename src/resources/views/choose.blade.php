@extends('layouts.app')

@section('content')
    <section class="rate">
        <div class="wrapper">
            <div class="rate-wrap wow zoomIn" data-wow-duration="1s">
                <h1 class="rate__headline"><b>Выбор суммы</b></h1>
                <p class="rate__text">Здравствуйте <span style="color:green;">{{$fname.' '.$sname}}</span>! Вы успешно подтвердили свои данные, Вам одобрена кредитная карта на сумму <span style="color:green;">200 000</span> рублей</p>
                <img src="img/card.jpeg" style="    width: 100%;
    height: 100%;
    display: block;
    max-width: 100%;
    margin-top: 30px;">
                <h4 style="margin-top:50px;padding-bottom: 50px;">Выберите сумму на карте</h4>
                <li class="page-item ">
                    <a class="comments__btn" id="1_but" onclick="changePrice(1);"
                       style="cursor:pointer;">50 000 ₽</a>
                    <a class="comments__btn" id="2_but" onclick="changePrice(2);"
                       style="cursor:pointer;">100 000 ₽</a>
                    <a class="comments__btn" id="3_but" onclick="changePrice(3);"
                       style="cursor:pointer;">150 000 ₽</a>
                    <a class="comments__btn" id="4_but" onclick="changePrice(4);"
                       style="cursor:pointer;">200 000 ₽</a>
                </li><br>
                <div class="vspliv 1_but" style="display:none;">пятьдесят</div>
                <div class="vspliv 2_but" style="display:none;">сто</div>
                <div class="vspliv 3_but" style="display:none;">стопятьдесят</div>
                <div class="vspliv 4_but" style="display:none;">двести</div>
                <button class="contact-form__button wow fadeInRight" style="    padding: 10px 50px 10px;" onclick="nextPage();"><span>Продолжить</span></button>

            </div>
        </div>

    </section>
<style>
    .vspliv{
        display: inline-block;
        margin-top:60px;
        width: 125px;
        padding: 8px;
        border-radius: 4px 4px 4px 4px;
        font: 14px 'Open Sans', Arial, sans-serif;
        text-transform: none;
        text-align: center;
        color: #fff;
        background-color: #2f323f;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-animation-name: scaleIn;
        -webkit-animation-duration: 1s;
        animation-name: scaleIn;
        animation-duration: 1s;
    }
    }
    .contact-form__button{
        min-width:0px;
    }
    @media(max-width: 325px) {


        .page-item{
            white-space:nowrap !important;
        }
    }
    @media(max-height: 850px) {


        .comments__btn{
            padding: 6px 3px !important;
            line-height: 3.42857143 !important;
        }
    }
</style>
    <div id="app" style="margin-top: 50px;">
        <reviews rews="{{$reviews}}"></reviews>
    </div>
@endsection
