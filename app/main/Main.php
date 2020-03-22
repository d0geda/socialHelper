<?php
/**
 * Created by PhpStorm.
 * User: Eduard Stehlík
 * Date: 01.04.2019
 * Time: 19:17
 */
namespace App\Main;

use App\Main\Youtube\Youtube;

class Main extends Inhert
{
    /** @var Youtube */
    private $youtube;

    private $language;

    public function __construct(Youtube $youtube)
    {
        $this->youtube = $youtube;
    }

    public function setLanguage($lang){
        $lang = str_replace("-", "", $lang);
        $fileName = __DIR__."/../lang/".$lang.".neon";
        if (file_exists($fileName)){
            $this->language = $lang;
        }
        else{
            $this->language = "enUS";
        }

        if(!empty($this->language)){
            return True;
        }
        else{
            return False;
        }

    }

    public function getOutput($action, $data){
        switch($action){

            case "getYoutubeChannelSubscribers":
                $message = $this->youtube->channelStats($data, "subscriberCount", $this->language);
                break;
            case "compareYoutubeChannelSubscribers":
                $message = $this->youtube->channelStatsCompare($data, "subscriberCount", $this->language);
                break;
            case "getYoutubeChannelViews":
                $message = $this->youtube->channelStats($data, "viewCount", $this->language);
                break;
            case "compareYoutubeChannelViews":
                $message = $this->youtube->channelStatsCompare($data, "viewCount", $this->language);
                break;

            default:
                $message = $this->getMessage("errorActionNotFound");

        }

        return $message;

    }

}