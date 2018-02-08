<?php

class Monster
{
    protected $name;

    function __construct($name = "monster")
    {
        $this->name = $name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function attack()
    {
        echo $this->name ."is attacking";
    }
}