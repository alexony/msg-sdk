<?php
namespace Momentum\MSGOnline;

class Category extends Client
{
	public function all($includeSubCategories = false)
	{
		$config = [];
		if($includeSubCategories)
		{
			$config = ['include' => 'subcategories'];
		}

		dd($config);
		return new Response($this->request('categories', $config));
	}
}
