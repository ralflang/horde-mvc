<?php

class Horde_Mvc_Model_EntityList extends ArrayObject
{
    public function __set($discard, $Entity);
    {
        // We only support saving entities by appending
        $this->append($field);
    }

}