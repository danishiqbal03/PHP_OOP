<?php

//Constructor B passing to Constructor A
class A {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
}

class B extends A {
    public function __construct($name) {
        parent::__construct($name);
    }
    public function getName() {
        return $this->name;
    }
}

$obj1 = new B("DANISH");
echo $obj1->getName(); // Output: "DANISH"


//Contructor A is automatically getting called 
class A {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
}

class B extends A {

    public function getName() {
        return $this->name;
    }
}

$obj1 = new B("DANISH");
echo $obj1->getName(); // Output: "DANISH"
