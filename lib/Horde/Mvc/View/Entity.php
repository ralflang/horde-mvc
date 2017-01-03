<?php

class Horde_Mvc_View_Entity extends Horde_View
{

    public function __construct(array $params)
    {
        parent::__construct($params);
        $this->addHelper('Horde_Mvc_View_Helper');
    }
    /**
     * Need to set $this->entity and optionally $this->fieldList
     */
    public function render($template = '', $locals)
    {
        if ($template) {
            return parent::render($template, $locals);
        }
        return $this->formatEntityTable($this->entity, $this->fieldList);
    }
}
