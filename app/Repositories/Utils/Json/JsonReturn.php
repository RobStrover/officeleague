<?php namespace Repositories\Utils\Json;

class JsonReturn
{

    public function __construct($data)
    {

        $this->returnJson($data);

    }

    private function returnJson($data)
    {

        header('Content-Type: application/json');
        echo json_encode($data);
        exit();

    }

}
