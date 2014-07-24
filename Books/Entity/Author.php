<?php

namespace Books\Entity;

/**
 * Book author class.
 *
 */
class Author
{
	/**
	 * Unique author id.
	 *
	 * @var integer
	 */
	protected $id;

	/**
	 * First name.
	 *
	 * @var string
	 */
	protected $first_name;

	/**
	 * Last name.
	 *
	 * @var string
	 */
	protected $last_name;

	/**
	 * Constructor.
	 *
	 * @var string $first_name First name.
	 * @var string $last_name Last name.
	 */
	public function __construct($first_name, $last_name)
	{
		$this->setFirstName($first_name);
		$this->setLastName($last_name);
	}

	/**
	 * Sets author id.
	 *
	 * @param integer $id Author id.
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * Returns author id.
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Sets first name.
	 *
	 * @param string $first_name First name of the author.
	 */
	public function setFirstName($first_name) 
	{
		$this->first_name = $first_name;
	}

	/**
	 * Returns first name of the author.
	 *
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->first_name;
	}

	/**
	 * Sets last name.
	 *
	 * @param string $last_name Last name of the author.
	 */
	public function setLastName($last_name) 
	{
		$this->last_name = $last_name;
	}

	/**
	 * Returns last name of the author.
	 *
	 * @return string
	 */
	public function getLastName()
	{
		return $this->last_name;
	}

	/**
	 * Returns author full name.
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->getFirstName() . ' ' . $this->getLastName();
	}
}