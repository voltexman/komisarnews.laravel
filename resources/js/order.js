var inputName = document.querySelector('input[name="name"]');
var inputCity = document.querySelector('input[name="city"]');
var inputEmail = document.querySelector('input[name="email"]');
var inputPhone = document.querySelector('input[name="phone"]');
var inputWeight = document.querySelector('input[name="hair_weight"]');
var inputLength = document.querySelector('input[name="hair_length"]');
var inputAge = document.querySelector('input[name="age"]');
var textareaDescription = document.querySelector('textarea[name="description"]');

var nameCheck = document.querySelector('small.name');
var cityCheck = document.querySelector('small.city');
var emailCheck = document.querySelector('small.email');
var phoneCheck = document.querySelector('small.phone');
var weightCheck = document.querySelector('small.weight');
var lengthCheck = document.querySelector('small.length');
var ageCheck = document.querySelector('small.age');
var descriptionCheck = document.querySelector('small.description');

inputName.addEventListener('input', function () {
    nameCheck.textContent = inputName.value;
});
inputCity.addEventListener('input', function () {
    cityCheck.textContent = inputCity.value;
});
inputEmail.addEventListener('input', function () {
    emailCheck.textContent = inputEmail.value;
});
inputPhone.addEventListener('input', function () {
    phoneCheck.textContent = inputPhone.value;
});
inputWeight.addEventListener('input', function () {
    weightCheck.textContent = inputWeight.value;
});
inputLength.addEventListener('input', function () {
    lengthCheck.textContent = inputLength.value;
});
inputAge.addEventListener('input', function () {
    ageCheck.textContent = inputAge.value;
});
textareaDescription.addEventListener('input', function () {
    descriptionCheck.textContent = textareaDescription.value;
});
