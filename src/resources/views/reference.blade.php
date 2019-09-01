

@extends('layouts.app')

@section('content')
    <section class="money">
        {{--        <button class="contact-form__button wow fadeInRight"
                        style="margin-left: 100px;min-width: 30px;opacity:0.5;padding: 10px 40px 10px;"><span>Назад</span></button>--}}

        <div class="wrapper">

            <div class="contact-form-wrap" style="text-align:center;">
                <h1 class="rate__headline">Укажите справку</h1>


                <div class="form-field wow fadeInLeft" data-wow-duration="1.5s">
                    <span class="form-field__icon"><i class="fa fa-address-card"></i></span>
                    <input
                        type="text"
                        name="reference"
                        id="reference"
                        class="contact-form__input"
                        placeholder="Справка"
                        onfocusout="validateReference()"
                    />
                    <div></div>
                </div>
            </div>
            <button class="contact-form__button wow fadeInRight toCheckRef" style="    padding: 10px 50px 10px;"><span>Продолжить</span></button>

        </div>

    </section>
    <style>
        @media(max-height: 900px) {


            #app{
                margin-top:-290px !important;
            }
        }
        @media(max-height: 600px) {


            #app{
                margin-top:-150px !important;
            }
        }
        @media(max-height: 500px) {


            #app{
                margin-top:50px !important;
            }
        }
        @media(max-height: 400px) {


            #app{
                margin-top:210px !important;
            }
        }
        @media(max-width: 900px) {
            .invalid{
                right:20% !important;
            }
        }
    </style>

    <div id="app" style="margin-top: -500px;">
        <reviews rews="{{$reviews}}"></reviews>
    </div>

@endsection

