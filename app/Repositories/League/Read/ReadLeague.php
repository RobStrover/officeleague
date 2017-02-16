<?php namespace Repositories\League\Read;

use Repositories\Db\Connection\GetConnection as Connection;
use Repositories\Utils\Json\JsonReturn as JsonReturn;

class ReadLeague
{
    public function __construct($leagueId) {

        $this->getLeague($leagueId);

    }

    private function getLeague($leagueId){

        $DbConnection = new Connection();

        if(null !== $DbConnection->connection) {

            $leagueQuery = sprintf("SELECT league_name, league_data FROM league WHERE league_id = '%d' AND league_deleted = '0'", $leagueId);

            $result = $DbConnection->connection->query($leagueQuery);
            $singleLeague = mysqli_fetch_all($result,MYSQLI_ASSOC);

            if(!empty($singleLeague)) {
                new JsonReturn($singleLeague);
            }

            $message = array(
                "message"=>"This league no longer exists."
            );

            new JsonReturn($message);

        } else {

            $error = array(
                "error"=>"No database connection found."
            );

            new JsonReturn($error);
        }

    }

}