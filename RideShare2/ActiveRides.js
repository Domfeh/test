// Select UI elements or inputs
const form = $('#form'); //document.getElementById('form')
const Dname = $('#Dname');
const Dnumber = $('#Dnumber');

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
    checkRequired([Dname, Dnumber]);
    // TODO check for password length
    checkInputLength(Dname, 3, 30);
    // TODO check for password length
    checkInputLength(Dnumber, 5, 14);

    if(errors === 0){
        $('#success').html('All inputs are correct 👍🏿');
    }
    // Submit the form
})