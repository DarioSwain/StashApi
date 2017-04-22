<?php
/*
 * StashAPILib
 *
 * This file was automatically generated for DS by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace StashAPILib\Models;

use JsonSerializable;

/**
 * Stash pull request user
 */
class PullRequestUser implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var User $user public property
     */
    public $user;

    /**
     * @todo Write general description for this property
     * @var string $role public property
     */
    public $role;

    /**
     * @todo Write general description for this property
     * @var bool $approved public property
     */
    public $approved;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param User   $user     Initialization value for $this->user
     * @param string $role     Initialization value for $this->role
     * @param bool   $approved Initialization value for $this->approved
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->user     = func_get_arg(0);
            $this->role     = func_get_arg(1);
            $this->approved = func_get_arg(2);
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
        $json['user']     = $this->user;
        $json['role']     = $this->role;
        $json['approved'] = $this->approved;

        return array_merge($json, $this->additionalProperties);
    }
}
