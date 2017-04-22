<?php
/*
 * StashAPILib
 *
 * This file was automatically generated for DS by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace StashAPILib\Models;

use JsonSerializable;

/**
 * Stash pull request
 */
class PullRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @var integer $version public property
     */
    public $version;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $state public property
     */
    public $state;

    /**
     * @todo Write general description for this property
     * @var bool $open public property
     */
    public $open;

    /**
     * @todo Write general description for this property
     * @var bool $closed public property
     */
    public $closed;

    /**
     * @todo Write general description for this property
     * @var string $createdDate public property
     */
    public $createdDate;

    /**
     * @todo Write general description for this property
     * @var string $updatedDate public property
     */
    public $updatedDate;

    /**
     * @todo Write general description for this property
     * @required
     * @var Reference $fromRef public property
     */
    public $fromRef;

    /**
     * @todo Write general description for this property
     * @required
     * @var Reference $toRef public property
     */
    public $toRef;

    /**
     * @todo Write general description for this property
     * @var bool $locked public property
     */
    public $locked;

    /**
     * @todo Write general description for this property
     * @var PullRequestUser $author public property
     */
    public $author;

    /**
     * @todo Write general description for this property
     * @required
     * @var PullRequestUser[] $reviewers public property
     */
    public $reviewers;

    /**
     * @todo Write general description for this property
     * @var PullRequestUser[] $participants public property
     */
    public $participants;

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
     * @param integer         $id           Initialization value for $this->id
     * @param integer         $version      Initialization value for $this->version
     * @param string          $title        Initialization value for $this->title
     * @param string          $description  Initialization value for $this->description
     * @param string          $state        Initialization value for $this->state
     * @param bool            $open         Initialization value for $this->open
     * @param bool            $closed       Initialization value for $this->closed
     * @param string          $createdDate  Initialization value for $this->createdDate
     * @param string          $updatedDate  Initialization value for $this->updatedDate
     * @param Reference       $fromRef      Initialization value for $this->fromRef
     * @param Reference       $toRef        Initialization value for $this->toRef
     * @param bool            $locked       Initialization value for $this->locked
     * @param PullRequestUser $author       Initialization value for $this->author
     * @param array           $reviewers    Initialization value for $this->reviewers
     * @param array           $participants Initialization value for $this->participants
     * @param SelfLink        $link         Initialization value for $this->link
     * @param array           $links        Initialization value for $this->links
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 17:
                $this->id           = func_get_arg(0);
                $this->version      = func_get_arg(1);
                $this->title        = func_get_arg(2);
                $this->description  = func_get_arg(3);
                $this->state        = func_get_arg(4);
                $this->open         = func_get_arg(5);
                $this->closed       = func_get_arg(6);
                $this->createdDate  = func_get_arg(7);
                $this->updatedDate  = func_get_arg(8);
                $this->fromRef      = func_get_arg(9);
                $this->toRef        = func_get_arg(10);
                $this->locked       = func_get_arg(11);
                $this->author       = func_get_arg(12);
                $this->reviewers    = func_get_arg(13);
                $this->participants = func_get_arg(14);
                $this->link         = func_get_arg(15);
                $this->links        = func_get_arg(16);
                break;

            default:
                $this->state = 'OPEN';
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
        $json['id']           = $this->id;
        $json['version']      = $this->version;
        $json['title']        = $this->title;
        $json['description']  = $this->description;
        $json['state']        = $this->state;
        $json['open']         = $this->open;
        $json['closed']       = $this->closed;
        $json['createdDate']  = $this->createdDate;
        $json['updatedDate']  = $this->updatedDate;
        $json['fromRef']      = $this->fromRef;
        $json['toRef']        = $this->toRef;
        $json['locked']       = $this->locked;
        $json['author']       = $this->author;
        $json['reviewers']    = $this->reviewers;
        $json['participants'] = $this->participants;
        $json['link']         = $this->link;
        $json['links']        = $this->links;

        return array_merge($json, $this->additionalProperties);
    }
}
