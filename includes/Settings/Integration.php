<?php
namespace Mehedi\ProductWatcher\Settings;

use Mehedi\ProductWatcher\Traits\Singleton;

class Integration {
	use Singleton;
	/**
	 * Option key name
	 *
	 * @var $option_key string
	 */
	protected $option_key = 'product_watcher_integrations';

	/**
	 * Gateway settings
	 *
	 * @var $integrations array
	 */
	protected $integrations;

	/**
	 * Boot
	 */
	public function boot() {
		$options = get_option( $this->option_key, []);

		$this->integrations = wp_parse_args( $options, array(
			'woocommerce' => array(
				'status'   => 'on',
				'position' => 'woocommerce_product_meta_end',
			),
		));
	}

	/**
	 * Get gateway settings
	 *
	 * @param null $key
	 * @return array
	 */
	public function get( $key = null ) {
		if ( is_null( $key ) ) {
			return $this->integrations;
		}
		return $this->integrations[ $key ] ?? array();
	}

	/**
	 * Update the options
	 *
	 * @param $data
	 */
	function update( $data ) {
		update_option( $this->option_key, $data );
	}

	/**
	 * Is WooCommerce on
	 *
	 * @return bool
	 */
	public function isOnWooCommerce() {
		return function_exists( 'is_woocommerce' ) && is_product();
	}

	/**
	 * Is WooCommerce On
	 *
	 * @return bool
	 */
	public function isOn() {
		return $this->get( 'woocommerce' )['status'] === 'on';
	}
}
