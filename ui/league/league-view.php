<?php

    if( array_key_exists('league', $_GET) ) {

        $leagueId = filter_input(INPUT_GET, 'league', FILTER_SANITIZE_NUMBER_INT);

    }

?>

<div id="league-container" data-league="<?= !empty($leagueId) ? $leagueId : 'error' ?>">
</div>