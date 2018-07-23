<?php

/*
 * This file is part of the php-skeleton package.
 *
 * (c) Peter Kokot <peterkokot@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Agravic\AIB;

/**
 * Class EmailAddress
 * @package Agravic\AIB
 */
class EmailAddress implements Validatable
{
  /**
   * @var string
   */
  private $value;

  /**
   * @var bool
   */
  private $isValid;

  /**
   * @var Validator
   */
  private $validator;

  /**
   * EmailAddress constructor.
   * @param $value
   */
  public function __construct($value = null)
  {
    $this->value = $value;
  }

  /**
   * @param string|null $validatorType
   * @throws NoValueException
   * @return bool
   */
  public function getValid(string $validatorType = null): bool
  {
    if($this->value === null) {
      throw new NoValueException();
    }
    switch ($validatorType) {
      case RackitValidator::class:
        $this->validator = ValidatorFactory::validatorFactory()->respectValidator();
        break;
      case RespectValidator::class;
        $this->validator = ValidatorFactory::validatorFactory()->respectValidator();
        break;
      case ValitronValidator::class;
        $this->validator = ValidatorFactory::validatorFactory()->respectValidator();
        break;
      default:
        //most performant based on current tests
        $this->validator = ValidatorFactory::validatorFactory()->respectValidator();
        break;
    }
    return $this->validator->validate($this);
  }

  /**
   * @return string
   */
  public function getValue(): string
  {
    return $this->value;
  }
}
