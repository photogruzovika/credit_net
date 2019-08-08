

$(function(){
	$('.main-nav__toggle').click(function(){
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


// jQuery
$("#telephone").intlTelInput({
    autoPlaceholder: "polite",
    utilsScript :'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.2/js/utils.js',
    initialCountry: "ru",
    separateDialCode:true,
    placeholderNumberType : 'FIXED_LINE'
});


// Validate
// Input fields
const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const patronymic = document.getElementById('patronymic');
const serial = document.getElementById('serial');
const passportNum = document.getElementById('passportNum');
const telephone = document.getElementById('telephone');

// Validators
function validateFirstName() {
  if (checkIfEmpty(firstName)) return;
  if (!checkIfOnlyLetters(firstName)) return;
  return true;
}
function validateLastName() {
  if (checkIfEmpty(lastName)) return;
  if (!checkIfOnlyLetters(lastName)) return;
  return true;
}
function validatePatronymic() {
  if (checkIfEmpty(patronymic)) return;
  if (!checkIfOnlyLetters(patronymic)) return;
  return true;
}
function validateSerial() {
  if (checkIfEmpty(serial)) return;
  if (!checkIfOnlyLetters(serial)) return;
  return true;
}
function validatePassportNumber() {
  if (checkIfEmpty(passportNum)) return;
  if (!checkIfOnlyLetters(passportNum)) return;
  return true;
}
function validateTelephone() {
  console.log(checkIfEmpty(telephone));
  if (checkIfEmpty(telephone)) return;
  if (!checkIfOnlyLetters(telephone)) return;
  return true;
}

function checkIfEmpty(field) {
  if (isEmpty(field.value.trim())) {   
    
    setInvalid(field, `Обязательное поле`);
    return true;
  } else {
    
    setValid(field);
    return false;
  }
}

function isEmpty(value) {
  if (value === '') return true;
  return false;
}

function setInvalid(field, message) {
  el = field.nextElementSibling;
  $(el).addClass('error__text invalid');
  $(field).addClass('invalid-input');
  $('div').insertAfter('div input');
  field.nextElementSibling.innerHTML = message;
}

function setValid(field) {
  el = field.nextElementSibling;
  $(field).removeClass('invalid-input');
  $(el).removeClass('error__text invalid');
  field.nextElementSibling.innerHTML = '';
}