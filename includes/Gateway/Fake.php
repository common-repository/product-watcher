<?php
namespace Mehedi\ProductWatcher\Gateway;

class Fake implements GatewayInterface {

	/**
	 * @inerhitDoc
	 */
	public static function options() {
		return array(
			'interval' => 3,
			'min'      => 0,
			'max'      => 10,
		);
	}

	/**
	 * @inerhitDoc
	 */
	public static function name() {
		return __( 'Fake', 'product-watcher' );
	}

	/**
	 * @inerhitDoc
	 */
	public static function validate( $data ) {

	}

	/**
	 * @inheritdoc
	 */
	public static function render( $data ) {
		return array(
			'max'      => intval( $data['max'] ),
			'min'      => intval( $data['min'] ),
			'interval' => intval( $data['interval'] ),
		);
	}
}
