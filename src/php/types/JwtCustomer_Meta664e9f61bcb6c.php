<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace Tecsafe\OFCP\JWT\Types;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class JwtCustomer_Meta664e9f61bcb6c
 * @package Tecsafe\OFCP\JWT\Types 
 *
 * The meta object contains additional information about the token, or the token's owner
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */
class JwtCustomer_Meta664e9f61bcb6c implements JSONModelInterface
{
    

    
        /** @var string The group of the customer inside of the sales channel */
        protected $customerGroup;
    
        /** @var string The sales channel id of the customer */
        protected $salesChannelId;
    
    /** @var array */
    protected $_rawModelDataInput = [];

    
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * JwtCustomer_Meta664e9f61bcb6c constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processCustomerGroup($rawModelDataInput);
            
        
            
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
   'customerGroup',
   'salesChannelId',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'JwtCustomer_Meta664e9f61bcb6c',
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
