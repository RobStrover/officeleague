function leagueRefresher($leagueContainer){

    if($leagueContainer.length) {

        var leagueId = $leagueContainer.data('league');

        if(leagueId){
            showSpinner();
            $.ajax({
                type: 'POST',
                dataType: "text",
                url: "app/ajax_return.php",
                data: {
                    function: 'getLeague',
                    leagueId: leagueId
                },
                success: function (response) {
                    processResponse(response);
                }
            });
            hideSpinner();
        }

    }

}