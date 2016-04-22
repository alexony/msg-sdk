<?php

	class Uploader
	{
		public $status;

		public function upload()
		{

		}

		public function getStatus()
		{
			return $this->status;
		}
	}

	$uploader = new Uploader();

	print_r($uploader->getStatus());