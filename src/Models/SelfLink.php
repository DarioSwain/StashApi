<?php
/*
 * StashAPILib
 *
 * This file was automatically generated for DS by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace StashAPILib\Models;

use JsonSerializable;

/**
 * Self link
 */
class SelfLink implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string $url public property
     */
    public $url;

    /**
     * @todo Write general description for this property
     * @var string $rel public property
     */
    public $rel = 'self';

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $url Initialization value for $this->url
     * @param string $rel Initialization value for $this->rel
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 2:
                $this->url = func_get_arg(0);
                $this->rel = func_get_arg(1);
                break;

            default:
                $this->rel = 'self';
                break;
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
        $json['url'] = $this->url;
        $json['rel'] = $this->rel;

        return array_merge($json, $this->additionalProperties);
    }
}
