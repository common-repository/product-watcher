<?php

namespace Mehedi\ProductWatcher\Broadcaster;

use Mehedi\ProductWatcher\Traits\Singleton;

class Broadcaster {

	use Singleton;

	/**
	 * @var BroadcasterInterface
	 */
	protected $driver;

	/**
	 * Available drivers
	 *
	 * @var string[]
	 */
	protected $drivers = array(
		'pusher' => Pusher::class,
	);

	/**
	 *  Set the driver
	 *
	 * @param $driver
	 * @return Broadcaster
	 */
	public function driver( $driver ) {
		$this->driver = new $this->drivers[ $driver ]();

		return $this;
	}

	/**
	 * Authenticate
	 *
	 * @param $data
	 * @return mixed
	 */
	public function auth( $data ) {
		return $this->driver->auth( $data );
	}
}
