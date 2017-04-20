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
class TaskController extends BaseController
{
    /**
     * @var TaskController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return TaskController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Create a new task.
     *
     * @param object $dynamic TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createTask(
        $dynamic
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/tasks';

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

    /**
     * Delete a task.
     * <p>
     * Note that only the task's creator, the context's author or an admin of the context's repository can
     * delete a
     * task. (For a pull request task, those are the task's creator, the pull request's author or an admin
     * on the
     * repository containing the pull request). Additionally a task cannot be deleted if it has already
     * been resolved.
     *
     * @param integer $taskId the id identifying the task to delete
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteTask(
        $taskId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/tasks/{taskId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'taskId' => $taskId,
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
     * Update a existing task.
     * <p>
     * As of Stash 3.3, only the state and text of a task can be updated.
     * <p>
     * Updating the state of a task is allowed for any user having <em>READ</em> access to the repository.
     * However only the task's creator, the context's author or an admin of the context's repository can
     * update the
     * task's text. (For a pull request task, those are the task's creator, the pull request's author or
     * an admin on the
     * repository containing the pull request). Additionally the task's text cannot be updated if it has
     * been resolved.
     *
     * @param object  $dynamic TODO: type description here
     * @param integer $taskId  the id identifying the task to delete
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateTask(
        $dynamic,
        $taskId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/tasks/{taskId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'taskId'  => $taskId,
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
     * Retrieve a existing task.
     *
     * @param integer $taskId the id identifying the task to delete
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getTask(
        $taskId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/tasks/{taskId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'taskId' => $taskId,
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
