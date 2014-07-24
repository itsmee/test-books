<?php

namespace Books\DataSource;

/**
 * Interface for classes used by Search service.
 *
 */
interface SearchInterface
{
	/**
	 * Finds entities by specified filters, ordered by required order.
	 *
	 * @param array $filters Search filters.
	 * @param array $order Order param.
	 * @return Collection
	 */
	public function findBy(array $filters, array $order);
}