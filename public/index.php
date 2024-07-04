<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use PhpNoFramework\HelloWorld;

use function DI\create;

require_once dirname(__DIR__) . '/vendor/autoload.php';


$containerBuilder = new ContainerBuilder();
$containerBuilder->useAutowiring(false);
$containerBuilder->useAttributes(false);

$containerBuilder->addDefinitions([
    HelloWorld::class => create(HelloWorld::class),
]);

$container = $containerBuilder->build();

$obj = $container->get(HelloWorld::class);

$obj->announce();