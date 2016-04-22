<?php
namespace Momentum\MSGOnline;

class Category extends Client
{
	public function all()
	{
		return new Response($this->request('categories'));
	}
}
