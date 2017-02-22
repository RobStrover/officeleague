<?php namespace Repositories\User\Signup;

use Repositories\Db\Connection\GetConnection as Connection;

class checkUsernameTaken
{

    public $usernameStatus = "notAvailable";

    public function __construct($username)
    {

        $this->checkUsernameTaken($username);

    }

    private function checkUsernameTaken($username) {

        $DbConnection = new Connection();
        $usernameQuery = sprintf("SELECT * FROM user WHERE user_username = '%s'", $username);
        $result = $DbConnection->connection->query($usernameQuery);

        if(mysqli_num_rows($result) == 0) {

            $this->usernameStatus = "available";

        }

    }

}