<?php

/* Traits constructor snippets */

class A {
	private $a = 'a';

	public function getA() {
		return $this->a;
	}
}

trait B {
	private $a = 'b';
	private $b = 'b';

	public function __construct() {
		//Fatal Error: parent::__construct();
		$this->a = 'B';
		$this->b = 'B';
	}

	public function getB() {
		return $this->b;
	}
}

class C extends A {
	use B;

	public function __construct() {
		//parent::__construct();
		$this->a = 'C';
	}
}

$c = new C();

echo $c->getA();
echo $c->getB();
echo "\n";