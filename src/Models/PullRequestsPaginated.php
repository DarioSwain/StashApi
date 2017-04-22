<?php
/*
 * StashAPILib
 *
 * This file was automatically generated for DS by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace StashAPILib\Models;

use JsonSerializable;

/**
 * Stash paginated pull requests
 */
class PullRequestsPaginated extends Pagination implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var PullRequest[] $values public property
     */
    public $values;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param array $values Initialization value for $this->values
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->values = func_get_arg(0);
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
        $json['values'] = $this->values;
        $json = array_merge($json, parent::jsonSerialize());

        return array_merge($json, $this->additionalProperties);
    }
}
