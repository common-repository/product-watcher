<?php
namespace Mehedi\ProductWatcher\Gateway;

use Mehedi\ProductWatcher\Traits\Singleton;

class Gateway {
	use Singleton;
	/**
	 * Defined all gateways
	 *
	 * @var string[]
	 */
	protected $gateway = array(
		'fake'   => Fake::class,
		'pusher' => Pusher::class,
	);

	/**
	 * Get all gateways
	 *
	 * @return string[]
	 */
	public function all() {
		return $this->gateway;
	}

	/**
	 * Get the credential of gateway
	 *
	 * @param $data
	 * @return array|string[]
	 */
	public function credentials( $data ) {
		if ( ! array_key_exists( $data['driver'], $this->gateway ) ) {
			return array(
				'driver' => '',
			);
		}

		return array(
			'driver'        => $data['driver'],
			$data['driver'] => $this->gateway[ $data['driver'] ]::render( $data[ $data['driver'] ] ),
		);
	}
}
