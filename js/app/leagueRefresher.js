function leagueRefresher($leagueContainer){

    if($leagueContainer.length) {

        var leagueId = $leagueContainer.data('league');

        if(leagueId){
            showSpinner();
            $.ajax({
                type: 'POST',
                dataType: "json",
                url: "app/ajax_return.php",
                data: {
                    function: 'getLeague',
                    leagueId: leagueId
                },
                success: function (response) {
                    processResponse(response);
                    var delay = 60*5*1000;
                    setTimeout(function(){
                        leagueRefresher($leagueContainer)
                    }, delay);
                }
            });
            hideSpinner();
        }

    }

}