<?php

namespace Craftsman\Entities\Assets;

use Craftsman\Contracts\Assets\IAsset;

/**
 * Class AbstractAsset
 * @package Craftsman\Entities\Assets
 */
abstract class AbstractAsset implements IAsset {
	/**
	 * AbstractAsset constructor.
	 */
	public function __construct() {
		$this->register();
	}

	public function register() {
		$hookName = $this->isBackend() ? 'admin_enqueue_scripts' : 'wp_enqueue_scripts';
		add_action( $hookName, array( $this, 'queues' ) );
	}

	public function queues( $hook ) {
	}

	public function isBackend() {
		return true;
	}
}
