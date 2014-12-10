<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Broadway\Bundle\BroadwayBundle\DependencyInjection\RegisterBusSubscribersCompilerPass;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Console\Application;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

$application = new Application('Personal Library', '1.0.0');

$container = new ContainerBuilder();


$loader = new YamlFileLoader($container, new FileLocator(__DIR__));
$loader->load('config/services.yml');
$loader->load('config/command_handlers.yml');

$container->addCompilerPass(
  new RegisterBusSubscribersCompilerPass(
    'broadway.command_handling.simple_command_bus',
    'command_handler',
    'Broadway\CommandHandling\CommandHandlerInterface'
  )
);

$container->compile();

$command = $container->get('sk9.cli_app.book_command');

$application->add($command);
$application->run();
$application->setAutoExit(true);

