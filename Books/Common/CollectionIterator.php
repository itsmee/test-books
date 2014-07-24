<?php

namespace Books\Common;

/**
 * CollectionIterator class.
 * 
 * Simplifies dealing with collections.
 * 
 * @author Oleg Zaezdny
 *
 */
class CollectionIterator implements \Iterator 
{	
	/**
	 * Collection to iterate over.
	 * @var Collection
	 */
	private $collection;

	/**
	 * Current index.
	 * @var integer
	 */
	private $currentIndex = 0;
	
	/**
	 * Collection keys.
	 * @var array
	 */
	private $keys = array();
	
	/**
	 * Constructor.
	 *
	 * @param Collection $collection
	 */
	public function __construct(Collection $collection) {
		$this->collection = $collection;
		$this->keys = $collection->keys();
	}
	
	/**
	 * Returns current element.
	 * 
	 * @see Iterator::current()
	 * 
	 * @return mixed
	 */
	public function current() {
		return $this->collection->get($this->keys[$this->currentIndex]);
	}
	
	/**
	 * Returns the key of the current element.
	 * 
	 * @see Iterator::key()
	 * 
	 * @return string
	 */
	public function key() {
		return $this->keys[$this->currentIndex];
	}
	
	/**
	 * Moves forward to the next element.
	 * 
	 * @see Iterator::next()
	 */
	public function next() {
		$this->currentIndex++;
	}
	
	/**
	 * Rewinds the Iterator to the first element.
	 * 
	 * @see Iterator::rewind()
	 */
	public function rewind() {
		$this->currentIndex = 0;
	}
	
	/**
	 * Returns true if current position is valid.
	 * 
	 * @see Iterator::valid()
	 *
	 * @return boolean
	 */
	public function valid() {
		return $this->currentIndex < $this->collection->count();
	}
}