<?php
namespace Momentum\MSGOnline;

class User extends Client
{
	public function getCurrentUser()
	{
		return new Response($this->request('user'));
	}
}
