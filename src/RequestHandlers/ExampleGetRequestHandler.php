<?php

namespace PhpProtocolBuffersExample\RequestHandlers;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ExampleGetRequestHandler implements RequestHandlerInterface
{
  private $container;

  public function __construct(ContainerInterface $container)
  {
    $this->container = $container;
  }

  public function handle(ServerRequestInterface $request): ResponseInterface
  {
    $response = $this->container->get(ResponseFactoryInterface::class)->createResponse();
    $response->getBody()->write(file_get_contents(dirname(__DIR__)."/view/index.html"));
    return $response;
  }
}
