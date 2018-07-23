<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 7/7/18
 * Time: 2:19 PM
 */

namespace Agravic\AIB;


/**
 * Interface Validatable
 * @package Agravic\AIB
 *
 * The Validatable interface creates a contract that the type of information can be validated using a Validator implementation.
 */
interface Validatable
{
  /**
   * @return bool
   */
  public function getValid(): bool;

  /**
   * @return string
   */
  public function getValue(): string;
}