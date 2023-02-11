<?php
use Onion\http\Kernel;
use Onion\http\Request;
use Onion\http\Response;

define('ROOT', dirname(__DIR__));
require_once dirname(__DIR__) . '/vendor/autoload.php';

$request = Request::createFromGlobals();

$kernel = new Kernel();
$response = $kernel->handle($request);
$response->send();