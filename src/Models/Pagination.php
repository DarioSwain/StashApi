<?php
/*
 * StashAPILib
 *
 * This file was automatically generated for DS by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace StashAPILib\Models;

use JsonSerializable;

/**
 * Stash paginated result
 */
class Pagination implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer $size public property
     */
    public $size;

    /**
     * @todo Write general description for this property
     * @var integer $limit public property
     */
    public $limit;

    /**
     * @todo Write general description for this property
     * @var bool $isLastPage public property
     */
    public $isLastPage;

    /**
     * @todo Write general description for this property
     * @var integer $start public property
     */
    public $start;

    /**
     * @todo Write general description for this property
     * @var integer $nextPageStart public property
     */
    public $nextPageStart;

    /**
     * @todo Write general description for this property
     * @var string|null $filter public property
     */
    public $filter;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $size          Initialization value for $this->size
     * @param integer $limit         Initialization value for $this->limit
     * @param bool    $isLastPage    Initialization value for $this->isLastPage
     * @param integer $start         Initialization value for $this->start
     * @param integer $nextPageStart Initialization value for $this->nextPageStart
     * @param string  $filter        Initialization value for $this->filter
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->size          = func_get_arg(0);
            $this->limit         = func_get_arg(1);
            $this->isLastPage    = func_get_arg(2);
            $this->start         = func_get_arg(3);
            $this->nextPageStart = func_get_arg(4);
            $this->filter        = func_get_arg(5);
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
        $json['size']          = $this->size;
        $json['limit']         = $this->limit;
        $json['isLastPage']    = $this->isLastPage;
        $json['start']         = $this->start;
        $json['nextPageStart'] = $this->nextPageStart;
        $json['filter']        = $this->filter;

        return array_merge($json, $this->additionalProperties);
    }
}
