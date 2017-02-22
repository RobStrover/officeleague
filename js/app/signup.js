
function initSignupForm() {

    var signUpFormParent = $("#signup-form-parent");

    if(signUpFormParent.length > 0) {

        var inputUsername = signUpFormParent.find('#inputUsername');
        var inputPassword = signUpFormParent.find('#inputPassword');
        var inputConfirmPassword = signUpFormParent.find('#inputConfirmPassword');
        var inputConfirmedTerms = signUpFormParent.find('#inputConfirmedTerms');

        inputPassword.blur(comparePasswords);
        inputConfirmPassword.blur(comparePasswords);

        inputConfirmedTerms.on('click',(function() {
                removeEmphasis($(this));
        }));

        inputUsername.blur(function(){

            var inputUsername = $('#inputUsername');

            var inputUsernameValue = inputUsername.val();

            if(inputUsernameValue){

                checkUsernameTaken(inputUsernameValue);

            } else {
                removeAlert(inputUsername.parent('.form-group').find('.alert'));
                showAlert('warning','Please select a username',inputUsername.parent('.form-group'));
            }

        });

    }
}

function comparePasswords() {

    var signUpFormParent = $("#signup-form-parent");
    var inputPassword = signUpFormParent.find('#inputPassword');
    var inputConfirmPassword = signUpFormParent.find('#inputConfirmPassword');

    if(inputPassword.val() && inputConfirmPassword.val()) {
        if(inputPassword.val() !== inputConfirmPassword.val()) {
            removeAlert(inputConfirmPassword.parent('.form-group').find('.alert'));
            showAlert('warning','Your passwords do not match',inputConfirmPassword.parent('.form-group'));
        } else {
            removeAlert(inputConfirmPassword.parent('.form-group').find('.alert'));
            showAlert('success','Your passwords match',inputConfirmPassword.parent('.form-group'));
            var inputConfirmedTerms = signUpFormParent.find('#inputConfirmedTerms');
            console.log(inputConfirmedTerms.prop("checked"));
            if(inputConfirmedTerms.prop("checked") == false){
                addEmphasis(inputConfirmedTerms, 'pulse', true);
            }

        }
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
            processUsernameTakenResponse(response);
        }
    });
    hideSpinner();

}

$(document).ready(function() {
    initSignupForm();
});