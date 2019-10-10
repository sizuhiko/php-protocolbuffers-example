# php-protocolbuffers-example

## Requirements

- PHP 7.x
- protoc
  - Mac OSX `brew install protobuf`
  - Linux/Windows
    - Download, unzip and set path from [official release](https://github.com/protocolbuffers/protobuf/releases)

## install

`composer install`

## generate code

```
$ protoc --php_out=build/gen public/addressbook.proto
```

## run

`php -S localhost:8080 index.php`

## Reference

- [Protocol Buffers - Code Example](https://github.com/protocolbuffers/protobuf/tree/master/examples)
- [PHP Generated Code](https://developers.google.com/protocol-buffers/docs/reference/php-generated)
