<?php

declare (strict_types=1);

namespace Tecsafe\OFCP\JWT\Types;

use JsonSerializable;

/**
 * The structure of a JWT token for a registered sales channel Sales channels can request customer tokens with this token.
 */
class JwtSalesChannel implements JsonSerializable
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
        public JwtSalesChannelMeta $meta,
        /**
         * Unix timestamp of when the token becomes active
         */
        public float $nbf,
        /**
         * The sales channel id
         */
        public string $sub,
        /**
         * For sales-channel tokens, the type will always be "sales-channel"
         */
        public JwtType $type,
        /**
         * Der ursprüngliche Token-String
         */
        public ?string $rawToken = null
    ) {}

    public static function fromJson(string|array $data, ?string $rawToken = null): JwtSalesChannel
    {
        if (!is_array($data)) {
            $data = json_decode($data, true);
        }

        return new JwtSalesChannel($data['exp'], $data['iat'], $data['iss'], $data['jti'], JwtSalesChannelMeta::fromJson($data['meta']), $data['nbf'], $data['sub'], JwtType::from($data['type']), $rawToken);
    }

    public function jsonSerialize(): array
    {
        return ['exp' => $this->exp, 'iat' => $this->iat, 'iss' => $this->iss, 'jti' => $this->jti, 'meta' => $this->meta, 'nbf' => $this->nbf, 'sub' => $this->sub, 'type' => $this->type, 'rawToken' => $this->rawToken];
    }
}
