<?php
/**
 * Created by PhpStorm.
 * User: Eduard Stehlík
 * Date: 01.04.2019
 * Time: 19:24
 */
namespace App\Lang;
class enUS
{
    public $error = "Oh no! I did not understand you! Could you please repeat it again?";
    public $errorNameNotFound = '<speak>Ohh sorry, I was not able, to find channel with name {CHANNELNAME}. <break time="0.5" /> Is the name right?</speak>';
    public $errorId = "I am sorry, but some problem had occured, please try it again later!";
    public $errorActionNotFound = "I am sorry, but there was some error while finding this action, please try again later!";
    public $errorStatisticNotFound = "Sorry, but I could not find any statistics for this channel!";
    public $errorRequestCouldNotBeHandled = "I am sorry, but there was a problem while communicating with youtube servers! Please try it again later!";
    /* < Statistics > */

    /* < Subscribers > */
    public $channelSubscribers = '<speak>Channel {CHANNELNAME} currently has {NUMBERSTAT} subscribers! <break time="1" /> What else can I do for you?</speak>';
    public $compareChannelSubscribers = '<speak>Channel {FIRSTCHANNELNAME} currently has {NUMBERDIFFERENCE} subscribers more than {SECONDCHANNELNAME}! <break time="1" /> What else can I do for you?<speak>';
    public $compareChannelSubscribersEqual = '<speak>Channel {FIRSTCHANNELNAME} and {SECONDCHANNELNAME} have same number of subscribers! <break time="1" /> What else can I do for you?</speak>';
    /* </ Subscribers > */

    /* < Views > */
    public $channelViews = '<speak>Channel {CHANNELNAME} currently has {NUMBERSTAT} views in total! <break time="1" /> What else can I do for you?</speak>';
    public $compareChannelViews = '<speak>Channel {FIRSTCHANNELNAME} currently has {NUMBERDIFFERENCE} views in total more than {SECONDCHANNELNAME}! <break time="1" /> What else can I do for you?<speak>';
    public $compareChannelViewsEqual = '<speak>Channel {FIRSTCHANNELNAME} and {SECONDCHANNELNAME} have same ammount of views in total! <break time="1" /> What else can I do for you?</speak>';
    /* </ Views > */

    /* </ Statistics > */
}