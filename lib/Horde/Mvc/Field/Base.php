<?php
class Horde_Mvc_Field_Base
{
    protected $_name;
    protected $_value;
    protected $_validators;
    protected $_mandatory;
    protected $_readonly;

    public function __get($item)
    {
        $method = 'get'. ucfirst($item);
        if (method_exists($this, $method))
        {
            return call_user_func($this, $method);
        }
        return $this->{'_' . $item};
    }
    
    public function __set($item, $value)
    {
        $method = 'set'. ucfirst($item);
        if (method_exists($this, $method))
        {
            return call_user_func($this, $method, $value);
        }
        return $this->{'_' . $item};
    }

    public function validate()
    {
        foreach ($this->validators as $validator)
        {
            $validator->validate($this);
        }
    }

}