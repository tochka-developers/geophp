<?php

declare(strict_types=1);
require_once('../geoPHP.inc');
if (!@include __DIR__ . '/../../vendor/autoload.php') {
    die('You must set up the project dependencies, run the following commands:
        wget http://getcomposer.org/composer.phar
        php composer.phar install');
}
