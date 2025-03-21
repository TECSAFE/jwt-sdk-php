<?php

declare (strict_types=1);

namespace Tecsafe\OFCP\JWT\Types;

use JsonSerializable;

class JwtBaseMeta implements JsonSerializable
{
    public function __construct() {}

    public static function fromJson(string|array $data): JwtBaseMeta
    {
        if (!is_array($data)) {
            $data = json_decode($data, true);
        }

        return new JwtBaseMeta();
    }

    public function jsonSerialize(): mixed
    {
        return [];
    }
}
