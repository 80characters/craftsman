<?php

namespace Craftsman;

use Craftsman\Contracts\IAssistant;
use Craftsman\Contracts\Traits\SingletonTrait;

final class Midas implements IAssistant {
	use SingletonTrait;

	private $container;

	/**
	 * Midas constructor.
	 *
	 * @throws \Exception
	 */
	private function __construct() {
		$builder = new \DI\ContainerBuilder();
		$builder->useAutowiring( true );
		$builder->addDefinitions( CRAFTSMAN_DIR_PATH . 'env/config.php' );
		$builder->writeProxiesToFile( true, CRAFTSMAN_DIR_PATH . '/storage/proxies/' );
		$this->container = $builder->build();
	}

	/**
	 * Resolve instance of class by a contract.
	 *
	 * @param string $contract name of contract.
	 *
	 * @return mixed
	 * @throws \DI\DependencyException
	 * @throws \DI\NotFoundException
	 */
	public function resolve( $contract ) {
		return $this->container->get( $this->container->get( $contract ) );
	}
}
