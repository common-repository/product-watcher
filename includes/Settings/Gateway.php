<?php
namespace Mehedi\ProductWatcher\Settings;

use Mehedi\ProductWatcher\Traits\Singleton;

class Gateway {
	use Singleton;

	/**
	 * Option key name
	 *
	 * @var $option_key string
	 */
	protected $option_key = 'product_watcher_gateway';

	/**
	 * Gateway settings
	 *
	 * @var $gateway array
	 */
	protected $gateway;

	/**
	 * Boot
	 */
	public function boot() {
		$this->gateway = get_option(
			$this->option_key,
			array(
				'driver' => '',
			)
		);
	}

	/**
	 * Get gateway settings
	 *
	 * @param null $key
	 * @return array
	 */
	public function get( $key = null ) {
		if ( is_null( $key ) ) {
			return $this->gateway;
		}
		return $this->gateway[ $key ] ?? array();
	}

	/**
	 * Merge settings
	 *
	 * @return array|object|string
	 */
	public function merge() {
		$options = array(
			'options' => array(),
			'gateway' => array(),
		);
		$gateway = \Mehedi\ProductWatcher\Gateway\Gateway::init();

		foreach ( $gateway->all() as $name => $gt ) {
			$options['options'][ $name ] = $gt::options();
			$options['gateway'][ $name ] = array(
				'label' => $gt::name(),
				'name'  => $name,
			);
		}

		$options['options'] = wp_parse_args( $this->gateway, $options['options'] );

		return $options;
	}

	/**
	 * Update the options
	 *
	 * @param $data
	 */
	function update( $data ) {
		update_option( $this->option_key, $data );
	}
}
