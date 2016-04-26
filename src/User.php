<?php
namespace Momentum\MSGOnline;

class User extends Client
{
	public function getCurrentUser()
	{
		return new Response($this->request('user'));
	}

	public function regenerateToken()
	{
		return new Response($this->request('authentication/regenerate_access_token'));
	}
}
