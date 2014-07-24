<?php

namespace Books\Validator\Search;

use Books\Validator\SearchInterface;

class Books implements SearchInterface 
{
	/**
	 * Returns true if search params are valid or false otherwise.
	 *
	 * @param array $filters Search filters.
	 * @param array $order Order param.
	 */
	public function isValid(array $filters, array $order)
	{
		// TODO: implement this.
		return true;
	}

}