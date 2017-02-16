
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