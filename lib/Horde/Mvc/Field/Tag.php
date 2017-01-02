<?php
class Horde_Mvc_Field_Tag extends Horde_Mvc_Field_Base
{
    protected $_tagger;
    protected $_item;

    public function __construct($name, Horde_Mvc_Field_ValidatorList $validators, array $options)
    {
        parent::__construct();
        $this->_tagger = $options['tagger'];
        $this->_item = $options['item'];
    }
}