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
class ProfileController extends BaseController
{
    /**
     * @var ProfileController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return ProfileController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Retrieve a page of recently accessed repositories for the currently authenticated user.
     * <p>
     * Repositories are ordered from most recently to least recently accessed.
     * <p>
     * Only authenticated users may call this resource.
     *
     * @param string $permission (optional) (optional) if specified, it must be a valid repository permission level
     *                           name and will limit                    the resulting repository list to ones that the
     *                           requesting user has the specified permission                    level to. If not
     *                           specified, the default <code>REPO_READ</code> permission level will be assumed.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getProfileRepositoriesRecentlyAccessed(
        $permission = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/profile/recent/repos';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'permission' => $permission,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

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
