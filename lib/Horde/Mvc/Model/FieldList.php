<?php

class Horde_Mvc_Model_FieldList extends ArrayObject
{
    protected $_key;

    /**
     * This gets the field object, not the field value
     */
    public function __get($fieldName)
    {
        return $this->getField($fieldName);
    }

    public function __set($fieldName, $field)
    {
        // We don't support saving fields by custom field names
        $this->addField($field);
    }

    public function addField(Horde_Mvc_Field $field)
    {
        $this->offsetSet($field->name, $field);
    }

    public function getField($name)
    {
        return $this->offsetGet($name);
    }

    public function setKey($field)
    {
        $this->_key = $field;
    }

    public function getKey()
    {
        return $this->_key;
    }
}