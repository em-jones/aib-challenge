<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 7/7/18
 * Time: 2:41 PM
 */

namespace Agravic\AIB;


/**
 * Class ValitronValidator
 *
 * @package Agravic\AIB
 */
class ValitronValidator implements Validator
{
  /**
   * @var \Valitron\Validator
   */
  private $validator;

  /**
   * RackitValidator constructor.
   */
  public function __construct()
  {
    $this->validator = new \Valitron\Validator();
  }

  /**
   * @param Validatable $validatable
   * @return bool
   */
  function validate(Validatable $validatable)
  {
    $validator = $this->validator->withData(['email' => $validatable->getValue()]);
    $validator->rule('email', 'email');
    $validator->rule('required', ['email']);
    $isValid = $validator->validate();
    return $isValid;
  }
}