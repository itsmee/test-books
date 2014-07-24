<?php

namespace Books\Service;

use Books\DataSource\SearchInterface as DataSource;
use Books\Validator\SearchInterface as Validator;

/**
 * Search service.
 *
 */
class Search
{
	/**
	 * Data source to be used for search request.
	 *
	 * @var DataSource
	 */
	protected $data_source;

	/**
	 * Search query validator.
	 *
	 * @var Validator
	 */
	protected $validator;

	/**
	 * Constructor.
	 *
	 * @param DataSource $data_source Data source object.
	 * @param Validator $validator Validator object.
	 */
	public function __construct(DataSource $data_source, Validator $validator)
	{
		$this->data_source = $data_source;
		$this->validator = $validator;
	}

	/**
	 * Performs search, according to passed filters and order params.
	 *
	 * @throws \InvalidArgumentException When search params are not valid.
	 * @param array $filters Search filter.
	 * @param array $order Search order.
	 */
	public function search(array $filters, array $order)
	{
		if (!$this->validator->isValid($filters, $order)) {
			throw new \InvalidArgumentException('Illegal search filter or order');
		}

		return $this->data_source->findBy($filters, $order);
	}
}