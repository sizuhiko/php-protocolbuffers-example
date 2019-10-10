<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: addressbook.proto

namespace Google\Protobuf\Examples\AddressBook\Person;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Google.Protobuf.Examples.AddressBook.Person.PhoneNumber</code>
 */
class PhoneNumber extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string number = 1;</code>
     */
    private $number = '';
    /**
     * Generated from protobuf field <code>.Google.Protobuf.Examples.AddressBook.Person.PhoneType type = 2;</code>
     */
    private $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $number
     *     @type int $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Addressbook::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string number = 1;</code>
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Generated from protobuf field <code>string number = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Google.Protobuf.Examples.AddressBook.Person.PhoneType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.Google.Protobuf.Examples.AddressBook.Person.PhoneType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Protobuf\Examples\AddressBook\Person_PhoneType::class);
        $this->type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PhoneNumber::class, \Google\Protobuf\Examples\AddressBook\Person_PhoneNumber::class);
