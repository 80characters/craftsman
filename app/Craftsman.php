<?php

namespace Craftsman;


use Craftsman\Contracts\Traits\ISingleton;
use Craftsman\Contracts\Traits\SingletonTrait;

/**
 * Class Craftsman
 */
final class Craftsman implements ISingleton {
	use SingletonTrait;

	private $_container;

	/**
	 * Container constructor.
	 * @throws \Exception
	 */
	private function __construct() {
		$builder = new \DI\ContainerBuilder();
		$builder->addDefinitions( CRAFTSMAN_DIR_PATH . "env/config.php" );
		$builder->enableCompilation( CRAFTSMAN_DIR_PATH . '/storage/tmp/' );
		$builder->writeProxiesToFile( true, CRAFTSMAN_DIR_PATH . '/storage/proxies/' );
		try {
			$this->_container = $builder->build();
		} catch ( \Exception $e ) {
			// TODO: handle this exception.
		}
	}

	/**
	 * @param $contract
	 *
	 * @return mixed
	 * @throws \DI\DependencyException
	 * @throws \DI\NotFoundException
	 */
	public function resolve( $contract ) {
		return $this->_container->get( $contract );
	}
}