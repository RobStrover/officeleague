
function processResponse(response) {
    removeAllAlerts();
    if('error' in response) {
        showAlert("danger", response.error);
    }
    if('message' in response) {
        showAlert("warning", response.message);
    }
    else {
        buildLeague(response[0]);
    }
}


function processUsernameTakenResponse(response) {

    var inputUsername = $("#signup-form-parent").find('#inputUsername');

    removeAlert(inputUsername.parent('.form-group').find('.alert'));

    if(response.usernameStatus == "available") {
        showAlert('success','Username is available',inputUsername.parent('.form-group'));
    } else {
        showAlert('danger','Username is not available',inputUsername.parent('.form-group'));
    }
}