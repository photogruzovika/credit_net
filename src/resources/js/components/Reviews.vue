<template>
    <section class="comments wow zoomIn" data-wow-duratio="1.5s">
        <div class="wrapper">
            <h2 class="comments__headline">Отзывы</h2>
            <div class="comments-wrap" v-for="review in current_reviews">
                <div class="comments__item">
                    <h4 class="comments__name">{{review.name}}</h4>
                    <p class="comments__text">{{review.mes}}</p>
                </div>
            </div>
            <nav class="comments__navigation">
                <ul class="comments__pagination">
                    <li class="page-item"><a v-on:click="backPage()" class="comments__btn comments__btn--bordered-1" style="cursor:pointer;">Назад</a></li>
                    <li class="page-item " v-for="n in reviews.length">
                        <a v-on:click="changePage(n)" class="comments__btn"
                           :class="[n == reviews_page ? 'active' : '']"
                            style="cursor:pointer;">{{n}}</a>
                    </li>
                    <li class="page-item"><a v-on:click="nextPage()" class="comments__btn comments__btn--bordered-2" style="cursor:pointer;">Вперед</a></li>
                </ul>
            </nav>

            <template v-if="sended == false">
            <h2 class="comments__headline comments__headline--center">Оставить отзыв</h2>
            <div class="form-field form-field--comments" data-wow-duration="1.5s">
                <input type="name" class="comments__input" placeholder="Имя" v-model="name">
                <span class="form-field__icon"><i class="fa fa-user"></i></span>
            </div>
            <div class="form-field form-field--comments" data-wow-duration="1.5s">
                <textarea class="form-field__textarea" name="text" placeholder="Сообщение" v-model="message"></textarea>
                <span class="form-field__icon"><i class="fa fa-pencil"></i></span>
            </div>
            <button class="contact-form__button contact-form__button--comments" v-on:click="sendReview()"><span>Отправить</span></button>
            </template>
        </div>
    </section>
</template>

<script>
    export default {
        data : function(){
            return {
                sended : false,
                name : '',
                message : '',
                reviews_page : 1,
                reviews : [],
                current_reviews: [],
            }
        },
        mounted() {
            var rews = JSON.parse(this.$attrs.rews);
            _.forEach(rews,(item, i)=>{
                this.reviews[parseInt(i/10)] = [];
            });
            _.forEach(rews,(item, i)=>{
                this.reviews[parseInt(i/10)].push({name:item.name,mes:item.text});
            });
         //   this.reviews[0] = [{name:'ewq1',mes:'ewq1'},{name:'ewq',mes:'ewq'},{name:'ewq',mes:'ewq'},{name:'ewq',mes:'ewq'}];
           // this.reviews[1] = [{name:'ewq2',mes:'ewq2'},{name:'ewq',mes:'ewq'},{name:'ewq',mes:'ewq'},{name:'ewq',mes:'ewq'}];
            this.current_reviews = this.reviews[0];
        },
        methods : {
          sendReview(){
              this.sended = true;
              axios.post('/ajax/add_review',{name:this.name,message:this.message});
              this.reviews[0].unshift({name:this.name,mes:this.message});
          },
            changePage(n){
              this.reviews_page = n;
                this.current_reviews = this.reviews[n-1];
            },
            backPage(){
                this.reviews_page = Math.max(this.reviews_page - 1, 1);
                this.current_reviews = this.reviews[Math.max(this.reviews_page - 1, 1)-1];

            },
            nextPage(){
                this.reviews_page = Math.min(this.reviews_page +1, this.reviews.length);
                this.current_reviews = this.reviews[Math.min(this.reviews_page + 1, this.reviews.length)-1];
            }
        },
    }
</script>
