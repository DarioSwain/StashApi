<?php
/*
 * StashAPILib
 *
 * This file was automatically generated for DS by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace StashAPILib\Models;

use JsonSerializable;

/**
 * Stash reference
 */
class Reference implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var RepositorySimplified $repository public property
     */
    public $repository;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string               $id         Initialization value for $this->id
     * @param RepositorySimplified $repository Initialization value for $this->repository
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->id         = func_get_arg(0);
            $this->repository = func_get_arg(1);
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
        $json['id']         = $this->id;
        $json['repository'] = $this->repository;

        return array_merge($json, $this->additionalProperties);
    }
}
