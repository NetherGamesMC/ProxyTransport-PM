<?php

declare(strict_types=1);

namespace NetherGames\ProxyTransport;

use function define;
use function defined;
use function dirname;

// composer autoload doesn't use require_once and also pthreads can inherit things
if (defined('nethergames\_CORE_CONSTANTS_INCLUDED')) {
    return;
}
define('nethergames\_CORE_CONSTANTS_INCLUDED', true);

define('nethergames\COMPOSER_AUTOLOADER_PATH', dirname(__FILE__, 4) . '/vendor/autoload.php');