<?php

class Horde_Mvc_Model_Entity implements Horde_Mvc_Model
{
    protected $_fields;
    protected $_validators;
    protected $_key;

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

    public function __get($field)
    {
        return $this->_fields->$field->value;
    }

    public function __set($field, $value)
    {
        $this->_fields->$field->value = $value;
    }

    public function update(Horde_Mvc_FieldList $fields)
    {
        foreach ($fields as $field) {
            $this->$field = $value;
        }
    }
    /**
     * Gets an iterable FieldList with the actual values and all the Meta Data
     */
    public function getFields()
    {
        return $this->_fields;
    }
}
