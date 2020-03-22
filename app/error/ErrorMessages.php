<?php
/**
 * Created by PhpStorm.
 * User: Eduard Stehlík
 * Date: 01.04.2019
 * Time: 18:49
 */
namespace App\Error;

class ErrorMessages
{
    const AUTH_FAILED_401 = ["error" => "auth-failed", "message" => "Please login!", "code" => 401];

    const NO_DATA_SENT_400 = ["error" => "no-data-sent", "message" => "You did not send any data!", "code" => 400];
    const NO_ACTION_CALLED_400 = ["error" => "no-action-called", "message" => "You haven't called any action!", "code" => 400];
}