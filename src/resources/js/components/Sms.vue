<template>
    <section class="money">

        <div class="wrapper">
            <a class="wow fadeInRight" style="color: #789;font-size: 17px;" href="/"><i class="fas fa-angle-left"></i> Назад</a>

            <div class="form-field wow fadeInRight" data-wow-duration="1.5s" style="margin-top: 40px;">
                <input type="email" class="contact-form__input" placeholder="Код из смс" v-model="code">
                <span class="form-field__icon"><i class="fa fa-address-card"></i></span>
            </div>
            <div class="form-field wow fadeInRight" data-wow-duration="1.5s" style="margin-top: -10px;">
                <span style="color: rgb(119, 136, 153);cursor:pointer;  " v-if="time > 0">Запросить заново можно через <span>{{intToTime}}</span></span>
                <span style="color: rgb(119, 136, 153);cursor:pointer;  " v-on:click="sendNewCode" v-if="time == 0">Запросить код заново</span>
            </div>
            <button class="contact-form__button wow fadeInRight" v-on:click="sendCode()" style="    padding: 10px 50px 10px;"><span>Подтвердить</span></button>

        </div>

    </section>
</template>

<script>
    export default {
        name: "Sms",
        data : function(){
            return {
             time : 120,
                code : '',
            };
        },
        computed : {
          intToTime(){
            return Math.floor(this.time/60) + ':' +( this.time % 60 < 10 ? '0'+this.time % 60:this.time % 60);
          },
        },
        mounted(){
            setInterval(()=>{
                if(this.time > 0){
                    this.time = this.time - 1;
                }
            },1000);
        },
        methods : {
          sendNewCode(){
            this.time=120;
            axios.get('/update_sms');
          },
            sendCode(){
                axios.post('/check_sms',{code:this.code}).then((data)=>{
                    if(data.data == 'ok'){
                        window.location = '/checking';
                    }else{
                        alert('неверный код');
                    }
                });

            },
        },
    }
</script>

<style scoped>

</style>
