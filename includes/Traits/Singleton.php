<?php

namespace Mehedi\ProductWatcher\Traits;

trait Singleton {
	protected static $instance;

	/**
	 * @return mixed
	 */
	public static function init() {
		if ( is_null( static::$instance ) ) {
			static::$instance = new static();

			if ( method_exists( static::$instance, 'boot' ) ) {
				static::$instance->boot();
			}
		}

		return self::$instance;
	}
}
