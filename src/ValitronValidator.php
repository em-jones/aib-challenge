<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 7/7/18
 * Time: 2:41 PM
 */

namespace Agravic\AIB;



class RackitValidator implements Validator
{
  /**
   * @var \Rakit\Validation\Validator
   */
  private $validator;

  /**
   * RackitValidator constructor.
   */
  public function __construct()
  {
    $this->validator = new \Rakit\Validation\Validator();
  }

  /**
   * @param Validatable $validatable
   */
  function validate(Validatable $validatable)
  {
    $input = ['email' => $validatable->getValue()];
    $validator = $this->validator->make($input, [
      'email' => 'email'
    ]);
    $validator->validate();
    $isValid = $validator->passes();
    $validatable->setValid($isValid);
  }
}