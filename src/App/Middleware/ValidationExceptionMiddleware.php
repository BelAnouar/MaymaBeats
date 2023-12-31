<?php




declare(strict_types=1);


namespace App\Middleware;

use Framework\Contracts\MiddlewareInterface;
use Framework\Exceptions\validatorExceptions;

class  ValidationExceptionMiddleware implements MiddlewareInterface
{
    public function process(callable $next)
    {
        try {
            $next();
        } catch (validatorExceptions $e) {
            $_SESSION['errors'] = $e->errors;
            $referer = $_SERVER['HTTP_REFERER'];

            redirectTO($referer);
        }
    }
}
