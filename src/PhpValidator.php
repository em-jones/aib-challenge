<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 7/8/18
 * Time: 3:35 PM
 */

namespace Agravic\AIB;


/**
 * Class PhpValidator
 * @package Agravic\AIB
 */
class PhpValidator implements Validator
{

  function validate(Validatable $validatable)
  {
    return filter_var($validatable->getValue(), FILTER_VALIDATE_EMAIL) ? true : false;
  }
}