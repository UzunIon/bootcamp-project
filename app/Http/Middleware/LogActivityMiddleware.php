<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\DummyRequestActivityLogger;
use Illuminate\Http\Request;

class LogActivityMiddleware
{

    private DummyRequestActivityLogger $logger;

    /**
     * @param DummyRequestActivityLogger $logger 
     */

    function __construct(DummyRequestActivityLogger $logger)
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
