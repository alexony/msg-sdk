<?php
namespace Momentum\MSGOnline;

class Product extends Client
{
	public function all()
	{
		return new Response($this->request('products'));
	}

	public function search($options = array())
	{
		return new Response($this->request('products', array('query' => $options)));
	}
}
