<?php

class Horde_Mvc_View_FieldList extends Horde_View
{

    public function __construct(array $params)
    {
        parent::construct($params);
        $this->addViewHelper('Horde_Mvc_View_Helper');
    }
    /**
     * Need to set $this->model and optionally $this->fieldList
     */
    public function render($template = '')
    {
    
    }
}