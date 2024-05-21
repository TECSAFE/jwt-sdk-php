WARNING: This repository is automatically generated from the jwt-sdk repository.
Do not edit files in this repository directly.

# JWT SDK

This repo contains the JWT SDK for parsing and validating JWT tokens from OFCP. The main code is
written in TypeScript, but we also provide a JsonSchema and a PHP equivalent.

## Installation

**TypeScript** / **JavaScript**:

```sh
npm install @tecsafe/jwt-sdk
```

**PHP**:

```sh
composer require tecsafe/jwt-sdk
```

**JsonSchema**:

```sh
curl -O <to be defined>
```

## Usage

**TypeScript** / **JavaScript**:

```typescript
import { getJWK, parseUnknownJwt } from '@tecsafe/jwt-sdk';

const TOKEN = 'eyJhbGci...';

const jwk = await getJWK();
const body = parseUnknownJwt(TOKEN, jwk);
// or if you don't want to validate the signature, and just want to parse the token
const body = parseUnknownJwt(TOKEN);
```

**PHP**:

```php
$TOKEN = 'eyJhbGci...';

$jwk = Tecsafe\OFCP\JWT\SDK\get_jwk();
$body = Tecsafe\OFCP\JWT\SDK\parse_jwt_customer($TOKEN, $jwk);
// same as above, if you don't want to validate the signature
$body = Tecsafe\OFCP\JWT\SDK\parse_jwt_customer($TOKEN);
```

**JsonSchema**:

See https://json-schema.org/ for more information on how to use JsonSchema.
