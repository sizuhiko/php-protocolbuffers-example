<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: addressbook.proto

namespace Google\Protobuf\Examples\AddressBook\Person;

use UnexpectedValueException;

/**
 * Protobuf type <code>Google.Protobuf.Examples.AddressBook.Person.PhoneType</code>
 */
class PhoneType
{
    /**
     * Generated from protobuf enum <code>MOBILE = 0;</code>
     */
    const MOBILE = 0;
    /**
     * Generated from protobuf enum <code>HOME = 1;</code>
     */
    const HOME = 1;
    /**
     * Generated from protobuf enum <code>WORK = 2;</code>
     */
    const WORK = 2;

    private static $valueToName = [
        self::MOBILE => 'MOBILE',
        self::HOME => 'HOME',
        self::WORK => 'WORK',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PhoneType::class, \Google\Protobuf\Examples\AddressBook\Person_PhoneType::class);
