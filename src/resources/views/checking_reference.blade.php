

@extends('layouts.app')

@section('content')

    <section class="check">
        <div class="wrapper">
            <a class="wow fadeInRight" style="color: #789;font-size: 17px;" href="/"><i class="fas fa-angle-left"></i> Назад</a>
            <div id="line-container" style="padding-top: 50px;">
                <div class="check__name wow fadeInRight">
                    Идёт анализ кредитной истории
                </div>
            </div>
            <div class="check__progress check4 wow fadeInRight">
                Анализ завершён
                <i class="fa fa-check"></i>
            </div>
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

