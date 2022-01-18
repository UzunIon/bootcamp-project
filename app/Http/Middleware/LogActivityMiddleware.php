<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\DummyRequestAcrivityLogger;
use Illuminate\Http\Request;

class LogActivityMiddleware
{

    private DummyRequestAcrivityLogger $logger;

    function __construct(DummyRequestAcrivityLogger $logger)
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


        $this->logger->debug(
            $this->identifyUserRepresentation($request->user()) . 'made a request to ' . ($type ?? 'Unknown page'), 
            ['data placeholder']
        );

        return $next($request);
    }
}
