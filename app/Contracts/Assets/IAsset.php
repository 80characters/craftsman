<?php

namespace Craftsman\Contracts\Assets;

interface IAsset {
	public function register();

	public function queues( $hook );

	public function isBackend();
}
