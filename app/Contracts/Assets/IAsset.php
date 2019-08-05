<?php

namespace Craftsman\Contracts\Assets;

interface IAsset {
	const FOR_BACK = 'backend';
	const FOR_FRONT = 'frontend';

	public function register();

	public function queues();

	public function with();
}
