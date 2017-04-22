<?php
/*
 * StashAPILib
 *
 * This file was automatically generated for DS by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace StashAPILib\Models;

use JsonSerializable;

/**
 * Simplified version of repository.
 */
class RepositorySimplified implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $slug public property
     */
    public $slug;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @var ProjectSimplified $project public property
     */
    public $project;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string            $slug    Initialization value for $this->slug
     * @param string            $name    Initialization value for $this->name
     * @param ProjectSimplified $project Initialization value for $this->project
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->slug    = func_get_arg(0);
            $this->name    = func_get_arg(1);
            $this->project = func_get_arg(2);
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
        $json['slug']    = $this->slug;
        $json['name']    = $this->name;
        $json['project'] = $this->project;

        return array_merge($json, $this->additionalProperties);
    }
}
