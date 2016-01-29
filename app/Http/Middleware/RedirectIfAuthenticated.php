<?php namespace GestorImagenes\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;

class RedirectIfAuthenticated {

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	public function handle($request, Closure $next)
	{
		if ($this->auth->check())
		{
			return new RedirectResponse(url('/validado'));
		}
		return $next($request);
	}

}
