
// 
// Validate
// 

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
  return true;
}
function validateLastName() {
  if (checkIfEmpty(lastName)) return;
  return true;
}
function validatePatronymic() {
  if (checkIfEmpty(patronymic)) return;
  return true;
}
function validateSerial() {
  if (checkIfEmpty(serial)) return;
  return true;
}
function validatePassportNumber() {
  if (checkIfEmpty(passportNum)) return;
  return true;
}
function validateTelephone() {
  if (checkIfEmpty(telephone)) return;
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
  field.nextElementSibling.innerHTML = message;
}

function setValid(field) {
  el = field.nextElementSibling;
  $(field).removeClass('invalid-input');
  $(el).removeClass('error__text invalid');
  field.nextElementSibling.innerHTML = '';
}