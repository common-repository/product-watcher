<?php
namespace Mehedi\ProductWatcher\Broadcaster;

use Mehedi\ProductWatcher\Core\Settings;

class Pusher implements BroadcasterInterface {

	/**
	 * Authenticate request
	 *
	 * @param $data
	 * @return mixed
	 * @throws \Pusher\PusherException
	 */
	public function auth( $data ) {
		$settings = Settings::gateway()->get( 'pusher' );

		$pusher = new \Pusher\Pusher(
			$settings['app_key'],
			$settings['app_secret'],
			$settings['app_id'],
			array(
				'cluster' => $settings['cluster'],
			)
		);

		$product_id = "{$data['product_id']}:{$this->get_ip()}";

		return json_decode(
			$pusher->presence_auth(
				$data['channel_name'],
				$data['socket_id'],
				$product_id
			)
		);
	}

	/**
	 * Get client IP Address
	 *
	 * @return array|false|string|null
	 */
	protected function get_ip() {
		$ipaddress = null;
		if ( getenv( 'HTTP_CLIENT_IP' ) ) {
			$ipaddress = getenv( 'HTTP_CLIENT_IP' );
		} elseif ( getenv( 'HTTP_X_FORWARDED_FOR' ) ) {
			$ipaddress = getenv( 'HTTP_X_FORWARDED_FOR' );
		} elseif ( getenv( 'HTTP_X_FORWARDED' ) ) {
			$ipaddress = getenv( 'HTTP_X_FORWARDED' );
		} elseif ( getenv( 'HTTP_FORWARDED_FOR' ) ) {
			$ipaddress = getenv( 'HTTP_FORWARDED_FOR' );
		} elseif ( getenv( 'HTTP_FORWARDED' ) ) {
			$ipaddress = getenv( 'HTTP_FORWARDED' );
		} elseif ( getenv( 'REMOTE_ADDR' ) ) {
			$ipaddress = getenv( 'REMOTE_ADDR' );
		}
		return $ipaddress;
	}
}
