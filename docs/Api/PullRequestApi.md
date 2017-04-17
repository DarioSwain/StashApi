# Swagger\Client\PullRequestApi

All URIs are relative to *http://example.com/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approvePullRequest**](PullRequestApi.md#approvePullRequest) | **POST** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/approve | approvePullRequest
[**assignPullRequestParticipantRole**](PullRequestApi.md#assignPullRequestParticipantRole) | **POST** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/participants | assignPullRequestParticipantRole
[**canMergePullRequest**](PullRequestApi.md#canMergePullRequest) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/merge | canMergePullRequest
[**countPullRequestTasks**](PullRequestApi.md#countPullRequestTasks) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/tasks/count | countPullRequestTasks
[**createPullRequest**](PullRequestApi.md#createPullRequest) | **POST** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests | createPullRequest
[**createPullRequestComment**](PullRequestApi.md#createPullRequestComment) | **POST** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/comments | createPullRequestComment
[**declinePullRequest**](PullRequestApi.md#declinePullRequest) | **POST** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/decline | declinePullRequest
[**deletePullRequestComment**](PullRequestApi.md#deletePullRequestComment) | **DELETE** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/comments/{commentId} | deletePullRequestComment
[**getPullRequest**](PullRequestApi.md#getPullRequest) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId} | getPullRequest
[**getPullRequestActivities**](PullRequestApi.md#getPullRequestActivities) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/activities | getPullRequestActivities
[**getPullRequestChanges**](PullRequestApi.md#getPullRequestChanges) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/changes | getPullRequestChanges
[**getPullRequestComment**](PullRequestApi.md#getPullRequestComment) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/comments/{commentId} | getPullRequestComment
[**getPullRequestComments**](PullRequestApi.md#getPullRequestComments) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/comments | getPullRequestComments
[**getPullRequestCommits**](PullRequestApi.md#getPullRequestCommits) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/commits | getPullRequestCommits
[**getPullRequestDiff**](PullRequestApi.md#getPullRequestDiff) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/diff | getPullRequestDiff
[**getPullRequestDiffByPath**](PullRequestApi.md#getPullRequestDiffByPath) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/diff/{path} | getPullRequestDiffByPath
[**getPullRequestTasks**](PullRequestApi.md#getPullRequestTasks) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/tasks | getPullRequestTasks
[**getPullRequests**](PullRequestApi.md#getPullRequests) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests | getPullRequests
[**listPullRequestParticipants**](PullRequestApi.md#listPullRequestParticipants) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/participants | listPullRequestParticipants
[**mergePullRequest**](PullRequestApi.md#mergePullRequest) | **POST** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/merge | mergePullRequest
[**reopenPullRequest**](PullRequestApi.md#reopenPullRequest) | **POST** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/reopen | reopenPullRequest
[**unassignPullRequestParticipantRole**](PullRequestApi.md#unassignPullRequestParticipantRole) | **DELETE** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/participants | unassignPullRequestParticipantRole
[**unwatchPullRequest**](PullRequestApi.md#unwatchPullRequest) | **DELETE** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/watch | unwatchPullRequest
[**updatePullRequest**](PullRequestApi.md#updatePullRequest) | **PUT** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId} | updatePullRequest
[**updatePullRequestComment**](PullRequestApi.md#updatePullRequestComment) | **PUT** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/comments/{commentId} | updatePullRequestComment
[**watchPullRequest**](PullRequestApi.md#watchPullRequest) | **POST** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/watch | watchPullRequest
[**withdrawPullRequestApproval**](PullRequestApi.md#withdrawPullRequestApproval) | **DELETE** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/pull-requests/{pullRequestId}/approve | withdrawPullRequestApproval


# **approvePullRequest**
> string approvePullRequest($project_key, $repository_slug, $pull_request_id)

approvePullRequest

Approve a pull request as the current user. Implicitly adds the user as a participant if they are not already.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | the id of the pull request within the repository

try {
    $result = $api_instance->approvePullRequest($project_key, $repository_slug, $pull_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->approvePullRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**| the id of the pull request within the repository |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignPullRequestParticipantRole**
> string assignPullRequestParticipantRole($dynamic, $project_key, $repository_slug, $pull_request_id)

assignPullRequestParticipantRole

Assigns a participant to an explicit role in pull request. Currently only the REVIEWER role may be assigned.  <p>  If the user is not yet a participant in the pull request, they are made one and assigned the supplied role.  <p>  If the user is already a participant in the pull request, their previous role is replaced with the supplied role  unless they are already assigned the AUTHOR role which cannot be changed and will result in a Bad Request (400)  response code.  <p>  The authenticated user must have <strong>REPO_WRITE</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$dynamic = NULL; // object | 
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | the id of the pull request within the repository

try {
    $result = $api_instance->assignPullRequestParticipantRole($dynamic, $project_key, $repository_slug, $pull_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->assignPullRequestParticipantRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**| the id of the pull request within the repository |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **canMergePullRequest**
> string canMergePullRequest($project_key, $repository_slug, $pull_request_id)

canMergePullRequest

Test whether a pull request can be merged.  <p>  A pull request may not be merged if:  <ul>      <li>there are conflicts that need to be manually resolved before merging; and/or</li>      <li>one or more merge checks have vetoed the merge.</li>  </ul>  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | the id of the pull request within the repository

try {
    $result = $api_instance->canMergePullRequest($project_key, $repository_slug, $pull_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->canMergePullRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**| the id of the pull request within the repository |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countPullRequestTasks**
> string countPullRequestTasks($project_key, $repository_slug, $pull_request_id)

countPullRequestTasks

Retrieve the total number of {@link com.atlassian.stash.task.TaskState#OPEN open} and  {@link com.atlassian.stash.task.TaskState#RESOLVED resolved} tasks associated with a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = "pull_request_id_example"; // string | 

try {
    $result = $api_instance->countPullRequestTasks($project_key, $repository_slug, $pull_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->countPullRequestTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPullRequest**
> string createPullRequest($dynamic, $project_key, $repository_slug)

createPullRequest

Create a new pull request between two branches. The branches may be in the same repository, or different ones.  When using different repositories, they must still be in the same {@link Repository#getHierarchyId() hierarchy}.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the \"from\" and \"to\"repositories to  call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$dynamic = NULL; // object | 
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 

try {
    $result = $api_instance->createPullRequest($dynamic, $project_key, $repository_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->createPullRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPullRequestComment**
> string createPullRequestComment($dynamic, $project_key, $repository_slug, $pull_request_id)

createPullRequestComment

Add a new comment.  <p>  Comments can be added in a few places by setting different attributes:  <p>  General pull request comment:   <pre>      {          \"text\": \"An insightful general comment on a pull request.\"      }      </pre>   Reply to a comment:   <pre>      {          \"text\": \"A measured reply.\",          \"parent\": {              \"id\": 1          }      }      </pre>   General file comment:   <pre>      {          \"text\": \"An insightful general comment on a file.\",          \"anchor\": {              \"path\": \"path/to/file\",              \"srcPath\": \"path/to/file\"          }      }      </pre>   File line comment:   <pre>      {          \"text\": \"A pithy comment on a particular line within a file.\",          \"anchor\": {              \"line\": 1,              \"lineType\": \"CONTEXT\",              \"fileType\": \"FROM\"              \"path\": \"path/to/file\",              \"srcPath\": \"path/to/file\"          }      }      </pre>  <strong>Note: general file comments are an experimental feature and may change in the near future!</strong>  <p>  For file and line comments, 'path' refers to the path of the file to which the comment should be applied and  'srcPath' refers to the path the that file used to have (only required for copies and moves).  <p>  For line comments, 'line' refers to the line in the diff that the comment should apply to. 'lineType' refers to  the type of diff hunk, which can be:  <ul>      <li>'ADDED' - for an added line;</li>      <li>'REMOVED' - for a removed line; or</li>      <li>'CONTEXT' - for a line that was unmodified but is in the vicinity of the diff.</li>  </ul>  'fileType' refers to the file of the diff to which the anchor should be attached - which is of relevance when  displaying the diff in a side-by-side way. Currently the supported values are:  <ul>      <li>'FROM' - the source file of the diff</li>      <li>'TO' - the destination file of the diff</li>  </ul>  If the current user is not a participant the user is added as a watcher of the pull request.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$dynamic = NULL; // object | 
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | 

try {
    $result = $api_instance->createPullRequestComment($dynamic, $project_key, $repository_slug, $pull_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->createPullRequestComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **declinePullRequest**
> string declinePullRequest($project_key, $repository_slug, $pull_request_id, $version)

declinePullRequest

Decline a pull request.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | 
$version = -1; // int | the current version of the pull request. If the server's version isn't the same as the specified                 version the operation will fail. To determine the current version of the pull request it should be                 fetched from the server prior to this operation. Look for the 'version' attribute in the returned                 JSON structure.

try {
    $result = $api_instance->declinePullRequest($project_key, $repository_slug, $pull_request_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->declinePullRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**|  |
 **version** | **int**| the current version of the pull request. If the server&#39;s version isn&#39;t the same as the specified                 version the operation will fail. To determine the current version of the pull request it should be                 fetched from the server prior to this operation. Look for the &#39;version&#39; attribute in the returned                 JSON structure. | [optional] [default to -1]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePullRequestComment**
> string deletePullRequestComment($project_key, $repository_slug, $pull_request_id, $comment_id, $version)

deletePullRequestComment

Delete a pull request comment. Anyone can delete their own comment. Only users with <strong>REPO_ADMIN</strong>  and above may delete comments created by other users.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | the id of the pull request within the repository
$comment_id = 789; // int | the id of the comment to retrieve
$version = -1; // int | The expected version of the comment. This must match the server's version of the comment or                       the delete will fail. To determine the current version of the comment, the comment should be                       fetched from the server prior to the delete. Look for the 'version' attribute in the                       returned JSON structure.

try {
    $result = $api_instance->deletePullRequestComment($project_key, $repository_slug, $pull_request_id, $comment_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->deletePullRequestComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**| the id of the pull request within the repository |
 **comment_id** | **int**| the id of the comment to retrieve |
 **version** | **int**| The expected version of the comment. This must match the server&#39;s version of the comment or                       the delete will fail. To determine the current version of the comment, the comment should be                       fetched from the server prior to the delete. Look for the &#39;version&#39; attribute in the                       returned JSON structure. | [optional] [default to -1]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPullRequest**
> string getPullRequest($project_key, $repository_slug, $pull_request_id)

getPullRequest

Retrieve a pull request.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = "pull_request_id_example"; // string | 

try {
    $result = $api_instance->getPullRequest($project_key, $repository_slug, $pull_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->getPullRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPullRequestActivities**
> string getPullRequestActivities($project_key, $repository_slug, $pull_request_id, $from_id, $from_type)

getPullRequestActivities

Retrieve a page of activity associated with a pull request.  <p>  Activity items include comments, approvals, rescopes (i.e. adding and removing of commits), merges and more.  <p>  Different types of activity items may be introduced in newer versions of Stash or by user installed plugins, so  clients should be flexible enough to handle unexpected entity shapes in the returned page.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | the id of the pull request within the repository
$from_id = 789; // int | (optional) the id of the activity item to use as the first item in the returned page
$from_type = "from_type_example"; // string | (required if <strong>fromId</strong> is present) the type of the activity item specified by                  <strong>fromId</strong> (either <strong>COMMENT</strong> or <strong>ACTIVITY</strong>)

try {
    $result = $api_instance->getPullRequestActivities($project_key, $repository_slug, $pull_request_id, $from_id, $from_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->getPullRequestActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**| the id of the pull request within the repository |
 **from_id** | **int**| (optional) the id of the activity item to use as the first item in the returned page | [optional]
 **from_type** | **string**| (required if &lt;strong&gt;fromId&lt;/strong&gt; is present) the type of the activity item specified by                  &lt;strong&gt;fromId&lt;/strong&gt; (either &lt;strong&gt;COMMENT&lt;/strong&gt; or &lt;strong&gt;ACTIVITY&lt;/strong&gt;) | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPullRequestChanges**
> string getPullRequestChanges($project_key, $repository_slug, $pull_request_id, $with_comments)

getPullRequestChanges

Gets changes for the specified PullRequest.  <p>  Note: This resource is currently <i>not paged</i>. The server will return at most one page. The server will  truncate the number of changes to either the request's page limit or an internal maximum, whichever is smaller.  The start parameter of the page request is also ignored.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = "pull_request_id_example"; // string | 
$with_comments = true; // bool | {@code true} to apply comment counts in the changes (the default); otherwise, {@code false}                      to stream changes without comment counts

try {
    $result = $api_instance->getPullRequestChanges($project_key, $repository_slug, $pull_request_id, $with_comments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->getPullRequestChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **string**|  |
 **with_comments** | **bool**| {@code true} to apply comment counts in the changes (the default); otherwise, {@code false}                      to stream changes without comment counts | [optional] [default to true]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPullRequestComment**
> string getPullRequestComment($project_key, $repository_slug, $pull_request_id, $comment_id)

getPullRequestComment

Retrieves a pull request comment.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | the id of the pull request within the repository
$comment_id = 789; // int | the id of the comment to retrieve

try {
    $result = $api_instance->getPullRequestComment($project_key, $repository_slug, $pull_request_id, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->getPullRequestComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**| the id of the pull request within the repository |
 **comment_id** | **int**| the id of the comment to retrieve |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPullRequestComments**
> object getPullRequestComments($project_key, $repository_slug, $pull_request_id, $path)

getPullRequestComments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | 
$path = "path_example"; // string | 

try {
    $result = $api_instance->getPullRequestComments($project_key, $repository_slug, $pull_request_id, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->getPullRequestComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**|  |
 **path** | **string**|  | [optional]

### Return type

**object**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPullRequestCommits**
> string getPullRequestCommits($project_key, $repository_slug, $pull_request_id, $with_counts)

getPullRequestCommits

Retrieve changesets for the specified pull request.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | 
$with_counts = true; // bool | if set to true, the service will add \"authorCount\" and \"totalCount\" at the end of the page.                      \"authorCount\" is the number of different authors and \"totalCount\" is the total number of changesets.

try {
    $result = $api_instance->getPullRequestCommits($project_key, $repository_slug, $pull_request_id, $with_counts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->getPullRequestCommits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**|  |
 **with_counts** | **bool**| if set to true, the service will add \&quot;authorCount\&quot; and \&quot;totalCount\&quot; at the end of the page.                      \&quot;authorCount\&quot; is the number of different authors and \&quot;totalCount\&quot; is the total number of changesets. | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPullRequestDiff**
> string getPullRequestDiff($project_key, $repository_slug, $pull_request_id, $context_lines, $src_path, $whitespace, $with_comments)

getPullRequestDiff

Streams a diff within a pull request.  <p>  If the specified file has been copied, moved or renamed, the <code>srcPath</code> must also be specified to  produce the correct diff.  <p>  Note: This RESTful endpoint is currently <i>not paged</i>. The server will internally apply a hard cap to the  streamed lines, and it is not possible to request subsequent pages if that cap is exceeded.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = "pull_request_id_example"; // string | 
$context_lines = -1; // int | the number of context lines to include around added/removed lines in the diff
$src_path = "src_path_example"; // string | the previous path to the file, if the file has been copied, moved or renamed
$whitespace = "whitespace_example"; // string | optional whitespace flag which can be set to <code>ignore-all</code>
$with_comments = true; // bool | <code>true</code> to embed comments in the diff (the default); otherwise, <code>false</code>                      to stream the diff without comments

try {
    $result = $api_instance->getPullRequestDiff($project_key, $repository_slug, $pull_request_id, $context_lines, $src_path, $whitespace, $with_comments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->getPullRequestDiff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **string**|  |
 **context_lines** | **int**| the number of context lines to include around added/removed lines in the diff | [optional] [default to -1]
 **src_path** | **string**| the previous path to the file, if the file has been copied, moved or renamed | [optional]
 **whitespace** | **string**| optional whitespace flag which can be set to &lt;code&gt;ignore-all&lt;/code&gt; | [optional]
 **with_comments** | **bool**| &lt;code&gt;true&lt;/code&gt; to embed comments in the diff (the default); otherwise, &lt;code&gt;false&lt;/code&gt;                      to stream the diff without comments | [optional] [default to true]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPullRequestDiffByPath**
> string getPullRequestDiffByPath($project_key, $repository_slug, $pull_request_id, $path, $context_lines, $src_path, $whitespace, $with_comments)

getPullRequestDiffByPath

Streams a diff within a pull request.  <p>  If the specified file has been copied, moved or renamed, the <code>srcPath</code> must also be specified to  produce the correct diff.  <p>  Note: This RESTful endpoint is currently <i>not paged</i>. The server will internally apply a hard cap to the  streamed lines, and it is not possible to request subsequent pages if that cap is exceeded.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = "pull_request_id_example"; // string | 
$path = "path_example"; // string | the path to the file which should be diffed (optional)
$context_lines = -1; // int | the number of context lines to include around added/removed lines in the diff
$src_path = "src_path_example"; // string | the previous path to the file, if the file has been copied, moved or renamed
$whitespace = "whitespace_example"; // string | optional whitespace flag which can be set to <code>ignore-all</code>
$with_comments = true; // bool | <code>true</code> to embed comments in the diff (the default); otherwise, <code>false</code>                      to stream the diff without comments

try {
    $result = $api_instance->getPullRequestDiffByPath($project_key, $repository_slug, $pull_request_id, $path, $context_lines, $src_path, $whitespace, $with_comments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->getPullRequestDiffByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **string**|  |
 **path** | **string**| the path to the file which should be diffed (optional) |
 **context_lines** | **int**| the number of context lines to include around added/removed lines in the diff | [optional] [default to -1]
 **src_path** | **string**| the previous path to the file, if the file has been copied, moved or renamed | [optional]
 **whitespace** | **string**| optional whitespace flag which can be set to &lt;code&gt;ignore-all&lt;/code&gt; | [optional]
 **with_comments** | **bool**| &lt;code&gt;true&lt;/code&gt; to embed comments in the diff (the default); otherwise, &lt;code&gt;false&lt;/code&gt;                      to stream the diff without comments | [optional] [default to true]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPullRequestTasks**
> string getPullRequestTasks($project_key, $repository_slug, $pull_request_id)

getPullRequestTasks

Retrieve the tasks associated with a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = "pull_request_id_example"; // string | 

try {
    $result = $api_instance->getPullRequestTasks($project_key, $repository_slug, $pull_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->getPullRequestTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPullRequests**
> string getPullRequests($project_key, $repository_slug, $direction, $at, $state, $order, $with_attributes, $with_properties)

getPullRequests

Retrieve a page of pull requests to or from the specified repository.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call  this resource.   Optionally clients can specify PR participant filters. Each filter has a mandatory {@code username.N}  parameter, and the optional {@code role.N} and {@code approved.N} parameters.  <ul>      <li>          {@code username.N} - the \"root\" of a single participant filter, where \"N\" is a natural number          starting from 1. This allows clients to specify multiple participant filters, by providing consecutive          filters as {@code username.1}, {@code username.2} etc. Note that the filters numbering has to start          with 1 and be continuous for all filters to be processed. The total allowed number of participant          filters is 10 and all filters exceeding that limit will be dropped.      </li>      <li>          {@code role.N}(optional) the role associated with {@code username.N}.          This must be one of {@code AUTHOR}, {@code REVIEWER}, or{@code PARTICIPANT}      </li>      <li>          {@code approved.N}(optional) the approved status associated with {@code username.N}.          That is whether {@code username.N} has approved the PR. Either {@code true}, or {@code false}      </li>  </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$direction = "incoming"; // string | (optional, defaults to <strong>INCOMING</strong>) the direction relative to the specified                   repository. Either <strong>INCOMING</strong> or <strong>OUTGOING</strong>.
$at = "at_example"; // string | (optional) a <i>fully-qualified</i> branch ID to find pull requests to or from,            such as {@code refs/heads/master}
$state = "state_example"; // string | (optional, defaults to <strong>OPEN</strong>). Supply <strong>ALL</strong> to return pull request                in any state. If a state is supplied only pull requests in the specified state will be returned.                Either <strong>OPEN</strong>, <strong>DECLINED</strong> or <strong>MERGED</strong>.
$order = "order_example"; // string | (optional) the order to return pull requests in, either <strong>OLDEST</strong> (as in: \"oldest               first\") or <strong>NEWEST</strong>.
$with_attributes = true; // bool | (optional) defaults to true, whether to return additional pull request attributes
$with_properties = true; // bool | (optional) defaults to true, whether to return additional pull request properties

try {
    $result = $api_instance->getPullRequests($project_key, $repository_slug, $direction, $at, $state, $order, $with_attributes, $with_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->getPullRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **direction** | **string**| (optional, defaults to &lt;strong&gt;INCOMING&lt;/strong&gt;) the direction relative to the specified                   repository. Either &lt;strong&gt;INCOMING&lt;/strong&gt; or &lt;strong&gt;OUTGOING&lt;/strong&gt;. | [optional] [default to incoming]
 **at** | **string**| (optional) a &lt;i&gt;fully-qualified&lt;/i&gt; branch ID to find pull requests to or from,            such as {@code refs/heads/master} | [optional]
 **state** | **string**| (optional, defaults to &lt;strong&gt;OPEN&lt;/strong&gt;). Supply &lt;strong&gt;ALL&lt;/strong&gt; to return pull request                in any state. If a state is supplied only pull requests in the specified state will be returned.                Either &lt;strong&gt;OPEN&lt;/strong&gt;, &lt;strong&gt;DECLINED&lt;/strong&gt; or &lt;strong&gt;MERGED&lt;/strong&gt;. | [optional]
 **order** | **string**| (optional) the order to return pull requests in, either &lt;strong&gt;OLDEST&lt;/strong&gt; (as in: \&quot;oldest               first\&quot;) or &lt;strong&gt;NEWEST&lt;/strong&gt;. | [optional]
 **with_attributes** | **bool**| (optional) defaults to true, whether to return additional pull request attributes | [optional] [default to true]
 **with_properties** | **bool**| (optional) defaults to true, whether to return additional pull request properties | [optional] [default to true]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPullRequestParticipants**
> string listPullRequestParticipants($project_key, $repository_slug, $pull_request_id)

listPullRequestParticipants

Retrieves a page of the participants for a given pull request.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | the id of the pull request within the repository

try {
    $result = $api_instance->listPullRequestParticipants($project_key, $repository_slug, $pull_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->listPullRequestParticipants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**| the id of the pull request within the repository |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergePullRequest**
> string mergePullRequest($project_key, $repository_slug, $pull_request_id, $version)

mergePullRequest

Merge the specified pull request.  <p>  The authenticated user must have <strong>REPO_WRITE</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | the id of the pull request within the repository
$version = -1; // int | the current version of the pull request. If the server's version isn't the same as the specified                 version the operation will fail. To determine the current version of the pull request it should be                 fetched from the server prior to this operation. Look for the 'version' attribute in the returned                 JSON structure.

try {
    $result = $api_instance->mergePullRequest($project_key, $repository_slug, $pull_request_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->mergePullRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**| the id of the pull request within the repository |
 **version** | **int**| the current version of the pull request. If the server&#39;s version isn&#39;t the same as the specified                 version the operation will fail. To determine the current version of the pull request it should be                 fetched from the server prior to this operation. Look for the &#39;version&#39; attribute in the returned                 JSON structure. | [optional] [default to -1]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reopenPullRequest**
> string reopenPullRequest($project_key, $repository_slug, $pull_request_id, $version)

reopenPullRequest

Re-open a declined pull request.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | the id of the pull request within the repository
$version = -1; // int | the current version of the pull request. If the server's version isn't the same as the specified                 version the operation will fail. To determine the current version of the pull request it should be                 fetched from the server prior to this operation. Look for the 'version' attribute in the returned                 JSON structure.

try {
    $result = $api_instance->reopenPullRequest($project_key, $repository_slug, $pull_request_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->reopenPullRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**| the id of the pull request within the repository |
 **version** | **int**| the current version of the pull request. If the server&#39;s version isn&#39;t the same as the specified                 version the operation will fail. To determine the current version of the pull request it should be                 fetched from the server prior to this operation. Look for the &#39;version&#39; attribute in the returned                 JSON structure. | [optional] [default to -1]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unassignPullRequestParticipantRole**
> string unassignPullRequestParticipantRole($project_key, $repository_slug, $pull_request_id, $username)

unassignPullRequestParticipantRole

Unassigns a participant from the REVIEWER role they may have been given in a pull request.  <p>  If the participant has no explicit role this method has no effect.  <p>  Afterwards, the user will still remain a participant in the pull request but their role will be reduced to  PARTICIPANT. This is because once made a participant of a pull request,  a user will forever remain a participant. Only their role may be altered.  <p>  The authenticated user must have <strong>REPO_WRITE</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | the id of the pull request within the repository
$username = "username_example"; // string | the participant's user name

try {
    $result = $api_instance->unassignPullRequestParticipantRole($project_key, $repository_slug, $pull_request_id, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->unassignPullRequestParticipantRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**| the id of the pull request within the repository |
 **username** | **string**| the participant&#39;s user name | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unwatchPullRequest**
> string unwatchPullRequest($project_key, $repository_slug, $pull_request_id)

unwatchPullRequest

Make the authenticated user stop watching the specified pull request.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | the id of the pull request within the repository

try {
    $result = $api_instance->unwatchPullRequest($project_key, $repository_slug, $pull_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->unwatchPullRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**| the id of the pull request within the repository |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePullRequest**
> string updatePullRequest($dynamic, $project_key, $repository_slug, $pull_request_id)

updatePullRequest

Update the title, description, reviewers or destination branch of an existing pull request.  <p>  <strong>Note:</strong> the <em>reviewers</em> list may be updated using this resource. However the  <em>author</em> and <em>participants</em> list may not.  <p>  The authenticated user must either:  <ul>      <li>be the author of the pull request and have the <strong>REPO_READ</strong> permission for the repository      that this pull request targets; or</li>      <li>have the <strong>REPO_WRITE</strong> permission for the repository that this pull request targets</li>  </ul>  to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$dynamic = NULL; // object | 
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = "pull_request_id_example"; // string | 

try {
    $result = $api_instance->updatePullRequest($dynamic, $project_key, $repository_slug, $pull_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->updatePullRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePullRequestComment**
> string updatePullRequestComment($dynamic, $project_key, $repository_slug, $pull_request_id, $comment_id)

updatePullRequestComment

Update the text of a comment. Only the user who created a comment may update it.  <p>  <strong>Note:</strong> the supplied supplied JSON object must contain a <code>version</code> that must match the  server's version of the comment or the update will fail. To determine the current version of  the comment, the comment should be fetched from the server prior to the update. Look for the  'version' attribute in the returned JSON structure.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$dynamic = NULL; // object | 
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | the id of the pull request within the repository
$comment_id = 789; // int | the id of the comment to retrieve

try {
    $result = $api_instance->updatePullRequestComment($dynamic, $project_key, $repository_slug, $pull_request_id, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->updatePullRequestComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**| the id of the pull request within the repository |
 **comment_id** | **int**| the id of the comment to retrieve |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchPullRequest**
> string watchPullRequest($project_key, $repository_slug, $pull_request_id)

watchPullRequest

Make the authenticated user watch the specified pull request.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | the id of the pull request within the repository

try {
    $result = $api_instance->watchPullRequest($project_key, $repository_slug, $pull_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->watchPullRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**| the id of the pull request within the repository |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **withdrawPullRequestApproval**
> string withdrawPullRequestApproval($project_key, $repository_slug, $pull_request_id)

withdrawPullRequestApproval

Remove approval from a pull request as the current user. This does not remove the user as a participant.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request  targets to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\PullRequestApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$pull_request_id = 789; // int | the id of the pull request within the repository

try {
    $result = $api_instance->withdrawPullRequestApproval($project_key, $repository_slug, $pull_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestApi->withdrawPullRequestApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **pull_request_id** | **int**| the id of the pull request within the repository |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

