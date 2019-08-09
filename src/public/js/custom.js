

$(function(){
	$('.main-nav__toggle').click(function(){
        // $('.main-nav__toggle').toggleClass('main-nav__toggle--active');
		$(this).toggleClass('active')
		$('.main-nav__list').slideToggle(400)
	})
});

$(function () {
    var path = window.location.pathname;
    path = path.replace(/\/$/, "");
    path = decodeURIComponent(path);
    if (path == '') {
        path = "/";
    }
    
    $(".main-nav__link").each(function () {
        if ($(this).attr('href') == path) {
            $(this).addClass("active");
        }
    });
});




if(window.location.pathname == '/'){
    $('.sl').slick({
        appendArrows: $('.sl'),
        prevArrow: '<button id="prev" type="button" class="sl__arrow prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>',
        nextArrow: '<button id="next" type="button" class="sl__arrow next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>',
        dots: true,
        adaptiveHeight: true,
        arrows: true
    });
}

$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#accept_email_feedback').click(function(){
        $.ajax('/ajax/add_email',{
            data : 'email='+$('#email_feedback').val(),
            method : 'post'
        });
        $('#email_feedback').val('')
    });
    var options = {
        //types: ['(city)'],
        componentRestrictions: { country: "ru" }
    };
    var input = document.getElementById("address");
    var autocomplete = new google.maps.places.Autocomplete(input, options);

    $('#request_accept').click(function(){
        var has_errors = false;
        if($('input[name="serial_pas"]').val().length > 4)
        {
            has_errors = true;
            alert('Серийный слишком длинный');
        }
        if($('input[name="serial_pas"]').val().length < 4)
        {
            has_errors = true;
            alert('Серийный слишком короткий');
        }
        if($('input[name="num_pas"]').val().length > 6)
        {
            has_errors = true;
            alert('Номер паспорта слишком длинный');
        }
        if($('input[name="num_pas"]').val().length < 6)
        {
            has_errors = true;
            alert('Номер паспорта слишком короткий');
        }
        if($('input[name="phone"]').val().length > 11)
        {
            has_errors = true;
            alert('Телефон слишком длинный');
        }
        if($('input[name="phone"]').val().length < 11)
        {
            has_errors = true;
            alert('Телефон слишком короткий');
        }
        if(!has_errors){
            window.location = encodeURI('/author?phone='+$('input[name="phone"]').val()+'&num_pas='+$('input[name="num_pas"]').val()
                +'&serial_pas='+$('input[name="serial_pas"]').val()+'&fname='+$('input[name="fname"]').val()+'&sname='+$('input[name="sname"]').val()+'&tname='+$('input[name="tname"]').val()
                +'&country='+$('select[name="country"]').val())
        }
    });

});

$(document).ready(function(){
    lineBar.animate(1, {
        duration: 10000
    });
});
function changePrice(num) {
    $('.comments__btn').removeClass('active');
    $('#'+num+'_but').addClass('active');
    window.price = num;
}
function nextPage(){
    axios.post('/ajax/save_sum',{price:$('#'+num+'_but').val()}).then((data)=>{
        if(data.data == 'ok'){
            window.location = '/from';
        }else{
            alert('системная ошибка');
        }
    });
}
function nextReference(){
    axios.post('/ajax/save_from',{country:$('select[name="country"]').val(),city:$('input[name="city"]').val(),address:$('input[name="address"]').val()}).then((data)=>{
        if(data.data == 'ok'){
            window.location = '/reference';
        }else{
            alert('системная ошибка');
        }
    });
}
