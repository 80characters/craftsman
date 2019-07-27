<?php

use \Craftsman\Contracts\Pages\IWelcomePage;
use \Craftsman\Entities\Pages\WelcomePage;

return [
    IWelcomePage::class => \DI\autowire(WelcomePage::class)
];
