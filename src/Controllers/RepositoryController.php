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
class RepositoryController extends BaseController
{
    /**
     * @var RepositoryController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return RepositoryController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Retrieve a page of changes made in a specified commit.
     * <p>
     * <strong>Note:</strong> The implementation will apply a hard cap ({@code page.max.changes}) and it
     * is not
     * possible to request subsequent content when that cap is exceeded.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $commitId       the commit to retrieve changes for
     * @param string $since          (optional) the commit to which <code>until</code> should be compared to produce a
     *                               page of changes.                      If not specified the commit's first parent
     *                               is assumed (if one exists)
     * @param bool   $withComments   (optional) {@code true} to apply comment counts in the changes (the default);
     *                               otherwise, {@code false}                      to stream changes without comment
     *                               counts
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryCommitChanges(
        $projectKey,
        $repositorySlug,
        $commitId,
        $since = null,
        $withComments = true
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/changes';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'commitId'       => $commitId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'since'          => $since,
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
     * Gets a diff of the changes available in the {@code from} changeset but not in the {@code to}
     * changeset.
     * <p>
     * If either the {@code from} or {@code to} changeset are not specified, they will be replaced by the
     * default branch of their containing repository.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param string  $path           the path to the file to diff (optional)
     * @param string  $from           (optional) the source changeset (can be a partial/full changeset id or
     *                                qualified/unqualified ref name)
     * @param string  $to             (optional) the target changeset (can be a partial/full changeset id or
     *                                qualified/unqualified ref name)
     * @param string  $fromRepo       (optional) an optional parameter specifying the source repository containing the
     *                                source changeset                  if that changeset is not present in the current
     *                                repository; the repository can be specified                  by either its ID
     *                                <em>fromRepo=42</em> or by its project key plus its repo slug separated by
     *                                a slash: <em>fromRepo=projectKey/repoSlug</em>
     * @param string  $srcPath        (optional) TODO: type description here
     * @param integer $contextLines   (optional) an optional number of context lines to include around each added or
     *                                removed lines in the diff
     * @param string  $whitespace     (optional) an optional whitespace flag which can be set to <code>ignore-
     *                                all</code>
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryCompareDiffByPath(
        $projectKey,
        $repositorySlug,
        $path,
        $from = null,
        $to = null,
        $fromRepo = null,
        $srcPath = null,
        $contextLines = -1,
        $whitespace = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/compare/diff/{path}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'path'           => $path,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'from'           => $from,
            'to'             => $to,
            'fromRepo'       => $fromRepo,
            'srcPath'        => $srcPath,
            'contextLines'   => (null != $contextLines) ? $contextLines : -1,
            'whitespace'     => $whitespace,
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
     * Gets the file changes available in the {@code from} changeset but not in the {@code to} changeset.
     * <p>
     * If either the {@code from} or {@code to} changeset are not specified, they will be replaced by the
     * default branch of their containing repository.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $from           (optional) the source changeset (can be a partial/full changeset id or
     *                               qualified/unqualified ref name)
     * @param string $to             (optional) the target changeset (can be a partial/full changeset id or
     *                               qualified/unqualified ref name)
     * @param string $fromRepo       (optional) an optional parameter specifying the source repository containing the
     *                               source changeset                  if that changeset is not present in the current
     *                               repository; the repository can be specified                  by either its ID
     *                               <em>fromRepo=42</em> or by its project key plus its repo slug separated by
     *                               a slash: <em>fromRepo=projectKey/repoSlug</em>
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryCompareChanges(
        $projectKey,
        $repositorySlug,
        $from = null,
        $to = null,
        $fromRepo = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/compare/changes';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'from'           => $from,
            'to'             => $to,
            'fromRepo'       => $fromRepo,
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
     * Gets the commits accessible from the {@code from} changeset but not in the {@code to} changeset.
     * <p>
     * If either the {@code from} or {@code to} changeset are not specified, they will be replaced by the
     * default branch of their containing repository.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $from           (optional) the source changeset (can be a partial/full changeset id or
     *                               qualified/unqualified ref name)
     * @param string $to             (optional) the target changeset (can be a partial/full changeset id or
     *                               qualified/unqualified ref name)
     * @param string $fromRepo       (optional) an optional parameter specifying the source repository containing the
     *                               source changeset                  if that changeset is not present in the current
     *                               repository; the repository can be specified                  by either its ID
     *                               <em>fromRepo=42</em> or by its project key plus its repo slug separated by
     *                               a slash: <em>fromRepo=projectKey/repoSlug</em>
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryCompareCommits(
        $projectKey,
        $repositorySlug,
        $from = null,
        $to = null,
        $fromRepo = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/compare/commits';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'from'           => $from,
            'to'             => $to,
            'fromRepo'       => $fromRepo,
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
     * Retrieve the branches matching the supplied <strong>filterText</strong> param.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $base           (optional) base branch or tag to compare each branch to (for the metadata
     *                               providers that uses that information)
     * @param bool   $details        (optional) whether to retrieve plugin-provided metadata about each branch
     * @param string $filterText     (optional) the text to match on
     * @param string $orderBy        (optional) ordering of refs either ALPHABETICAL (by name) or MODIFICATION (last
     *                               updated)
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryBranches(
        $projectKey,
        $repositorySlug,
        $base = null,
        $details = null,
        $filterText = null,
        $orderBy = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/branches';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'base'           => $base,
            'details'        => var_export($details, true),
            'filterText'     => $filterText,
            'orderBy'        => $orderBy,
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
     * Get the default branch of the repository.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryDefaultBranch(
        $projectKey,
        $repositorySlug
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/branches/default';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
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
     * Update the default branch of a repository.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository to call this
     * resource.
     *
     * @param object $dynamic        TODO: type description here
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateSetRepositoryDefaultBranch(
        $dynamic,
        $projectKey,
        $repositorySlug
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/branches/default';

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
     * Promote or demote a group's permission level for the specified repository. Available repository
     * permissions are:
     * <ul>
     * <li>REPO_READ</li>
     * <li>REPO_WRITE</li>
     * <li>REPO_ADMIN</li>
     * </ul>
     * See the <a href="https://confluence.atlassian.
     * com/display/STASH/Managing+permissions+for+a+repository">Stash documentation</a>
     * for a detailed explanation of what each permission entails.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository or a higher
     * project or global permission to call this resource. In addition, a user may not demote a group's
     * permission level if their
     * own permission level would be reduced as a result.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $permission     (optional) the permission to grant
     * @param string $name           (optional) the names of the groups
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateSetRepositoryPermissionForGroup(
        $projectKey,
        $repositorySlug,
        $permission = null,
        $name = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/groups';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'permission'     => $permission,
            'name'           => $name,
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
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers);

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
     * Retrieve a page of groups that have been granted at least one permission for the specified
     * repository.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository or a higher
     * project or global permission to call this resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $filter         (optional) if specified only group names containing the supplied string will be
     *                               returned
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryGroupsWithAnyPermission(
        $projectKey,
        $repositorySlug,
        $filter = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/groups';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'filter'         => $filter,
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
     * Revoke all permissions for the specified repository for a group.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository or a higher
     * project or global permission to call this resource.
     * <p>
     * In addition, a user may not revoke a group's permissions if it will reduce their own permission
     * level.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $name           (optional) the name of the group
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteRevokeRepositoryPermissionsForGroup(
        $projectKey,
        $repositorySlug,
        $name = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/groups';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'name'           => $name,
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
     * Promote or demote a user's permission level for the specified repository. Available repository
     * permissions are:
     * <ul>
     * <li>REPO_READ</li>
     * <li>REPO_WRITE</li>
     * <li>REPO_ADMIN</li>
     * </ul>
     * See the <a href="https://confluence.atlassian.
     * com/display/STASH/Managing+permissions+for+a+repository">Stash documentation</a>
     * for a detailed explanation of what each permission entails.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository or a higher
     * project or global permission to call this resource. In addition, a user may not reduce their own
     * permission level unless
     * they have a project or global permission that already implies that permission.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $name           (optional) the names of the users
     * @param string $permission     (optional) the permission to grant
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateSetRepositoryPermissionForUser(
        $projectKey,
        $repositorySlug,
        $name = null,
        $permission = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/users';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'name'           => $name,
            'permission'     => $permission,
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
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers);

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
     * Retrieve a page of users that have been granted at least one permission for the specified repository.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository or a higher
     * project or global permission to call this resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $filter         (optional) if specified only group names containing the supplied string will be
     *                               returned
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryUsersWithAnyPermission(
        $projectKey,
        $repositorySlug,
        $filter = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/users';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'filter'         => $filter,
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
     * Revoke all permissions for the specified repository for a user.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository or a higher
     * project or global permission to call this resource.
     * <p>
     * In addition, a user may not revoke their own repository permissions if they do not have a higher
     * project or global permission.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $name           (optional) the name of the user
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteRevokeRepositoryPermissionsForUser(
        $projectKey,
        $repositorySlug,
        $name = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/users';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'name'           => $name,
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
     * Retrieve a page of groups that have no granted permissions for the specified repository.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository or a higher
     * project or global permission to call this resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $filter         (optional) if specified only group names containing the supplied string will be
     *                               returned
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryGroupsWithoutAnyPermission(
        $projectKey,
        $repositorySlug,
        $filter = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/groups/none';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'filter'         => $filter,
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
     * Retrieve a page of <i>licensed</i> users that have no granted permissions for the specified
     * repository.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository or a higher
     * project or global permission to call this resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $filter         (optional) if specified only group names containing the supplied string will be
     *                               returned
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryUsersWithoutPermission(
        $projectKey,
        $repositorySlug,
        $filter = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/users/none';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'filter'         => $filter,
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
     * Retrieve a page of commits from a given starting commit or "between" two commits. If no explicit
     * commit is
     * specified, the tip of the repository's default branch is assumed. commits may be identified by
     * branch or tag
     * name or by ID. A path may be supplied to restrict the returned commits to only those which affect
     * that path.
     * <p>
     * The authenticated user must have <b>REPO_READ</b> permission for the specified repository to call
     * this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $path           (optional) an optional path to filter commits by
     * @param string $since          (optional) the commit ID or ref (exclusively) to retrieve commits after
     * @param string $until          (optional) the commit ID (SHA1) or ref (inclusively) to retrieve commits before
     * @param bool   $withCounts     (optional) optionally include the total number of commits and total number of
     *                               unique authors
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryCommits(
        $projectKey,
        $repositorySlug,
        $path = null,
        $since = null,
        $until = null,
        $withCounts = false
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'path'           => $path,
            'since'          => $since,
            'until'          => $until,
            'withCounts'     => (null != $withCounts) ? var_export($withCounts, true) : false,
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
     * Retrieve a single commit <i>identified by its ID</i>>. In general, that ID is a SHA1. <u>From 2.11,
     * ref names
     * like "refs/heads/master" are no longer accepted by this resource.</u>
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $path           (optional) an optional path to filter the commit by. If supplied the details
     *                               returned <i>may not</i>              be for the specified commit. Instead,
     *                               starting from the specified commit, they will be the              details for the
     *                               first commit affecting the specified path.
     * @param string $commitId       (optional) the commit ID to retrieve
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryCommit(
        $projectKey,
        $repositorySlug,
        $path = null,
        $commitId = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'commitId'       => $commitId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'path'           => $path,
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
     * Retrieve the tags matching the supplied <strong>filterText</strong> param.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the context repository
     * to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $filterText     (optional) the text to match on
     * @param string $orderBy        (optional) ordering of refs either ALPHABETICAL (by name) or MODIFICATION (last
     *                               updated)
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryTags(
        $projectKey,
        $repositorySlug,
        $filterText = null,
        $orderBy = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/projects/{projectKey}/repos/{repositorySlug}/tags';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'filterText'     => $filterText,
            'orderBy'        => $orderBy,
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
     * Retrieve a page of repositories based on query parameters that control the search. See the
     * documentation of the
     * parameters for more details.
     * <p>
     * This resource is anonymously accessible.
     * <p>
     * <b>Note on permissions.</b> In absence of the {@code permission} query parameter the implicit
     * 'read' permission
     * is assumed. Please note that this permission is lower than the REPO_READ permission rather than
     * being equal to
     * it. The implicit 'read' permission for a given repository is assigned to any user that has any of
     * the higher
     * permissions, such as <tt>REPO_READ</tt>, as well as to anonymous users if the repository is marked
     * as public.
     * The important implication of the above is that an anonymous request to this resource with a
     * permission level
     * <tt>REPO_READ</tt> is guaranteed to receive an empty list of repositories as a result. For
     * anonymous requests
     * it is therefore recommended to not specify the <tt>permission</tt> parameter at all.
     *
     * @param string $name        (optional) (optional) if specified, this will limit the resulting repository list to
     *                            ones whose name                     matches this parameter's value. The match will be
     *                            done case-insensitive and any leading                     and/or trailing whitespace
     *                            characters on the <code>name</code> parameter will be stripped.
     * @param string $projectname (optional) (optional) if specified, this will limit the resulting repository list to
     *                            ones whose project's                     name matches this parameter's value. The
     *                            match will be done case-insensitive and any leading                     and/or
     *                            trailing whitespace characters on the <code>projectname</code> parameter will
     *                            be stripped.
     * @param string $permission  (optional) (optional) if specified, it must be a valid repository permission level
     *                            name and will limit                     the resulting repository list to ones that
     *                            the requesting user has the specified permission                     level to. If not
     *                            specified, the default implicit 'read' permission level will be assumed. The
     *                            currently supported explicit permission values are <tt>REPO_READ</tt>,
     *                            <tt>REPO_WRITE</tt>                     and <tt>REPO_ADMIN</tt>.
     * @param string $visibility  (optional) (optional) if specified, this will limit the resulting repository list
     *                            based on the                     repositories visibility. Valid values are
     *                            <em>public</em> or <em>private</em>.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositories(
        $name = null,
        $projectname = null,
        $permission = null,
        $visibility = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/repos';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'name'        => $name,
            'projectname' => $projectname,
            'permission'  => $permission,
            'visibility'  => $visibility,
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
     * Retrieve a page of files from particular directory of a repository. The search is done recursively,
     * so all files
     * from any sub-directory of the specified directory will be returned.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $at             (optional) the changeset id or ref (e.g. a branch or tag) to list the files at.
     *                               If not specified the default branch will be used instead.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listRepositoryFiles(
        $projectKey,
        $repositorySlug,
        $at = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/files';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'at'             => $at,
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
     * Retrieve a page of files from particular directory of a repository. The search is done recursively,
     * so all files
     * from any sub-directory of the specified directory will be returned.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $path           the directory to list files for.
     * @param string $at             (optional) the changeset id or ref (e.g. a branch or tag) to list the files at.
     *                               If not specified the default branch will be used instead.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listRepositoryFilesByPath(
        $projectKey,
        $repositorySlug,
        $path,
        $at = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/files/{path}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'path'           => $path,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'at'             => $at,
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
     * Create a new repository. Requires an existing project in which this repository will be created.
     * The only parameters which will be used are name and scmId.
     * <p>
     * The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the context project
     * to call this
     * resource.
     *
     * @param object $dynamic    TODO: type description here
     * @param string $projectKey the parent project key
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createRepository(
        $dynamic,
        $projectKey
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/projects/{projectKey}/repos';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey' => $projectKey,
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
     * Schedule the repository matching the supplied <strong>projectKey</strong> and
     * <strong>repositorySlug</strong> to
     * be deleted. If the request repository is not present
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository to call this
     * resource.
     *
     * @param string $repositorySlug the repository slug
     * @param string $projectKey     the parent project key
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteRepository(
        $repositorySlug,
        $projectKey
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/projects/{projectKey}/repos/{repositorySlug}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'repositorySlug' => $repositorySlug,
            'projectKey'     => $projectKey,
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
     * Create a new repository forked from an existing repository.
     * <p>
     * The JSON body for this {@code POST} is not required to contain <i>any</i> properties. Even the name
     * may be
     * omitted. The following properties will be used, if provided:
     * <ul>
     * <li>{@code "name":"Fork name"} - Specifies the forked repository's name
     * <ul>
     * <li>Defaults to the name of the origin repository if not specified</li>
     * </ul>
     * </li>
     * <li>{@code "project":{"key":"TARGET_KEY"}} - Specifies the forked repository's target project
     * by key
     * <ul>
     * <li>Defaults to the current user's personal project if not specified</li>
     * </ul>
     * </li>
     * </ul>
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * and
     * <strong>PROJECT_ADMIN</strong> on the target project to call this resource. Note that users
     * <i>always</i>
     * have <b>PROJECT_ADMIN</b> permission on their personal projects.
     *
     * @param object $dynamic        TODO: type description here
     * @param string $repositorySlug the repository slug
     * @param string $projectKey     the parent project key
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createForkRepository(
        $dynamic,
        $repositorySlug,
        $projectKey
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/projects/{projectKey}/repos/{repositorySlug}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'repositorySlug' => $repositorySlug,
            'projectKey'     => $projectKey,
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
     * Retrieve the repository matching the supplied <strong>projectKey</strong> and
     * <strong>repositorySlug</strong>.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call this
     * resource.
     *
     * @param string $repositorySlug the repository slug
     * @param string $projectKey     the parent project key
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepository(
        $repositorySlug,
        $projectKey
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/projects/{projectKey}/repos/{repositorySlug}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'repositorySlug' => $repositorySlug,
            'projectKey'     => $projectKey,
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
     * Update the repository matching the <strong>repositorySlug</strong> supplied in the resource path.
     * <p>
     * The repository's slug is derived from its name. If the name changes the slug may also change.
     * <p>
     * This API can be used to move the repository to a different project by setting the new project in
     * the request,
     * example: {@code {"project":{"key":"NEW_KEY"}}} .
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository to call this
     * resource.
     *
     * @param object $dynamic        TODO: type description here
     * @param string $repositorySlug the repository slug
     * @param string $projectKey     the parent project key
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateRepository(
        $dynamic,
        $repositorySlug,
        $projectKey
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/projects/{projectKey}/repos/{repositorySlug}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'repositorySlug' => $repositorySlug,
            'projectKey'     => $projectKey,
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
     * Retrieve repositories which have been forked from this one. Unlike {@link
     * #getRelatedRepositories(Repository,
     * PageRequest) related repositories}, this only looks at a given repository's direct forks. If those
     * forks have
     * themselves been the origin of more forks, such "grandchildren" repositories will not be retrieved.
     * <p>
     * Only repositories to which the authenticated user has <b>REPO_READ</b> permission will be included,
     * even
     * if other repositories have been forked from this one.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getForkedRepositories(
        $projectKey,
        $repositorySlug
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/forks';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
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
     * Retrieve repositories which are related to this one. Related repositories are from the same
     * {@link Repository#getHierarchyId() hierarchy} as this repository.
     * <p>
     * Only repositories to which the authenticated user has <b>REPO_READ</b> permission will be included,
     * even
     * if more repositories are part of this repository's hierarchy.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRelatedRepositories(
        $projectKey,
        $repositorySlug
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/related';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
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
     * If a create or fork operation fails, calling this method will clean up the broken repository and try
     * again. The
     * repository must be in an INITIALISATION_FAILED state.
     * <p>
     * The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified
     * project to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createRetryCreateRepository(
        $projectKey,
        $repositorySlug
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/recreate';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
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
     * Retrieve the diff for a specified file path between two provided revisions.
     * <p>
     * <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally
     * apply a hard cap
     * to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded.
     * In the event
     * that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags
     * will be set to
     * <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call this
     * resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param integer $contextLines   (optional) the number of context lines to include around added/removed lines in
     *                                the diff
     * @param string  $since          (optional) the base revision to diff from. If omitted the parent revision of the
     *                                until revision is used
     * @param string  $srcPath        (optional) the source path for the file, if it was copied, moved or renamed
     * @param string  $until          (optional) the target revision to diff to (required)
     * @param string  $whitespace     (optional) optional whitespace flag which can be set to <code>ignore-all</code>
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryShowDiff(
        $projectKey,
        $repositorySlug,
        $contextLines = -1,
        $since = null,
        $srcPath = null,
        $until = null,
        $whitespace = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/projects/{projectKey}/repos/{repositorySlug}/diff';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'contextLines'   => (null != $contextLines) ? $contextLines : -1,
            'since'          => $since,
            'srcPath'        => $srcPath,
            'until'          => $until,
            'whitespace'     => $whitespace,
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
     * Retrieve the diff for a specified file path between two provided revisions.
     * <p>
     * <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally
     * apply a hard cap
     * to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded.
     * In the event
     * that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags
     * will be set to
     * <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call this
     * resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param string  $path           the path to the file which should be diffed (required)
     * @param integer $contextLines   (optional) the number of context lines to include around added/removed lines in
     *                                the diff
     * @param string  $since          (optional) the base revision to diff from. If omitted the parent revision of the
     *                                until revision is used
     * @param string  $srcPath        (optional) the source path for the file, if it was copied, moved or renamed
     * @param string  $until          (optional) the target revision to diff to (required)
     * @param string  $whitespace     (optional) optional whitespace flag which can be set to <code>ignore-all</code>
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryShowDiffByPath(
        $projectKey,
        $repositorySlug,
        $path,
        $contextLines = -1,
        $since = null,
        $srcPath = null,
        $until = null,
        $whitespace = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/diff/{path}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'path'           => $path,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'contextLines'   => (null != $contextLines) ? $contextLines : -1,
            'since'          => $since,
            'srcPath'        => $srcPath,
            'until'          => $until,
            'whitespace'     => $whitespace,
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
     * Retrieve a page of content for a file path at a specified revision.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $at             (optional) the changeset id or ref to retrieve the content for.
     * @param bool   $type           (optional) if true only the type will be returned for the file path instead of the
     *                               contents.
     * @param string $blame          (optional) if present the blame will be returned for the file as well.
     * @param string $noContent      (optional) if present and used with blame only the blame is retrieved instead of
     *                               the contents.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryContent(
        $projectKey,
        $repositorySlug,
        $at = null,
        $type = false,
        $blame = null,
        $noContent = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/browse';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'at'             => $at,
            'type'           => (null != $type) ? var_export($type, true) : false,
            'blame'          => $blame,
            'noContent'      => $noContent,
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
     * Retrieve a page of content for a file path at a specified revision.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $path           the file path to retrieve content from
     * @param string $at             (optional) the changeset id or ref to retrieve the content for.
     * @param bool   $type           (optional) if true only the type will be returned for the file path instead of the
     *                               contents.
     * @param string $blame          (optional) if present the blame will be returned for the file as well.
     * @param string $noContent      (optional) if present and used with blame only the blame is retrieved instead of
     *                               the contents.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryContentByPath(
        $projectKey,
        $repositorySlug,
        $path,
        $at = null,
        $type = false,
        $blame = null,
        $noContent = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/browse/{path}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'path'           => $path,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'at'             => $at,
            'type'           => (null != $type) ? var_export($type, true) : false,
            'blame'          => $blame,
            'noContent'      => $noContent,
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
     * General commit comment:
     *
     * <pre>
     * {
     * "text": "An insightful general comment on a commit."
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
     * If the current user is not a participant the user is added as one and updated to watch the commit.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the
     * commit
     * is in to call this resource.
     *
     * @param object $dynamic        TODO: type description here
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $commitId       TODO: type description here
     * @param string $since          (optional) TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createRepositoryCommitComment(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $commitId,
        $since = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/comments';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'commitId'       => $commitId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'since'          => $since,
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
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $commitId       TODO: type description here
     * @param string $path           (optional) TODO: type description here
     * @param string $since          (optional) TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryCommitComments(
        $projectKey,
        $repositorySlug,
        $commitId,
        $path = null,
        $since = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/comments';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'commitId'       => $commitId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'path'           => $path,
            'since'          => $since,
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
     * must match
     * the server's version of the comment or the update will fail. To determine the current version of
     * the comment,
     * the comment should be fetched from the server prior to the update. Look for the 'version' attribute
     * in the
     * returned JSON structure.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the
     * commit
     * is in to call this resource.
     *
     * @param object  $dynamic        TODO: type description here
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param string  $commitId       the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository
     * @param integer $commentId      the ID of the comment to retrieve
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateRepositoryCommitComment(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $commitId,
        $commentId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/comments/{commentId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'commitId'       => $commitId,
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
     * Delete a commit comment. Anyone can delete their own comment. Only users with
     * <strong>REPO_ADMIN</strong>
     * and above may delete comments created by other users. Comments which have replies <i>may not be
     * deleted</i>,
     * regardless of the user's granted permissions.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the
     * commit
     * is in to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param string  $commitId       the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository
     * @param integer $commentId      the ID of the comment to retrieve
     * @param integer $version        (optional) The expected version of the comment. This must match the server's
     *                                version of the comment or                   the delete will fail. To determine
     *                                the current version of the comment, the comment should be
     *                                fetched from the server prior to the delete. Look for the 'version' attribute in
     *                                the returned                   JSON structure.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteRepositoryCommitComment(
        $projectKey,
        $repositorySlug,
        $commitId,
        $commentId,
        $version = -1
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/comments/{commentId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'commitId'       => $commitId,
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
     * Retrieves a commit discussion comment.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the
     * commit
     * is in to call this resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param string  $commitId       the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository
     * @param integer $commentId      the ID of the comment to retrieve
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryCommitComment(
        $projectKey,
        $repositorySlug,
        $commitId,
        $commentId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/comments/{commentId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'commitId'       => $commitId,
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
     * Retrieve a page of repository hooks for this repository.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $type           (optional) the optional type to filter by. Valid values are
     *                               <code>PRE_RECEIVE</code> or <code>POST_RECEIVE</code>
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryHooks(
        $projectKey,
        $repositorySlug,
        $type = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/settings/hooks';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'type'           => $type,
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
     * Modify the settings for a repository hook for this repositories.
     * <p>
     * The service will reject any settings which are too large, the current limit is 32KB once serialized.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository to call this
     * resource.
     *
     * @param object $dynamic        TODO: type description here
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $hookKey        TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateSetRepositoryHookSettings(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $hookKey
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/settings/hooks/{hookKey}/settings';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'hookKey'        => $hookKey,
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
     * Retrieve the settings for a repository hook for this repositories.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $hookKey        TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryHookSettings(
        $projectKey,
        $repositorySlug,
        $hookKey
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/settings/hooks/{hookKey}/settings';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'hookKey'        => $hookKey,
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
     * Retrieve a repository hook for this repositories.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $hookKey        TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryHook(
        $projectKey,
        $repositorySlug,
        $hookKey
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/settings/hooks/{hookKey}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'hookKey'        => $hookKey,
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
     * Enable a repository hook for this repositories and optionally applying new configuration.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository to call this
     * resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param string  $hookKey        TODO: type description here
     * @param integer $contentLength  (optional) Example: 0
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateEnableRepositoryHook(
        $projectKey,
        $repositorySlug,
        $hookKey,
        $contentLength = 0
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/settings/hooks/{hookKey}/enabled';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'hookKey'        => $hookKey,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Content-Length'  => (null != $contentLength) ? $contentLength : 0
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers);

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
     * Disable a repository hook for this repositories.
     * <p>
     * The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified
     * repository to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $hookKey        TODO: type description here
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteDisableRepositoryHook(
        $projectKey,
        $repositorySlug,
        $hookKey
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/settings/hooks/{hookKey}/enabled';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'hookKey'        => $hookKey,
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
     * Retrieve a page of changes made in a specified commit.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call this
     * resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $since          (optional) the commit to which <code>until</code> should be compared to produce a
     *                               page of changes.                      If not specified the commit's first parent
     *                               is assumed (if one exists)
     * @param string $until          (optional) the commit to retrieve changes for
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryChanges(
        $projectKey,
        $repositorySlug,
        $since = null,
        $until = null
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/changes';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'since'          => $since,
            'until'          => $until,
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
     * Removes the authenticated user as a watcher for the specified commit.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository
     * containing the commit
     * to call this resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $commitId       the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteUnwatchRepositoryCommit(
        $projectKey,
        $repositorySlug,
        $commitId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/watch';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'commitId'       => $commitId,
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
     * Adds the authenticated user as a watcher for the specified commit.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the repository
     * containing the commit
     * to call this resource.
     *
     * @param string $projectKey     TODO: type description here
     * @param string $repositorySlug TODO: type description here
     * @param string $commitId       the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createWatchRepositoryCommit(
        $projectKey,
        $repositorySlug,
        $commitId
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/watch';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'commitId'       => $commitId,
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
     * Retrieve the diff between two provided revisions.
     * <p>
     * <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally
     * apply a hard cap
     * to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded.
     * In the event
     * that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags
     * will be set to
     * <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call this
     * resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param string  $commitId       TODO: type description here
     * @param integer $contextLines   (optional) the number of context lines to include around added/removed lines in
     *                                the diff
     * @param string  $since          (optional) the base revision to diff from. If omitted the parent revision of the
     *                                until revision is used
     * @param string  $srcPath        (optional) the source path for the file, if it was copied, moved or renamed
     * @param string  $whitespace     (optional) optional whitespace flag which can be set to <code>ignore-all</code>
     * @param bool    $withComments   (optional) <code>true</code> to embed comments in the diff (the default);
     *                                otherwise <code>false</code>                      to stream the diff without
     *                                comments
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryCommitDiff(
        $projectKey,
        $repositorySlug,
        $commitId,
        $contextLines = -1,
        $since = null,
        $srcPath = null,
        $whitespace = null,
        $withComments = true
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/diff';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'commitId'       => $commitId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'contextLines'   => (null != $contextLines) ? $contextLines : -1,
            'since'          => $since,
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
     * Retrieve the diff between two provided revisions.
     * <p>
     * <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally
     * apply a hard cap
     * to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded.
     * In the event
     * that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags
     * will be set to
     * <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository
     * to call this
     * resource.
     *
     * @param string  $projectKey     TODO: type description here
     * @param string  $repositorySlug TODO: type description here
     * @param string  $path           the path to the file which should be diffed (optional)
     * @param string  $commitId       TODO: type description here
     * @param integer $contextLines   (optional) the number of context lines to include around added/removed lines in
     *                                the diff
     * @param string  $since          (optional) the base revision to diff from. If omitted the parent revision of the
     *                                until revision is used
     * @param string  $srcPath        (optional) the source path for the file, if it was copied, moved or renamed
     * @param string  $whitespace     (optional) optional whitespace flag which can be set to <code>ignore-all</code>
     * @param bool    $withComments   (optional) <code>true</code> to embed comments in the diff (the default);
     *                                otherwise <code>false</code>                      to stream the diff without
     *                                comments
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositoryCommitDiffByPath(
        $projectKey,
        $repositorySlug,
        $path,
        $commitId,
        $contextLines = -1,
        $since = null,
        $srcPath = null,
        $whitespace = null,
        $withComments = true
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.
            '/api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/diff/{path}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey'     => $projectKey,
            'repositorySlug' => $repositorySlug,
            'path'           => $path,
            'commitId'       => $commitId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'contextLines'   => (null != $contextLines) ? $contextLines : -1,
            'since'          => $since,
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
     * Retrieve repositories from the project corresponding to the supplied <strong>projectKey</strong>.
     * <p>
     * The authenticated user must have <strong>REPO_READ</strong> permission for the specified project to
     * call this
     * resource.
     *
     * @param string $projectKey the parent project key
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRepositories1(
        $projectKey
    ) {

        //the base uri for api requests
        $_queryBuilder = sprintf(Configuration::$BASEURI, Configuration::$stashDomain);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/1.0/projects/{projectKey}/repos';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'projectKey' => $projectKey,
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
