<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace Tecsafe\OFCP\JWT\Types;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class JwtInternal
 * @package Tecsafe\OFCP\JWT\Types 
 *
 * The structure of a JWT token for an internal micro service. A token of this type will only be used for internal communication between micro services.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */
class JwtInternal implements JSONModelInterface
{
    

    
        /** @var float Unix timestamp of when the token expires */
        protected $exp;
    
        /** @var float Unix timestamp of when the token was issued */
        protected $iat;
    
        /** @var string The issuer of the token, usually will equal to "api-gateway" */
        protected $iss;
    
        /** @var JwtInternal_Meta66a7eaede3a91 The meta object contains additional information about the token, or the token's owner */
        protected $meta;
    
        /** @var float Unix timestamp of when the token becomes active */
        protected $nbf;
    
        /** @var string The internal micro service id, which requested the token */
        protected $sub;
    
        /** @var string For internal tokens, the type will always be "internal" */
        protected $type;
    
    /** @var array */
    protected $_rawModelDataInput = [];

    
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * JwtInternal constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processExp($rawModelDataInput);
            
        
            
                $this->processIat($rawModelDataInput);
            
        
            
                $this->processIss($rawModelDataInput);
            
        
            
                $this->processMeta($rawModelDataInput);
            
        
            
                $this->processNbf($rawModelDataInput);
            
        
            
                $this->processSub($rawModelDataInput);
            
        
            
                $this->processType($rawModelDataInput);
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if ($additionalProperties =  (static function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'exp',
   'iat',
   'iss',
   'meta',
   'nbf',
   'sub',
   'type',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'JwtInternal',
  1 => $additionalProperties,
)));
}

            

            
        }
    

    /**
     * Get the raw input used to set up the model
     *
     * @return array
     */
    public function getRawModelDataInput(): array
    {
        return $this->_rawModelDataInput;
    }

    
        
            /**
             * Get the value of exp.
             *
             * Unix timestamp of when the token expires
             *
             * @return float
             */
            public function getExp()
                : float
            {
                

                return $this->exp;
            }

            

            /**
             * Extract the value, perform validations and set the property exp
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processExp(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('exp', $modelData) ? $modelData['exp'] : $this->exp;

                $value = is_int($value) ? (float) $value : $value;

                $this->exp = $this->validateExp($value, $modelData);
            }

            /**
             * Execute all validators for the property exp
             */
            protected function validateExp($value, array $modelData)
            {
                
                    

if (!array_key_exists('exp', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'exp',
)));
}

                
                    

if (!is_float($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'exp',
  1 => 'float',
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of iat.
             *
             * Unix timestamp of when the token was issued
             *
             * @return float
             */
            public function getIat()
                : float
            {
                

                return $this->iat;
            }

            

            /**
             * Extract the value, perform validations and set the property iat
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIat(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('iat', $modelData) ? $modelData['iat'] : $this->iat;

                $value = is_int($value) ? (float) $value : $value;

                $this->iat = $this->validateIat($value, $modelData);
            }

            /**
             * Execute all validators for the property iat
             */
            protected function validateIat($value, array $modelData)
            {
                
                    

if (!array_key_exists('iat', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'iat',
)));
}

                
                    

if (!is_float($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'iat',
  1 => 'float',
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of iss.
             *
             * The issuer of the token, usually will equal to "api-gateway"
             *
             * @return string
             */
            public function getIss()
                : string
            {
                

                return $this->iss;
            }

            

            /**
             * Extract the value, perform validations and set the property iss
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIss(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('iss', $modelData) ? $modelData['iss'] : $this->iss;

                

                $this->iss = $this->validateIss($value, $modelData);
            }

            /**
             * Execute all validators for the property iss
             */
            protected function validateIss($value, array $modelData)
            {
                
                    

if (!array_key_exists('iss', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'iss',
)));
}

                
                    

if (!is_string($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'iss',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of meta.
             *
             * The meta object contains additional information about the token, or the token's owner
             *
             * @return JwtInternal_Meta66a7eaede3a91
             */
            public function getMeta()
                : JwtInternal_Meta66a7eaede3a91
            {
                

                return $this->meta;
            }

            

            /**
             * Extract the value, perform validations and set the property meta
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMeta(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('meta', $modelData) ? $modelData['meta'] : $this->meta;

                $value = (function ($value) {
    try {
        return is_array($value) ? new JwtInternal_Meta66a7eaede3a91($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'meta',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->meta = $this->validateMeta($value, $modelData);
            }

            /**
             * Execute all validators for the property meta
             */
            protected function validateMeta($value, array $modelData)
            {
                
                    

if (!array_key_exists('meta', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'meta',
)));
}

                
                    

if (!is_object($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'meta',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof JwtInternal_Meta66a7eaede3a91)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'meta',
  1 => 'JwtInternal_Meta66a7eaede3a91',
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of nbf.
             *
             * Unix timestamp of when the token becomes active
             *
             * @return float
             */
            public function getNbf()
                : float
            {
                

                return $this->nbf;
            }

            

            /**
             * Extract the value, perform validations and set the property nbf
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processNbf(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('nbf', $modelData) ? $modelData['nbf'] : $this->nbf;

                $value = is_int($value) ? (float) $value : $value;

                $this->nbf = $this->validateNbf($value, $modelData);
            }

            /**
             * Execute all validators for the property nbf
             */
            protected function validateNbf($value, array $modelData)
            {
                
                    

if (!array_key_exists('nbf', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'nbf',
)));
}

                
                    

if (!is_float($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'nbf',
  1 => 'float',
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of sub.
             *
             * The internal micro service id, which requested the token
             *
             * @return string
             */
            public function getSub()
                : string
            {
                

                return $this->sub;
            }

            

            /**
             * Extract the value, perform validations and set the property sub
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSub(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('sub', $modelData) ? $modelData['sub'] : $this->sub;

                

                $this->sub = $this->validateSub($value, $modelData);
            }

            /**
             * Execute all validators for the property sub
             */
            protected function validateSub($value, array $modelData)
            {
                
                    

if (!array_key_exists('sub', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'sub',
)));
}

                
                    

if (!is_string($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'sub',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of type.
             *
             * For internal tokens, the type will always be "internal"
             *
             * @return string
             */
            public function getType()
                : string
            {
                

                return $this->type;
            }

            
                /**
                 * Set the value of type.
                 *
                 * @param string $type For internal tokens, the type will always be "internal"
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return self
                 */
                public function setType(
                    string $type
                ): self {
                    if ($this->type === $type) {
                        return $this;
                    }

                    $value = $modelData['type'] = $type;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->type = $value;
                    $this->_rawModelDataInput['type'] = $type;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property type
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processType(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('type', $modelData) ? $modelData['type'] : $this->type;

                

                $this->type = $this->validateType($value, $modelData);
            }

            /**
             * Execute all validators for the property type
             */
            protected function validateType($value, array $modelData)
            {
                
                    

if ($value !== 'internal') {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidConstException($value ?? null, ...array (
  0 => 'type',
  1 => 'internal',
)));
}

                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
