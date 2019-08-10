

@extends('layouts.app')

@section('content')

    <section class="check">
        <div class="wrapper">
            <a class="wow fadeInRight" style="color: #789;font-size: 17px;" href="/"><i class="fas fa-angle-left"></i> Назад</a>
            <div id="line-container" style="padding-top: 50px;">
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
<style>
    @media(max-height: 900px) {


        #app{
            margin-top:-140px !important;
        }
    }
</style>
    <div id="app" style="margin-top: -500px;">
        <reviews rews="{{$reviews}}"></reviews>
    </div>
@endsection

