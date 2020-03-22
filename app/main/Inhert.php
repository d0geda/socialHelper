<?php
/**
 * Created by PhpStorm.
 * User: Eduard Stehlík
 * Date: 02.04.2019
 * Time: 20:05
 */

namespace App\Main;

use Nette\Neon\Neon;
use Nette\Utils\Json;

abstract class Inhert
{

    public function cURL($url){

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $data = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if($httpcode == 200){
            $data = Json::decode($data, Json::FORCE_ARRAY);
            return [true, $data];
        }
        else{
            return [false];
        }
    }

    public function getMessage($mesID, $language){
        $fileName = __DIR__."/../lang/".$language.".neon";
        $value = file_get_contents($fileName);

        $neon = Neon::decode($value);
        return $neon[$language][$mesID];
    }

}