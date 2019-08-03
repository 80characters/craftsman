<?php
/**
 * This is config file for PHP-DI.
 * php version 5.6
 *
 * @category Env
 * @package  Craftsman
 * @author   80characters <80chars@gmail.com>
 * @license  http://www.gnu.org/licenses/gpl-3.0.html GPL-3
 * @link     http://80chars.com
 * @since    19.07.06
 */

use \Craftsman\Contracts\Pages\IWelcomePage;
use \Craftsman\Entities\Pages\WelcomePage;

return [
    IWelcomePage::class => \DI\autowire(WelcomePage::class),
];
