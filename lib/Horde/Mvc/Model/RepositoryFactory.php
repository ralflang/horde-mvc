<?php
/**
 * A factory to create repositories
 */
class Horde_Mvc_Model_RepositoryFactory
{

    protected $_injector;

    public function __construct($injector)
    {
        $this->_injector = $injector;
    }


    public function create($backend, $configuration)
    {
    }
}