<template>

    <section class="request">
        <div class="wrapper">
            <h2 class="request__headline">Оформить заявку</h2>
            <div class="contact-form">
                <form action="#">
                    <div class="contact-form-wrap">
                        <div class="form-field wow fadeInLeft" data-wow-duration="1.5s">
                            <input type="text" class="contact-form__input" placeholder="Фамилия">
                            <span class="form-field__icon"><i class="fa fa-user"></i></span>
                        </div>
                        <div class="form-field wow fadeInLeft" data-wow-duration="1.5s">
                            <input type="email" class="contact-form__input" placeholder="Имя">
                            <span class="form-field__icon"><i class="fa fa-user"></i></span>
                        </div>
                        <div class="form-field wow fadeInRight" data-wow-duration="1.5s">
                            <input type="email" class="contact-form__input" placeholder="Отчество">
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
                            <input type="text" class="contact-form__input" placeholder="Серия паспорта">
                            <span class="form-field__icon"><i class="fa fa-address-card"></i></span>
                        </div>
                    </div>

                    <div class="contact-form-wrap">

                        <div class="form-field wow fadeInRight" data-wow-duration="1.5s">
                            <input type="email" class="contact-form__input" placeholder="Номер паспорта">
                            <span class="form-field__icon"><i class="fa fa-address-card"></i></span>
                        </div>
                        <div class="form-field wow fadeInRight" data-wow-duration="1.5s">
                            <input type="tel" id="telephone" name="phone" class="contact-form__input" >
                            <span class="form-field__icon"><span class="icon-phone"></span></span>
                        </div>
                    </div>
                    <button class="contact-form__button wow fadeInRight"><span>Проверить</span></button>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "Request",

    }
</script>

<style scoped>

</style>
