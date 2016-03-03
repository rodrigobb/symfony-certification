<?php

/* Traits precedence snippets */

class Base {
    public function hi() {
        echo 'Hi ';
    }
}

trait SayWorld {
    public function hi() {
        parent::hi();
        echo 'World';
    }

    public function ex() {
    	echo "\n";
    }
}

class ChildClass extends Base {
    use SayWorld;

    public function ex() {
    	echo "!!\n";
    }
}

$o = new ChildClass();
$o->hi();	// Hi world (because trait > base)
$o->ex();   // !! (because current class overrides trait) 
