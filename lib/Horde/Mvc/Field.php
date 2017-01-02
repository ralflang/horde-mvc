<?php
interface Horde_Mvc_Field
{
    protected $_name;
    protected $_value;
    protected $_validators;
    protected $_mandatory;
    protected $_readonly;

    public function __construct($name, Horde_Mvc_Field_ValidatorList $validators = null, array $options = null);

    public function __get($item);

    public function __set($item, $value);

    public function validate();

}