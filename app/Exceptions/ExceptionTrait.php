<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

trait ExceptionTrait{
    public function apiException($request, $e){
        if ($e instanceof ModelNotFoundException) {
            return response()->json([
                'error' => 'Product Model Not Found'
            ],Response::HTTP_NOT_FOUND);
        }

        if ($e instanceof NotFoundHttpException) {
            return response()->json([
                'error' => 'Incorect route'
            ],Response::HTTP_NOT_FOUND);
        }
    }
}
