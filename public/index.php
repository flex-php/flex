<?php

use Flex\Kernel;

const ENV = "dev";
const FLEX_ROOT = __DIR__ . '/..';
require __DIR__ . '/../vendor/autoload.php';

$kernel = new Kernel(FLEX_ROOT, ENV);
$kernel->handleAndTerminate();