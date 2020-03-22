<?php

namespace App\Presenters;

use Nette\Application\UI\Presenter;


abstract class BasePresenter extends Presenter
{

    public function throwError($message, $errorCode){
        $this->sendJson($message);
        $this->getHttpResponse()->setCode($errorCode);
        exit();
    }

}
