<?php


namespace Mehedi\ProductWatcher\Gateway;

class Pusher implements GatewayInterface {

	/**
	 * @inheritDoc
	 */
	public static function name() {
		return __( 'Pusher', 'product-watcher' );
	}

	/**
	 * @inheritDoc
	 */
	public static function options() {
		return array(
			'app_id'     => '',
			'app_key'    => '',
			'app_secret' => '',
			'cluster'    => '',
		);
	}

	/**
	 * @inheritDoc
	 */
	public static function validate( $data ) {
		// TODO: Implement validate() method.
	}

	public static function render( $data ) {
		return array(
			'app_key'  => $data['app_key'],
			'cluster'  => $data['cluster'],
			'rest_url' => get_rest_url(),
		);
	}
}
