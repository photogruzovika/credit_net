

@extends('layouts.app')

@section('content')

    <section class="check">
        <div class="wrapper">
            <button class="contact-form__button contact-form__button--check wow fadeInRight" href="/"><span>Назад</span></button>
            <div id="line-container">
                <div class="check__name wow fadeInRight">
                    Идет проверка паспортных данных
                </div>
            </div>
            <div class="check__progress check1 wow fadeInRight">
                Проверка паспорта выполнена успешно!
                <i class="fa fa-check"></i>
            </div>
            <div class="check__progress check2 wow fadeInRight">
                Проверка кредитной истории выполнена успешно!
                <i class="fa fa-check"></i>
            </div>
            <div class="check__progress check3 wow fadeInRight">
                Регистрация выполнена успешно!
                <i class="fa fa-check"></i>
            </div>
            <button id="checkBtn" class="check__btn wow zoomIn" data-wow-duration="1.5s" onclick="window.location='/choose'" >Продолжить</button>
        </div>
    </section>

    <div id="app" style="margin-top: -500px;">
        <reviews rews="{{$reviews}}"></reviews>
    </div>
@endsection

