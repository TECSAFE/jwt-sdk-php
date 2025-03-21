<?php

declare (strict_types=1);

namespace Tecsafe\OFCP\JWT\Types;

use JsonSerializable;

class JwtCustomerMeta implements JsonSerializable
{
    public function __construct(
        /**
         * The sales channel access key of the headless shop
         */
        public string $accessKey,
        /**
         * The sales channel context token of the headless shop
         */
        public string $contextToken,
        /**
         * Currency of the customer
         */
        public string $currencyId,
        /**
         * Currency ISO 4217 code
         */
        public string $currencyIso,
        /**
         * The group id of the customer inside of the sales channel
         */
        public string $customerGroupId,
        /**
         * A from the external sales channel provided customer id
         */
        public string $customerIdentifier,
        /**
         * The customer's email address, in most cases only available if guest is false
         */
        public string|null $email,
        /**
         * The external group name of the customer
         */
        public string|null $externalGroupName,
        /**
         * Is the customer an guest customer?
         */
        public bool $guest,
        /**
         * The sales channel id of the customer
         */
        public string $salesChannelId
    ) {}

    public static function fromJson(string|array $data): JwtCustomerMeta
    {
        if (!is_array($data)) {
            $data = json_decode($data, true);
        }

        return new JwtCustomerMeta($data['accessKey'], $data['contextToken'], $data['currencyId'], $data['currencyIso'], $data['customerGroupId'], $data['customerIdentifier'], $data['email'], $data['externalGroupName'], $data['guest'], $data['salesChannelId']);
    }

    public function jsonSerialize(): mixed
    {
        return ['accessKey' => $this->accessKey, 'contextToken' => $this->contextToken, 'currencyId' => $this->currencyId, 'currencyIso' => $this->currencyIso, 'customerGroupId' => $this->customerGroupId, 'customerIdentifier' => $this->customerIdentifier, 'email' => $this->email, 'externalGroupName' => $this->externalGroupName, 'guest' => $this->guest, 'salesChannelId' => $this->salesChannelId];
    }
}
