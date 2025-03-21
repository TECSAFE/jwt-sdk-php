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
        public string $accessKey
    ) {}

    public static function fromJson(string|array $data): JwtSalesChannelMeta
    {
        if (!is_array($data)) {
            $data = json_decode($data, true);
        }

        return new JwtSalesChannelMeta($data['accessKey']);
    }

    public function jsonSerialize(): mixed
    {
        return ['accessKey' => $this->accessKey];
    }
}
