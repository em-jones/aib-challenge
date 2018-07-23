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
 * Class Skeleton
 *
 */
class EmailAddress implements Validateable
{
  /**
   * @var string
   */
    private $value;

  /**
   * EmailAddress constructor.
   * @param $value
   */
  public function __construct($value = null)
  {
    $this->value = $value;
  }


  /**
   * @return boolean
   */
  function isValid()
  {
    return $this
  }
}
