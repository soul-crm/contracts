<?php

declare(strict_types=1);

namespace SoulCrm\Contracts\Traits;

trait ErrorResponseTrait
{
    protected function accessDeniedResponse($message = 'Access denied!'): void
    {
        header($message, true, 403);
        exit;
    }

    protected function badRequestResponse($message = 'Bad request'): void
    {
        header($message, true, 400);
        exit;
    }
}
