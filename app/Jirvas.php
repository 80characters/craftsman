<?php
namespace Craftsman;

use Craftsman\Contracts\IAssistant;
use Craftsman\Contracts\Traits\SingletonTrait;

final class Jirvas implements IAssistant {

    use SingletonTrait;

    private $_container;

	/**
	 * Jirvas constructor.
	 * @throws \Exception
	 */
	private function __construct() {
		$builder = new \DI\ContainerBuilder();
		$builder->addDefinitions( CRAFTSMAN_DIR_PATH . "env/config.php" );
		$builder->enableCompilation( CRAFTSMAN_DIR_PATH . '/storage/tmp/' );
		$builder->writeProxiesToFile( true, CRAFTSMAN_DIR_PATH . '/storage/proxies/' );
		$this->_container = $builder->build();
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