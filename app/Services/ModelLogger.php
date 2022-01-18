<?php

namespace App\Services;

use App\Models\LoggableInterface;
use App\Models\User;
use Psr\Log\LoggerInterface;

class ModelLogger
{
    use UserRepresentationTrait;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function logModel(?User $user, LoggableInterface $loggable): void
    {
        
        $this->logger->info(
            $this->identifyUserRepresentation($user) . ' accesed ' . $loggable->convertToLoggableString(), 
            $loggable->getData(),
        );
    }
}