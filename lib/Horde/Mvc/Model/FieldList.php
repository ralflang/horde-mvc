<?php

class Horde_Mvc_Model_FieldList extends ArrayObject
{
    protected $_key;
    public function addField(Horde_Mvc_Field $field)
    {
        $this->offsetSet($field->name, $field);
    }
    
    public function getField($name)
    {
        $this->offsetGet($name);
    }
    
    public function setKey($field)
    {
        
    }
    
    public function getKey()
    {
        return $field;
    }
}