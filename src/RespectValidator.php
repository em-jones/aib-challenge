<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 7/7/18
 * Time: 2:41 PM
 */

namespace Agravic\AIB;



class RespectValidator implements Validator
{
  /**
   * @var \Respect\Validation\Validator
   */
  private $validator;

  /**
   * RackitValidator constructor.
   */
  public function __construct()
  {
    $this->validator = new \Respect\Validation\Validator();
  }

  /**
   * @param Validatable $validatable
   * @return bool
   */
  function validate(Validatable $validatable): bool
  {
    $isValid = $this->validator::email()->validate($validatable->getValue());
    return $isValid;
  }
}