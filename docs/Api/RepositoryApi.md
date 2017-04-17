# Swagger\Client\RepositoryApi

All URIs are relative to *http://example.com/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRepository**](RepositoryApi.md#createRepository) | **POST** /api/1.0/projects/{projectKey}/repos | createRepository
[**createRepositoryCommitComment**](RepositoryApi.md#createRepositoryCommitComment) | **POST** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/comments | createRepositoryCommitComment
[**deleteRepository**](RepositoryApi.md#deleteRepository) | **DELETE** /api/1.0/projects/{projectKey}/repos/{repositorySlug} | deleteRepository
[**deleteRepositoryCommitComment**](RepositoryApi.md#deleteRepositoryCommitComment) | **DELETE** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/comments/{commentId} | deleteRepositoryCommitComment
[**disableRepositoryHook**](RepositoryApi.md#disableRepositoryHook) | **DELETE** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/settings/hooks/{hookKey}/enabled | disableRepositoryHook
[**enableRepositoryHook**](RepositoryApi.md#enableRepositoryHook) | **PUT** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/settings/hooks/{hookKey}/enabled | enableRepositoryHook
[**forkRepository**](RepositoryApi.md#forkRepository) | **POST** /api/1.0/projects/{projectKey}/repos/{repositorySlug} | forkRepository
[**getForkedRepositories**](RepositoryApi.md#getForkedRepositories) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/forks | getForkedRepositories
[**getRelatedRepositories**](RepositoryApi.md#getRelatedRepositories) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/related | getRelatedRepositories
[**getRepositories**](RepositoryApi.md#getRepositories) | **GET** /api/1.0/repos | getRepositories
[**getRepositories1**](RepositoryApi.md#getRepositories1) | **GET** /api/1.0/projects/{projectKey}/repos | getRepositories
[**getRepository**](RepositoryApi.md#getRepository) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug} | getRepository
[**getRepositoryBranches**](RepositoryApi.md#getRepositoryBranches) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/branches | getRepositoryBranches
[**getRepositoryChanges**](RepositoryApi.md#getRepositoryChanges) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/changes | getRepositoryChanges
[**getRepositoryCommit**](RepositoryApi.md#getRepositoryCommit) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId} | getRepositoryCommit
[**getRepositoryCommitChanges**](RepositoryApi.md#getRepositoryCommitChanges) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/changes | getRepositoryCommitChanges
[**getRepositoryCommitComment**](RepositoryApi.md#getRepositoryCommitComment) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/comments/{commentId} | getRepositoryCommitComment
[**getRepositoryCommitComments**](RepositoryApi.md#getRepositoryCommitComments) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/comments | getRepositoryCommitComments
[**getRepositoryCommitDiff**](RepositoryApi.md#getRepositoryCommitDiff) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/diff | getRepositoryCommitDiff
[**getRepositoryCommitDiffByPath**](RepositoryApi.md#getRepositoryCommitDiffByPath) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/diff/{path} | getRepositoryCommitDiffByPath
[**getRepositoryCommits**](RepositoryApi.md#getRepositoryCommits) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits | getRepositoryCommits
[**getRepositoryContent**](RepositoryApi.md#getRepositoryContent) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/browse | getRepositoryContent
[**getRepositoryContentByPath**](RepositoryApi.md#getRepositoryContentByPath) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/browse/{path} | getRepositoryContentByPath
[**getRepositoryDefaultBranch**](RepositoryApi.md#getRepositoryDefaultBranch) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/branches/default | getRepositoryDefaultBranch
[**getRepositoryGroupsWithAnyPermission**](RepositoryApi.md#getRepositoryGroupsWithAnyPermission) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/groups | getRepositoryGroupsWithAnyPermission
[**getRepositoryGroupsWithoutAnyPermission**](RepositoryApi.md#getRepositoryGroupsWithoutAnyPermission) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/groups/none | getRepositoryGroupsWithoutAnyPermission
[**getRepositoryHook**](RepositoryApi.md#getRepositoryHook) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/settings/hooks/{hookKey} | getRepositoryHook
[**getRepositoryHookSettings**](RepositoryApi.md#getRepositoryHookSettings) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/settings/hooks/{hookKey}/settings | getRepositoryHookSettings
[**getRepositoryHooks**](RepositoryApi.md#getRepositoryHooks) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/settings/hooks | getRepositoryHooks
[**getRepositoryTags**](RepositoryApi.md#getRepositoryTags) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/tags | getRepositoryTags
[**getRepositoryUsersWithAnyPermission**](RepositoryApi.md#getRepositoryUsersWithAnyPermission) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/users | getRepositoryUsersWithAnyPermission
[**getRepositoryUsersWithoutPermission**](RepositoryApi.md#getRepositoryUsersWithoutPermission) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/users/none | getRepositoryUsersWithoutPermission
[**listRepositoryFiles**](RepositoryApi.md#listRepositoryFiles) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/files | listRepositoryFiles
[**listRepositoryFilesByPath**](RepositoryApi.md#listRepositoryFilesByPath) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/files/{path} | listRepositoryFilesByPath
[**repositoryCompareChanges**](RepositoryApi.md#repositoryCompareChanges) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/compare/changes | repositoryCompareChanges
[**repositoryCompareCommits**](RepositoryApi.md#repositoryCompareCommits) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/compare/commits | repositoryCompareCommits
[**repositoryCompareDiffByPath**](RepositoryApi.md#repositoryCompareDiffByPath) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/compare/diff/{path} | repositoryCompareDiffByPath
[**repositoryShowDiff**](RepositoryApi.md#repositoryShowDiff) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/diff | repositoryShowDiff
[**repositoryShowDiffByPath**](RepositoryApi.md#repositoryShowDiffByPath) | **GET** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/diff/{path} | repositoryShowDiffByPath
[**retryCreateRepository**](RepositoryApi.md#retryCreateRepository) | **POST** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/recreate | retryCreateRepository
[**revokeRepositoryPermissionsForGroup**](RepositoryApi.md#revokeRepositoryPermissionsForGroup) | **DELETE** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/groups | revokeRepositoryPermissionsForGroup
[**revokeRepositoryPermissionsForUser**](RepositoryApi.md#revokeRepositoryPermissionsForUser) | **DELETE** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/users | revokeRepositoryPermissionsForUser
[**setRepositoryDefaultBranch**](RepositoryApi.md#setRepositoryDefaultBranch) | **PUT** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/branches/default | setRepositoryDefaultBranch
[**setRepositoryHookSettings**](RepositoryApi.md#setRepositoryHookSettings) | **PUT** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/settings/hooks/{hookKey}/settings | setRepositoryHookSettings
[**setRepositoryPermissionForGroup**](RepositoryApi.md#setRepositoryPermissionForGroup) | **PUT** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/groups | setRepositoryPermissionForGroup
[**setRepositoryPermissionForUser**](RepositoryApi.md#setRepositoryPermissionForUser) | **PUT** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/permissions/users | setRepositoryPermissionForUser
[**unwatchRepositoryCommit**](RepositoryApi.md#unwatchRepositoryCommit) | **DELETE** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/watch | unwatchRepositoryCommit
[**updateRepository**](RepositoryApi.md#updateRepository) | **PUT** /api/1.0/projects/{projectKey}/repos/{repositorySlug} | updateRepository
[**updateRepositoryCommitComment**](RepositoryApi.md#updateRepositoryCommitComment) | **PUT** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/comments/{commentId} | updateRepositoryCommitComment
[**watchRepositoryCommit**](RepositoryApi.md#watchRepositoryCommit) | **POST** /api/1.0/projects/{projectKey}/repos/{repositorySlug}/commits/{commitId}/watch | watchRepositoryCommit


# **createRepository**
> string createRepository($dynamic, $project_key)

createRepository

Create a new repository. Requires an existing project in which this repository will be created.  The only parameters which will be used are name and scmId.  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the context project to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$dynamic = NULL; // object | 
$project_key = "project_key_example"; // string | the parent project key

try {
    $result = $api_instance->createRepository($dynamic, $project_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->createRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **project_key** | **string**| the parent project key |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepositoryCommitComment**
> string createRepositoryCommitComment($dynamic, $project_key, $repository_slug, $commit_id, $since)

createRepositoryCommitComment

Add a new comment.  <p>  Comments can be added in a few places by setting different attributes:  <p>  General commit comment:   <pre>      {          \"text\": \"An insightful general comment on a commit.\"      }      </pre>   Reply to a comment:   <pre>      {          \"text\": \"A measured reply.\",          \"parent\": {              \"id\": 1          }      }      </pre>   General file comment:   <pre>      {          \"text\": \"An insightful general comment on a file.\",          \"anchor\": {              \"path\": \"path/to/file\",              \"srcPath\": \"path/to/file\"          }      }      </pre>   File line comment:   <pre>      {          \"text\": \"A pithy comment on a particular line within a file.\",          \"anchor\": {              \"line\": 1,              \"lineType\": \"CONTEXT\",              \"fileType\": \"FROM\"              \"path\": \"path/to/file\",              \"srcPath\": \"path/to/file\"      }      }      </pre>  <strong>Note: general file comments are an experimental feature and may change in the near future!</strong>  <p>  For file and line comments, 'path' refers to the path of the file to which the comment should be applied and  'srcPath' refers to the path the that file used to have (only required for copies and moves).  <p>  For line comments, 'line' refers to the line in the diff that the comment should apply to. 'lineType' refers to  the type of diff hunk, which can be:  <ul>      <li>'ADDED' - for an added line;</li>      <li>'REMOVED' - for a removed line; or</li>      <li>'CONTEXT' - for a line that was unmodified but is in the vicinity of the diff.</li>  </ul>  'fileType' refers to the file of the diff to which the anchor should be attached - which is of relevance when  displaying the diff in a side-by-side way. Currently the supported values are:  <ul>      <li>'FROM' - the source file of the diff</li>      <li>'TO' - the destination file of the diff</li>  </ul>  If the current user is not a participant the user is added as one and updated to watch the commit.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the commit  is in to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$dynamic = NULL; // object | 
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$commit_id = "commit_id_example"; // string | 
$since = "since_example"; // string | 

try {
    $result = $api_instance->createRepositoryCommitComment($dynamic, $project_key, $repository_slug, $commit_id, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->createRepositoryCommitComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **commit_id** | **string**|  |
 **since** | **string**|  | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRepository**
> string deleteRepository($repository_slug, $project_key)

deleteRepository

Schedule the repository matching the supplied <strong>projectKey</strong> and <strong>repositorySlug</strong> to  be deleted. If the request repository is not present  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$repository_slug = "repository_slug_example"; // string | the repository slug
$project_key = "project_key_example"; // string | the parent project key

try {
    $result = $api_instance->deleteRepository($repository_slug, $project_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->deleteRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_slug** | **string**| the repository slug |
 **project_key** | **string**| the parent project key |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRepositoryCommitComment**
> string deleteRepositoryCommitComment($project_key, $repository_slug, $commit_id, $comment_id, $version)

deleteRepositoryCommitComment

Delete a commit comment. Anyone can delete their own comment. Only users with <strong>REPO_ADMIN</strong>  and above may delete comments created by other users. Comments which have replies <i>may not be deleted</i>,  regardless of the user's granted permissions.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the commit  is in to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$commit_id = "commit_id_example"; // string | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository
$comment_id = 789; // int | the ID of the comment to retrieve
$version = -1; // int | The expected version of the comment. This must match the server's version of the comment or                   the delete will fail. To determine the current version of the comment, the comment should be                   fetched from the server prior to the delete. Look for the 'version' attribute in the returned                   JSON structure.

try {
    $result = $api_instance->deleteRepositoryCommitComment($project_key, $repository_slug, $commit_id, $comment_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->deleteRepositoryCommitComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **commit_id** | **string**| the &lt;i&gt;full {@link Changeset#getId() ID}&lt;/i&gt; of the commit within the repository |
 **comment_id** | **int**| the ID of the comment to retrieve |
 **version** | **int**| The expected version of the comment. This must match the server&#39;s version of the comment or                   the delete will fail. To determine the current version of the comment, the comment should be                   fetched from the server prior to the delete. Look for the &#39;version&#39; attribute in the returned                   JSON structure. | [optional] [default to -1]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableRepositoryHook**
> string disableRepositoryHook($project_key, $repository_slug, $hook_key)

disableRepositoryHook

Disable a repository hook for this repositories.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$hook_key = "hook_key_example"; // string | 

try {
    $result = $api_instance->disableRepositoryHook($project_key, $repository_slug, $hook_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->disableRepositoryHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **hook_key** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableRepositoryHook**
> string enableRepositoryHook($project_key, $repository_slug, $hook_key, $content_length)

enableRepositoryHook

Enable a repository hook for this repositories and optionally applying new configuration.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$hook_key = "hook_key_example"; // string | 
$content_length = 0; // int | 

try {
    $result = $api_instance->enableRepositoryHook($project_key, $repository_slug, $hook_key, $content_length);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->enableRepositoryHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **hook_key** | **string**|  |
 **content_length** | **int**|  | [optional] [default to 0]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forkRepository**
> string forkRepository($dynamic, $repository_slug, $project_key)

forkRepository

Create a new repository forked from an existing repository.  <p>  The JSON body for this {@code POST} is not required to contain <i>any</i> properties. Even the name may be  omitted. The following properties will be used, if provided:  <ul>      <li>{@code \"name\":\"Fork name\"} - Specifies the forked repository's name      <ul>          <li>Defaults to the name of the origin repository if not specified</li>      </ul>      </li>      <li>{@code \"project\":{\"key\":\"TARGET_KEY\"}} - Specifies the forked repository's target project by key      <ul>          <li>Defaults to the current user's personal project if not specified</li>      </ul>      </li>  </ul>  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository and  <strong>PROJECT_ADMIN</strong> on the target project to call this resource. Note that users <i>always</i>  have <b>PROJECT_ADMIN</b> permission on their personal projects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$dynamic = NULL; // object | 
$repository_slug = "repository_slug_example"; // string | the repository slug
$project_key = "project_key_example"; // string | the parent project key

try {
    $result = $api_instance->forkRepository($dynamic, $repository_slug, $project_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->forkRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **repository_slug** | **string**| the repository slug |
 **project_key** | **string**| the parent project key |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getForkedRepositories**
> string getForkedRepositories($project_key, $repository_slug)

getForkedRepositories

Retrieve repositories which have been forked from this one. Unlike {@link #getRelatedRepositories(Repository,  PageRequest) related repositories}, this only looks at a given repository's direct forks. If those forks have  themselves been the origin of more forks, such \"grandchildren\" repositories will not be retrieved.  <p>  Only repositories to which the authenticated user has <b>REPO_READ</b> permission will be included, even  if other repositories have been forked from this one.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 

try {
    $result = $api_instance->getForkedRepositories($project_key, $repository_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getForkedRepositories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **getRelatedRepositories**
> string getRelatedRepositories($project_key, $repository_slug)

getRelatedRepositories

Retrieve repositories which are related to this one. Related repositories are from the same  {@link Repository#getHierarchyId() hierarchy} as this repository.  <p>  Only repositories to which the authenticated user has <b>REPO_READ</b> permission will be included, even  if more repositories are part of this repository's hierarchy.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 

try {
    $result = $api_instance->getRelatedRepositories($project_key, $repository_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRelatedRepositories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **getRepositories**
> string getRepositories($name, $projectname, $permission, $visibility)

getRepositories

Retrieve a page of repositories based on query parameters that control the search. See the documentation of the  parameters for more details.  <p>  This resource is anonymously accessible.  <p>  <b>Note on permissions.</b> In absence of the {@code permission} query parameter the implicit 'read' permission  is assumed. Please note that this permission is lower than the REPO_READ permission rather than being equal to  it. The implicit 'read' permission for a given repository is assigned to any user that has any of the higher  permissions, such as <tt>REPO_READ</tt>, as well as to anonymous users if the repository is marked as public.  The important implication of the above is that an anonymous request to this resource with a permission level  <tt>REPO_READ</tt> is guaranteed to receive an empty list of repositories as a result. For anonymous requests  it is therefore recommended to not specify the <tt>permission</tt> parameter at all.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$name = "name_example"; // string | (optional) if specified, this will limit the resulting repository list to ones whose name                     matches this parameter's value. The match will be done case-insensitive and any leading                     and/or trailing whitespace characters on the <code>name</code> parameter will be stripped.
$projectname = "projectname_example"; // string | (optional) if specified, this will limit the resulting repository list to ones whose project's                     name matches this parameter's value. The match will be done case-insensitive and any leading                     and/or trailing whitespace characters on the <code>projectname</code> parameter will                     be stripped.
$permission = "permission_example"; // string | (optional) if specified, it must be a valid repository permission level name and will limit                     the resulting repository list to ones that the requesting user has the specified permission                     level to. If not specified, the default implicit 'read' permission level will be assumed. The                     currently supported explicit permission values are <tt>REPO_READ</tt>, <tt>REPO_WRITE</tt>                     and <tt>REPO_ADMIN</tt>.
$visibility = "visibility_example"; // string | (optional) if specified, this will limit the resulting repository list based on the                     repositories visibility. Valid values are <em>public</em> or <em>private</em>.

try {
    $result = $api_instance->getRepositories($name, $projectname, $permission, $visibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| (optional) if specified, this will limit the resulting repository list to ones whose name                     matches this parameter&#39;s value. The match will be done case-insensitive and any leading                     and/or trailing whitespace characters on the &lt;code&gt;name&lt;/code&gt; parameter will be stripped. | [optional]
 **projectname** | **string**| (optional) if specified, this will limit the resulting repository list to ones whose project&#39;s                     name matches this parameter&#39;s value. The match will be done case-insensitive and any leading                     and/or trailing whitespace characters on the &lt;code&gt;projectname&lt;/code&gt; parameter will                     be stripped. | [optional]
 **permission** | **string**| (optional) if specified, it must be a valid repository permission level name and will limit                     the resulting repository list to ones that the requesting user has the specified permission                     level to. If not specified, the default implicit &#39;read&#39; permission level will be assumed. The                     currently supported explicit permission values are &lt;tt&gt;REPO_READ&lt;/tt&gt;, &lt;tt&gt;REPO_WRITE&lt;/tt&gt;                     and &lt;tt&gt;REPO_ADMIN&lt;/tt&gt;. | [optional]
 **visibility** | **string**| (optional) if specified, this will limit the resulting repository list based on the                     repositories visibility. Valid values are &lt;em&gt;public&lt;/em&gt; or &lt;em&gt;private&lt;/em&gt;. | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositories1**
> string getRepositories1($project_key)

getRepositories

Retrieve repositories from the project corresponding to the supplied <strong>projectKey</strong>.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified project to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | the parent project key

try {
    $result = $api_instance->getRepositories1($project_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositories1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**| the parent project key |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepository**
> string getRepository($repository_slug, $project_key)

getRepository

Retrieve the repository matching the supplied <strong>projectKey</strong> and <strong>repositorySlug</strong>.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$repository_slug = "repository_slug_example"; // string | the repository slug
$project_key = "project_key_example"; // string | the parent project key

try {
    $result = $api_instance->getRepository($repository_slug, $project_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_slug** | **string**| the repository slug |
 **project_key** | **string**| the parent project key |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryBranches**
> string getRepositoryBranches($project_key, $repository_slug, $base, $details, $filter_text, $order_by)

getRepositoryBranches

Retrieve the branches matching the supplied <strong>filterText</strong> param.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$base = "base_example"; // string | base branch or tag to compare each branch to (for the metadata providers that uses that information)
$details = true; // bool | whether to retrieve plugin-provided metadata about each branch
$filter_text = "filter_text_example"; // string | the text to match on
$order_by = "order_by_example"; // string | ordering of refs either ALPHABETICAL (by name) or MODIFICATION (last updated)

try {
    $result = $api_instance->getRepositoryBranches($project_key, $repository_slug, $base, $details, $filter_text, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryBranches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **base** | **string**| base branch or tag to compare each branch to (for the metadata providers that uses that information) | [optional]
 **details** | **bool**| whether to retrieve plugin-provided metadata about each branch | [optional]
 **filter_text** | **string**| the text to match on | [optional]
 **order_by** | **string**| ordering of refs either ALPHABETICAL (by name) or MODIFICATION (last updated) | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryChanges**
> string getRepositoryChanges($project_key, $repository_slug, $since, $until)

getRepositoryChanges

Retrieve a page of changes made in a specified commit.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$since = "since_example"; // string | the commit to which <code>until</code> should be compared to produce a page of changes.                      If not specified the commit's first parent is assumed (if one exists)
$until = "until_example"; // string | the commit to retrieve changes for

try {
    $result = $api_instance->getRepositoryChanges($project_key, $repository_slug, $since, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **since** | **string**| the commit to which &lt;code&gt;until&lt;/code&gt; should be compared to produce a page of changes.                      If not specified the commit&#39;s first parent is assumed (if one exists) | [optional]
 **until** | **string**| the commit to retrieve changes for | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryCommit**
> string getRepositoryCommit($project_key, $repository_slug, $commit_id, $path)

getRepositoryCommit

Retrieve a single commit <i>identified by its ID</i>>. In general, that ID is a SHA1. <u>From 2.11, ref names  like \"refs/heads/master\" are no longer accepted by this resource.</u>  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$commit_id = "commit_id_example"; // string | the commit ID to retrieve
$path = "path_example"; // string | an optional path to filter the commit by. If supplied the details returned <i>may not</i>              be for the specified commit. Instead, starting from the specified commit, they will be the              details for the first commit affecting the specified path.

try {
    $result = $api_instance->getRepositoryCommit($project_key, $repository_slug, $commit_id, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryCommit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **commit_id** | **string**| the commit ID to retrieve |
 **path** | **string**| an optional path to filter the commit by. If supplied the details returned &lt;i&gt;may not&lt;/i&gt;              be for the specified commit. Instead, starting from the specified commit, they will be the              details for the first commit affecting the specified path. | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryCommitChanges**
> string getRepositoryCommitChanges($project_key, $repository_slug, $commit_id, $since, $with_comments)

getRepositoryCommitChanges

Retrieve a page of changes made in a specified commit.  <p>  <strong>Note:</strong> The implementation will apply a hard cap ({@code page.max.changes}) and it is not  possible to request subsequent content when that cap is exceeded.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$commit_id = "commit_id_example"; // string | the commit to retrieve changes for
$since = "since_example"; // string | the commit to which <code>until</code> should be compared to produce a page of changes.                      If not specified the commit's first parent is assumed (if one exists)
$with_comments = true; // bool | {@code true} to apply comment counts in the changes (the default); otherwise, {@code false}                      to stream changes without comment counts

try {
    $result = $api_instance->getRepositoryCommitChanges($project_key, $repository_slug, $commit_id, $since, $with_comments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryCommitChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **commit_id** | **string**| the commit to retrieve changes for |
 **since** | **string**| the commit to which &lt;code&gt;until&lt;/code&gt; should be compared to produce a page of changes.                      If not specified the commit&#39;s first parent is assumed (if one exists) | [optional]
 **with_comments** | **bool**| {@code true} to apply comment counts in the changes (the default); otherwise, {@code false}                      to stream changes without comment counts | [optional] [default to true]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryCommitComment**
> string getRepositoryCommitComment($project_key, $repository_slug, $commit_id, $comment_id)

getRepositoryCommitComment

Retrieves a commit discussion comment.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the commit  is in to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$commit_id = "commit_id_example"; // string | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository
$comment_id = 789; // int | the ID of the comment to retrieve

try {
    $result = $api_instance->getRepositoryCommitComment($project_key, $repository_slug, $commit_id, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryCommitComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **commit_id** | **string**| the &lt;i&gt;full {@link Changeset#getId() ID}&lt;/i&gt; of the commit within the repository |
 **comment_id** | **int**| the ID of the comment to retrieve |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryCommitComments**
> object getRepositoryCommitComments($project_key, $repository_slug, $commit_id, $path, $since)

getRepositoryCommitComments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$commit_id = "commit_id_example"; // string | 
$path = "path_example"; // string | 
$since = "since_example"; // string | 

try {
    $result = $api_instance->getRepositoryCommitComments($project_key, $repository_slug, $commit_id, $path, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryCommitComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **commit_id** | **string**|  |
 **path** | **string**|  | [optional]
 **since** | **string**|  | [optional]

### Return type

**object**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryCommitDiff**
> string getRepositoryCommitDiff($project_key, $repository_slug, $commit_id, $context_lines, $since, $src_path, $whitespace, $with_comments)

getRepositoryCommitDiff

Retrieve the diff between two provided revisions.  <p>  <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally apply a hard cap  to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded. In the event  that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags will be set to  <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$commit_id = "commit_id_example"; // string | 
$context_lines = -1; // int | the number of context lines to include around added/removed lines in the diff
$since = "since_example"; // string | the base revision to diff from. If omitted the parent revision of the until revision is used
$src_path = "src_path_example"; // string | the source path for the file, if it was copied, moved or renamed
$whitespace = "whitespace_example"; // string | optional whitespace flag which can be set to <code>ignore-all</code>
$with_comments = true; // bool | <code>true</code> to embed comments in the diff (the default); otherwise <code>false</code>                      to stream the diff without comments

try {
    $result = $api_instance->getRepositoryCommitDiff($project_key, $repository_slug, $commit_id, $context_lines, $since, $src_path, $whitespace, $with_comments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryCommitDiff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **commit_id** | **string**|  |
 **context_lines** | **int**| the number of context lines to include around added/removed lines in the diff | [optional] [default to -1]
 **since** | **string**| the base revision to diff from. If omitted the parent revision of the until revision is used | [optional]
 **src_path** | **string**| the source path for the file, if it was copied, moved or renamed | [optional]
 **whitespace** | **string**| optional whitespace flag which can be set to &lt;code&gt;ignore-all&lt;/code&gt; | [optional]
 **with_comments** | **bool**| &lt;code&gt;true&lt;/code&gt; to embed comments in the diff (the default); otherwise &lt;code&gt;false&lt;/code&gt;                      to stream the diff without comments | [optional] [default to true]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryCommitDiffByPath**
> string getRepositoryCommitDiffByPath($project_key, $repository_slug, $path, $commit_id, $context_lines, $since, $src_path, $whitespace, $with_comments)

getRepositoryCommitDiffByPath

Retrieve the diff between two provided revisions.  <p>  <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally apply a hard cap  to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded. In the event  that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags will be set to  <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$path = "path_example"; // string | the path to the file which should be diffed (optional)
$commit_id = "commit_id_example"; // string | 
$context_lines = -1; // int | the number of context lines to include around added/removed lines in the diff
$since = "since_example"; // string | the base revision to diff from. If omitted the parent revision of the until revision is used
$src_path = "src_path_example"; // string | the source path for the file, if it was copied, moved or renamed
$whitespace = "whitespace_example"; // string | optional whitespace flag which can be set to <code>ignore-all</code>
$with_comments = true; // bool | <code>true</code> to embed comments in the diff (the default); otherwise <code>false</code>                      to stream the diff without comments

try {
    $result = $api_instance->getRepositoryCommitDiffByPath($project_key, $repository_slug, $path, $commit_id, $context_lines, $since, $src_path, $whitespace, $with_comments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryCommitDiffByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **path** | **string**| the path to the file which should be diffed (optional) |
 **commit_id** | **string**|  |
 **context_lines** | **int**| the number of context lines to include around added/removed lines in the diff | [optional] [default to -1]
 **since** | **string**| the base revision to diff from. If omitted the parent revision of the until revision is used | [optional]
 **src_path** | **string**| the source path for the file, if it was copied, moved or renamed | [optional]
 **whitespace** | **string**| optional whitespace flag which can be set to &lt;code&gt;ignore-all&lt;/code&gt; | [optional]
 **with_comments** | **bool**| &lt;code&gt;true&lt;/code&gt; to embed comments in the diff (the default); otherwise &lt;code&gt;false&lt;/code&gt;                      to stream the diff without comments | [optional] [default to true]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryCommits**
> string getRepositoryCommits($project_key, $repository_slug, $path, $since, $until, $with_counts)

getRepositoryCommits

Retrieve a page of commits from a given starting commit or \"between\" two commits. If no explicit commit is  specified, the tip of the repository's default branch is assumed. commits may be identified by branch or tag  name or by ID. A path may be supplied to restrict the returned commits to only those which affect that path.  <p>  The authenticated user must have <b>REPO_READ</b> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$path = "path_example"; // string | an optional path to filter commits by
$since = "since_example"; // string | the commit ID or ref (exclusively) to retrieve commits after
$until = "until_example"; // string | the commit ID (SHA1) or ref (inclusively) to retrieve commits before
$with_counts = false; // bool | optionally include the total number of commits and total number of unique authors

try {
    $result = $api_instance->getRepositoryCommits($project_key, $repository_slug, $path, $since, $until, $with_counts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryCommits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **path** | **string**| an optional path to filter commits by | [optional]
 **since** | **string**| the commit ID or ref (exclusively) to retrieve commits after | [optional]
 **until** | **string**| the commit ID (SHA1) or ref (inclusively) to retrieve commits before | [optional]
 **with_counts** | **bool**| optionally include the total number of commits and total number of unique authors | [optional] [default to false]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryContent**
> string getRepositoryContent($project_key, $repository_slug, $at, $type, $blame, $no_content)

getRepositoryContent

Retrieve a page of content for a file path at a specified revision.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$at = "at_example"; // string | the changeset id or ref to retrieve the content for.
$type = false; // bool | if true only the type will be returned for the file path instead of the contents.
$blame = "blame_example"; // string | if present the blame will be returned for the file as well.
$no_content = "no_content_example"; // string | if present and used with blame only the blame is retrieved instead of the contents.

try {
    $result = $api_instance->getRepositoryContent($project_key, $repository_slug, $at, $type, $blame, $no_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **at** | **string**| the changeset id or ref to retrieve the content for. | [optional]
 **type** | **bool**| if true only the type will be returned for the file path instead of the contents. | [optional] [default to false]
 **blame** | **string**| if present the blame will be returned for the file as well. | [optional]
 **no_content** | **string**| if present and used with blame only the blame is retrieved instead of the contents. | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryContentByPath**
> string getRepositoryContentByPath($project_key, $repository_slug, $path, $at, $type, $blame, $no_content)

getRepositoryContentByPath

Retrieve a page of content for a file path at a specified revision.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$path = "path_example"; // string | the file path to retrieve content from
$at = "at_example"; // string | the changeset id or ref to retrieve the content for.
$type = false; // bool | if true only the type will be returned for the file path instead of the contents.
$blame = "blame_example"; // string | if present the blame will be returned for the file as well.
$no_content = "no_content_example"; // string | if present and used with blame only the blame is retrieved instead of the contents.

try {
    $result = $api_instance->getRepositoryContentByPath($project_key, $repository_slug, $path, $at, $type, $blame, $no_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryContentByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **path** | **string**| the file path to retrieve content from |
 **at** | **string**| the changeset id or ref to retrieve the content for. | [optional]
 **type** | **bool**| if true only the type will be returned for the file path instead of the contents. | [optional] [default to false]
 **blame** | **string**| if present the blame will be returned for the file as well. | [optional]
 **no_content** | **string**| if present and used with blame only the blame is retrieved instead of the contents. | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryDefaultBranch**
> string getRepositoryDefaultBranch($project_key, $repository_slug)

getRepositoryDefaultBranch

Get the default branch of the repository.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 

try {
    $result = $api_instance->getRepositoryDefaultBranch($project_key, $repository_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryDefaultBranch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **getRepositoryGroupsWithAnyPermission**
> string getRepositoryGroupsWithAnyPermission($project_key, $repository_slug, $filter)

getRepositoryGroupsWithAnyPermission

Retrieve a page of groups that have been granted at least one permission for the specified repository.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher  project or global permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$filter = "filter_example"; // string | if specified only group names containing the supplied string will be returned

try {
    $result = $api_instance->getRepositoryGroupsWithAnyPermission($project_key, $repository_slug, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryGroupsWithAnyPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **filter** | **string**| if specified only group names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryGroupsWithoutAnyPermission**
> string getRepositoryGroupsWithoutAnyPermission($project_key, $repository_slug, $filter)

getRepositoryGroupsWithoutAnyPermission

Retrieve a page of groups that have no granted permissions for the specified repository.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher  project or global permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$filter = "filter_example"; // string | if specified only group names containing the supplied string will be returned

try {
    $result = $api_instance->getRepositoryGroupsWithoutAnyPermission($project_key, $repository_slug, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryGroupsWithoutAnyPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **filter** | **string**| if specified only group names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryHook**
> string getRepositoryHook($project_key, $repository_slug, $hook_key)

getRepositoryHook

Retrieve a repository hook for this repositories.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$hook_key = "hook_key_example"; // string | 

try {
    $result = $api_instance->getRepositoryHook($project_key, $repository_slug, $hook_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **hook_key** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryHookSettings**
> string getRepositoryHookSettings($project_key, $repository_slug, $hook_key)

getRepositoryHookSettings

Retrieve the settings for a repository hook for this repositories.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$hook_key = "hook_key_example"; // string | 

try {
    $result = $api_instance->getRepositoryHookSettings($project_key, $repository_slug, $hook_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryHookSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **hook_key** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryHooks**
> string getRepositoryHooks($project_key, $repository_slug, $type)

getRepositoryHooks

Retrieve a page of repository hooks for this repository.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$type = "type_example"; // string | the optional type to filter by. Valid values are <code>PRE_RECEIVE</code> or <code>POST_RECEIVE</code>

try {
    $result = $api_instance->getRepositoryHooks($project_key, $repository_slug, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryHooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **type** | **string**| the optional type to filter by. Valid values are &lt;code&gt;PRE_RECEIVE&lt;/code&gt; or &lt;code&gt;POST_RECEIVE&lt;/code&gt; | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryTags**
> string getRepositoryTags($project_key, $repository_slug, $filter_text, $order_by)

getRepositoryTags

Retrieve the tags matching the supplied <strong>filterText</strong> param.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the context repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$filter_text = "filter_text_example"; // string | the text to match on
$order_by = "order_by_example"; // string | ordering of refs either ALPHABETICAL (by name) or MODIFICATION (last updated)

try {
    $result = $api_instance->getRepositoryTags($project_key, $repository_slug, $filter_text, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **filter_text** | **string**| the text to match on | [optional]
 **order_by** | **string**| ordering of refs either ALPHABETICAL (by name) or MODIFICATION (last updated) | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryUsersWithAnyPermission**
> string getRepositoryUsersWithAnyPermission($project_key, $repository_slug, $filter)

getRepositoryUsersWithAnyPermission

Retrieve a page of users that have been granted at least one permission for the specified repository.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher  project or global permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$filter = "filter_example"; // string | if specified only group names containing the supplied string will be returned

try {
    $result = $api_instance->getRepositoryUsersWithAnyPermission($project_key, $repository_slug, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryUsersWithAnyPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **filter** | **string**| if specified only group names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryUsersWithoutPermission**
> string getRepositoryUsersWithoutPermission($project_key, $repository_slug, $filter)

getRepositoryUsersWithoutPermission

Retrieve a page of <i>licensed</i> users that have no granted permissions for the specified repository.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher  project or global permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$filter = "filter_example"; // string | if specified only group names containing the supplied string will be returned

try {
    $result = $api_instance->getRepositoryUsersWithoutPermission($project_key, $repository_slug, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->getRepositoryUsersWithoutPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **filter** | **string**| if specified only group names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRepositoryFiles**
> string listRepositoryFiles($project_key, $repository_slug, $at)

listRepositoryFiles

Retrieve a page of files from particular directory of a repository. The search is done recursively, so all files  from any sub-directory of the specified directory will be returned.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$at = "at_example"; // string | the changeset id or ref (e.g. a branch or tag) to list the files at.              If not specified the default branch will be used instead.

try {
    $result = $api_instance->listRepositoryFiles($project_key, $repository_slug, $at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->listRepositoryFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **at** | **string**| the changeset id or ref (e.g. a branch or tag) to list the files at.              If not specified the default branch will be used instead. | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRepositoryFilesByPath**
> string listRepositoryFilesByPath($project_key, $repository_slug, $path, $at)

listRepositoryFilesByPath

Retrieve a page of files from particular directory of a repository. The search is done recursively, so all files  from any sub-directory of the specified directory will be returned.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$path = "path_example"; // string | the directory to list files for.
$at = "at_example"; // string | the changeset id or ref (e.g. a branch or tag) to list the files at.              If not specified the default branch will be used instead.

try {
    $result = $api_instance->listRepositoryFilesByPath($project_key, $repository_slug, $path, $at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->listRepositoryFilesByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **path** | **string**| the directory to list files for. |
 **at** | **string**| the changeset id or ref (e.g. a branch or tag) to list the files at.              If not specified the default branch will be used instead. | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repositoryCompareChanges**
> string repositoryCompareChanges($project_key, $repository_slug, $from, $to, $from_repo)

repositoryCompareChanges

Gets the file changes available in the {@code from} changeset but not in the {@code to} changeset.  <p>  If either the {@code from} or {@code to} changeset are not specified, they will be replaced by the  default branch of their containing repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$from = "from_example"; // string | the source changeset (can be a partial/full changeset id or qualified/unqualified ref name)
$to = "to_example"; // string | the target changeset (can be a partial/full changeset id or qualified/unqualified ref name)
$from_repo = "from_repo_example"; // string | an optional parameter specifying the source repository containing the source changeset                  if that changeset is not present in the current repository; the repository can be specified                  by either its ID <em>fromRepo=42</em> or by its project key plus its repo slug separated by                  a slash: <em>fromRepo=projectKey/repoSlug</em>

try {
    $result = $api_instance->repositoryCompareChanges($project_key, $repository_slug, $from, $to, $from_repo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->repositoryCompareChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **from** | **string**| the source changeset (can be a partial/full changeset id or qualified/unqualified ref name) | [optional]
 **to** | **string**| the target changeset (can be a partial/full changeset id or qualified/unqualified ref name) | [optional]
 **from_repo** | **string**| an optional parameter specifying the source repository containing the source changeset                  if that changeset is not present in the current repository; the repository can be specified                  by either its ID &lt;em&gt;fromRepo&#x3D;42&lt;/em&gt; or by its project key plus its repo slug separated by                  a slash: &lt;em&gt;fromRepo&#x3D;projectKey/repoSlug&lt;/em&gt; | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repositoryCompareCommits**
> string repositoryCompareCommits($project_key, $repository_slug, $from, $to, $from_repo)

repositoryCompareCommits

Gets the commits accessible from the {@code from} changeset but not in the {@code to} changeset.  <p>  If either the {@code from} or {@code to} changeset are not specified, they will be replaced by the  default branch of their containing repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$from = "from_example"; // string | the source changeset (can be a partial/full changeset id or qualified/unqualified ref name)
$to = "to_example"; // string | the target changeset (can be a partial/full changeset id or qualified/unqualified ref name)
$from_repo = "from_repo_example"; // string | an optional parameter specifying the source repository containing the source changeset                  if that changeset is not present in the current repository; the repository can be specified                  by either its ID <em>fromRepo=42</em> or by its project key plus its repo slug separated by                  a slash: <em>fromRepo=projectKey/repoSlug</em>

try {
    $result = $api_instance->repositoryCompareCommits($project_key, $repository_slug, $from, $to, $from_repo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->repositoryCompareCommits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **from** | **string**| the source changeset (can be a partial/full changeset id or qualified/unqualified ref name) | [optional]
 **to** | **string**| the target changeset (can be a partial/full changeset id or qualified/unqualified ref name) | [optional]
 **from_repo** | **string**| an optional parameter specifying the source repository containing the source changeset                  if that changeset is not present in the current repository; the repository can be specified                  by either its ID &lt;em&gt;fromRepo&#x3D;42&lt;/em&gt; or by its project key plus its repo slug separated by                  a slash: &lt;em&gt;fromRepo&#x3D;projectKey/repoSlug&lt;/em&gt; | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repositoryCompareDiffByPath**
> string repositoryCompareDiffByPath($project_key, $repository_slug, $path, $from, $to, $from_repo, $src_path, $context_lines, $whitespace)

repositoryCompareDiffByPath

Gets a diff of the changes available in the {@code from} changeset but not in the {@code to} changeset.  <p>  If either the {@code from} or {@code to} changeset are not specified, they will be replaced by the  default branch of their containing repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$path = "path_example"; // string | the path to the file to diff (optional)
$from = "from_example"; // string | the source changeset (can be a partial/full changeset id or qualified/unqualified ref name)
$to = "to_example"; // string | the target changeset (can be a partial/full changeset id or qualified/unqualified ref name)
$from_repo = "from_repo_example"; // string | an optional parameter specifying the source repository containing the source changeset                  if that changeset is not present in the current repository; the repository can be specified                  by either its ID <em>fromRepo=42</em> or by its project key plus its repo slug separated by                  a slash: <em>fromRepo=projectKey/repoSlug</em>
$src_path = "src_path_example"; // string | 
$context_lines = -1; // int | an optional number of context lines to include around each added or removed lines in the diff
$whitespace = "whitespace_example"; // string | an optional whitespace flag which can be set to <code>ignore-all</code>

try {
    $result = $api_instance->repositoryCompareDiffByPath($project_key, $repository_slug, $path, $from, $to, $from_repo, $src_path, $context_lines, $whitespace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->repositoryCompareDiffByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **path** | **string**| the path to the file to diff (optional) |
 **from** | **string**| the source changeset (can be a partial/full changeset id or qualified/unqualified ref name) | [optional]
 **to** | **string**| the target changeset (can be a partial/full changeset id or qualified/unqualified ref name) | [optional]
 **from_repo** | **string**| an optional parameter specifying the source repository containing the source changeset                  if that changeset is not present in the current repository; the repository can be specified                  by either its ID &lt;em&gt;fromRepo&#x3D;42&lt;/em&gt; or by its project key plus its repo slug separated by                  a slash: &lt;em&gt;fromRepo&#x3D;projectKey/repoSlug&lt;/em&gt; | [optional]
 **src_path** | **string**|  | [optional]
 **context_lines** | **int**| an optional number of context lines to include around each added or removed lines in the diff | [optional] [default to -1]
 **whitespace** | **string**| an optional whitespace flag which can be set to &lt;code&gt;ignore-all&lt;/code&gt; | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repositoryShowDiff**
> string repositoryShowDiff($project_key, $repository_slug, $context_lines, $since, $src_path, $until, $whitespace)

repositoryShowDiff

Retrieve the diff for a specified file path between two provided revisions.  <p>  <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally apply a hard cap  to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded. In the event  that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags will be set to  <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$context_lines = -1; // int | the number of context lines to include around added/removed lines in the diff
$since = "since_example"; // string | the base revision to diff from. If omitted the parent revision of the until revision is used
$src_path = "src_path_example"; // string | the source path for the file, if it was copied, moved or renamed
$until = "until_example"; // string | the target revision to diff to (required)
$whitespace = "whitespace_example"; // string | optional whitespace flag which can be set to <code>ignore-all</code>

try {
    $result = $api_instance->repositoryShowDiff($project_key, $repository_slug, $context_lines, $since, $src_path, $until, $whitespace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->repositoryShowDiff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **context_lines** | **int**| the number of context lines to include around added/removed lines in the diff | [optional] [default to -1]
 **since** | **string**| the base revision to diff from. If omitted the parent revision of the until revision is used | [optional]
 **src_path** | **string**| the source path for the file, if it was copied, moved or renamed | [optional]
 **until** | **string**| the target revision to diff to (required) | [optional]
 **whitespace** | **string**| optional whitespace flag which can be set to &lt;code&gt;ignore-all&lt;/code&gt; | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repositoryShowDiffByPath**
> string repositoryShowDiffByPath($project_key, $repository_slug, $path, $context_lines, $since, $src_path, $until, $whitespace)

repositoryShowDiffByPath

Retrieve the diff for a specified file path between two provided revisions.  <p>  <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally apply a hard cap  to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded. In the event  that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags will be set to  <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$path = "path_example"; // string | the path to the file which should be diffed (required)
$context_lines = -1; // int | the number of context lines to include around added/removed lines in the diff
$since = "since_example"; // string | the base revision to diff from. If omitted the parent revision of the until revision is used
$src_path = "src_path_example"; // string | the source path for the file, if it was copied, moved or renamed
$until = "until_example"; // string | the target revision to diff to (required)
$whitespace = "whitespace_example"; // string | optional whitespace flag which can be set to <code>ignore-all</code>

try {
    $result = $api_instance->repositoryShowDiffByPath($project_key, $repository_slug, $path, $context_lines, $since, $src_path, $until, $whitespace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->repositoryShowDiffByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **path** | **string**| the path to the file which should be diffed (required) |
 **context_lines** | **int**| the number of context lines to include around added/removed lines in the diff | [optional] [default to -1]
 **since** | **string**| the base revision to diff from. If omitted the parent revision of the until revision is used | [optional]
 **src_path** | **string**| the source path for the file, if it was copied, moved or renamed | [optional]
 **until** | **string**| the target revision to diff to (required) | [optional]
 **whitespace** | **string**| optional whitespace flag which can be set to &lt;code&gt;ignore-all&lt;/code&gt; | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retryCreateRepository**
> string retryCreateRepository($project_key, $repository_slug)

retryCreateRepository

If a create or fork operation fails, calling this method will clean up the broken repository and try again. The  repository must be in an INITIALISATION_FAILED state.  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 

try {
    $result = $api_instance->retryCreateRepository($project_key, $repository_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->retryCreateRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **revokeRepositoryPermissionsForGroup**
> string revokeRepositoryPermissionsForGroup($project_key, $repository_slug, $name)

revokeRepositoryPermissionsForGroup

Revoke all permissions for the specified repository for a group.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher  project or global permission to call this resource.  <p>  In addition, a user may not revoke a group's permissions if it will reduce their own permission level.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$name = "name_example"; // string | the name of the group

try {
    $result = $api_instance->revokeRepositoryPermissionsForGroup($project_key, $repository_slug, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->revokeRepositoryPermissionsForGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **name** | **string**| the name of the group | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeRepositoryPermissionsForUser**
> string revokeRepositoryPermissionsForUser($project_key, $repository_slug, $name)

revokeRepositoryPermissionsForUser

Revoke all permissions for the specified repository for a user.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher  project or global permission to call this resource.  <p>  In addition, a user may not revoke their own repository permissions if they do not have a higher  project or global permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$name = "name_example"; // string | the name of the user

try {
    $result = $api_instance->revokeRepositoryPermissionsForUser($project_key, $repository_slug, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->revokeRepositoryPermissionsForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **name** | **string**| the name of the user | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRepositoryDefaultBranch**
> string setRepositoryDefaultBranch($dynamic, $project_key, $repository_slug)

setRepositoryDefaultBranch

Update the default branch of a repository.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$dynamic = NULL; // object | 
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 

try {
    $result = $api_instance->setRepositoryDefaultBranch($dynamic, $project_key, $repository_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->setRepositoryDefaultBranch: ', $e->getMessage(), PHP_EOL;
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

# **setRepositoryHookSettings**
> string setRepositoryHookSettings($dynamic, $project_key, $repository_slug, $hook_key)

setRepositoryHookSettings

Modify the settings for a repository hook for this repositories.  <p>  The service will reject any settings which are too large, the current limit is 32KB once serialized.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$dynamic = NULL; // object | 
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$hook_key = "hook_key_example"; // string | 

try {
    $result = $api_instance->setRepositoryHookSettings($dynamic, $project_key, $repository_slug, $hook_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->setRepositoryHookSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **hook_key** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRepositoryPermissionForGroup**
> string setRepositoryPermissionForGroup($project_key, $repository_slug, $permission, $name)

setRepositoryPermissionForGroup

Promote or demote a group's permission level for the specified repository. Available repository permissions are:  <ul>      <li>REPO_READ</li>      <li>REPO_WRITE</li>      <li>REPO_ADMIN</li>  </ul>  See the <a href=\"https://confluence.atlassian.com/display/STASH/Managing+permissions+for+a+repository\">Stash documentation</a>  for a detailed explanation of what each permission entails.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher  project or global permission to call this resource. In addition, a user may not demote a group's permission level if their  own permission level would be reduced as a result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$permission = "permission_example"; // string | the permission to grant
$name = "name_example"; // string | the names of the groups

try {
    $result = $api_instance->setRepositoryPermissionForGroup($project_key, $repository_slug, $permission, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->setRepositoryPermissionForGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **permission** | **string**| the permission to grant | [optional]
 **name** | **string**| the names of the groups | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRepositoryPermissionForUser**
> string setRepositoryPermissionForUser($project_key, $repository_slug, $name, $permission)

setRepositoryPermissionForUser

Promote or demote a user's permission level for the specified repository. Available repository permissions are:  <ul>      <li>REPO_READ</li>      <li>REPO_WRITE</li>      <li>REPO_ADMIN</li>  </ul>  See the <a href=\"https://confluence.atlassian.com/display/STASH/Managing+permissions+for+a+repository\">Stash documentation</a>  for a detailed explanation of what each permission entails.  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher  project or global permission to call this resource. In addition, a user may not reduce their own permission level unless  they have a project or global permission that already implies that permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$name = "name_example"; // string | the names of the users
$permission = "permission_example"; // string | the permission to grant

try {
    $result = $api_instance->setRepositoryPermissionForUser($project_key, $repository_slug, $name, $permission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->setRepositoryPermissionForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **name** | **string**| the names of the users | [optional]
 **permission** | **string**| the permission to grant | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unwatchRepositoryCommit**
> string unwatchRepositoryCommit($project_key, $repository_slug, $commit_id)

unwatchRepositoryCommit

Removes the authenticated user as a watcher for the specified commit.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository containing the commit  to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$commit_id = "commit_id_example"; // string | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository

try {
    $result = $api_instance->unwatchRepositoryCommit($project_key, $repository_slug, $commit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->unwatchRepositoryCommit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **commit_id** | **string**| the &lt;i&gt;full {@link Changeset#getId() ID}&lt;/i&gt; of the commit within the repository |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository**
> string updateRepository($dynamic, $repository_slug, $project_key)

updateRepository

Update the repository matching the <strong>repositorySlug</strong> supplied in the resource path.  <p>  The repository's slug is derived from its name. If the name changes the slug may also change.  <p>  This API can be used to move the repository to a different project by setting the new project in the request,  example: {@code {\"project\":{\"key\":\"NEW_KEY\"}}} .  <p>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$dynamic = NULL; // object | 
$repository_slug = "repository_slug_example"; // string | the repository slug
$project_key = "project_key_example"; // string | the parent project key

try {
    $result = $api_instance->updateRepository($dynamic, $repository_slug, $project_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->updateRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **repository_slug** | **string**| the repository slug |
 **project_key** | **string**| the parent project key |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepositoryCommitComment**
> string updateRepositoryCommitComment($dynamic, $project_key, $repository_slug, $commit_id, $comment_id)

updateRepositoryCommitComment

Update the text of a comment. Only the user who created a comment may update it.  <p>  <strong>Note:</strong> the supplied supplied JSON object must contain a <code>version</code> that must match  the server's version of the comment or the update will fail. To determine the current version of the comment,  the comment should be fetched from the server prior to the update. Look for the 'version' attribute in the  returned JSON structure.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the commit  is in to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$dynamic = NULL; // object | 
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$commit_id = "commit_id_example"; // string | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository
$comment_id = 789; // int | the ID of the comment to retrieve

try {
    $result = $api_instance->updateRepositoryCommitComment($dynamic, $project_key, $repository_slug, $commit_id, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->updateRepositoryCommitComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **commit_id** | **string**| the &lt;i&gt;full {@link Changeset#getId() ID}&lt;/i&gt; of the commit within the repository |
 **comment_id** | **int**| the ID of the comment to retrieve |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchRepositoryCommit**
> string watchRepositoryCommit($project_key, $repository_slug, $commit_id)

watchRepositoryCommit

Adds the authenticated user as a watcher for the specified commit.  <p>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository containing the commit  to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\RepositoryApi();
$project_key = "project_key_example"; // string | 
$repository_slug = "repository_slug_example"; // string | 
$commit_id = "commit_id_example"; // string | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository

try {
    $result = $api_instance->watchRepositoryCommit($project_key, $repository_slug, $commit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryApi->watchRepositoryCommit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **repository_slug** | **string**|  |
 **commit_id** | **string**| the &lt;i&gt;full {@link Changeset#getId() ID}&lt;/i&gt; of the commit within the repository |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

