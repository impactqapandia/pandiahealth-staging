<?php

/**
 * Thrive Themes - https://thrivethemes.com
 *
 * @package thrive-dashboard
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

abstract class Thrive_Dash_Api_MailerLite_ApiAbstract {

	protected $restClient;

	protected $endpoint;

	private $_limit = null;

	private $_offset = null;

	private $_order = null;

	private $_where = null;

	public function __construct( Thrive_Dash_Api_MailerLite_RestClient $restClient ) {
		$this->restClient = $restClient;
	}

	/**
	 * Get collection of items
	 *
	 * @param array $fields
	 *
	 * @return Thrive_Dash_Api_MailerLite_Collection
	 */
	public function get( $fields = array( '*' => '' ) ) {
		$params = $this->prepareParams();

		if ( ! empty( $fields ) && is_array( $fields ) && $fields != $fields['*'] ) {
			$params['fields'] = $fields;
		}

		$response = $this->restClient->get( $this->endpoint, $params );

		return $response;
	}

	/**
	 * Get single item
	 *
	 * @param $id
	 *
	 * @return mixed
	 * @throws Exception
	 */
	public function find( $id ) {
		if ( empty( $id ) ) {
			throw new Exception( 'ID must be set' );
		}

		$response = $this->restClient->get( $this->endpoint . '/' . $id );

		return $response['body'];
	}

	/**
	 * Create new item
	 *
	 * @param  array $data
	 *
	 * @return [type]
	 */
	public function create( $data ) {
		$response = $this->restClient->post( $this->endpoint, $data );

		return $response['body'];
	}

	/**
	 * Update an item
	 *
	 * @param  int $id
	 * @param  array $data
	 *
	 * @return [type]
	 */
	public function update( $id, $data ) {
		$response = $this->restClient->put( $this->endpoint . '/' . $id, $data );

		return $response['body'];
	}

	/**
	 * Delete an item
	 *
	 * @param  int $id
	 *
	 * @return [type]
	 */
	public function delete( $id ) {
		$response = $this->restClient->delete( $this->endpoint . '/' . $id );

		return $response['body'];
	}

	/**
	 * Return only count of items
	 *
	 * @return [type]
	 */
	public function count() {
		$response = $this->restClient->get( $this->endpoint . '/count' );

		return $response['body'];
	}

	/**
	 * Set size of limit in query
	 *
	 * @param $limit
	 *
	 * @return $this
	 */
	public function limit( $limit ) {
		$this->_limit = $limit;

		return $this;
	}

	/**
	 * Set size of offset in query
	 *
	 * @param $offset
	 *
	 * @return $this
	 */
	public function offset( $offset ) {
		$this->_offset = $offset;

		return $this;
	}

	/**
	 * Set an order in of items in query
	 *
	 * @param $field
	 * @param string $order
	 *
	 * @return $this
	 */
	public function orderBy( $field, $order = 'ASC' ) {
		$this->_orders[ $field ] = $order;

		return $this;
	}

	/**
	 * Set where conditions
	 *
	 * @param  [type] $column
	 * @param  [type] $operator
	 * @param  [type] $value
	 * @param  string $boolean
	 *
	 * @return $this
	 */
	public function where(
		$column,
		$operator = null,
		$value = null,
		$boolean = 'and'
	) {
		if ( is_array( $column ) ) {
			$this->_where = $column;
		}

		return $this;
	}

	/**
	 * Prepare query parameters
	 *
	 * @return array
	 */
	protected function prepareParams() {
		$params = array();

		if ( ! empty( $this->_where ) && is_array( $this->_where ) ) {
			$params['filters'] = $this->_where;
		}

		if ( ! empty( $this->_offset ) ) {
			$params['offset'] = $this->_offset;
		}

		if ( ! empty( $this->_limit ) ) {
			$params['limit'] = $this->_limit;
		}

		if ( ! empty( $this->_orders ) && is_array( $this->_orders ) ) {
			foreach ( $this->_orders as $field => $order ) {
				$params['order_by'][ $field ] = $order;
			}
		}

		return $params;
	}

}