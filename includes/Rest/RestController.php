<?php


namespace Mehedi\ProductWatcher\Rest;

class RestController {

	/**
	 * Rest namespace
	 *
	 * @var string $namespace
	 */
	protected $namespace = 'product-watcher/v1';

	/**
	 * Register get route
	 *
	 * @param $path
	 * @param $callback
	 * @param array    $args
	 */
	protected function get( $path, $callback, $args = array() ) {
		$this->register_route( 'GET', $path, $callback, $args );
	}

	/**
	 * Register post route
	 *
	 * @param $path
	 * @param $callback
	 * @param array    $args
	 */
	protected function post( $path, $callback, $args = array() ) {
		$this->register_route( 'POST', $path, $callback, $args );
	}

	/**
	 * Register route
	 *
	 * @param $method
	 * @param $path
	 * @param $callback
	 * @param array    $args
	 */
	protected function register_route( $method, $path, $callback, $args = array() ) {
		register_rest_route(
			$this->namespace,
			$path,
			array_merge(
				array(
					'methods'             => $method,
					'callback'            => array( $this, $callback ),
					'permission_callback' => array( $this, 'permission' ),
				),
				$args
			)
		);
	}


	/**
	 * Permission callback
	 *
	 * @return bool
	 */
	public function permission() {
		return current_user_can( 'manage_options' );
	}
}
