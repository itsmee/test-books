<?php

namespace Books\Common;

/**
 * Collection class.
 * 
 * Represents collection of any objects.
 */
class Collection implements \IteratorAggregate 
{	
	/**
	 * Array of items.
	 * @var array
	 */
	protected $items = array();
	
	/**
	 * Constructor.
	 * 
	 * @param array $items Collection items.
	 */
	public function __construct(array $items = array()) 
	{
		foreach ($items as $item => $value) {
			$this->add($item, $key);
		}
	}

	/**
	 * Adds item.
	 *
	 * @param mixed $item item to be added.
	 * @param mixed $key Key of the item.
	 */
	public function add($item, $key = false) 
	{
		if ($key) {
			$this->items[$key] = $item;
		}
		else {
			$this->items[] = $item;
		}
	}
	
	/**
	 * Removes item by key.
	 *
	 * @param string $key item key.
	 * @return boolean
	 */
	public function remove($key) 
	{
		$result = false;
		
		if (isset($this->items[$key])) {
			unset($this->items[$key]);
			$result = true;
		}
		
		return $result;
	}
	
	/**
	 * Returns item by key.
	 * 
	 * @param string $key item key.
	 * @return mixed
	 */
	public function get($key) 
	{
		$result = null;
		
		if (isset($this->items[$key])) {
			$result = $this->items[$key];
		}
		
		return $result;
	}
	
	/**
	 * Returns the count of the items in collection.
	 * 
	 * @return integer
	 */
	public function count() 
	{
		return count($this->items);
	}
	
	/**
	 * Returns true if element at key $key exists or false otherwise.
	 * 
	 * @param string $key Item key.
	 * @return boolean
	 */
	public function exists($key)
	{
		return isset($this->items[$key]);
	}
	
	/**
	 * Returns collection keys.
	 * 
	 * @return array
	 */
	public function keys() 
	{
		return array_keys($this->items);
	}
	
	/**
	 * Returns the iterator for the collection.
	 * 
	 * @return CollectionIterator
	 */
	public function getIterator() 
	{
		return new CollectionIterator($this);
	}
	
	/**
	 * Returns collection as array.
	 * @return array
	 */
	public function asArray()
	{
		return $this->items;
	}
}