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
class UserController extends BaseController
{
    /**
     * @var UserController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return UserController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Retrieve a page of users, optionally run through provided filters.
     * <p>
     * Only authenticated users may call this resource.
     *
     * <h3>Supported Filters</h3>
     * <p>
     * Filters are provided in query parameters in a standard <code>name=value</code> fashion. The
     * following filters are
     * currently supported:
     * <ul>
     * <li>
     * {@code filter} - return only users, whose username, name or email address <i>contain</i>
     * the
     * {@code filter} value
     * </li>
     * <li>
     * {@code permission} - the "root" of a permission filter, whose value must be a valid global,
     * project, or repository permission. Additional filter parameters referring to this filter
     * that specify the
     * resource (project or repository) to apply the filter to must be prefixed with
     * <code>permission.</code>. See the
     * section "Permission Filters" below for more details.
     * </li>
     * <li>
     * {@code permission.N} - the "root" of a single permission filter, similar to the {@code
     * permission}
     * parameter, where "N" is a natural number starting from 1. This allows clients to specify
     * multiple permission
     * filters, by providing consecutive filters as {@code permission.1}, {@code permission.2} etc.
     * Note that
     * the filters numbering has to start with 1 and be continuous for all filters to be processed.
     * The total allowed
     * number of permission filters is 50 and all filters exceeding that limit will be dropped.
     * See the section
     * "Permission Filters" below for more details on how the permission filters are processed.
     * </li>
     * </ul>
     *
     *
     * <h3>Permission Filters</h3>
     * <p>
     * The following three sub-sections list parameters supported for permission filters (where
     * <code>[root]</code> is
     * the root permission filter name, e.g. {@code permission}, {@code permission.1} etc.) depending on
     * the
     * permission resource. The system determines which filter to apply (Global, Project or Repository
     * permission)
     * based on the <code>[root]</code> permission value. E.g. {@code ADMIN} is a global permission,
     * {@code PROJECT_ADMIN} is a project permission and {@code REPO_ADMIN} is a repository permission.
     * Note
     * that the parameters for a given resource will be looked up in the order as they are listed below,
     * that is e.g.
     * for a project resource, if both {@code projectId} and {@code projectKey} are provided, the system
     * will
     * use {@code projectId} for the lookup.
     * <h4>Global permissions</h4>
     * <p>
     * The permission value under <code>[root]</code> is the only required and recognized parameter, as
     * global
     * permissions do not apply to a specific resource.
     * <p>
     * Example valid filter: <code>permission=ADMIN</code>.
     * <h4>Project permissions</h4>
     * <ul>
     * <li><code>[root]</code>- specifies the project permission</li>
     * <li><code>[root].projectId</code> - specifies the project ID to lookup the project by</li>
     * <li><code>[root].projectKey</code> - specifies the project key to lookup the project by</li>
     * </ul>
     * <p>
     * Example valid filter: <code>permission.1=PROJECT_ADMIN&permission.1.projectKey=TEST_PROJECT</code>.
     * <h4>Repository permissions</h4>
     * <ul>
     * <li><code>[root]</code>- specifies the repository permission</li>
     * <li><code>[root].projectId</code> - specifies the repository ID to lookup the repository
     * by</li>
     * <li><code>[root].projectKey</code> and <code>[root].repositorySlug</code>- specifies the
     * project key and
     * repository slug to lookup the repository by; both values <i>need to</i> be provided for this
     * look up to be
     * triggered</li>
     * </ul>
     * Example valid filter: <code>permission.2=REPO_ADMIN&permission.2.projectKey=TEST_PROJECT&permission.
     * 2.repositorySlug=test_repo</code>.
     *
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getUsers()
    {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/users';

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

    /**
     * Update the currently authenticated user's details. Note that <em>the name attribute is ignored</em>,
     * the update
     * will always be applied to the currently authenticated user.
     *
     * @param object $dynamic TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateUserDetails(
        $dynamic
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/users';

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
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($dynamic));

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

    /**
     * Delete the avatar associated to a user.
     * <p>
     * Users are always allowed to delete their own avatar. To delete someone else's avatar the
     * authenticated user must
     * have global <strong>ADMIN</strong> permission, or global <strong>SYS_ADMIN</strong> permission to
     * update a
     * <strong>SYS_ADMIN</strong> user's avatar.
     *
     * @param string $userSlug TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteUserAvatar(
        $userSlug
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/users/{userSlug}/avatar.png';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'userSlug' => $userSlug,
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
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

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

    /**
     * Update the avatar for the user with the supplied <strong>slug</strong>.
     * <p>
     * This resource accepts POST multipart form data, containing a single image in a form-field named
     * 'avatar'.
     * <p>
     * There are configurable server limits on both the dimensions (1024x1024 pixels by default) and
     * uploaded
     * file size (1MB by default). Several different image formats are supported, but <strong>PNG</strong>
     * and
     * <strong>JPEG</strong> are preferred due to the file size limit.
     * <p>
     * This resource has Cross-Site Request Forgery (XSRF) protection. To allow the request to
     * pass the XSRF check the caller needs to send an <code>X-Atlassian-Token</code> HTTP header with
     * the
     * value <code>no-check</code>.
     * <p>
     * An example <a href="http://curl.haxx.se/">curl</a> request to upload an image name 'avatar.png'
     * would be:
     * <pre>
     * curl -X POST -u username:password -H "X-Atlassian-Token: no-check" http://example.
     * com/rest/api/latest/users/jdoe/avatar.png -F avatar=@avatar.png
     * </pre>
     * <p>
     * Users are always allowed to update their own avatar. To update someone else's avatar the
     * authenticated user must
     * have global <strong>ADMIN</strong> permission, or global <strong>SYS_ADMIN</strong> permission to
     * update a
     * <strong>SYS_ADMIN</strong> user's avatar.
     *
     * @param string $userSlug TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function uploadUserAvatar(
        $userSlug
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/users/{userSlug}/avatar.png';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'userSlug' => $userSlug,
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
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers);

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

    /**
     * Retrieve the user matching the supplied <strong>userSlug</strong>.
     * <p>
     *
     * @param string $userSlug TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getUser(
        $userSlug
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/users/{userSlug}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'userSlug' => $userSlug,
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

    /**
     * Update the currently authenticated user's password.
     *
     * @param object $dynamic TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateUserPassword(
        $dynamic
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/users/credentials';

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
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($dynamic));

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

    /**
     * Retrieve a map of user setting key values for a specific user identified by the user slug.
     * <p>
     *
     * @param string $userSlug TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getUserSettings(
        $userSlug
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/users/{userSlug}/settings';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'userSlug' => $userSlug,
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

    /**
     * Update the entries of a map of user setting key/values for a specific user identified by the user
     * slug.
     * <p>
     *
     * @param object $dynamic  TODO: type description here
     * @param string $userSlug TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateUserSettings(
        $dynamic,
        $userSlug
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/users/{userSlug}/settings';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'userSlug' => $userSlug,
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
