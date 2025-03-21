<?php

declare (strict_types=1);

namespace Tecsafe\OFCP\JWT\Types;

enum JwtType: string
{
    case CUSTOMER = 'customer';
    case SALES_CHANNEL = 'sales-channel';
    case COCKPIT = 'cockpit';
    case INTERNAL = 'internal';
}
