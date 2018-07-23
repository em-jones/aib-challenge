<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 7/7/18
 * Time: 2:53 PM
 */

namespace Agravic\AIB;


class ValidatorFactory
{

  /**
   * @var ValidatorFactory
   */
  private static $factory;
  /**
   * @var RackitValidator
   */
  private $rackitValidator;

  /**
   * @var ValitronValidator
   */
  private $valitronValidator;

  /**
   * @var RespectValidator
   */
  private $respectValidator;

  /**
   * @var PhpValidator
   */
  private $baselineValidator;

  /**
   * ValidatorFactory constructor.
   */
  private function __construct()
  {
  }

  public static function validatorFactory(): ValidatorFactory {
    if(self::$factory === null) {
      self::$factory = new ValidatorFactory();
    }
    return self::$factory;
  }

  public function rackitValidator(): RackitValidator{
    if($this->rackitValidator === null){
      $this->rackitValidator = new RackitValidator();
    }
    return clone $this->rackitValidator;
  }

  public function respectValidator(): RespectValidator{
    if($this->respectValidator === null){
      $this->respectValidator = new RespectValidator();
    }
    return clone $this->respectValidator;
  }

  public function valitronValidator() : ValitronValidator{
    if($this->valitronValidator === null){
      $this->valitronValidator = new ValitronValidator();
    }
    return clone $this->valitronValidator;
  }

  public function baselineValidator() : PhpValidator {
    if($this->baselineValidator === null){
      $this->baselineValidator = new PhpValidator();
    }
    return clone $this->baselineValidator;
  }
}