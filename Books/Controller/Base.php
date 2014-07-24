<?php

namespace Books\Controller;

use Books\Factory\Service as ServiceFactory;

/**
 * Base controller.
 *
 *
 */
class Base
{

	/**
	 * Controller GET params.
	 *
	 * @var array
	 */
	protected $get_params;

	/**
	 * Controller POST params.
	 *
	 * @var array
	 */
	protected $post_params;

	/**
	 * Constructor.
	 *
	 * @param array $get_params GET params.
	 * @param array $post_params POST params.
	 */
	public function __construct(array $get_params, array $post_params = array())
	{
		$this->get_params = $get_params;
		$this->post_params = $post_params;
	}

	/**
	 * Executes action.
	 *
	 */
	public function execute()
	{

	}

	/**
	 * Assigns data to the view.
	 *
	 * @param string $key Key.
	 * @param mixed $value Value to be assigned.
	 */
	protected function assign($key, $value)
	{
		// TODO: implement me.
	}

	/**
	 * Sets error.
	 *
	 * @param string $error Error message.
	 */
	protected function setError($error)
	{
		echo $error;
		exit();
		// TODO: Fix me.
	}

	/**
	 * Returns service according to specified params.
	 *
	 * @param string $name Service name.
	 */
	protected function getService($name)
	{
		$class_name = '\Books\Service\\' . $name;
		$service = new $class_name();
	}
}