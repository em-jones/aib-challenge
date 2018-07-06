<?php

/*
 * This file is part of the php-skeleton package.
 *
 * (c) Peter Kokot <peterkokot@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Agravic\Package;


class AppTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @Test
   */
    public function testCanBeNegated()
    {
        // Arrange
        $a = new App(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }
}
