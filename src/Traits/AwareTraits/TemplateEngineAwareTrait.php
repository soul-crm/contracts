<?php

declare(strict_types=1);

namespace SoulCrm\Contracts\Traits\AwareTraits;

use SoulCrm\Contracts\Bridges\TemplateEngine\TemplateEngineContract;

trait TemplateEngineAwareTrait
{
    protected TemplateEngineContract $te;

    protected function setTemplateEngine(TemplateEngineContract $te): void
    {
        $this->te = $te;
    }
}
