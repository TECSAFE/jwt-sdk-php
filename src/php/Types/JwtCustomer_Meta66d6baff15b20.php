<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace Tecsafe\OFCP\JWT\Types;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class JwtCustomer_Meta66d6baff15b20
 * @package Tecsafe\OFCP\JWT\Types 
 *
 * The meta object contains additional information about the token, or the token's owner
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */
class JwtCustomer_Meta66d6baff15b20 implements JSONModelInterface
{
    

    
        /** @var string The sales channel access key of the headless shop */
        protected $accessKey;
    
        /** @var string The sales channel context token of the headless shop */
        protected $contextToken;
    
        /** @var string The group of the customer inside of the sales channel */
        protected $customerGroup;
    
        /** @var string|null A from the external sales channel provided customer id */
        protected $customerIdentifier;
    
        /** @var bool Is the customer an guest customer? */
        protected $guest;
    
        /** @var string The sales channel id of the customer */
        protected $salesChannelId;
    
    /** @var array */
    protected $_rawModelDataInput = [];

    
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * JwtCustomer_Meta66d6baff15b20 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processAccessKey($rawModelDataInput);
            
        
            
                $this->processContextToken($rawModelDataInput);
            
        
            
                $this->processCustomerGroup($rawModelDataInput);
            
        
            
                $this->processCustomerIdentifier($rawModelDataInput);
            
        
            
                $this->processGuest($rawModelDataInput);
            
        
            
                $this->processSalesChannelId($rawModelDataInput);
            
        

        
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
   'accessKey',
   'contextToken',
   'customerGroup',
   'customerIdentifier',
   'guest',
   'salesChannelId',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'JwtCustomer_Meta66d6baff15b20',
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
             * Get the value of accessKey.
             *
             * The sales channel access key of the headless shop
             *
             * @return string
             */
            public function getAccessKey()
                : string
            {
                

                return $this->accessKey;
            }

            

            /**
             * Extract the value, perform validations and set the property accessKey
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAccessKey(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('accessKey', $modelData) ? $modelData['accessKey'] : $this->accessKey;

                

                $this->accessKey = $this->validateAccessKey($value, $modelData);
            }

            /**
             * Execute all validators for the property accessKey
             */
            protected function validateAccessKey($value, array $modelData)
            {
                
                    

if (!array_key_exists('accessKey', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'accessKey',
)));
}

                
                    

if (!is_string($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'accessKey',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of contextToken.
             *
             * The sales channel context token of the headless shop
             *
             * @return string
             */
            public function getContextToken()
                : string
            {
                

                return $this->contextToken;
            }

            

            /**
             * Extract the value, perform validations and set the property contextToken
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processContextToken(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('contextToken', $modelData) ? $modelData['contextToken'] : $this->contextToken;

                

                $this->contextToken = $this->validateContextToken($value, $modelData);
            }

            /**
             * Execute all validators for the property contextToken
             */
            protected function validateContextToken($value, array $modelData)
            {
                
                    

if (!array_key_exists('contextToken', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'contextToken',
)));
}

                
                    

if (!is_string($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'contextToken',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of customerGroup.
             *
             * The group of the customer inside of the sales channel
             *
             * @return string
             */
            public function getCustomerGroup()
                : string
            {
                

                return $this->customerGroup;
            }

            

            /**
             * Extract the value, perform validations and set the property customerGroup
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCustomerGroup(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('customerGroup', $modelData) ? $modelData['customerGroup'] : $this->customerGroup;

                

                $this->customerGroup = $this->validateCustomerGroup($value, $modelData);
            }

            /**
             * Execute all validators for the property customerGroup
             */
            protected function validateCustomerGroup($value, array $modelData)
            {
                
                    

if (!array_key_exists('customerGroup', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'customerGroup',
)));
}

                
                    

if (!is_string($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'customerGroup',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of customerIdentifier.
             *
             * A from the external sales channel provided customer id
             *
             * @return string|null
             */
            public function getCustomerIdentifier()
                
            {
                

                return $this->customerIdentifier;
            }

            

            /**
             * Extract the value, perform validations and set the property customerIdentifier
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCustomerIdentifier(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('customerIdentifier', $modelData) ? $modelData['customerIdentifier'] : $this->customerIdentifier;

                

                $this->customerIdentifier = $this->validateCustomerIdentifier($value, $modelData);
            }

            /**
             * Execute all validators for the property customerIdentifier
             */
            protected function validateCustomerIdentifier($value, array $modelData)
            {
                
                    

if (!array_key_exists('customerIdentifier', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'customerIdentifier',
)));
}

                
                    

if (!is_string($value) && !is_null($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'customerIdentifier',
  1 => 
  array (
    0 => 'string',
    1 => 'null',
  ),
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of guest.
             *
             * Is the customer an guest customer?
             *
             * @return bool
             */
            public function getGuest()
                : bool
            {
                

                return $this->guest;
            }

            

            /**
             * Extract the value, perform validations and set the property guest
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGuest(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('guest', $modelData) ? $modelData['guest'] : $this->guest;

                

                $this->guest = $this->validateGuest($value, $modelData);
            }

            /**
             * Execute all validators for the property guest
             */
            protected function validateGuest($value, array $modelData)
            {
                
                    

if (!array_key_exists('guest', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'guest',
)));
}

                
                    

if (!is_bool($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'guest',
  1 => 'bool',
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of salesChannelId.
             *
             * The sales channel id of the customer
             *
             * @return string
             */
            public function getSalesChannelId()
                : string
            {
                

                return $this->salesChannelId;
            }

            

            /**
             * Extract the value, perform validations and set the property salesChannelId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSalesChannelId(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('salesChannelId', $modelData) ? $modelData['salesChannelId'] : $this->salesChannelId;

                

                $this->salesChannelId = $this->validateSalesChannelId($value, $modelData);
            }

            /**
             * Execute all validators for the property salesChannelId
             */
            protected function validateSalesChannelId($value, array $modelData)
            {
                
                    

if (!array_key_exists('salesChannelId', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'salesChannelId',
)));
}

                
                    

if (!is_string($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'salesChannelId',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
