<?php
/**
 * Created by PhpStorm.
 * User: Eduard Stehlík
 * Date: 03.04.2019
 * Time: 16:59
 */

namespace App\Main;


class Response
{

    public function simpleResponse($responseID, $message){
        $response = ["source" => $responseID, "fulfillmentText" => $message];
        $response = json_encode($response);

        return $response;
    }

}