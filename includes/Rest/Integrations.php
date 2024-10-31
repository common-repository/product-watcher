<?php
namespace Mehedi\ProductWatcher\Rest;

use WP_REST_Response;
use Mehedi\ProductWatcher\Core\Settings;

class Integrations extends RestController {
	public function __construct() {
		$this->get( '/integrations', 'index' );
		$this->post( '/integrations', 'update' );
	}

	/**
	 * Get the integrations
	 *
	 * @return array|array[]|object|string
	 */
	public function index() {
		return Settings::integration()->get();
	}

	/**
	 * Update integrations settings
	 *
	 * @param $request \WP_REST_Request
	 * @return WP_REST_Response
	 */
	public function update( $request ) {
		$data = $request->get_json_params();

		Settings::integration()->update( $data );

		return new WP_REST_Response(
			array(
				'success' => true,
				'message' => __( 'Integration options updated!' ),
			)
		);
	}
}
