
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
    if (checkIfEmpty(firstName)) return false;
    return true;
}
function validateLastName() {
    if (checkIfEmpty(lastName)) return false;
    return true;
}
function validatePatronymic() {
    if (checkIfEmpty(patronymic)) return false;
    return true;
}
function validateSerial() {
    if (!checkIfEmpty(serial) || !checkIfLess(serial,4) || !checkIfMore(serial,4)) return true;
    return false;
}
function validatePassportNumber() {
    if (!checkIfEmpty(passportNum) || !checkIfLess(passportNum,6) || !checkIfMore(passportNum,6)) return true;
    return false;
}
function validateTelephone() {
    if (!checkIfEmpty(telephone) || !checkIfLess(telephone,10) || !checkIfMore(telephone,11)) return true;
    return false;
}

function checkIfLess(field, much) {
    if (field.value.trim().length < much) {

        setInvalid(field, `Слишком короткое`);
        return true;
    } else {

        setValid(field);
        return false;
    }
}

function checkIfMore(field, much) {
    if (field.value.trim().length > much) {

        setInvalid(field, `Слишком длинное`);
        return true;
    } else {

        setValid(field);
        return false;
    }
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
    if(field.nextElementSibling != undefined){
        field.nextElementSibling.innerHTML = message;
    }
}

function setValid(field) {
    el = field.nextElementSibling;
    $(field).removeClass('invalid-input');
    $(el).removeClass('error__text invalid');
    if(field.nextElementSibling != undefined){
        field.nextElementSibling.innerHTML = '';
    }
}
