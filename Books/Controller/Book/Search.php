<?php

namespace Books\Controller\Book;

use Books\Controller\Base;
use Books\DataSource\Search\Books as SearchDataSource;
use Books\Validator\Search\Books as SearchValidator;
use Books\Service\Search as SearchService;

/**
 * Book Search controller.
 *
 *
 */
class Search extends Base
{
	/**
	 * Executes action.
	 *
	 */
	public function execute()
	{
		try {
			$search_service = $this->getService('Search');
			$books = $search_service->search($this->get_params['filters'], $this->get_params['order']);		

			$this->assign('books', $books);
		} catch (\InvalidArgumentException $e) {
			$this->setError($e->getMessage());
		}
	}

	/**
	 * Returns service according to specified params.
	 *
	 * @param string $name Service name.
	 */
	public function getService($name)
	{
		if ('Search' === $name) {
			$data_source = new SearchDataSource();
			$validator = new SearchValidator();

			$service = new SearchService($data_source, $validator);
		}
		else {
			$service = parent::getService($name);
		}

		return $service;
	}
}