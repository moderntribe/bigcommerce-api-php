<?php

namespace BigCommerce\Api;

use BigCommerce\Api\Api\AbandonedCartApi;
use BigCommerce\Api\Api\CartApi;
use BigCommerce\Api\Api\CatalogApi;
use BigCommerce\Api\Api\ChannelsApi;
use BigCommerce\Api\Api\OrdersApi;
use BigCommerce\Api\Api\OrderTransactionsApi;
use BigCommerce\Api\Api\PriceListsApi;
use BigCommerce\Api\Api\PricingApi;
use BigCommerce\Api\Api\ScriptApi;
use BigCommerce\Api\Api\SitesApi;
use BigCommerce\Api\Api\StoreInfoApi;
use BigCommerce\Api\Api\SubscribersApi;
use BigCommerce\Api\Api\ThemesApi;
use BigCommerce\Api\Api\WidgetApi;
use BigCommerce\Api\Api\WishlistsApi;

class ApiFactory {
	/** @var string */
	private $base_url;

	/** @var ApiClient */
	private $v2Client;

	/** @var ApiClient */
	private $v3Client;

	/**
	 * ApiFactory constructor.
	 *
	 * @param string $base_url The URL to the BigCommerce API. This will include the store hash.
	 *                         E.g., https://api.bigcommerce.com/stores/12ab3cd4e5
	 * @param string $client_id
	 * @param string $access_token
	 * @param string $client_secret
	 */
	public function __construct( $base_url, $client_id, $access_token, $client_secret = '' ) {
		$this->base_url = $this->sanitize_api_url( $base_url );
		$v2Config       = new Configuration();
		$v3Config       = new Configuration();

		$v2Config->setHost( $this->base_url . '/v2' );
		$v2Config->setClientId( $client_id );
		$v2Config->setAccessToken( $access_token );
		$v2Config->setClientSecret( $client_secret );

		$this->v2Client = new ApiClient( $v2Config );

		$v3Config->setHost( $this->base_url . '/v3' );
		$v3Config->setClientId( $client_id );
		$v3Config->setAccessToken( $access_token );
		$v3Config->setClientSecret( $client_secret );

		$this->v3Client = new ApiClient( $v3Config );
	}

	private function sanitize_api_url( $url ) {
		$url = rtrim( $url, '/' );
		if ( in_array( substr( $url, - 3 ), [ '/v2', '/v3' ], true ) ) {
			$url = substr( $url, 0, - 3 );
		}

		return $url;
	}

	public function abandoned_cart() {
		return new AbandonedCartApi( $this->v3Client );
	}

	public function cart() {
		return new CartApi( $this->v3Client );
	}

	public function catalog() {
		return new CatalogApi( $this->v3Client );
	}

	public function channels() {
		return new ChannelsApi( $this->v3Client );
	}

	public function orders() {
		return new OrdersApi( $this->v2Client );
	}

	public function price_lists() {
		return new PriceListsApi( $this->v3Client );
	}

	public function pricing() {
		return new PricingApi( $this->v3Client );
	}

	public function scripts() {
		return new ScriptApi( $this->v3Client );
	}

	public function sites() {
		return new SitesApi( $this->v3Client );
	}

	public function store() {
		return new StoreInfoApi( $this->v2Client );
	}

	public function subscribers() {
		return new SubscribersApi( $this->v3Client );
	}

	public function themes() {
		return new ThemesApi( $this->v3Client );
	}

	public function transactions() {
		return new OrderTransactionsApi( $this->v3Client );
	}

	public function widgets() {
		return new WidgetApi( $this->v3Client );
	}

	public function wishlists() {
		return new WishlistsApi( $this->v3Client );
	}
}
