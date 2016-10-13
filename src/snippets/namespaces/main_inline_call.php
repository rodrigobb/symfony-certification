<?php

include_once 'bar.php';
include_once 'foo.php';

// Class loading

$clazz = new \MyApp\Foo\Foo();
$clazz->foo();

// Function calling
\MyApp\Bar\baz();

// Constant using
echo \MyApp\Bar\CONSTANT;
