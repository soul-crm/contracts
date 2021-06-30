<?php

declare(strict_types=1);

namespace SoulCrm\Contracts\Bridges\TemplateEngine;

interface TemplateEngineContract
{
    public function fetch(string $template, array $variables = []): string;
}
