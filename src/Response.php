<?php
namespace Momentum\MSGOnline;

class Response extends Client implements \Iterator
{
	public $response;
	private $index = 0;

	public function __construct($response)
	{
		$this->response = $response;
	}

	/**
	 * Interation methods
	 * =====================================================================
	 */
	
	public function current()
	{
		return $this->response['data'][$this->index];
	}

	public function next()
	{
		return $this->index ++;
	}

	public function key()
	{
		return $this->index;
	}

	public function valid()
	{
		return isset($this->response['data'][$this->key()]);
	}

	public function rewind()
	{
		$this->index = 0;
	}

	public function reverse()
	{
		$this->response['data'] = array_reverse($this->response['data']);
		$this->rewind();
	}

	/**
	 * Pagination methods
	 * =====================================================================
	 */
	
	public function getPagination()
	{
		return $this->response['pagination'];
	}
	public function currentPage()
	{
		return $this->response['pagination']['current_page'];
	}
	public function nextPage()
	{
		$this->response = $this->_getPaginationLink('next');
		return $this;
	}
	public function prevPage()
	{
		$this->response = $this->_getPaginationLink('previous');
		return $this;
	}
	private function _getPaginationLink($tense)
	{
		return $this->request($this->response['pagination'][$tense]);
	}
}