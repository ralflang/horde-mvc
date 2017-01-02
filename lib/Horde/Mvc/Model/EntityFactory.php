<?php
/**
 * An injector based factory to set up entities and fullfill all dependencies the corresponding fields might have.
 */
class Horde_Mvc_Model_EntityFactory
{
    protected $_injector;
    protected $_entityClassname;

    public function __construct(Horde_Injector $injector)
    {
        $this->_injector = $injector;
        $this->_entityClassname = str_replace('Factory', '', get_class($this));
    }

    /**
     *
     */
    public function create(Horde_Injector $injector)
    {
        $fields = $this->_fieldList();
        return new $this->_entityClassname($fields);
    }

    /**
     * Override this method in child classes to define the Entity fields
     */
    protected function _fieldList()
    {
        return new Horde_Mvc_Model_FieldList;
    }

}