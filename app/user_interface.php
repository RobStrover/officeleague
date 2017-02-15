<?php


    // Load the navigation bar

    require __DIR__."/../ui/nav/main.php";

    if(array_key_exists('league', $_GET)) {

        // Load the league so that the user can see it.

        require __DIR__."/../ui/league/league-view.php";

    } else {

        // Load the login window.

    }

?>