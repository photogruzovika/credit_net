

@extends('layouts.app')

@section('content')
    <section class="money">
        {{--        <button class="contact-form__button wow fadeInRight"
                        style="margin-left: 100px;min-width: 30px;opacity:0.5;padding: 10px 40px 10px;"><span>Назад</span></button>--}}

        <div class="wrapper">
            <a class="wow fadeInRight" style="color: #789;font-size: 17px;" href="/"><i class="fas fa-angle-left"></i> Назад</a>

            <div class="form-field wow fadeInRight" data-wow-duration="1.5s" style="margin-top: 40px;">
                <span style="color: rgb(51, 122, 183);font-size:20px;  ">Обработка паспортных данных</span>

            </div>
            <div class="form-field wow fadeInRight" data-wow-duration="1.5s" style="margin-top: -10px;">
                <div id="line-container"></div>

            </div>

        </div>

    </section>

    <div id="app" style="margin-top: -500px;">
        <reviews rews="{{$reviews}}"></reviews>
    </div>
@endsection

