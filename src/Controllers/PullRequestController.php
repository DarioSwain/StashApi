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
class PullRequestController extends BaseController
{
    /**
     * @var PullRequestController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return PullRequestController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Make the authenticated user stop watching the specified pull request.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  the id of the pull request within the repository
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteUnwatchPullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/watch';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
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
     * Make the authenticated user watch the specified pull request.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  the id of the pull request within the repository
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createWatchPullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/watch';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
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
     * Streams a diff within a pull request.
     * <p>
     * If the specified file has been copied, moved or renamed, the <code>srcPath</code> must also be
     * specified to
     * produce the correct diff.
     * <p>
     * Note: This RESTful endpoint is currently <i>not paged</i>. The server will internally apply a hard
     * cap to the
     * streamed lines, and it is not possible to request subsequent pages if that cap is exceeded.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param string  $pullRequestId  TODO: type description here
     * @param integer $contextLines   (optional) the number of context lines to include around added/removed lines in
     *                                the diff
     * @param string  $srcPath        (optional) the previous path to the file, if the file has been copied, moved or
     *                                renamed
     * @param string  $whitespace     (optional) optional whitespace flag which can be set to <code>ignore-all</code>
     * @param bool    $withComments   (optional) <code>true</code> to embed comments in the diff (the default);
     *                                otherwise, <code>false</code>                      to stream the diff without
     *                                comments
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getPullRequestDiff(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $contextLines = -1,
        $srcPath = null,
        $whitespace = null,
        $withComments = true
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/diff';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'contextLines'   => (null != $contextLines) ? $contextLines : -1,
            'srcPath'        => $srcPath,
            'whitespace'     => $whitespace,
            'withComments'   => (null != $withComments) ? var_export($withComments, true) : true,
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
     * Streams a diff within a pull request.
     * <p>
     * If the specified file has been copied, moved or renamed, the <code>srcPath</code> must also be
     * specified to
     * produce the correct diff.
     * <p>
     * Note: This RESTful endpoint is currently <i>not paged</i>. The server will internally apply a hard
     * cap to the
     * streamed lines, and it is not possible to request subsequent pages if that cap is exceeded.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param string  $pullRequestId  TODO: type description here
     * @param string  $path           the path to the file which should be diffed (optional)
     * @param integer $contextLines   (optional) the number of context lines to include around added/removed lines in
     *                                the diff
     * @param string  $srcPath        (optional) the previous path to the file, if the file has been copied, moved or
     *                                renamed
     * @param string  $whitespace     (optional) optional whitespace flag which can be set to <code>ignore-all</code>
     * @param bool    $withComments   (optional) <code>true</code> to embed comments in the diff (the default);
     *                                otherwise, <code>false</code>                      to stream the diff without
     *                                comments
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getPullRequestDiffByPath(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $path,
        $contextLines = -1,
        $srcPath = null,
        $whitespace = null,
        $withComments = true
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/diff/{path}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
            'path'           => $path,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'contextLines'   => (null != $contextLines) ? $contextLines : -1,
            'srcPath'        => $srcPath,
            'whitespace'     => $whitespace,
            'withComments'   => (null != $withComments) ? var_export($withComments, true) : true,
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
     * Retrieve changesets for the specified pull request.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  TODO: type description here
     * @param bool    $withCounts     (optional) if set to true, the service will add "authorCount" and "totalCount" at
     *                                the end of the page.                      "authorCount" is the number of
     *                                different authors and "totalCount" is the total number of changesets.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getPullRequestCommits(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $withCounts = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/commits';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'withCounts'     => var_export($withCounts, true),
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
     * Retrieve the tasks associated with a pull request.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $pullRequestId  TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getPullRequestTasks(
        $projectKey,
        $repositorySlug,
        $pullRequestId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/tasks';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
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
     * Retrieve the total number of {@link com.atlassian.stash.task.TaskState#OPEN open} and
     * {@link com.atlassian.stash.task.TaskState#RESOLVED resolved} tasks associated with a pull request.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $pullRequestId  TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCountPullRequestTasks(
        $projectKey,
        $repositorySlug,
        $pullRequestId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/tasks/count';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
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
     * Add a new comment.
     * <p>
     * Comments can be added in a few places by setting different attributes:
     * <p>
     * General pull request comment:
     *
     * <pre>
     * {
     * "text": "An insightful general comment on a pull request."
     * }
     * </pre>
     *
     * Reply to a comment:
     *
     * <pre>
     * {
     * "text": "A measured reply.",
     * "parent": {
     * "id": 1
     * }
     * }
     * </pre>
     *
     * General file comment:
     *
     * <pre>
     * {
     * "text": "An insightful general comment on a file.",
     * "anchor": {
     * "path": "path/to/file",
     * "srcPath": "path/to/file"
     * }
     * }
     * </pre>
     *
     * File line comment:
     *
     * <pre>
     * {
     * "text": "A pithy comment on a particular line within a file.",
     * "anchor": {
     * "line": 1,
     * "lineType": "CONTEXT",
     * "fileType": "FROM"
     * "path": "path/to/file",
     * "srcPath": "path/to/file"
     * }
     * }
     * </pre>
     * <strong>Note: general file comments are an experimental feature and may change in the near future!
     * </strong>
     * <p>
     * For file and line comments, 'path' refers to the path of the file to which the comment should be
     * applied and
     * 'srcPath' refers to the path the that file used to have (only required for copies and moves).
     * <p>
     * For line comments, 'line' refers to the line in the diff that the comment should apply to.
     * 'lineType' refers to
     * the type of diff hunk, which can be:
     * <ul>
     * <li>'ADDED' - for an added line;</li>
     * <li>'REMOVED' - for a removed line; or</li>
     * <li>'CONTEXT' - for a line that was unmodified but is in the vicinity of the diff.</li>
     * </ul>
     * 'fileType' refers to the file of the diff to which the anchor should be attached - which is of
     * relevance when
     * displaying the diff in a side-by-side way. Currently the supported values are:
     * <ul>
     * <li>'FROM' - the source file of the diff</li>
     * <li>'TO' - the destination file of the diff</li>
     * </ul>
     * If the current user is not a participant the user is added as a watcher of the pull request.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param object  $dynamic        TODO: type description here
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createPullRequestComment(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $pullRequestId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/comments';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
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

    /**
     * @todo Add general description for this endpoint
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  TODO: type description here
     * @param string  $path           (optional) TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getPullRequestComments(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $path = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/comments';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'path'           => $path,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
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
     * Update the text of a comment. Only the user who created a comment may update it.
     * <p>
     * <strong>Note:</strong> the supplied supplied JSON object must contain a <code>version</code> that
     * must match the
     * server's version of the comment or the update will fail. To determine the current version of
     * the comment, the comment should be fetched from the server prior to the update. Look for the
     * 'version' attribute in the returned JSON structure.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param object  $dynamic        TODO: type description here
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  the id of the pull request within the repository
     * @param integer $commentId      the id of the comment to retrieve
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updatePullRequestComment(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $commentId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/comments/{commentId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
            'commentId'      => $commentId,
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
     * Delete a pull request comment. Anyone can delete their own comment. Only users with
     * <strong>REPO_ADMIN</strong>
     * and above may delete comments created by other users.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  the id of the pull request within the repository
     * @param integer $commentId      the id of the comment to retrieve
     * @param integer $version        (optional) The expected version of the comment. This must match the server's
     *                                version of the comment or                       the delete will fail. To
     *                                determine the current version of the comment, the comment should be
     *                                fetched from the server prior to the delete. Look for the 'version'
     *                                attribute in the                       returned JSON structure.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deletePullRequestComment(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $commentId,
        $version = -1
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/comments/{commentId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
            'commentId'      => $commentId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'version'        => (null != $version) ? $version : -1,
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
     * Retrieves a pull request comment.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  the id of the pull request within the repository
     * @param integer $commentId      the id of the comment to retrieve
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getPullRequestComment(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $commentId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/comments/{commentId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
            'commentId'      => $commentId,
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
     * Gets changes for the specified PullRequest.
     * <p>
     * Note: This resource is currently <i>not paged</i>. The server will return at most one page. The
     * server will
     * truncate the number of changes to either the request's page limit or an internal maximum, whichever
     * is smaller.
     * The start parameter of the page request is also ignored.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $pullRequestId  TODO: type description here
     * @param bool   $withComments   (optional) {@code true} to apply comment counts in the changes (the default);
     *                               otherwise, {@code false}                      to stream changes without comment
     *                               counts
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getPullRequestChanges(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $withComments = true
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/changes';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'withComments'   => (null != $withComments) ? var_export($withComments, true) : true,
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
     * Retrieve a page of pull requests to or from the specified repository.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call
     * this resource.
     *
     * Optionally clients can specify PR participant filters. Each filter has a mandatory {@code username.
     * N}
     * parameter, and the optional {@code role.N} and {@code approved.N} parameters.
     * <ul>
     * <li>
     * {@code username.N} - the "root" of a single participant filter, where "N" is a natural
     * number
     * starting from 1. This allows clients to specify multiple participant filters, by providing
     * consecutive
     * filters as {@code username.1}, {@code username.2} etc. Note that the filters numbering has
     * to start
     * with 1 and be continuous for all filters to be processed. The total allowed number of
     * participant
     * filters is 10 and all filters exceeding that limit will be dropped.
     * </li>
     * <li>
     * {@code role.N}(optional) the role associated with {@code username.N}.
     * This must be one of {@code AUTHOR}, {@code REVIEWER}, or{@code PARTICIPANT}
     * </li>
     * <li>
     * {@code approved.N}(optional) the approved status associated with {@code username.N}.
     * That is whether {@code username.N} has approved the PR. Either {@code true}, or {@code
     * false}
     * </li>
     * </ul>
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $direction      (optional) (optional, defaults to <strong>INCOMING</strong>) the direction
     *                               relative to the specified                   repository. Either
     *                               <strong>INCOMING</strong> or <strong>OUTGOING</strong>.
     * @param string $at             (optional) (optional) a <i>fully-qualified</i> branch ID to find pull requests to
     *                               or from,            such as {@code refs/heads/master}
     * @param string $state          (optional) (optional, defaults to <strong>OPEN</strong>). Supply
     *                               <strong>ALL</strong> to return pull request                in any state. If a
     *                               state is supplied only pull requests in the specified state will be returned.
     *                               Either <strong>OPEN</strong>, <strong>DECLINED</strong> or
     *                               <strong>MERGED</strong>.
     * @param string $order          (optional) (optional) the order to return pull requests in, either
     *                               <strong>OLDEST</strong> (as in: "oldest               first") or
     *                               <strong>NEWEST</strong>.
     * @param bool   $withAttributes (optional) (optional) defaults to true, whether to return additional pull request
     *                               attributes
     * @param bool   $withProperties (optional) (optional) defaults to true, whether to return additional pull request
     *                               properties
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getPullRequests(
        $projectKey,
        $repositorySlug,
        $direction = 'incoming',
        $at = null,
        $state = null,
        $order = null,
        $withAttributes = true,
        $withProperties = true
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'direction'      => (null != $direction) ? $direction : 'incoming',
            'at'             => $at,
            'state'          => $state,
            'order'          => $order,
            'withAttributes' => (null != $withAttributes) ? var_export($withAttributes, true) : true,
            'withProperties' => (null != $withProperties) ? var_export($withProperties, true) : true,
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
     * Create a new pull request between two branches. The branches may be in the same repository, or
     * different ones.
     * When using different repositories, they must still be in the same {@link
     * Repository#getHierarchyId() hierarchy}.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the "from" and
     * "to"repositories to
     * call this resource.
     *
     * @param object $dynamic        TODO: type description here
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createPullRequest(
        $dynamic,
        $projectKey,
        $repositorySlug
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
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

    /**
     * Decline a pull request.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  TODO: type description here
     * @param integer $version        (optional) the current version of the pull request. If the server's version isn't
     *                                the same as the specified                 version the operation will fail. To
     *                                determine the current version of the pull request it should be
     *                                fetched from the server prior to this operation. Look for the 'version' attribute
     *                                in the returned                 JSON structure.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createDeclinePullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $version = -1
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/decline';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'version'        => (null != $version) ? $version : -1,
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
     * Retrieve a page of activity associated with a pull request.
     * <p>
     * Activity items include comments, approvals, rescopes (i.e. adding and removing of commits), merges
     * and more.
     * <p>
     * Different types of activity items may be introduced in newer versions of Stash or by user installed
     * plugins, so
     * clients should be flexible enough to handle unexpected entity shapes in the returned page.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  the id of the pull request within the repository
     * @param integer $fromId         (optional) (optional) the id of the activity item to use as the first item in the
     *                                returned page
     * @param string  $fromType       (optional) (required if <strong>fromId</strong> is present) the type of the
     *                                activity item specified by                  <strong>fromId</strong> (either
     *                                <strong>COMMENT</strong> or <strong>ACTIVITY</strong>)
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getPullRequestActivities(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $fromId = null,
        $fromType = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/activities';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'fromId'         => $fromId,
            'fromType'       => $fromType,
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
     * Re-open a declined pull request.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  the id of the pull request within the repository
     * @param integer $version        (optional) the current version of the pull request. If the server's version isn't
     *                                the same as the specified                 version the operation will fail. To
     *                                determine the current version of the pull request it should be
     *                                fetched from the server prior to this operation. Look for the 'version' attribute
     *                                in the returned                 JSON structure.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createReopenPullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $version = -1
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/reopen';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'version'        => (null != $version) ? $version : -1,
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
     * Test whether a pull request can be merged.
     * <p>
     * A pull request may not be merged if:
     * <ul>
     * <li>there are conflicts that need to be manually resolved before merging; and/or</li>
     * <li>one or more merge checks have vetoed the merge.</li>
     * </ul>
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  the id of the pull request within the repository
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCanMergePullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/merge';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
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
     * Merge the specified pull request.
     * <p>
     * The authenticated user must have <strong>REPO_WRITE</strong> permission for the repository that
     * this pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  the id of the pull request within the repository
     * @param integer $version        (optional) the current version of the pull request. If the server's version isn't
     *                                the same as the specified                 version the operation will fail. To
     *                                determine the current version of the pull request it should be
     *                                fetched from the server prior to this operation. Look for the 'version' attribute
     *                                in the returned                 JSON structure.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createMergePullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $version = -1
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/merge';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'version'        => (null != $version) ? $version : -1,
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
     * Retrieve a pull request.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $pullRequestId  TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getPullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
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
     * Update the title, description, reviewers or destination branch of an existing pull request.
     * <p>
     * <strong>Note:</strong> the <em>reviewers</em> list may be updated using this resource. However the
     * <em>author</em> and <em>participants</em> list may not.
     * <p>
     * The authenticated user must either:
     * <ul>
     * <li>be the author of the pull request and have the <strong>REPO_READ</strong> permission for
     * the repository
     * that this pull request targets; or</li>
     * <li>have the <strong>REPO_WRITE</strong> permission for the repository that this pull request
     * targets</li>
     * </ul>
     * to call this resource.
     *
     * @param object $dynamic        TODO: type description here
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $pullRequestId  TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updatePullRequest(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $pullRequestId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
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
     * Assigns a participant to an explicit role in pull request. Currently only the REVIEWER role may be
     * assigned.
     * <p>
     * If the user is not yet a participant in the pull request, they are made one and assigned the
     * supplied role.
     * <p>
     * If the user is already a participant in the pull request, their previous role is replaced with the
     * supplied role
     * unless they are already assigned the AUTHOR role which cannot be changed and will result in a Bad
     * Request (400)
     * response code.
     * <p>
     * The authenticated user must have <strong>REPO_WRITE</strong> permission for the repository that
     * this pull request
     * targets to call this resource.
     *
     * @param object  $dynamic        TODO: type description here
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  the id of the pull request within the repository
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createAssignPullRequestParticipantRole(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $pullRequestId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/participants';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
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

    /**
     * Unassigns a participant from the REVIEWER role they may have been given in a pull request.
     * <p>
     * If the participant has no explicit role this method has no effect.
     * <p>
     * Afterwards, the user will still remain a participant in the pull request but their role will be
     * reduced to
     * PARTICIPANT. This is because once made a participant of a pull request,
     * a user will forever remain a participant. Only their role may be altered.
     * <p>
     * The authenticated user must have <strong>REPO_WRITE</strong> permission for the repository that
     * this pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  the id of the pull request within the repository
     * @param string  $username       (optional) the participant's user name
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteUnassignPullRequestParticipantRole(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $username = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/participants';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'username'       => $username,
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
     * Retrieves a page of the participants for a given pull request.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  the id of the pull request within the repository
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listPullRequestParticipants(
        $projectKey,
        $repositorySlug,
        $pullRequestId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/participants';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
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
     * Approve a pull request as the current user. Implicitly adds the user as a participant if they are
     * not already.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  the id of the pull request within the repository
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createApprovePullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/approve';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
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
     * Remove approval from a pull request as the current user. This does not remove the user as a
     * participant.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this
     * pull request
     * targets to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $pullRequestId  the id of the pull request within the repository
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteWithdrawPullRequestApproval(
        $projectKey,
        $repositorySlug,
        $pullRequestId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/approve';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'pullRequestId'  => $pullRequestId,
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
}
