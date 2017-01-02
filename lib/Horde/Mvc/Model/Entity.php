<?php

class Horde_Mvc_Model_Entity implements Horde_Mvc_Model
{
    protected $_fields;
    protected $_validators;

    public function __construct(Horde_Mvc_Model_FieldList $fields, Horde_Mvc_Model_ValidatorList $validators)
    {
        $this->_fields = $fields;
        $this->_validators = $validators;
        $this->_key = $fields->getKey();
    }

    /**
     * Run Domain Entity level validators
     */
    public function validate()
    {
        foreach ($this->_validators as $validator) {
            $validator->validate($this->_fields);
        }
    }

    public function update(Horde_Mvc_FieldList $fields)
    {

    }
}