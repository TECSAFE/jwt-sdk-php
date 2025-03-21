<?php

declare (strict_types=1);

namespace Tecsafe\OFCP\JWT\Types;

enum CockpitRole: string
{
    case PLATFORM_ADMIN = 'PLATFORM_ADMIN';
    case COMPANY_ADMIN = 'COMPANY_ADMIN';
    case COMPANY_ACCOUNTING_MANAGER = 'COMPANY_ACCOUNTING_MANAGER';
    case COMPANY_PURCHASE_MANAGER = 'COMPANY_PURCHASE_MANAGER';
    case COMPANY_SALES_MANAGER = 'COMPANY_SALES_MANAGER';

    public static function compareRoles(CockpitRole $has, CockpitRole $needs): bool
    {
        return array_search($has, CockpitRole::cases(), true) <= array_search($needs, CockpitRole::cases(), true);
    }

    public function hasRole(CockpitRole $givenRole): bool
    {
        return CockpitRole::compareRoles($this, $givenRole);
    }
}
