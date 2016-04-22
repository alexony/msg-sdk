<?php
namespace Momentum\MSGOnline;

class Product extends Client
{
	public function all()
	{
		return new Response($this->request('products'));
	}
}
