<?php
/*
 * StashAPILib
 *
 * This file was automatically generated for DS by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace StashAPILib\Exceptions;

use StashAPILib\APIException;
use StashAPILib\APIHelper;

/**
 * Stash API error.
 */
class ErrorException extends APIException
{
    /**
 * @todo Write general description for this property
     * @var string|null $context public property
     */
    public $context;

    /**
 * @todo Write general description for this property
     * @var string $message public property
     */
    public $message;

    /**
 * @todo Write general description for this property
     * @var string|null $exceptionName public property
     */
    public $exceptionName;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct($reason, $context)
    {
        parent::__construct($reason, $context);
    }

    /**
     * Unbox response into this exception class
     */
    public function unbox()
    {
        APIHelper::deserialize(self::getResponseBody(), $this, false, false);
    }
}
