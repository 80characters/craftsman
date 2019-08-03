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
        /** @var \Craftsman\Jirvas $jirvas */
        global $jirvas;

        $jirvas->resolve(IWelcomePage::class);

        add_action('plugins_loaded', array($this, 'plugins_loaded'));
    }

    public function plugins_loaded()
    {
        load_plugin_textdomain('craftsman', false, CRAFTSMAN_DIR_PATH . '/languages');
    }
}
