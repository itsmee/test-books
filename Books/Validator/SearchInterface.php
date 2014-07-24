<?php

namespace Books\Validator;

/**
 * Validator for search.
 *
 */
interface SearchInterface
{
	/**
	 * Returns true if search params are valid or false otherwise.
	 *
	 * @param array $filters Search filters.
	 * @param array $order Order param.
	 */
	public function isValid(array $filters, array $order);
}