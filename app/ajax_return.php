<?php

use \Repositories\Utils\Json\JsonReturn as JsonReturn;
use \Repositories\League\Read\ReadLeague as ReadLeague;
use \Repositories\User\Signup\checkUsernameTaken as checkUsernameTaken;

require_once 'start.php';

require_once 'globals.php';

if (array_key_exists('function', $_POST)) {

    $function = filter_input(INPUT_POST, 'function', FILTER_SANITIZE_STRING);

    switch($function) {
        case 'getLeague':
            $leagueId = filter_input(INPUT_POST, 'leagueId', FILTER_SANITIZE_NUMBER_INT);
            new ReadLeague($leagueId);
            break;
        case 'checkUsernameTaken':
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $usernameTaken = new checkUsernameTaken($username);
            new JsonReturn($usernameTaken);
            break;
        default:

            $error = array(
                "error"=>"No function requested. Please refresh this page and try again."
            );

            new JsonReturn($error);

            break;
    }

} else {

    $error = array(
        "error"=>"No function requested. Please refresh this page and try again."
    );

    new JsonReturn($error);

}