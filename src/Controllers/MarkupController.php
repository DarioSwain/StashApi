<?php
/*
 * StashAPILib
 *
 * This file was automatically generated for DS by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace StashAPILib\Controllers;

use StashAPILib\APIException;
use StashAPILib\APIHelper;
use StashAPILib\Configuration;
use StashAPILib\Models;
use StashAPILib\Exceptions;
use StashAPILib\Http\HttpRequest;
use StashAPILib\Http\HttpResponse;
use StashAPILib\Http\HttpMethod;
use StashAPILib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class MarkupController extends BaseController
{
    /**
     * @var MarkupController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return MarkupController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Preview the generated html for given markdown contents.
     * <p>
     * Only authenticated users may call this resource.
     *
     * @param object $dynamic    TODO: type description here
     * @param string $urlMode    (optional) TODO: type description here
     * @param bool   $hardwrap   (optional) TODO: type description here
     * @param bool   $htmlEscape (optional) TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createPreviewMarkup(
        $dynamic,
        $urlMode = null,
        $hardwrap = null,
        $htmlEscape = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/markup/preview';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'urlMode'    => $urlMode,
            'hardwrap'   => var_export($hardwrap, true),
            'htmlEscape' => var_export($htmlEscape, true),
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($dynamic));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }
}
