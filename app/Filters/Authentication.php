<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Authentication implements FilterInterface
{
	public function before(RequestInterface $request)
	{
	}

	public function after(RequestInterface $request, ResponseInterface $response)
	{
	}
}
