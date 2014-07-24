<?php

namespace Books\Entity;

use Books\Common\Collection;

/**
 * Book Entity.
 *
 */
class Book 
{
	/**
	 * ISBN.
	 *
	 * @var string
	 */
	protected $isbn;

	/**
	 * Book title.
	 *
	 * @var string
	 */
	protected $title;

	/**
	 * Book authors.
	 *
	 * @var \Books\Common\Collection
	 */
	protected $autors;

	/**
	 * Book release date.
	 *
	 * @var \DateTime
	 */
	protected $date;

	/**
	 * Book rating.
	 *
	 * @var double
	 */
	protected $rating;

	/**
	 * Constructor.
	 *
	 * @param string $isbn Book ISBN.
	 * @param string $title Book title.
	 * @param Collection $authors Book authors.
	 */
	public function __construct($isbn, $title, Collection $authors) 
	{
		$this->setIsbn($isbn);
		$this->setTitle($title);
		$this->setAuthors($authors);
	}

	/**
	 * Sets book isbn.
	 *
	 * @param string $isbn ISBN.
	 */
	public function setIsbn($isbn) 
	{
		$this->isbn = $isbn;
	}

	// rest of getters and setters
}