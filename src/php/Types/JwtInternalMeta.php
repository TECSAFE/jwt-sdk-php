<?php

declare (strict_types=1);

namespace Tecsafe\OFCP\JWT\Types;

use JsonSerializable;

class JwtInternalMeta implements JsonSerializable
{
    public function __construct(
        /**
         * The service names, for which this token can be use.
         */
        public array $targetServiceId
    ) {}

    public static function fromJson(string|array $data): JwtInternalMeta
    {
        if (!is_array($data)) {
            $data = json_decode($data, true);
        }

        return new JwtInternalMeta($data['targetServiceId']);
    }

    public function jsonSerialize(): mixed
    {
        return ['targetServiceId' => $this->targetServiceId];
    }
}
