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

$('.sl').slick({
    appendArrows: $('.sl'),
    prevArrow: '<button id="prev" type="button" class="sl__arrow prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>',
    nextArrow: '<button id="next" type="button" class="sl__arrow next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>',
    dots: true,
    adaptiveHeight: true,
    arrows: true
});