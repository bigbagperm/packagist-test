<?php

namespace PackTest;


class Configuration
{
    public $apiVersion = 3;
    public $apiUrl = 'https://google.com';

	public function printVersion()
	{
		echo 'apiVersion: ' . $this->apiVersion;		
	}
}
