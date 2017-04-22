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
 * Collection of stash api errors.
 */
class ApiErrorsException extends APIException
{
    /**
 * @todo Write general description for this property
     * @required
     * @var array $errors public property
     */
    public $errors;

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
