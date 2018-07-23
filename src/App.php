<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 7/9/18
 * Time: 5:36 PM
 */

namespace Agravic\AIB;

include_once __DIR__ . '/../vendor/autoload.php';
$email = isset($argv[1]) ? $argv[1] : "em@agiantagravic.com";
$validEmail = new EmailAddress($email);
if($validEmail->getValid(RespectValidator::class)){
  echo $validEmail->getValue() . ' is a valid email address';
} else {
  echo $validEmail->getValue() . ' is not a valid email address';
}