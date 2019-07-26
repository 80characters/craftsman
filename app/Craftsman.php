<?php

namespace Craftsman;

use Craftsman\Contracts\Traits\ISingleton;
use Craftsman\Contracts\Traits\SingletonTrait;

/**
 * Class Craftsman
 */
final class Craftsman implements ISingleton
{
	use SingletonTrait;

	private function __construct()
	{ }
}
