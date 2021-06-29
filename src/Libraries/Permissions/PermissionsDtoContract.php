<?php

declare(strict_types=1);

namespace SoulCrm\Contracts\Libraries\Permissions;

interface PermissionsDtoContract
{
    public function canFullView(): bool;
    public function canPartView(): bool;
    public function canView(): bool;
    public function canAdd(): bool;
    public function canModify(): bool;
    public function canDelete(): bool;
}
