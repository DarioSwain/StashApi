<?php
/*
 * StashAPILib
 *
 * This file was automatically generated for DS by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace StashAPILib\Models;

use JsonSerializable;

/**
 * Stash user
 */
class User implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @var string $emailAddress public property
     */
    public $emailAddress;

    /**
     * @todo Write general description for this property
     * @var string $displayName public property
     */
    public $displayName;

    /**
     * @todo Write general description for this property
     * @var bool $active public property
     */
    public $active;

    /**
     * @todo Write general description for this property
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @var string $slug public property
     */
    public $slug;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id           Initialization value for $this->id
     * @param string  $name         Initialization value for $this->name
     * @param string  $emailAddress Initialization value for $this->emailAddress
     * @param string  $displayName  Initialization value for $this->displayName
     * @param bool    $active       Initialization value for $this->active
     * @param string  $type         Initialization value for $this->type
     * @param string  $slug         Initialization value for $this->slug
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->id           = func_get_arg(0);
            $this->name         = func_get_arg(1);
            $this->emailAddress = func_get_arg(2);
            $this->displayName  = func_get_arg(3);
            $this->active       = func_get_arg(4);
            $this->type         = func_get_arg(5);
            $this->slug         = func_get_arg(6);
        }
    }

    
    /**
     * Add an additional property to this model.
     * @param string $name  Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty($name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']           = $this->id;
        $json['name']         = $this->name;
        $json['emailAddress'] = $this->emailAddress;
        $json['displayName']  = $this->displayName;
        $json['active']       = $this->active;
        $json['type']         = $this->type;
        $json['slug']         = $this->slug;

        return array_merge($json, $this->additionalProperties);
    }
}
