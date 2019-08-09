

@extends('layouts.app')

@section('content')
<div class="sl">
    <div class="sl-slide">
        <img class="sl__image" src="img/sl1.jpg" alt="Слайд 1">
        <div class="sl__text">
            <h3 class="sl__headline">Кредитная карта всем</h3>
        </div>
    </div>
    <div class="sl-slide">
        <img class="sl__image" src="img/sl2.jpg" alt="Слайд 2">
        <div class="sl__text">
            <h3 class="sl__headline">Кредитная карта с плохой кредитной историей</h3>
        </div>
    </div>
    <div class="sl-slide">
        <img class="sl__image" src="img/sl3.jpg" alt="Слайд 3">
        <div class="sl__text">
            <h3 class="sl__headline">Получить деньги за 5 минут</h3>
        </div>
    </div>
</div>


<section class="features">
    <div class="wrapper">
        <h2 class="features__headline">Удобно для бизнеса</h2>
        <div class="features-wrap">
            <div class="features__item wow zoomIn" data-wow-duration="1.5s">
                <div class="features__icon">
                    <i class="fa fa-external-link"></i>
                </div>
                <a class="features__link" href="#">Отзывы</a>
            </div>
            <div class="features__item wow zoomIn" data-wow-duration="1.5s">
                <div class="features__icon">
                    <i class="fa fa-user-secret"></i>
                </div>
                <a class="features__link" href="#">Кредитная история не важна</a>
            </div>
            <div class="features__item wow zoomIn" data-wow-duration="1.5s">
                <div class="features__icon">
                    <i class="fa fa-line-chart"></i>
                </div>
                <a class="features__link" href="#">Процентная ставка</a>
            </div>
        </div>
    </div>
</section>

<section class="request">
    <div class="wrapper">
        <h2 class="request__headline">Оформить заявку</h2>
        <div class="contact-form">
                <div class="contact-form-wrap">
                    <div class="form-field wow fadeInLeft" data-wow-duration="1.5s">
                        <input type="text" class="contact-form__input" name="sname" placeholder="Фамилия">
                        <span class="form-field__icon"><i class="fa fa-user"></i></span>
                    </div>
                    <div class="form-field wow fadeInLeft" data-wow-duration="1.5s">
                        <input type="email" class="contact-form__input" name="fname" placeholder="Имя">
                        <span class="form-field__icon"><i class="fa fa-user"></i></span>
                    </div>
                    <div class="form-field wow fadeInRight" data-wow-duration="1.5s">
                        <input type="email" class="contact-form__input" name="tname" placeholder="Отчество">
                        <span class="form-field__icon"><i class="fa fa-user"></i></span>
                    </div>
                </div>

                <div class="contact-form-wrap">
                    <div class="form-field wow fadeInLeft" data-wow-duration="1.5s">
                        <select type="text" name="country" class="contact-form__input contact-form__select" placeholder="Россия">
                            <option value="ru">Россия</option>
                            <option value="ua">Украина</option>
                            <option value="by">Беларусь</option>
                            <option value="kz">Казахстан</option>
                            <option value="aw">Армения</option>
                            <option value="uz">Узбекистан</option>
                            <option value="tj">Таджикистан</option>
                            <option value>Другое</option>
                        </select>
                        <span class="form-field__icon"><i class="fa fa-flag"></i></span>
                    </div>
                    <div class="form-field wow fadeInLeft" data-wow-duration="1.5s">
                        <input type="text" class="contact-form__input" name="serial_pas" placeholder="Серия паспорта">
                        <span class="form-field__icon"><i class="fa fa-address-card"></i></span>
                    </div>
                </div>

                <div class="contact-form-wrap">

                    <div class="form-field wow fadeInRight" data-wow-duration="1.5s">
                        <input type="text" class="contact-form__input" name="num_pas"  placeholder="Номер паспорта">
                        <span class="form-field__icon"><i class="fa fa-address-card"></i></span>
                    </div>
                    <div class="form-field wow fadeInRight" data-wow-duration="1.5s">
                        <input type="tel" id="telephone" name="phone" class="contact-form__input" >
                        <span class="form-field__icon"><span class="icon-phone"></span></span>
                    </div>
                </div>
                <button class="contact-form__button wow fadeInRight" id="request_accept"><span>Проверить</span></button>
        </div>
    </div>
</section>
<div id="app">
<reviews rews="{{$reviews}}"></reviews>
</div>
<section class="feedback">
    <div class="wrapper wow zoomIn" data-wow-duration="1.5s">
        <h2 class="feedback__headline">Есть вопросы?</h2>
        <p class="feedback__offer">Введите свой Email и мы вам ответим!</p>
        <div class="input-group">
            <input type="email" class="form-control" placeholder="Укажите ваш Email" id="email_feedback">
            <span class="btn"><button class="feedback__btn" id="accept_email_feedback"></button></span>
        </div>
    </div>
</section>


<section class="contact-us">
    <div class="wrapper wow zoomIn" data-wow-duration="1.5s">
        <h2 class="contact-us__headline">Свяжитесь с нами!</h2>
        <ul class="socials">
            <li class="socials__item">
                <a class="socials__link" href="#">
                    <i class="socials__icon fa fa-facebook"></i>
                </a>
            </li>
            <li class="socials__item">
                <a class="socials__link" href="#">
                    <i class="socials__icon fa fa-twitter"></i>
                </a>
            </li>
            <li class="socials__item">
                <a class="socials__link" href="#">
                    <i class="socials__icon fa fa-linkedin"></i>
                </a>
            </li>
        </ul>
    </div>
</section>
@endsection

