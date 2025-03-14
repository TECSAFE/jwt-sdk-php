<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace Tecsafe\OFCP\JWT\Types;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class JwtCockpit_Meta67d490993e8f1
 * @package Tecsafe\OFCP\JWT\Types 
 *
 * The meta object contains additional information about the token, or the token's owner
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */
class JwtCockpit_Meta67d490993e8f1 implements JSONModelInterface
{
    

    
        /** @var string The user's email address */
        protected $email;
    
        /** @var string The user's first name */
        protected $firstName;
    
        /** @var string The user's last name */
        protected $lastName;
    
        /** @var string The OIDC providers subject identifier */
        protected $oidcSub;
    
        /** @var string The user's organization */
        protected $organization;
    
    /** @var array */
    protected $_rawModelDataInput = [];

    
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * JwtCockpit_Meta67d490993e8f1 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processEmail($rawModelDataInput);
            
        
            
                $this->processFirstName($rawModelDataInput);
            
        
            
                $this->processLastName($rawModelDataInput);
            
        
            
                $this->processOidcSub($rawModelDataInput);
            
        
            
                $this->processOrganization($rawModelDataInput);
            
        

        
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
   'email',
   'firstName',
   'lastName',
   'oidcSub',
   'organization',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'JwtCockpit_Meta67d490993e8f1',
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
             * Get the value of email.
             *
             * The user's email address
             *
             * @return string
             */
            public function getEmail()
                : string
            {
                

                return $this->email;
            }

            

            /**
             * Extract the value, perform validations and set the property email
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processEmail(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('email', $modelData) ? $modelData['email'] : $this->email;

                

                $this->email = $this->validateEmail($value, $modelData);
            }

            /**
             * Execute all validators for the property email
             */
            protected function validateEmail($value, array $modelData)
            {
                
                    

if (!array_key_exists('email', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'email',
)));
}

                
                    

if (!is_string($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'email',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of firstName.
             *
             * The user's first name
             *
             * @return string
             */
            public function getFirstName()
                : string
            {
                

                return $this->firstName;
            }

            

            /**
             * Extract the value, perform validations and set the property firstName
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFirstName(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('firstName', $modelData) ? $modelData['firstName'] : $this->firstName;

                

                $this->firstName = $this->validateFirstName($value, $modelData);
            }

            /**
             * Execute all validators for the property firstName
             */
            protected function validateFirstName($value, array $modelData)
            {
                
                    

if (!array_key_exists('firstName', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'firstName',
)));
}

                
                    

if (!is_string($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'firstName',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of lastName.
             *
             * The user's last name
             *
             * @return string
             */
            public function getLastName()
                : string
            {
                

                return $this->lastName;
            }

            

            /**
             * Extract the value, perform validations and set the property lastName
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLastName(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('lastName', $modelData) ? $modelData['lastName'] : $this->lastName;

                

                $this->lastName = $this->validateLastName($value, $modelData);
            }

            /**
             * Execute all validators for the property lastName
             */
            protected function validateLastName($value, array $modelData)
            {
                
                    

if (!array_key_exists('lastName', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'lastName',
)));
}

                
                    

if (!is_string($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'lastName',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of oidcSub.
             *
             * The OIDC providers subject identifier
             *
             * @return string
             */
            public function getOidcSub()
                : string
            {
                

                return $this->oidcSub;
            }

            

            /**
             * Extract the value, perform validations and set the property oidcSub
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processOidcSub(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('oidcSub', $modelData) ? $modelData['oidcSub'] : $this->oidcSub;

                

                $this->oidcSub = $this->validateOidcSub($value, $modelData);
            }

            /**
             * Execute all validators for the property oidcSub
             */
            protected function validateOidcSub($value, array $modelData)
            {
                
                    

if (!array_key_exists('oidcSub', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'oidcSub',
)));
}

                
                    

if (!is_string($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'oidcSub',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            /**
             * Get the value of organization.
             *
             * The user's organization
             *
             * @return string
             */
            public function getOrganization()
                : string
            {
                

                return $this->organization;
            }

            

            /**
             * Extract the value, perform validations and set the property organization
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processOrganization(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('organization', $modelData) ? $modelData['organization'] : $this->organization;

                

                $this->organization = $this->validateOrganization($value, $modelData);
            }

            /**
             * Execute all validators for the property organization
             */
            protected function validateOrganization($value, array $modelData)
            {
                
                    

if (!array_key_exists('organization', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'organization',
)));
}

                
                    

if (!is_string($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'organization',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
