<?php

namespace BigCommerce\Api;

class OAuth {
	const BC_AUTH_URL = 'https://login.bigcommerce.com/oauth2/token';

	const AUTH_GRANT_TYPE = 'authorization_code';

	/** @var string */
	protected $bigCommerceAuthUrl;

	/** @var string */
	private $client_id;

	/** @var string */
	private $client_secret;

	public function __construct( $client_id, $client_secret ) {
		$this->client_id     = $client_id;
		$this->client_secret = $client_secret;
	}

	/**
	 * Exchange an auth code for a permanent auth token
	 *
	 * @param string $scope
	 * @param string $code
	 * @param string $context
	 *
	 * @return array An associative array containing:
	 *               - access_token
	 *               - context
	 *               - store_hash
	 *               - api_url
	 * @throws ApiException
	 */
	public function authorizeWithBigcommerce( $scope, $code, $context ) {
		$payload = [
			'scope'         => $scope,
			'code'          => $code,
			'context'       => $context,
			'client_secret' => $this->client_secret,
			'client_id'     => $this->client_id,
			'redirect_uri'  => $this->bigCommerceAuthUrl,
			'grant_type'    => self::AUTH_GRANT_TYPE,
		];

		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, self::BC_AUTH_URL );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $ch, CURLOPT_POST, 1 );
		curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $payload ) );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/x-www-form-urlencoded' ] );

		$response_body          = curl_exec( $ch );
		$response_info          = curl_getinfo( $ch );
		$response_error_message = curl_error( $ch );

		curl_close( $ch );

		if ( $response_info['http_code'] === 0 ) {
			$error_message = sprintf( "API call to %s failed: %s", self::BC_AUTH_URL, $response_error_message );
			$exception     = new ApiException( $error_message, 0, null, null );
			$exception->setResponseObject( $response_info );
			throw $exception;
		}
		if ( $response_info['http_code'] >= 300 ) {
			$error_message = sprintf( "[%s] Error connecting to the API (%s)", $response_info['http_code'], self::BC_AUTH_URL );
			$exception     = new ApiException( $error_message, $response_info['http_code'], null, null );
			$exception->setResponseObject( $response_info );
			throw $exception;
		}

		$response = json_decode( $response_body, true );

		$store_hash = explode( '/', $response['context'] )[1];

		return [
			'access_token' => $response['access_token'],
			'context'      => $response['context'],
			'store_hash'   => $store_hash,
			'api_url'      => sprintf( 'https://api.bigcommerce.com/stores/%s', $store_hash ),
		];
	}
}
