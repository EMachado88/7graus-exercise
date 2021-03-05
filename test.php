<?php

$loader = require __DIR__ . '/vendor/autoload.php';
require_once './AreaTests.php';
require_once './Shape.php';
require_once './Circle.php';
require_once './Rectangle.php';

$test = new AreaTests();

$test->testShapeArea();

$test->testRectangleArea();

$test->testCircleArea();
