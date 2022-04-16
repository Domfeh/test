// Select UI elements or inputs
const form = $('#form'); //document.getElementById('form')
const Uname = $('#Uname');
const Dname = $('#Dname');
const Dnumber = $('#Dnumber');
const WhereTo = $('#WhereTo');
const PickUpPoint = $('#PickUPoint');
const email = $('#email');
const date = $('#date');
const password = $('#password');
const password2 = $('#password2');


// error count
let errors = 0;
// show input error message
const showError = (displayPlace, message) => {
    displayPlace.html(message);
    errors += 1;
}

// check for required field 
const checkRequired = (inputArr) => {
    
    inputArr.forEach(function(input){
        if(input.val() === '') {
            showError(input.next(), `${input.attr('id')} field is required`);
        }
    })
}

// check for input length
const checkInputLength = (input, min, max) => {
    if(input.val().length <= min){
        showError(input.next(), `${input.attr('id')} must be more than ${min} characters long`);
    } else if( input.val().length >= max){
        showError(input.next(), `${input.attr('id')} must be less than ${max} characters long`);
    }
}

// Check if email is valid
const checkEmail = (input) => {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!regex.test(input.val())){
        showError(input.next(), 'Email is not valid');
    }
}

const checkPasswordMatch = (password, password2) => {
    if(password.val() != password2.val()){
        showError(password2.next(), 'Your passwords do not match');
    }
}

// When form is submitted
form.submit(function(e){
    e.preventDefault();
    $('small').html('');
    errors = 0;

    // TODO check for required inputs
    checkRequired([Uname, email, Dname, Dnumber, date, PickUpPoint, WhereTo, password, password2]);
    // TODO check for username length
    checkInputLength(Uname, 3, 30);
    // TODO check for password length
    checkInputLength(Dname, 3, 30);
    // TODO check for password length
    checkInputLength(PickUpPoint, 3, 30);
    // TODO check for password length
    checkInputLength(WhereTo, 3, 30);
    // TODO check for password length
    checkInputLength(password, 5, 14);
    // TODO check for valid email
    checkEmail(email);
    // TODO check if the passwords match
    checkPasswordMatch(password, password2);

    if(errors === 0){
        $('#success').html('All inputs are correct 👍🏿');
    }
    // Submit the form
})