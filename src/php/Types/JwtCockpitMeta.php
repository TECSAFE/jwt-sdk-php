<?php

declare (strict_types=1);

namespace Tecsafe\OFCP\JWT\Types;

use JsonSerializable;

class JwtCockpitMeta implements JsonSerializable
{
    public function __construct(
        /**
         * The user's email address
         */
        public string $email,
        /**
         * The user's first name
         */
        public string $firstName,
        /**
         * The user's last name
         */
        public string $lastName,
        /**
         * The OIDC providers subject identifier
         */
        public string $oidcSub,
        /**
         * The user's organization
         */
        public string $organization,
        /**
         * The role of the user
         */
        public CockpitRole $role
    ) {}

    public static function fromJson(string|array $data): JwtCockpitMeta
    {
        if (!is_array($data)) {
            $data = json_decode($data, true);
        }

        return new JwtCockpitMeta($data['email'], $data['firstName'], $data['lastName'], $data['oidcSub'], $data['organization'], CockpitRole::from($data['role']));
    }

    public function jsonSerialize(): mixed
    {
        return ['email' => $this->email, 'firstName' => $this->firstName, 'lastName' => $this->lastName, 'oidcSub' => $this->oidcSub, 'organization' => $this->organization, 'role' => $this->role];
    }
}
