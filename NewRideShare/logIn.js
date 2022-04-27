
const form = $('#form');
const password = $('#password');


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

// When form is submitted
form.submit(function(e){
    e.preventDefault();
    $('small').html('');
    errors = 0;

    // TODO check for required inputs
    checkRequired([password]);
    // TODO check for password length
    checkInputLength(password, 5, 14);


  
    // Submit the form
})