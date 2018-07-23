<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 7/7/18
 * Time: 2:23 PM
 */

namespace Agravic\AIB;



interface Validator
{
  function validate(Validatable $validatable);
}