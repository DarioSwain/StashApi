# Swagger\Client\UserApi

All URIs are relative to *http://example.com/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserAvatar**](UserApi.md#deleteUserAvatar) | **DELETE** /api/1.0/users/{userSlug}/avatar.png | deleteUserAvatar
[**getUser**](UserApi.md#getUser) | **GET** /api/1.0/users/{userSlug} | getUser
[**getUserSettings**](UserApi.md#getUserSettings) | **GET** /api/1.0/users/{userSlug}/settings | getUserSettings
[**getUsers1**](UserApi.md#getUsers1) | **GET** /api/1.0/users | getUsers
[**updateUserDetails1**](UserApi.md#updateUserDetails1) | **PUT** /api/1.0/users | updateUserDetails
[**updateUserPassword1**](UserApi.md#updateUserPassword1) | **PUT** /api/1.0/users/credentials | updateUserPassword
[**updateUserSettings**](UserApi.md#updateUserSettings) | **POST** /api/1.0/users/{userSlug}/settings | updateUserSettings
[**uploadUserAvatar**](UserApi.md#uploadUserAvatar) | **POST** /api/1.0/users/{userSlug}/avatar.png | uploadUserAvatar


# **deleteUserAvatar**
> string deleteUserAvatar($user_slug)

deleteUserAvatar

Delete the avatar associated to a user.  <p>  Users are always allowed to delete their own avatar. To delete someone else's avatar the authenticated user must  have global <strong>ADMIN</strong> permission, or global <strong>SYS_ADMIN</strong> permission to update a  <strong>SYS_ADMIN</strong> user's avatar.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\UserApi();
$user_slug = "user_slug_example"; // string | 

try {
    $result = $api_instance->deleteUserAvatar($user_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_slug** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> string getUser($user_slug)

getUser

Retrieve the user matching the supplied <strong>userSlug</strong>.  <p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\UserApi();
$user_slug = "user_slug_example"; // string | 

try {
    $result = $api_instance->getUser($user_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_slug** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserSettings**
> string getUserSettings($user_slug)

getUserSettings

Retrieve a map of user setting key values for a specific user identified by the user slug.  <p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\UserApi();
$user_slug = "user_slug_example"; // string | 

try {
    $result = $api_instance->getUserSettings($user_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_slug** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers1**
> string getUsers1()

getUsers

Retrieve a page of users, optionally run through provided filters.  <p>  Only authenticated users may call this resource.   <h3>Supported Filters</h3>  <p>  Filters are provided in query parameters in a standard <code>name=value</code> fashion. The following filters are  currently supported:  <ul>      <li>          {@code filter} - return only users, whose username, name or email address <i>contain</i> the          {@code filter} value      </li>      <li>          {@code permission} - the \"root\" of a permission filter, whose value must be a valid global,          project, or repository permission. Additional filter parameters referring to this filter that specify the          resource (project or repository) to apply the filter to must be prefixed with <code>permission.</code>. See the          section \"Permission Filters\" below for more details.      </li>      <li>          {@code permission.N} - the \"root\" of a single permission filter, similar to the {@code permission}          parameter, where \"N\" is a natural number starting from 1. This allows clients to specify multiple permission          filters, by providing consecutive filters as {@code permission.1}, {@code permission.2} etc. Note that          the filters numbering has to start with 1 and be continuous for all filters to be processed. The total allowed          number of permission filters is 50 and all filters exceeding that limit will be dropped. See the section          \"Permission Filters\" below for more details on how the permission filters are processed.      </li>  </ul>     <h3>Permission Filters</h3>  <p>  The following three sub-sections list parameters supported for permission filters (where <code>[root]</code> is  the root permission filter name, e.g. {@code permission}, {@code permission.1} etc.) depending on the  permission resource. The system determines which filter to apply (Global, Project or Repository permission)  based on the <code>[root]</code> permission value. E.g. {@code ADMIN} is a global permission,  {@code PROJECT_ADMIN} is a project permission and {@code REPO_ADMIN} is a repository permission. Note  that the parameters for a given resource will be looked up in the order as they are listed below, that is e.g.  for a project resource, if both {@code projectId} and {@code projectKey} are provided, the system will  use {@code projectId} for the lookup.  <h4>Global permissions</h4>  <p>  The permission value under <code>[root]</code> is the only required and recognized parameter, as global  permissions do not apply to a specific resource.  <p>  Example valid filter: <code>permission=ADMIN</code>.  <h4>Project permissions</h4>  <ul>      <li><code>[root]</code>- specifies the project permission</li>      <li><code>[root].projectId</code> - specifies the project ID to lookup the project by</li>      <li><code>[root].projectKey</code> - specifies the project key to lookup the project by</li>  </ul>  <p>  Example valid filter: <code>permission.1=PROJECT_ADMIN&permission.1.projectKey=TEST_PROJECT</code>.  <h4>Repository permissions</h4>  <ul>      <li><code>[root]</code>- specifies the repository permission</li>      <li><code>[root].projectId</code> - specifies the repository ID to lookup the repository by</li>      <li><code>[root].projectKey</code> and <code>[root].repositorySlug</code>- specifies the project key and      repository slug to lookup the repository by; both values <i>need to</i> be provided for this look up to be      triggered</li>  </ul>  Example valid filter: <code>permission.2=REPO_ADMIN&permission.2.projectKey=TEST_PROJECT&permission.2.repositorySlug=test_repo</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\UserApi();

try {
    $result = $api_instance->getUsers1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUsers1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserDetails1**
> string updateUserDetails1($dynamic)

updateUserDetails

Update the currently authenticated user's details. Note that <em>the name attribute is ignored</em>, the update  will always be applied to the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\UserApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->updateUserDetails1($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserDetails1: ', $e->getMessage(), PHP_EOL;
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

# **updateUserPassword1**
> string updateUserPassword1($dynamic)

updateUserPassword

Update the currently authenticated user's password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\UserApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->updateUserPassword1($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserPassword1: ', $e->getMessage(), PHP_EOL;
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

# **updateUserSettings**
> string updateUserSettings($dynamic, $user_slug)

updateUserSettings

Update the entries of a map of user setting key/values for a specific user identified by the user slug.  <p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\UserApi();
$dynamic = NULL; // object | 
$user_slug = "user_slug_example"; // string | 

try {
    $result = $api_instance->updateUserSettings($dynamic, $user_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **user_slug** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadUserAvatar**
> string uploadUserAvatar($user_slug)

uploadUserAvatar

Update the avatar for the user with the supplied <strong>slug</strong>.  <p>  This resource accepts POST multipart form data, containing a single image in a form-field named 'avatar'.  <p>  There are configurable server limits on both the dimensions (1024x1024 pixels by default) and uploaded  file size (1MB by default). Several different image formats are supported, but <strong>PNG</strong> and  <strong>JPEG</strong> are preferred due to the file size limit.  <p>  This resource has Cross-Site Request Forgery (XSRF) protection. To allow the request to  pass the XSRF check the caller needs to send an <code>X-Atlassian-Token</code> HTTP header with the  value <code>no-check</code>.  <p>  An example <a href=\"http://curl.haxx.se/\">curl</a> request to upload an image name 'avatar.png' would be:  <pre>  curl -X POST -u username:password -H \"X-Atlassian-Token: no-check\" http://example.com/rest/api/latest/users/jdoe/avatar.png -F avatar=@avatar.png  </pre>  <p>  Users are always allowed to update their own avatar. To update someone else's avatar the authenticated user must  have global <strong>ADMIN</strong> permission, or global <strong>SYS_ADMIN</strong> permission to update a  <strong>SYS_ADMIN</strong> user's avatar.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\UserApi();
$user_slug = "user_slug_example"; // string | 

try {
    $result = $api_instance->uploadUserAvatar($user_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->uploadUserAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_slug** | **string**|  |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

