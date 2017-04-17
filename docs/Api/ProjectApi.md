# Swagger\Client\ProjectApi

All URIs are relative to *http://example.com/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProject**](ProjectApi.md#createProject) | **POST** /api/1.0/projects | createProject
[**deleteProject**](ProjectApi.md#deleteProject) | **DELETE** /api/1.0/projects/{projectKey} | deleteProject
[**getProject**](ProjectApi.md#getProject) | **GET** /api/1.0/projects/{projectKey} | getProject
[**getProjectAvatar**](ProjectApi.md#getProjectAvatar) | **GET** /api/1.0/projects/{projectKey}/avatar.png | getProjectAvatar
[**getProjectGroupsWithAnyPermission**](ProjectApi.md#getProjectGroupsWithAnyPermission) | **GET** /api/1.0/projects/{projectKey}/permissions/groups | getProjectGroupsWithAnyPermission
[**getProjectGroupsWithoutAnyPermission**](ProjectApi.md#getProjectGroupsWithoutAnyPermission) | **GET** /api/1.0/projects/{projectKey}/permissions/groups/none | getProjectGroupsWithoutAnyPermission
[**getProjectUsersWithAnyPermission**](ProjectApi.md#getProjectUsersWithAnyPermission) | **GET** /api/1.0/projects/{projectKey}/permissions/users | getProjectUsersWithAnyPermission
[**getProjectUsersWithoutPermission**](ProjectApi.md#getProjectUsersWithoutPermission) | **GET** /api/1.0/projects/{projectKey}/permissions/users/none | getProjectUsersWithoutPermission
[**getProjects**](ProjectApi.md#getProjects) | **GET** /api/1.0/projects | getProjects
[**hasProjectAllUserPermission**](ProjectApi.md#hasProjectAllUserPermission) | **GET** /api/1.0/projects/{projectKey}/permissions/{permission}/all | hasProjectAllUserPermission
[**modifyProjectAllUserPermission**](ProjectApi.md#modifyProjectAllUserPermission) | **POST** /api/1.0/projects/{projectKey}/permissions/{permission}/all | modifyProjectAllUserPermission
[**revokeProjectPermissionsForGroup**](ProjectApi.md#revokeProjectPermissionsForGroup) | **DELETE** /api/1.0/projects/{projectKey}/permissions/groups | revokeProjectPermissionsForGroup
[**revokeProjectPermissionsForUser**](ProjectApi.md#revokeProjectPermissionsForUser) | **DELETE** /api/1.0/projects/{projectKey}/permissions/users | revokeProjectPermissionsForUser
[**setProjectPermissionForGroups**](ProjectApi.md#setProjectPermissionForGroups) | **PUT** /api/1.0/projects/{projectKey}/permissions/groups | setProjectPermissionForGroups
[**setProjectPermissionForUsers**](ProjectApi.md#setProjectPermissionForUsers) | **PUT** /api/1.0/projects/{projectKey}/permissions/users | setProjectPermissionForUsers
[**updateProject**](ProjectApi.md#updateProject) | **PUT** /api/1.0/projects/{projectKey} | updateProject
[**uploadProjectAvatar**](ProjectApi.md#uploadProjectAvatar) | **POST** /api/1.0/projects/{projectKey}/avatar.png | uploadProjectAvatar


# **createProject**
> string createProject($dynamic)

createProject

Create a new project.  <p>  To include a custom avatar for the project, the project definition should contain an additional attribute with  the key <code>avatar</code> and the value a data URI containing Base64-encoded image data. The URI should be in  the following format:  <pre>      data:(content type, e.g. image/png);base64,(data)  </pre>  If the data is not Base64-encoded, or if a character set is defined in the URI, or the URI is otherwise invalid,  <em>project creation will fail</em>.  <p>  The authenticated user must have <strong>PROJECT_CREATE</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->createProject($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->createProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProject**
> string deleteProject($project_key)

deleteProject

Delete the project matching the supplied <strong>projectKey</strong>.  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$project_key = "project_key_example"; // string | 

try {
    $result = $api_instance->deleteProject($project_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProject**
> string getProject($project_key)

getProject

Retrieve the project matching the supplied <strong>projectKey</strong>.  <p>  The authenticated user must have <strong>PROJECT_VIEW</strong> permission for the specified project to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$project_key = "project_key_example"; // string | 

try {
    $result = $api_instance->getProject($project_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectAvatar**
> string getProjectAvatar($project_key, $s)

getProjectAvatar

Retrieve the avatar for the project matching the supplied <strong>projectKey</strong>.  <p>  The authenticated user must have <strong>PROJECT_VIEW</strong> permission for the specified project to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$project_key = "project_key_example"; // string | 
$s = 0; // int | The desired size of the image. The server will return an image as close as possible to the specified              size.

try {
    $result = $api_instance->getProjectAvatar($project_key, $s);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **s** | **int**| The desired size of the image. The server will return an image as close as possible to the specified              size. | [optional] [default to 0]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectGroupsWithAnyPermission**
> string getProjectGroupsWithAnyPermission($project_key, $filter)

getProjectGroupsWithAnyPermission

Retrieve a page of groups that have been granted at least one permission for the specified project.  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher  global permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$project_key = "project_key_example"; // string | 
$filter = "filter_example"; // string | if specified only group names containing the supplied string will be returned

try {
    $result = $api_instance->getProjectGroupsWithAnyPermission($project_key, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectGroupsWithAnyPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **filter** | **string**| if specified only group names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectGroupsWithoutAnyPermission**
> string getProjectGroupsWithoutAnyPermission($project_key, $filter)

getProjectGroupsWithoutAnyPermission

Retrieve a page of groups that have no granted permissions for the specified project.  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher  global permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$project_key = "project_key_example"; // string | 
$filter = "filter_example"; // string | if specified only group names containing the supplied string will be returned

try {
    $result = $api_instance->getProjectGroupsWithoutAnyPermission($project_key, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectGroupsWithoutAnyPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **filter** | **string**| if specified only group names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectUsersWithAnyPermission**
> string getProjectUsersWithAnyPermission($project_key, $filter)

getProjectUsersWithAnyPermission

Retrieve a page of users that have been granted at least one permission for the specified project.  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher  global permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$project_key = "project_key_example"; // string | 
$filter = "filter_example"; // string | if specified only group names containing the supplied string will be returned

try {
    $result = $api_instance->getProjectUsersWithAnyPermission($project_key, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectUsersWithAnyPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **filter** | **string**| if specified only group names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectUsersWithoutPermission**
> string getProjectUsersWithoutPermission($project_key, $filter)

getProjectUsersWithoutPermission

Retrieve a page of <i>licensed</i> users that have no granted permissions for the specified project.  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher  global permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$project_key = "project_key_example"; // string | 
$filter = "filter_example"; // string | if specified only group names containing the supplied string will be returned

try {
    $result = $api_instance->getProjectUsersWithoutPermission($project_key, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectUsersWithoutPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **filter** | **string**| if specified only group names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjects**
> string getProjects($name, $permission)

getProjects

Retrieve a page of projects.  <p>  Only projects for which the authenticated user has the <strong>PROJECT_VIEW</strong> permission will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$name = "name_example"; // string | 
$permission = "permission_example"; // string | 

try {
    $result = $api_instance->getProjects($name, $permission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **permission** | **string**|  | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hasProjectAllUserPermission**
> string hasProjectAllUserPermission($project_key, $permission)

hasProjectAllUserPermission

Check whether the specified permission is the default permission (granted to all users) for a project. Available  project permissions are:  <ul>      <li>PROJECT_READ</li>      <li>PROJECT_WRITE</li>      <li>PROJECT_ADMIN</li>  </ul>  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher  global permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$project_key = "project_key_example"; // string | 
$permission = "permission_example"; // string | the permission to grant

try {
    $result = $api_instance->hasProjectAllUserPermission($project_key, $permission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->hasProjectAllUserPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **permission** | **string**| the permission to grant |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyProjectAllUserPermission**
> string modifyProjectAllUserPermission($project_key, $permission, $allow)

modifyProjectAllUserPermission

Grant or revoke a project permission to all users, i.e. set the default permission. Available project permissions  are:  <ul>      <li>PROJECT_READ</li>      <li>PROJECT_WRITE</li>      <li>PROJECT_ADMIN</li>  </ul>  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher  global permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$project_key = "project_key_example"; // string | 
$permission = "permission_example"; // string | the permission to grant
$allow = true; // bool | <em>true</em> to grant the specified permission to all users, or <em>false</em> to revoke it

try {
    $result = $api_instance->modifyProjectAllUserPermission($project_key, $permission, $allow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->modifyProjectAllUserPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **permission** | **string**| the permission to grant |
 **allow** | **bool**| &lt;em&gt;true&lt;/em&gt; to grant the specified permission to all users, or &lt;em&gt;false&lt;/em&gt; to revoke it | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeProjectPermissionsForGroup**
> string revokeProjectPermissionsForGroup($project_key, $name)

revokeProjectPermissionsForGroup

Revoke all permissions for the specified project for a group.  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher  global permission to call this resource.  <p>  In addition, a user may not revoke a group's permissions if it will reduce their own permission level.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$project_key = "project_key_example"; // string | 
$name = "name_example"; // string | the name of the group

try {
    $result = $api_instance->revokeProjectPermissionsForGroup($project_key, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->revokeProjectPermissionsForGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **name** | **string**| the name of the group | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeProjectPermissionsForUser**
> string revokeProjectPermissionsForUser($project_key, $name)

revokeProjectPermissionsForUser

Revoke all permissions for the specified project for a user.  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher  global permission to call this resource.  <p>  In addition, a user may not revoke their own project permissions if they do not have a higher global permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$project_key = "project_key_example"; // string | 
$name = "name_example"; // string | the name of the user

try {
    $result = $api_instance->revokeProjectPermissionsForUser($project_key, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->revokeProjectPermissionsForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
 **name** | **string**| the name of the user | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setProjectPermissionForGroups**
> string setProjectPermissionForGroups($project_key, $permission, $name)

setProjectPermissionForGroups

Promote or demote a group's permission level for the specified project. Available project permissions are:  <ul>      <li>PROJECT_READ</li>      <li>PROJECT_WRITE</li>      <li>PROJECT_ADMIN</li>  </ul>  See the <a href=\"https://confluence.atlassian.com/display/STASH/Managing+permissions+for+a+project\">Stash documentation</a>  for a detailed explanation of what each permission entails.  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher  global permission to call this resource. In addition, a user may not demote a group's permission level if their  own permission level would be reduced as a result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$project_key = "project_key_example"; // string | 
$permission = "permission_example"; // string | the permission to grant
$name = "name_example"; // string | the names of the groups

try {
    $result = $api_instance->setProjectPermissionForGroups($project_key, $permission, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setProjectPermissionForGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
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

# **setProjectPermissionForUsers**
> string setProjectPermissionForUsers($project_key, $name, $permission)

setProjectPermissionForUsers

Promote or demote a user's permission level for the specified project. Available project permissions are:  <ul>      <li>PROJECT_READ</li>      <li>PROJECT_WRITE</li>      <li>PROJECT_ADMIN</li>  </ul>  See the <a href=\"https://confluence.atlassian.com/display/STASH/Managing+permissions+for+a+project\">Stash documentation</a>  for a detailed explanation of what each permission entails.  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher  global permission to call this resource. In addition, a user may not reduce their own permission level unless  they have a global permission that already implies that permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$project_key = "project_key_example"; // string | 
$name = "name_example"; // string | the names of the users
$permission = "permission_example"; // string | the permission to grant

try {
    $result = $api_instance->setProjectPermissionForUsers($project_key, $name, $permission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setProjectPermissionForUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |
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

# **updateProject**
> string updateProject($dynamic, $project_key)

updateProject

Update the project matching the <strong>projectKey</strong> supplied in the resource path.  <p>  To include a custom avatar for the updated project, the project definition should contain an additional attribute  with the key <code>avatar</code> and the value a data URI containing Base64-encoded image data. The URI should be  in the following format:  <code>      data:(content type, e.g. image/png);base64,(data)  </code>  If the data is not Base64-encoded, or if a character set is defined in the URI, or the URI is otherwise invalid,  <em>project creation will fail</em>.  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$dynamic = NULL; // object | 
$project_key = "project_key_example"; // string | 

try {
    $result = $api_instance->updateProject($dynamic, $project_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **project_key** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadProjectAvatar**
> string uploadProjectAvatar($project_key)

uploadProjectAvatar

Update the avatar for the project matching the supplied <strong>projectKey</strong>.  <p>  This resource accepts POST multipart form data, containing a single image in a form-field named 'avatar'.  <p>  There are configurable server limits on both the dimensions (1024x1024 pixels by default) and uploaded file size  (1MB by default). Several different image formats are supported, but <strong>PNG</strong> and  <strong>JPEG</strong> are preferred due to the file size limit.  <p>  An example <a href=\"http://curl.haxx.se/\">curl</a> request to upload an image name 'avatar.png' would be:  <pre>  curl -X POST -u username:password http://example.com/rest/api/1.0/projects/STASH/avatar.png -F avatar=@avatar.png  </pre>  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project to call this  resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProjectApi();
$project_key = "project_key_example"; // string | 

try {
    $result = $api_instance->uploadProjectAvatar($project_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->uploadProjectAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_key** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

