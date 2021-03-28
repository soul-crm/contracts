<?php

/*
 * This file is part of SoulCrm.
 *
 * (c) Halimon Alexander <a@halimon.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SoulCrm\Contracts\Traits;

trait SmartyTemplaterTrait
{
    protected $smarty;

    public function setSmarty($smarty): void
    {
        $this->smarty = $smarty;
    }
}
