<?php
/*
 * StashAPILib
 *
 * This file was automatically generated for DS by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace StashAPILib\Models;

use JsonSerializable;

/**
 * Stash repository model
 */
class Repository implements JsonSerializable
{
    /**
     * id
     * @var integer $id public property
     */
    public $id;

    /**
     * slug
     * @required
     * @var string $slug public property
     */
    public $slug;

    /**
     * name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * scm id
     * @var string $scmId public property
     */
    public $scmId;

    /**
     * @todo Write general description for this property
     * @var string $state public property
     */
    public $state;

    /**
     * @todo Write general description for this property
     * @var string $statusMessage public property
     */
    public $statusMessage;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $forkable public property
     */
    public $forkable;

    /**
     * @todo Write general description for this property
     * @var Repository $origin public property
     */
    public $origin;

    /**
     * @todo Write general description for this property
     * @required
     * @var Project $project public property
     */
    public $project;

    /**
     * @todo Write general description for this property
     * @var string $cloneUrl public property
     */
    public $cloneUrl;

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
     * @todo Write general description for this property
     * @required
     * @maps public
     * @var bool $mpublic public property
     */
    public $mpublic;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer    $id            Initialization value for $this->id
     * @param string     $slug          Initialization value for $this->slug
     * @param string     $name          Initialization value for $this->name
     * @param string     $scmId         Initialization value for $this->scmId
     * @param string     $state         Initialization value for $this->state
     * @param string     $statusMessage Initialization value for $this->statusMessage
     * @param bool       $forkable      Initialization value for $this->forkable
     * @param Repository $origin        Initialization value for $this->origin
     * @param Project    $project       Initialization value for $this->project
     * @param string     $cloneUrl      Initialization value for $this->cloneUrl
     * @param SelfLink   $link          Initialization value for $this->link
     * @param array      $links         Initialization value for $this->links
     * @param bool       $mpublic       Initialization value for $this->mpublic
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 13:
                $this->id            = func_get_arg(0);
                $this->slug          = func_get_arg(1);
                $this->name          = func_get_arg(2);
                $this->scmId         = func_get_arg(3);
                $this->state         = func_get_arg(4);
                $this->statusMessage = func_get_arg(5);
                $this->forkable      = func_get_arg(6);
                $this->origin        = func_get_arg(7);
                $this->project       = func_get_arg(8);
                $this->cloneUrl      = func_get_arg(9);
                $this->link          = func_get_arg(10);
                $this->links         = func_get_arg(11);
                $this->mpublic       = func_get_arg(12);
                break;

            default:
                $this->mpublic = TRUE;
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
        $json['id']            = $this->id;
        $json['slug']          = $this->slug;
        $json['name']          = $this->name;
        $json['scmId']         = $this->scmId;
        $json['state']         = $this->state;
        $json['statusMessage'] = $this->statusMessage;
        $json['forkable']      = $this->forkable;
        $json['origin']        = $this->origin;
        $json['project']       = $this->project;
        $json['cloneUrl']      = $this->cloneUrl;
        $json['link']          = $this->link;
        $json['links']         = $this->links;
        $json['public']        = $this->mpublic;

        return array_merge($json, $this->additionalProperties);
    }
}
