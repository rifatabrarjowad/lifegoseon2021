<?php
class ParentClass{
    protected $name;
    function __construct($name){
        $this->sayHi();
    }
    function sayHi(){
        echo "Hi from{$this->name}";
    }
}
class ChildClass extends ParentClass{
    function sayHi(){
        echo "Hello";
    }
}

$cc = new ChildClass();