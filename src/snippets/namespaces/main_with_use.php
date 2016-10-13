<?php

include_once 'bar.php';
include_once 'foo.php';

// Class loading
use \MyApp\Foo\Foo;
// Class loading with alias
use \MyApp\Foo\Foo as FOO2;

$clazz = new Foo();
$clazz->foo();

$class = new FOO2();
$class->foo();


// Function loading

// To use a function this doesn't works.
use \MyApp\Bar\baz;

// You must use this **(ONLY IN PHP 5.6+)**:
use function  \MyApp\Bar\baz;

baz();

// The same occurs with constants. You can use this on PHP 5.6+
use const \MyApp\Bar\CONSTANT;