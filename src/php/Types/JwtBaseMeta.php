<?php

declare (strict_types=1);

namespace Tecsafe\OFCP\JWT\Types;

use JsonSerializable;

class JwtBaseMeta implements JsonSerializable
{
    public function __construct(
        /**
         * Der ursprüngliche Token-String
         */
        public ?string $rawToken = null
    ) {}

    public static function fromJson(string|array $data, ?string $rawToken = null): JwtBaseMeta
    {
        if (!is_array($data)) {
            $data = json_decode($data, true);
        }

        return new JwtBaseMeta($rawToken);
    }

    public function jsonSerialize(): array
    {
        return ['rawToken' => $this->rawToken];
    }
}
