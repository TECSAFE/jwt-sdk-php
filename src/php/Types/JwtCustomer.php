<?php

declare (strict_types=1);

namespace Tecsafe\OFCP\JWT\Types;

use JsonSerializable;

/**
 * The structure of a JWT token for a customer of an authenticated sales channel.
 */
class JwtCustomer implements JsonSerializable
{
    public function __construct(
        /**
         * Unix timestamp of when the token expires
         */
        public float $exp,
        /**
         * Unix timestamp of when the token was issued
         */
        public float $iat,
        /**
         * The issuer of the token, usually will equal to "api-gateway"
         */
        public string $iss,
        /**
         * The JWT ID, a unique identifier for the token
         */
        public string $jti,
        /**
         * The meta object contains additional information about the token, or the token's owner
         */
        public JwtCustomerMeta $meta,
        /**
         * Unix timestamp of when the token becomes active
         */
        public float $nbf,
        /**
         * The user id of the customer
         */
        public string $sub,
        /**
         * For customer tokens, the type will always be "customer"
         */
        public JwtType $type
    ) {}

    public static function fromJson(string|array $data): JwtCustomer
    {
        if (!is_array($data)) {
            $data = json_decode($data, true);
        }

        return new JwtCustomer($data['exp'], $data['iat'], $data['iss'], $data['jti'], JwtCustomerMeta::fromJson($data['meta']), $data['nbf'], $data['sub'], JwtType::from($data['type']));
    }

    public function jsonSerialize(): mixed
    {
        return ['exp' => $this->exp, 'iat' => $this->iat, 'iss' => $this->iss, 'jti' => $this->jti, 'meta' => $this->meta, 'nbf' => $this->nbf, 'sub' => $this->sub, 'type' => $this->type];
    }
}
