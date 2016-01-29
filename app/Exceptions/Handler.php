<?php namespace GestorImagenes\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;

class Handler extends ExceptionHandler {

	protected $dontReport = [
		'Symfony\Component\HttpKernel\Exception\HttpException'
	];

	public function report(Exception $e)
	{
		return parent::report($e);
	}

	public function render($request, Exception $e)
	{
		if ($e instanceof TokenMismatchException) 
		{
			return redirect($request->url())->with('csrf', 'Al parecer pasó mucho tiempo intenta de nuevo');
		}

		if (config('app.debug')) 
		{
			return parent::render($request, $e);	
		}

		return redirect('/')->with('error', 'Algo salió mal');
	}
}
