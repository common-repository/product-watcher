<?php
namespace Mehedi\ProductWatcher\Gateway;

interface GatewayInterface {
	/**
	 * Gateway
	 *
	 * @return string
	 */
	public static function name();

	/**
	 * Options
	 *
	 * @return array
	 */
	public static function options();

	/**
	 * Validate option request
	 *
	 * @param $data
	 *
	 * @return \WP_Error|true
	 */
	public static function validate( $data);

	/**
	 * Return credentials
	 *
	 * @return mixed
	 */
	public static function render( $data);
}
