<?php

namespace Craftsman;

use Craftsman\Contracts\Assets\IBackendAsset;
use Craftsman\Contracts\Assets\IFrontendAsset;
use Craftsman\Contracts\Traits\ISingleton;
use Craftsman\Contracts\Traits\SingletonTrait;
use Craftsman\Contracts\Pages\IWelcomePage;

/**
 * Class Craftsman
 */
final class Craftsman implements ISingleton
{
    use SingletonTrait;

	/**
	 * Craftsman constructor.
	 */
    private function __construct()
    {
        add_action('plugins_loaded', array($this, 'plugins_loaded'));
    }

	/**
	 * @throws \DI\DependencyException
	 * @throws \DI\NotFoundException
	 */
    public function plugins_loaded()
    {
        load_plugin_textdomain('craftsman', false, CRAFTSMAN_DIR_PATH . '/languages');

        /** @var Midas $midas */
        global $midas;

        $midas->resolve(IWelcomePage::class);
	    $midas->resolve(IBackendAsset::class);
	    $midas->resolve(IFrontendAsset::class);
    }
}
