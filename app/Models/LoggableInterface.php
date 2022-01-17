<?php

namespace App\Models;

interface LoggableInterface
{
    /**
     * Get Logable unique name for mesage generation
     * 
     * @return string
     */
    public function convertToLoggableString(): string;

    /**
     * Get Loggable object data for log context
     * 
     * @return array
     */

    public function getData(): array;
}