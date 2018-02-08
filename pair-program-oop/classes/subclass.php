<?php
/**
 * Created by PhpStorm.
 * User: Navtej
 * Date: 2/8/2018
 * Time: 1:59 PM
 */


class Subclass extends Monster{
    private $_sub;

    function __construct($name = "monster")
    {
        parent::__construct($name);
        $this->_sub;
    }

    function attack()
    {
        $this->_sub++;
       echo  parent::getName()." is attacking ".$this->_sub;
    }
}