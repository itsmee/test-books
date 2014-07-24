<?php

namespace Books\DataSource\Search;

use Books\DataSource\Entity;
use Books\DataSource\SearchInterface;
use Books\Common\Collection;

/**
 * Books search interface.
 *
 */
class Books extends Entity implements SearchInterface
{
	/**
	 * Finds entities by specified filters, ordered by required order.
	 *
	 * @param array $filters Search filters.
	 * @param array $order Order param.
	 * @return Collection
	 */
	public function findBy(array $filters, array $order)
	{
		// get data from database
		// and create Books collection:
		// $data = ...

		$data = array();

		return parent::mapDataToEntities($data, 'Book');
	}
}