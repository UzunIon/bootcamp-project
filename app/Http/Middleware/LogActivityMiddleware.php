<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\RequestActivityLoggerInterface;
use Illuminate\Http\Request;

class LogActivityMiddleware
{

    private RequestActivityLoggerInterface $logger;

    /**
     * @param RequestActivityLoggerInterface $logger 
     */

    function __construct(RequestActivityLoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ?string $type = null)
    {

        $this->logger->logRequest($request, $type ?? 'Unknown page');

        return $next($request);
    }
}
