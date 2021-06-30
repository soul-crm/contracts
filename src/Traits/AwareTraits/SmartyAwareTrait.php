<?php

declare(strict_types=1);

namespace SoulCrm\Contracts\Traits\AwareTraits;

use Smarty;

trait SmartyAwareTrait
{
    protected Smarty $smarty;

    public function setSmarty(Smarty $smarty): void
    {
        $this->smarty = $smarty;
    }
}
