

@extends('layouts.app')

@section('content')
    <section class="money">
        {{--        <button class="contact-form__button wow fadeInRight"
                        style="margin-left: 100px;min-width: 30px;opacity:0.5;padding: 10px 40px 10px;"><span>Назад</span></button>--}}

        <div class="wrapper">

            <div class="contact-form-wrap" style="text-align:center;">
                <h1 class="rate__headline">Куда доставить</h1>

                <div class="form-field wow fadeInLeft" data-wow-duration="1.5s">
                    <select type="text" class="contact-form__input contact-form__select" placeholder="Россия">
                        <option value="Россия">Россия</option>
                        <option value="Украина">Украина</option>
                        <option value="Беларусь">Беларусь</option>
                        <option value="Казахстан">Казахстан</option>

                    </select>
                    <span class="form-field__icon"><i class="fa fa-flag"></i></span>
                </div>
                <div class="form-field wow fadeInLeft" data-wow-duration="1.5s">
                    <input type="text" class="contact-form__input" placeholder="Город">
                    <span class="form-field__icon"><i class="fa fa-address-card"></i></span>
                </div>
                <div class="form-field wow fadeInLeft" data-wow-duration="1.5s">
                    <input type="text" class="contact-form__input"  id="address" placeholder="Адрес">
                    <span class="form-field__icon"><i class="fa fa-address-card"></i></span>
                </div>
                <div class="form-field wow fadeInRight" data-wow-duration="1.5s">
                    <input type="tel" id="telephone" class="contact-form__input" >
                    <span class="form-field__icon"><span class="icon-phone"></span></span>
                </div>
            </div>
            <button class="contact-form__button wow fadeInRight" style="    padding: 10px 50px 10px;"><span>Продолжить</span></button>

        </div>

    </section>

    <div id="app" style="margin-top: -350px;">
        <reviews rews="{{$reviews}}"></reviews>
    </div>
@endsection

