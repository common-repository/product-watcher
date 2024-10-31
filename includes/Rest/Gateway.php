<?php

namespace Mehedi\ProductWatcher\Rest;

use Rakit\Validation\Validator;
use WP_REST_Response;
use Mehedi\ProductWatcher\Core\Settings;

class Gateway extends RestController {

	public function __construct() {
		$this->get( '/gateway', 'index' );
		$this->post( '/gateway', 'update' );
	}

	/**
	 * Get gateway settings
	 *
	 * @return array|object|string
	 */
	public function index() {
		return Settings::gateway()->merge();
	}

	/**
	 * @param $request \WP_REST_Request
	 *
	 * @return WP_REST_Response
	 */
	public function update( $request ) {
		$data      = $request->get_json_params();
		$validator = new Validator();

		switch ( $data['driver'] ?? null ) {
			case 'fake':
				$validation = $validator->make(
					$data,
					array(
						'fake.interval' => 'required|numeric|min:1',
						'fake.min'      => 'required|numeric|min:0',
						'fake.max'      => 'required|numeric|min:1',
					)
				);
				break;
			case 'pusher':
				$validation = $validator->make(
					$data,
					array(
						'pusher.app_id'     => 'required|alpha_dash',
						'pusher.app_key'    => 'required|alpha_dash',
						'pusher.app_secret' => 'required|alpha_dash',
						'pusher.cluster'    => 'required|alpha_dash',
					)
				);
				break;
			default:
				$hooks = array(
					'woocommerce_before_single_product',
					'woocommerce_before_single_product_summary',
					'woocommerce_single_product_summary',
					'woocommerce_before_add_to_cart_form',
					'woocommerce_before_variations_form',
					'woocommerce_before_add_to_cart_button',
					'woocommerce_before_single_variation',
					'woocommerce_single_variation',
					'woocommerce_before_add_to_cart_quantity',
					'woocommerce_after_add_to_cart_quantity',
					'woocommerce_after_single_variation',
					'woocommerce_after_add_to_cart_button',
					'woocommerce_after_variations_form',
					'woocommerce_after_add_to_cart_form',
					'woocommerce_product_meta_start',
					'woocommerce_product_meta_end',
					'woocommerce_share',
					'woocommerce_after_single_product_summary',
					'woocommerce_after_single_product',
				);

				$validation = $validator->make(
					$data,
					array(
						'woocommerce.status'   => 'required|in:on,off',
						'woocommerce.position' => 'required|in:' . implode( ',', $hooks ),
					)
				);
				break;
		}

		$validation->validate();

		if ( $validation->fails() ) {
			return new WP_REST_Response( $validation->errors()->firstOfAll(), 422 );
		}

		Settings::gateway()->update( $data );

		return new WP_REST_Response(
			array(
				'success' => true,
				'message' => __( 'Gateway settings updated!' ),
			)
		);
	}
}
