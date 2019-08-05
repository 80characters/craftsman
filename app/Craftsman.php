<?php

namespace Craftsman;

use Craftsman\Contracts\Traits\ISingleton;
use Craftsman\Contracts\Traits\SingletonTrait;
use Craftsman\Contracts\Pages\IWelcomePage;

/**
 * Class Craftsman
 */
final class Craftsman implements ISingleton
{
    use SingletonTrait;

    private function __construct()
    {
        add_action('plugins_loaded', array($this, 'plugins_loaded'));
    }

    public function plugins_loaded()
    {
        load_plugin_textdomain('craftsman', false, CRAFTSMAN_DIR_PATH . '/languages');

        /** @var \Craftsman\Midas $midas */
        global $midas;

        $midas->resolve(IWelcomePage::class);
    }
}
