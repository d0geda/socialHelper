<?php
/**
 * Created by PhpStorm.
 * User: Eduard Stehlík
 * Date: 02.04.2019
 * Time: 19:02
 */
namespace App\Main\Youtube;

use App\Main\Inhert;

final class Youtube extends Inhert
{

    private $url;
    private $apiKey;

    public function __construct($url, $apiKey)
    {

        $this->url = $url;
        $this->apiKey = $apiKey;

    }

    public function channelStats($data, $stats, $language){
        $name = $data["queryResult"]["parameters"]["channelName"];
        $name = str_replace(" ", "", $name);
        $searchUrl = $this->url."search?part=snippet&type=channel&maxResults=1&q=".$name."&key=".$this->apiKey;

        $result = $this->cURL($searchUrl);
        if($result[0]) {
            if ($result[1]["pageInfo"]["totalResults"] >= 1) {
                $channelID = $result[1]["items"][0]["id"]["channelId"];
                $channelTitle = $result[1]["items"][0]["snippet"]["title"];

                $statisticsUrl = $this->url . "channels?part=statistics&id=" . $channelID . "&key=" . $this->apiKey;
                $result = $this->cURL($statisticsUrl);

                if ($result[0]) {
                    $number = $result[1]["items"][0]["statistics"][$stats];

                    switch ($stats) {
                        case "subscriberCount":
                            $message = $language->channelSubscribers;
                            break;
                        case "viewCount":
                            $message = $language->channelViews;
                            break;
                    }
                    if (!empty($message)) {
                        $message = str_replace("{CHANNELNAME}", $channelTitle, $message);
                        $message = str_replace("{NUMBERSTAT}", strval($number), $message);
                    } else {
                        $message = $language->errorStatisticNotFound;
                    }
                } else {
                    $message = $language->errorRequestCouldNotBeHandled;
                }
            } else {
                $message = $language->errorNameNotFound;
                $message = str_replace("{CHANNELNAME}", $name, $message);
            }
        }
        else{
            $message = $language->errorRequestCouldNotBeHandled;
        }

        return $message;

    }

    public function channelStatsCompare($data, $stats, $language){

        $flag = true;
        $firstName = $data["queryResult"]["parameters"]["firstChannelName"];
        $secondName = $data["queryResult"]["parameters"]["secondChannelName"];

        // 1st channel
        $searchUrl = $this->url."search?part=snippet&type=channel&maxResults=1&q=".$firstName."&key=".$this->apiKey;

        $result = $this->cURL($searchUrl);

        if($result[0]) {
            if ($result[1]["pageInfo"]["totalResults"] >= 1) {
                $channelID = $result[1]["items"][0]["id"]["channelId"];
                $channelTitleFirstChannel = $result[1]["items"][0]["snippet"]["title"];

                $statisticsUrl = $this->url . "channels?part=statistics&id=" . $channelID . "&key=" . $this->apiKey;

                $result = $this->cURL($statisticsUrl);

                if ($result[0]) {
                    $numberFirstChannel = $result[1]["items"][0]["statistics"][$stats];
                } else {
                    $flag = false;
                    $message = $language->errorRequestCouldNotBeHandled;
                }
            } else {
                $flag = false;
                $message = $language->errorNameNotFound;
                $message = str_replace("{CHANNELNAME}", $firstName, $message);
            }
        }
        else{
            $flag = false;
            $message = $language->errorRequestCouldNotBeHandled;
        }

        // 2nd channel

        if($flag){
            $searchUrl = $this->url."search?part=snippet&type=channel&maxResults=1&q=".$secondName."&key=".$this->apiKey;

            $result = $this->cURL($searchUrl);

            if($result[0]) {
                if ($result[1]["pageInfo"]["totalResults"] >= 1) {
                    $channelID = $result[1]["items"][0]["id"]["channelId"];
                    $channelTitleSecondChannel = $result[1]["items"][0]["snippet"]["title"];

                    $statisticsUrl = $this->url . "channels?part=statistics&id=" . $channelID . "&key=" . $this->apiKey;

                    $result = $this->cURL($statisticsUrl);

                    if ($result[0]) {
                        $numberSecondChannel = $result[1]["items"][0]["statistics"][$stats];
                    } else {
                        $flag = false;
                        $message = $language->errorRequestCouldNotBeHandled;
                    }
                } else {
                    $flag = false;
                    $message = $language->errorNameNotFound;
                    $message = str_replace("{CHANNELNAME}", $secondName, $message);
                }
            }
            else{
                $flag = false;
                $message = $language->errorRequestCouldNotBeHandled;
            }

            if($flag) {

                switch($stats) {
                    case "subscriberCount":
                        $message = $language->compareChannelSubscribers;
                        break;
                    case "viewCount":
                        $message = $language->compareChannelViews;
                        break;
                }

                $numberDifference = abs($numberFirstChannel - $numberSecondChannel);
                if ($numberDifference == 0) {
                    switch($stats) {
                        case "subscriberCount":
                            $message = $language->compareChannelSubscribersEqual;
                            break;
                        case "viewCount":
                            $message = $language->compareChannelViewsEqual;
                            break;
                    }
                    $message = str_replace("{FIRSTCHANNELNAME}", $channelTitleFirstChannel, $message);
                    $message = str_replace("{SECONDCHANNELNAME}", $channelTitleSecondChannel, $message);
                } else {
                    if ($numberFirstChannel > $numberSecondChannel) {
                        $message = str_replace("{FIRSTCHANNELNAME}", $channelTitleFirstChannel, $message);
                        $message = str_replace("{SECONDCHANNELNAME}", $channelTitleSecondChannel, $message);
                    } else {
                        $message = str_replace("{FIRSTCHANNELNAME}", $channelTitleSecondChannel, $message);
                        $message = str_replace("{SECONDCHANNELNAME}", $channelTitleFirstChannel, $message);
                    }
                    $message = str_replace("{NUMBERDIFFERENCE}", strval($numberDifference), $message);
                }
            }

        }

        return $message;

    }
}