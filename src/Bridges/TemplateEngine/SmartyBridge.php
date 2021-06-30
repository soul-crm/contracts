<?php

declare(strict_types=1);

namespace SoulCrm\Contracts\Bridges\TemplateEngine;

use SmartyException;
use SoulCrm\Contracts\Traits\AwareTraits\SmartyAwareTrait;

class SmartyBridge implements TemplateEngineContract
{
    use SmartyAwareTrait;

    /**
     * @throws SmartyException
     */
    public function fetch(string $template, array $variables = []): string
    {
        $this->smarty->assign($variables);

        return $this->smarty->fetch();
    }

    public function __call(string $method, array $arguments)
    {
        $this->smarty->$method(...$arguments);
    }
}
