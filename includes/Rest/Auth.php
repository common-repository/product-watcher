<?php

namespace Mehedi\ProductWatcher\Rest;

use Mehedi\ProductWatcher\Broadcaster\Broadcaster;
use WP_REST_Response;

class Auth extends RestController {

	public function __construct() {
		$this->post(
			'channel/(?P<driver>\w+)/auth',
			'auth',
			array(
				'args' => array(
					'driver' => array(
						'validation_callback' => function ( $param ) {
							return preg_match( '/^pusher$/', $param );
						},
					),
				),
			)
		);
	}

	/**
	 * Authenticating pusher
	 *
	 * @param $request \WP_REST_Request
	 * @return array|WP_REST_Response
	 */
	public function auth( $request ) {
		$data = $request->get_params();

		if ( ! isset( $data['channel_name'], $data['socket_id'], $data['product_id'] ) ) {
			return new WP_REST_Response(
				array(
					'message' => __( 'Data validation failed!', 'product-watcher' ),
				),
				422
			);
		}

		$product_id = $request->get_param( 'product_id' );

		$product = wc_get_product( $product_id );

		if ( ! $product ) {
			return new WP_REST_Response(
				array(
					'message' => __( 'Product not found!', 'product-watcher' ),
				),
				403
			);
		}

		return Broadcaster::init()
			->driver( $data['driver'] )
			->auth( $data );
	}

	/**
	 * Permission callback
	 *
	 * @return bool
	 */
	public function permission() {
		return true;
	}
}
