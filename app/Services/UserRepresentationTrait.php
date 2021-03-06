<?php

namespace App\Services;

use App\Models\User;

trait userRepresentationTrait
{
    protected function identifyUserRepresentation(?User $user): string
    {
        return $user ? "User with id {$user->id}" : "Unknown user";
    }
}