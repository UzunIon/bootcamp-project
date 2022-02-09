<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\RequestActivityLoggerInterface;
use App\Services\DebugRequestActivityLogger;
use App\Services\ProductionRequestActivityLogger;
use Illuminate\Http\Request;

class LogActivityMiddleware
{

    private RequestActivityLoggerInterface $logger;
    private DebugRequestActivityLogger $debugLogger;
    private ProductionRequestActivityLogger $productionLogger;

    /**
     * @param RequestActivityLoggerInterface $logger 
     */

    function __construct(RequestActivityLoggerInterface $logger, DebugRequestActivityLogger $debugLogger, ProductionRequestActivityLogger $productionLogger )
    {
        $this->logger = $logger;
        $this->debugLogger = $debugLogger;
        $this->productionLogger = $productionLogger;
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
        $this->debugLogger->logRequest($request, $type ?? 'Unknown page');
        $this->productionLogger->logRequest($request, $type ?? 'Unknown page');

        return $next($request);
    }
}
