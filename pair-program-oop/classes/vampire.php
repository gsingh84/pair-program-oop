<?php

class Vampire extends Monster
{
    private $_victim;

    function __construct($name)
    {
        parent::__construct($name);
        $this->_victim = 0;
    }

    function attack()
    {
        $this->_victim++;
        echo parent::getName()." is attacking ".$this->_victim.'<br>';
    }
}