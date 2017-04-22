<?php
/*
 * StashAPILib
 *
 * This file was automatically generated for DS by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace StashAPILib\Models;

use JsonSerializable;

/**
 * Stash project
 */
class Project implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $key public property
     */
    public $key;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @required
     * @maps public
     * @var bool $mpublic public property
     */
    public $mpublic;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @var SelfLink $link public property
     */
    public $link;

    /**
     * @todo Write general description for this property
     * @var array $links public property
     */
    public $links;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer  $id          Initialization value for $this->id
     * @param string   $key         Initialization value for $this->key
     * @param string   $name        Initialization value for $this->name
     * @param string   $description Initialization value for $this->description
     * @param bool     $mpublic     Initialization value for $this->mpublic
     * @param string   $type        Initialization value for $this->type
     * @param SelfLink $link        Initialization value for $this->link
     * @param array    $links       Initialization value for $this->links
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->id          = func_get_arg(0);
            $this->key         = func_get_arg(1);
            $this->name        = func_get_arg(2);
            $this->description = func_get_arg(3);
            $this->mpublic     = func_get_arg(4);
            $this->type        = func_get_arg(5);
            $this->link        = func_get_arg(6);
            $this->links       = func_get_arg(7);
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
        $json['id']          = $this->id;
        $json['key']         = $this->key;
        $json['name']        = $this->name;
        $json['description'] = $this->description;
        $json['public']      = $this->mpublic;
        $json['type']        = $this->type;
        $json['link']        = $this->link;
        $json['links']       = $this->links;

        return array_merge($json, $this->additionalProperties);
    }
}
