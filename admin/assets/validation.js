function login_validation() {

    var message = '';
    if (document.getElementById('email').value == '') {
        message = "Please provide email";
    }
    if (document.getElementById('password').value == '') {
        message = message + " Please provide password";
    }
    document.getElementById('message').innerHTML = "Okay";
}