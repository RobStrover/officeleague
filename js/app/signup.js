
function initSignupForm() {

    var signUpFormParent = $("#signup-form-parent");

    if(signUpFormParent.length > 0) {

        var inputUsername = signUpFormParent.find('#inputUsername');
        var inputPassword = signUpFormParent.find('#inputPassword');
        var inputConfirmPassword = signUpFormParent.find('#inputConfirmPassword');
        var inputConfirmedTerms = signUpFormParent.find('#inputConfirmedTerms');

        inputUsername.blur(function(inputUsername){

            console.log(inputUsername.val());

            if(inputUsername.val()){

                checkUsernameTaken(inputUsername.val);

            }

        });

    }
}

function checkUsernameTaken(username) {

    showSpinner();
    $.ajax({
        type: 'POST',
        dataType: "json",
        url: "app/ajax_return.php",
        data: {
            function: 'checkUsernameTaken',
            username: username
        },
        success: function (response) {
            processResponse(response);
        }
    });
    hideSpinner();

}

$( document ).ready(function() {
    initSignupForm();
});