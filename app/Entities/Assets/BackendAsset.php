<?php

namespace Craftsman\Entities\Assets;

use Craftsman\Contracts\Assets\IBackendAsset;

class BackendAsset extends AbstractAsset implements IBackendAsset {
	private $_version = '19.07.06';

	public function queues( $hook ) {
		if ( 'toplevel_page_craftsman-page' === $hook ) {
			wp_enqueue_style( CRAFTSMAN_PREFIX . 'style', CRAFTSMAN_DIR_URL . 'public/admin/css/style.css', [], $this->_version );
		}
	}
}
