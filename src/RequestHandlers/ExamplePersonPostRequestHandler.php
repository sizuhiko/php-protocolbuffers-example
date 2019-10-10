<?php

namespace PhpProtocolBuffersExample\RequestHandlers;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Server\RequestHandlerInterface;

use Google\Protobuf\Examples\AddressBook\AddressBook;
  
class ExamplePersonPostRequestHandler implements RequestHandlerInterface
{
  private $container;

  public function __construct(ContainerInterface $container)
  {
    $this->container = $container;
  }

  public function handle(ServerRequestInterface $request): ResponseInterface
  {
    $response = $this->container->get(ResponseFactoryInterface::class)->createResponse();

    $addressBook = new AddressBook();
    $addressBook->mergeFromString($request->getBody()->getContents());

    $response->getBody()->write(base64_encode($addressBook->serializeToString()));
    return $response;
  }
}
