
function showAlert(alertType, message) {

    alertType = alertType || 'alert-danger';
    message = message || 'Whoops... something went wrong!';

    var alertParent = getTag("<div/>",{
        "class":"alert alert-"+alertType+" alert-dismissible fade in",
        "role":"alert"
    }).append(getTag("<strong/>",{
        "text":message
    }));

    var alertButton = getTag("<button/>",{
        "type":"button",
        "class":"close",
        "data-dismiss":"alert",
        "aria-label":"Close"
    }).append(getTag("<span/>",{
        "aria-hidden":"true",
        "text":"x"
    }));

    alertParent.append(
        alertButton
    );

    $('#league-container').append(
        alertParent
    );

}

function removeAllAlerts(){
    $('.alert').remove();
}