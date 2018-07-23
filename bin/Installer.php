<?php

/*
 * This file is part of the php-skeleton package.
 *
 * (c) Peter Kokot <peterkokot@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Agravic;

use Composer\Script\Event;

/**
 * Installer
 *
 */
class Installer
{
    public static function postUpdate(Event $event)
    {
//        $composer = $event->getComposer();
    }

    public static function postPackageInstall(Event $event)
    {
//        $installedPackage = $event->getOperation()->getPackage();
    }

    public static function warmCache(Event $event)
    {

    }
}
