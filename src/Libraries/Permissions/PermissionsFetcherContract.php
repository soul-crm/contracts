<?php

declare(strict_types=1);

namespace SoulCrm\Contracts\Libraries\Permissions;

interface PermissionsFetcherContract
{
    public function canAdd(string $target): bool;
    public function canDelete(string $target): bool;
    public function canModify(string $target): bool;
    public function canView(string $target): bool;

    public function getPermissions($target): PermissionsDtoContract;

    public function haveAccessToProject(int $usersId, int $projectsId): bool;
}
