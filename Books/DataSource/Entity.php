<?php

namespace Books\DataSource;

use Books\Common\Collection;

/**
 * Base Entity Data source class.
 *
 */
class Entity
{
	/**
	 * Maps data to entities.
	 *
	 * @param array $data Raw rows data.
	 * @param string $entity Entity name.
	 * @return Collection
	 */
	protected function mapDataToEntities(array $data, $entity)
	{
		// Use DataMapper/* classes to form entities, then create a collection of them.
		throw new \BadMethodCallException('Not implemented yet');

		return new Collection();
	}
}