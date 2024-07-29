<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace Tecsafe\OFCP\JWT\Types;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class JwtInternal_Meta66a7e8bee6b26
 * @package Tecsafe\OFCP\JWT\Types 
 *
 * The meta object contains additional information about the token, or the token's owner
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */
class JwtInternal_Meta66a7e8bee6b26 implements JSONModelInterface
{
    

    
        /** @var string[] The service names, for which this token can be use. */
        protected $targetServiceId;
    
    /** @var array */
    protected $_rawModelDataInput = [];

    
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * JwtInternal_Meta66a7e8bee6b26 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processTargetServiceId($rawModelDataInput);
            
        

        
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
   'targetServiceId',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'JwtInternal_Meta66a7e8bee6b26',
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
             * Get the value of targetServiceId.
             *
             * The service names, for which this token can be use.
             *
             * @return string[]
             */
            public function getTargetServiceId()
                : array
            {
                

                return $this->targetServiceId;
            }

            

            /**
             * Extract the value, perform validations and set the property targetServiceId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTargetServiceId(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('targetServiceId', $modelData) ? $modelData['targetServiceId'] : $this->targetServiceId;

                

                $this->targetServiceId = $this->validateTargetServiceId($value, $modelData);
            }

            /**
             * Execute all validators for the property targetServiceId
             */
            protected function validateTargetServiceId($value, array $modelData)
            {
                
                    

if (!array_key_exists('targetServiceId', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'targetServiceId',
)));
}

                
                    

if (!is_array($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'targetServiceId',
  1 => 'array',
)));
}

                
                    $this->validateTargetServiceId_ArrayItem_66a7e8bee6dfb($value);
                

                return $value;
            }
        
    

    private function validateTargetServiceId_ArrayItem_66a7e8bee6dfb(&$value): void {
                    $invalidItems_f6a2b882170f9497d5b0ba0f16b2151a = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_f6a2b882170f9497d5b0ba0f16b2151a) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if (!is_string($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array targetServiceId',
  1 => 'string',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_f6a2b882170f9497d5b0ba0f16b2151a[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_f6a2b882170f9497d5b0ba0f16b2151a[$index])
                ? $invalidItems_f6a2b882170f9497d5b0ba0f16b2151a[$index][] = $e
                : $invalidItems_f6a2b882170f9497d5b0ba0f16b2151a[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_f6a2b882170f9497d5b0ba0f16b2151a);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'targetServiceId',
  1 => $invalidItems_f6a2b882170f9497d5b0ba0f16b2151a,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
