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
        public array $targetServiceId,
        /**
         * Der ursprüngliche Token-String
         */
        public ?string $rawToken = null
    ) {}

    public static function fromJson(string|array $data, ?string $rawToken = null): JwtInternalMeta
    {
        if (!is_array($data)) {
            $data = json_decode($data, true);
        }

        return new JwtInternalMeta($data['targetServiceId'], $rawToken);
    }

    public function jsonSerialize(): array
    {
        return ['targetServiceId' => $this->targetServiceId, 'rawToken' => $this->rawToken];
    }
}
