<?php
error_reporting(E_ALL);
require_once __DIR__ . '/vendor/autoload.php';

use ridvanbaluyos\sms\Sms as Sms;
use ridvanbaluyos\sms\providers\PromoTexter as PromoTexter;
use ridvanbaluyos\sms\providers\RisingTide as RisingTide;
use ridvanbaluyos\sms\providers\Semaphore as Semaphore;
use ridvanbaluyos\sms\providers\Chikka as Chikka;

$x = new PromoTexter();
$message = 'this is a test message';
$phoneNumber = '639989764990';

// Just change the classname to either PromoTexter, RisingTide, Chikka, or Semaphore.
$provider = new PromoTexter();

// If no provider is passed, it will be randomized based on the weight distribution.
$sms = new Sms();
$sms->send($phoneNumber, $message);