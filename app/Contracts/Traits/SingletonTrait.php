<?php

namespace Craftsman\Contracts\Traits;

/**
 * Trait SingletonTrait
 * @package Craftsman\Contracts\Traits
 */
trait SingletonTrait
{
	/**
	 * @var self[]
	 */
	private static $instances = [];

	/**
	 * Returns instance, if instance does not exist then creates new one and returns it
	 *
	 * @return $this
	 */
	public static function getInstance()
	{
		$self = static::class;
		if (!isset(self::$instances[$self])) {
			self::$instances[$self] = new $self;
		}

		return self::$instances[$self];
	}

	/**
	 * @return bool true if has instance, otherwise false
	 */
	protected static function hasInstance()
	{
		$self = static::class;

		return isset(self::$instances[$self]);
	}
}
