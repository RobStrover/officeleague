function buildLeague(leagueData) {
    var leagueContainer = $('#league-container');
    leagueContainer.empty();

    addLeagueTitle(leagueContainer, leagueData.league_name);

}

function addLeagueTitle(leagueContainer, title){

    var leagueTitleContainer = getTag("<div/>",{
        "class":"container"
    });

    var leagueTitleRow = getTag("<div/>",{
        "class":"row"
    });

    var leagueTitleParent = getTag("<div/>",{
        "class":"col-sm-12"
    });

    if(title){

        var leagueTitle = getTag("<h1/>",{
           "text":title
        });

        leagueTitleParent.append(leagueTitle);

    }

    var shareLink = getTag("<p/>",{
        "text":"Share this league "+ window.location.href
    });

    leagueTitleParent.append(shareLink);


    leagueTitleContainer.append(leagueTitleRow);
    leagueTitleRow.append(leagueTitleParent);

    leagueContainer.append(leagueTitleContainer);
}