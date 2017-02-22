
function showAlert(alertType, message, alertTarget) {

    alertTarget = alertTarget || $('#league-container');

    alertType = alertType || 'danger';
    message = message || 'Whoops... something went wrong!';

    var alertParent = getTag("<div/>",{
        "class":"alert alert-"+alertType+" alert-dismissible animated flipInX",
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

    if (alertTarget) {
        alertTarget.append(
            alertParent
        );
    }

}

function removeAllAlerts(){
    $('.alert').remove();
}

function removeAlert(alert) {
    if(alert.length > 0) {
        alert.remove();
    }

}