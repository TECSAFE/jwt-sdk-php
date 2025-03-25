<?php

declare (strict_types=1);

namespace Tecsafe\OFCP\JWT\Types;

use JsonSerializable;

class JwtSalesChannelMeta implements JsonSerializable
{
    public function __construct(
        /**
         * The sales channel access key of the headless shop
         */
        public string $accessKey,
        /**
         * Der ursprüngliche Token-String
         */
        public ?string $rawToken = null
    ) {}

    public static function fromJson(string|array $data, ?string $rawToken = null): JwtSalesChannelMeta
    {
        if (!is_array($data)) {
            $data = json_decode($data, true);
        }

        return new JwtSalesChannelMeta($data['accessKey'], $rawToken);
    }

    public function jsonSerialize(): array
    {
        return ['accessKey' => $this->accessKey, 'rawToken' => $this->rawToken];
    }
}
