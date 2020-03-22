<?php
/**
 * Created by PhpStorm.
 * User: Eduard Stehlík
 * Date: 01.04.2019
 * Time: 19:17
 */
namespace App\Auth;

use App\Presenters\BasePresenter;

class Authenticate extends BasePresenter
{
    protected $DialogFlowLogin;
    protected $DialogFlowPassword;

    public function __construct($login, $password){

        $this->DialogFlowLogin = $login;
        $this->DialogFlowPassword = $password;

    }

    public function Authenticate(){
        $authorizationHeader = $this->getHttpRequest()->getHeader("Authorization");
        if (!isset($authorizationHeader)){
            return False;
        }
        list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])
            = explode(':', base64_decode(substr($authorizationHeader, 6)));

        if(empty($_SERVER['PHP_AUTH_USER']) || $_SERVER["PHP_AUTH_USER"] != $this->DialogFlowLogin || $_SERVER['PHP_AUTH_PW'] != $this->DialogFlowPassword) {
            return False;
        }
        else {
            return True;
        }
    }

}