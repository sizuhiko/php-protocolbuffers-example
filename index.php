<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use PhpProtocolBuffersExample\RequestHandlers\ExampleGetRequestHandler;
use PhpProtocolBuffersExample\RequestHandlers\ExamplePersonPostRequestHandler;

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
  $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);
assert($request instanceof Psr\Http\Message\RequestInterface);

$router = new League\Route\Router;
$container = new League\Container\Container;

$container->add(ResponseFactoryInterface::class, Zend\Diactoros\ResponseFactory::class);

$router->map('GET', '/', [new ExampleGetRequestHandler($container), 'handle']);
$router->map('POST', '/person', [new ExamplePersonPostRequestHandler($container), 'handle']);

$response = $router->dispatch($request);
assert($response instanceof Psr\Http\Message\ResponseInterface);

(new Zend\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);
