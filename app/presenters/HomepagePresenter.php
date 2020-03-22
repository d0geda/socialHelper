<?php
/**
 * Created by PhpStorm.
 * User: Eduard Stehlík
 * Date: 01.04.2019
 * Time: 19:17
 */
namespace App\Presenters;

use App\Auth\Authenticate;
use App\Error\ErrorMessages;
use App\Main\Main;
use Nette\Utils\Json;
use App\Main\Response;


final class HomepagePresenter extends BasePresenter
{
    /** @var Authenticate */
    private $authenticate;

    /** @var Main */
    private $main;

    /** @var Response */
    private $response;

    public function __construct(Authenticate $authenticate, Main $main, Response $response)
    {
        $this->authenticate = $authenticate;
        $this->main = $main;
        $this->response = $response;
    }

    public function renderDefault()
	{
	    // Authentication
        if(!$this->authenticate->Authenticate()){
            $this->throwError(ErrorMessages::AUTH_FAILED_401, \Nette\Http\IResponse::S401_UNAUTHORIZED);
        }

        $rawData = $this->getHttpRequest()->getRawBody();

        // Check if data was sent
        if($rawData == NULL){
            $this->throwError(ErrorMessages::NO_DATA_SENT_400, \Nette\Http\IResponse::S400_BAD_REQUEST);
        }
        $data = Json::decode($rawData, Json::FORCE_ARRAY);

        // Set language file for output
        if(!$this->main->setLanguage($data['queryResult']['languageCode'])){
            $this->throwError(ErrorMessages::NO_DATA_SENT_400, \Nette\Http\IResponse::S400_BAD_REQUEST);
        }

        // Check if an action has been called
        if(empty($data['queryResult']['action'])){
            $this->throwError(ErrorMessages::NO_ACTION_CALLED_400, \Nette\Http\IResponse::S400_BAD_REQUEST);
        }

        $message = $this->main->getOutput($data['queryResult']['action'], $data);

        echo($this->response->simpleResponse($data["responseId"] ,$message));


	}
}
