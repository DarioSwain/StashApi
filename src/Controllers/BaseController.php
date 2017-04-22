<?php
/*
 * StashAPILib
 *
 * This file was automatically generated for DS by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace StashAPILib\Controllers;

use StashAPILib\Http\HttpCallBack;
use StashAPILib\Http\HttpContext;
use StashAPILib\Http\HttpResponse;
use StashAPILib\APIException;
use StashAPILib\Exceptions;
use \apimatic\jsonmapper\JsonMapper;
use Unirest\Request;

/**
* Base controller
*/
class BaseController
{
    /**
     * HttpCallBack instance associated with this controller
     * @var HttpCallBack
     */
    private $httpCallBack = null;

     /**
     * Constructor that sets the timeout of requests
     */

    /**
     * Set HttpCallBack for this controller
     * @param HttpCallBack $httpCallBack Http Callbacks called before/after each API call
     */
    public function setHttpCallBack(HttpCallBack $httpCallBack)
    {
        $this->httpCallBack = $httpCallBack;
    }

    /**
     * Get HttpCallBack for this controller
     * @return HttpCallBack The HttpCallBack object set for this controller
     */
    public function getHttpCallBack()
    {
        return $this->httpCallBack;
    }

    /**
     * Get a new JsonMapper instance for mapping objects
     * @return \apimatic\jsonmapper\JsonMapper JsonMapper instance
     */
    protected function getJsonMapper()
    {
        $mapper = new JsonMapper();
        $mapper->sAdditionalPropertiesCollectionMethod = 'addAdditionalProperty';
        $mapper->arChildClasses['StashAPILib\\Models\\Pagination'] = array(
            'StashAPILib\\Models\\RepositoriesPaginated', 
            'StashAPILib\\Models\\PullRequestsPaginated'
        );
        return $mapper;
    }

    protected function validateResponse(HttpResponse $response, HttpContext $_httpContext)
    {
        if ($response->getStatusCode() == 400) {
            throw new Exceptions\ApiErrorsException('Bad request', $_httpContext);
        }

        if ($response->getStatusCode() == 401) {
            throw new Exceptions\ApiErrorsException('Unauthorized', $_httpContext);
        }

        if ($response->getStatusCode() == 403) {
            throw new Exceptions\ApiErrorsException('Forbidden', $_httpContext);
        }

        if ($response->getStatusCode() == 404) {
            throw new Exceptions\ApiErrorsException('Not Found', $_httpContext);
        }

        if ($response->getStatusCode() == 405) {
            throw new Exceptions\ApiErrorsException('Method Not Allowed', $_httpContext);
        }

        if ($response->getStatusCode() == 409) {
            throw new Exceptions\ApiErrorsException('Conflict', $_httpContext);
        }

        if ($response->getStatusCode() == 415) {
            throw new Exceptions\ApiErrorsException('Unsupported Media Type', $_httpContext);
        }

        if (($response->getStatusCode() < 200) || ($response->getStatusCode() > 208)) { //[200,208] = HTTP OK
            throw new Exceptions\ApiErrorsException('API errors', $_httpContext);
        }
    }
}
