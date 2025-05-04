<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Throwable;

class Handler extends Exception
{
    /**
     * Report the exception.
     */
    public function report(): void
    {
        //
    }

    

    /**
     * Render the exception as an HTTP response.
     */
    public function render($request, Throwable $exception)
{
    
}
}

