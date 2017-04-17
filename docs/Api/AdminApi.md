# Swagger\Client\AdminApi

All URIs are relative to *http://example.com/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGroupToUser**](AdminApi.md#addGroupToUser) | **POST** /api/1.0/admin/users/add-group | addGroupToUser
[**addUserToGroup**](AdminApi.md#addUserToGroup) | **POST** /api/1.0/admin/groups/add-user | addUserToGroup
[**addUserToGroups**](AdminApi.md#addUserToGroups) | **POST** /api/1.0/admin/users/add-groups | addUserToGroups
[**addUsersToGroup**](AdminApi.md#addUsersToGroup) | **POST** /api/1.0/admin/groups/add-users | addUsersToGroup
[**clearSenderAddress**](AdminApi.md#clearSenderAddress) | **DELETE** /api/1.0/admin/mail-server/sender-address | clearSenderAddress
[**clearUserCaptchaChallenge**](AdminApi.md#clearUserCaptchaChallenge) | **DELETE** /api/1.0/admin/users/captcha | clearUserCaptchaChallenge
[**createGroup**](AdminApi.md#createGroup) | **POST** /api/1.0/admin/groups | createGroup
[**createUser**](AdminApi.md#createUser) | **POST** /api/1.0/admin/users | createUser
[**deleteGroup**](AdminApi.md#deleteGroup) | **DELETE** /api/1.0/admin/groups | deleteGroup
[**deleteMailConfig**](AdminApi.md#deleteMailConfig) | **DELETE** /api/1.0/admin/mail-server | deleteMailConfig
[**deleteUser**](AdminApi.md#deleteUser) | **DELETE** /api/1.0/admin/users | deleteUser
[**findGroupsForUser**](AdminApi.md#findGroupsForUser) | **GET** /api/1.0/admin/users/more-members | findGroupsForUser
[**findOtherGroupsForUser**](AdminApi.md#findOtherGroupsForUser) | **GET** /api/1.0/admin/users/more-non-members | findOtherGroupsForUser
[**findUsersInGroup**](AdminApi.md#findUsersInGroup) | **GET** /api/1.0/admin/groups/more-members | findUsersInGroup
[**findUsersNotInGroup**](AdminApi.md#findUsersNotInGroup) | **GET** /api/1.0/admin/groups/more-non-members | findUsersNotInGroup
[**getClusterInformation**](AdminApi.md#getClusterInformation) | **GET** /api/1.0/admin/cluster | getClusterInformation
[**getGroups1**](AdminApi.md#getGroups1) | **GET** /api/1.0/admin/groups | getGroups
[**getGroupsWithAnyPermission**](AdminApi.md#getGroupsWithAnyPermission) | **GET** /api/1.0/admin/permissions/groups | getGroupsWithAnyPermission
[**getGroupsWithoutAnyPermission**](AdminApi.md#getGroupsWithoutAnyPermission) | **GET** /api/1.0/admin/permissions/groups/none | getGroupsWithoutAnyPermission
[**getLicense**](AdminApi.md#getLicense) | **GET** /api/1.0/admin/license | getLicense
[**getMailConfig**](AdminApi.md#getMailConfig) | **GET** /api/1.0/admin/mail-server | getMailConfig
[**getSenderAddress**](AdminApi.md#getSenderAddress) | **GET** /api/1.0/admin/mail-server/sender-address | getSenderAddress
[**getUsers**](AdminApi.md#getUsers) | **GET** /api/1.0/admin/users | getUsers
[**getUsersWithAnyPermission**](AdminApi.md#getUsersWithAnyPermission) | **GET** /api/1.0/admin/permissions/users | getUsersWithAnyPermission
[**getUsersWithoutAnyPermission**](AdminApi.md#getUsersWithoutAnyPermission) | **GET** /api/1.0/admin/permissions/users/none | getUsersWithoutAnyPermission
[**removeGroupFromUser**](AdminApi.md#removeGroupFromUser) | **POST** /api/1.0/admin/users/remove-group | removeGroupFromUser
[**removeUserFromGroup**](AdminApi.md#removeUserFromGroup) | **POST** /api/1.0/admin/groups/remove-user | removeUserFromGroup
[**renameUser**](AdminApi.md#renameUser) | **POST** /api/1.0/admin/users/rename | renameUser
[**revokePermissionsForGroup**](AdminApi.md#revokePermissionsForGroup) | **DELETE** /api/1.0/admin/permissions/groups | revokePermissionsForGroup
[**revokePermissionsForUser**](AdminApi.md#revokePermissionsForUser) | **DELETE** /api/1.0/admin/permissions/users | revokePermissionsForUser
[**setMailConfig**](AdminApi.md#setMailConfig) | **PUT** /api/1.0/admin/mail-server | setMailConfig
[**setPermissionForGroups**](AdminApi.md#setPermissionForGroups) | **PUT** /api/1.0/admin/permissions/groups | setPermissionForGroups
[**setPermissionForUsers**](AdminApi.md#setPermissionForUsers) | **PUT** /api/1.0/admin/permissions/users | setPermissionForUsers
[**setSenderAddress**](AdminApi.md#setSenderAddress) | **PUT** /api/1.0/admin/mail-server/sender-address | setSenderAddress
[**updateLicense**](AdminApi.md#updateLicense) | **POST** /api/1.0/admin/license | updateLicense
[**updateUserDetails**](AdminApi.md#updateUserDetails) | **PUT** /api/1.0/admin/users | updateUserDetails
[**updateUserPassword**](AdminApi.md#updateUserPassword) | **PUT** /api/1.0/admin/users/credentials | updateUserPassword


# **addGroupToUser**
> string addGroupToUser($dynamic)

addGroupToUser

<p><strong>Deprecated since 2.10 for removal in 4.0</strong>. Use {@code /rest/users/add-groups} instead.</p>   Add a user to a group. This is very similar to <code>groups/add-user</code>, but with the <em>context</em> and  <em>itemName</em> attributes of the supplied request entity reversed. On the face of it this may appear  redundant, but it facilitates a specific UI component in Stash.  <p>  In the request entity, the <em>context</em> attribute is the user and the <em>itemName</em> is the group.  <p>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->addGroupToUser($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->addGroupToUser: ', $e->getMessage(), PHP_EOL;
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

# **addUserToGroup**
> string addUserToGroup($dynamic)

addUserToGroup

<p><strong>Deprecated since 2.10 for removal in 4.0</strong>. Use {@code /rest/users/add-groups} instead.</p>   Add a user to a group.  <p>  In the request entity, the <em>context</em> attribute is the group and the <em>itemName</em> is the user.  <p>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->addUserToGroup($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->addUserToGroup: ', $e->getMessage(), PHP_EOL;
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

# **addUserToGroups**
> string addUserToGroups($dynamic)

addUserToGroups

Add a user to one or more groups.  <p>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->addUserToGroups($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->addUserToGroups: ', $e->getMessage(), PHP_EOL;
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

# **addUsersToGroup**
> string addUsersToGroup($dynamic)

addUsersToGroup

Add multiple users to a group.  <p>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->addUsersToGroup($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->addUsersToGroup: ', $e->getMessage(), PHP_EOL;
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

# **clearSenderAddress**
> object clearSenderAddress()

clearSenderAddress

Clears the server email address.  <p>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();

try {
    $result = $api_instance->clearSenderAddress();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->clearSenderAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearUserCaptchaChallenge**
> object clearUserCaptchaChallenge($name)

clearUserCaptchaChallenge

Clears any CAPTCHA challenge that may constrain the user with the supplied username when they authenticate.  Additionally any counter or metric that contributed towards the user being issued the CAPTCHA challenge  (for instance too many consecutive failed logins) will also be reset.  <p>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource, and may not clear  the CAPTCHA of a user with greater permissions than themselves.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$name = "name_example"; // string | 

try {
    $result = $api_instance->clearUserCaptchaChallenge($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->clearUserCaptchaChallenge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]

### Return type

**object**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroup**
> string createGroup($name)

createGroup

Create a new group.  <p>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$name = "name_example"; // string | Name of the group.

try {
    $result = $api_instance->createGroup($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the group. | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUser**
> string createUser($name, $password, $display_name, $email_address, $add_to_default_group, $notify)

createUser

Creates a new user from the assembled query parameters.  <p>  The default group can be used to control initial permissions for new users, such as granting users the ability  to login or providing read access to certain projects or repositories. If the user is not added to the default  group, they may not be able to login after their account is created until explicit permissions are configured.  <p>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$name = "name_example"; // string | the username for the new user
$password = "password_example"; // string | the password for the new user
$display_name = "display_name_example"; // string | the display name for the new user
$email_address = "email_address_example"; // string | the e-mail address for the new user
$add_to_default_group = true; // bool | <code>true</code> to add the user to the default group, which can be used to grant them                           a set of initial permissions; otherwise, <code>false</code> to not add them to a group
$notify = "notify_example"; // string | if present and not <code>false</code> instead of requiring a password,                           the create user will be notified via email their account has been created and requires                           a password to be reset. This option can only be used if a mail server has been configured

try {
    $result = $api_instance->createUser($name, $password, $display_name, $email_address, $add_to_default_group, $notify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| the username for the new user | [optional]
 **password** | **string**| the password for the new user | [optional]
 **display_name** | **string**| the display name for the new user | [optional]
 **email_address** | **string**| the e-mail address for the new user | [optional]
 **add_to_default_group** | **bool**| &lt;code&gt;true&lt;/code&gt; to add the user to the default group, which can be used to grant them                           a set of initial permissions; otherwise, &lt;code&gt;false&lt;/code&gt; to not add them to a group | [optional] [default to true]
 **notify** | **string**| if present and not &lt;code&gt;false&lt;/code&gt; instead of requiring a password,                           the create user will be notified via email their account has been created and requires                           a password to be reset. This option can only be used if a mail server has been configured | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroup**
> string deleteGroup($name)

deleteGroup

Deletes the specified group, removing them from the system. This also removes any permissions that may have been  granted to the group.  <p>  A user may not delete the last group that is granting them administrative permissions, or a group with greater  permissions than themselves.  <p>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$name = "name_example"; // string | the name identifying the group to delete

try {
    $result = $api_instance->deleteGroup($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| the name identifying the group to delete | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMailConfig**
> object deleteMailConfig()

deleteMailConfig

Deletes the current mail configuration.  <p>  The authenticated user must have the <strong>SYS_ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();

try {
    $result = $api_instance->deleteMailConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->deleteMailConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> string deleteUser($name)

deleteUser

Deletes the specified user, removing them from the system. This also removes any permissions that may have been  granted to the user.  <p>  A user may not delete themselves, and a user with <strong>ADMIN</strong> permissions may not delete a user with  <strong>SYS_ADMIN</strong>permissions.  <p>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$name = "name_example"; // string | the username identifying the user to delete

try {
    $result = $api_instance->deleteUser($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| the username identifying the user to delete | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findGroupsForUser**
> string findGroupsForUser($context, $filter)

findGroupsForUser

Retrieves a list of groups the specified user is a member of.  <p>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$context = "context_example"; // string | the user which should be used to locate groups
$filter = "filter_example"; // string | if specified only groups with names containing the supplied string will be returned

try {
    $result = $api_instance->findGroupsForUser($context, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->findGroupsForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**| the user which should be used to locate groups | [optional]
 **filter** | **string**| if specified only groups with names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOtherGroupsForUser**
> string findOtherGroupsForUser($context, $filter)

findOtherGroupsForUser

Retrieves a list of groups the specified user is <em>not</em> a member of.  <p>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$context = "context_example"; // string | the user which should be used to locate groups
$filter = "filter_example"; // string | if specified only groups with names containing the supplied string will be returned

try {
    $result = $api_instance->findOtherGroupsForUser($context, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->findOtherGroupsForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**| the user which should be used to locate groups | [optional]
 **filter** | **string**| if specified only groups with names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findUsersInGroup**
> string findUsersInGroup($context, $filter)

findUsersInGroup

Retrieves a list of users that are members of a specified group.  <p>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$context = "context_example"; // string | the group which should be used to locate members
$filter = "filter_example"; // string | if specified only users with usernames, display names or email addresses containing the                   supplied string will be returned

try {
    $result = $api_instance->findUsersInGroup($context, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->findUsersInGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**| the group which should be used to locate members | [optional]
 **filter** | **string**| if specified only users with usernames, display names or email addresses containing the                   supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findUsersNotInGroup**
> string findUsersNotInGroup($context, $filter)

findUsersNotInGroup

Retrieves a list of users that are <em>not</em> members of a specified group.  <p>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$context = "context_example"; // string | the group which should be used to locate non-members
$filter = "filter_example"; // string | if specified only users with usernames, display names or email addresses containing the                   supplied string will be returned

try {
    $result = $api_instance->findUsersNotInGroup($context, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->findUsersNotInGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**| the group which should be used to locate non-members | [optional]
 **filter** | **string**| if specified only users with usernames, display names or email addresses containing the                   supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClusterInformation**
> object getClusterInformation()

getClusterInformation

Gets information about the nodes that currently make up the stash cluster.  <p>  The authenticated user must have the <strong>SYS_ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();

try {
    $result = $api_instance->getClusterInformation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getClusterInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroups1**
> string getGroups1($filter)

getGroups

Retrieve a page of groups.  <p>  The authenticated user must have <strong>LICENSED_USER</strong> permission or higher to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$filter = "filter_example"; // string | if specified only group names containing the supplied string will be returned

try {
    $result = $api_instance->getGroups1($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getGroups1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| if specified only group names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupsWithAnyPermission**
> string getGroupsWithAnyPermission($filter)

getGroupsWithAnyPermission

Retrieve a page of groups that have been granted at least one global permission.  <p>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$filter = "filter_example"; // string | if specified only group names containing the supplied string will be returned

try {
    $result = $api_instance->getGroupsWithAnyPermission($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getGroupsWithAnyPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| if specified only group names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupsWithoutAnyPermission**
> string getGroupsWithoutAnyPermission($filter)

getGroupsWithoutAnyPermission

Retrieve a page of groups that have no granted global permissions.  <p>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$filter = "filter_example"; // string | if specified only group names containing the supplied string will be returned

try {
    $result = $api_instance->getGroupsWithoutAnyPermission($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getGroupsWithoutAnyPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| if specified only group names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicense**
> string getLicense()

getLicense

Retrieves details about the current license, as well as the current status of the system with regards to the  installed license. The status includes the current number of users applied toward the license limit, as well  as any status messages about the license (warnings about expiry or user counts exceeding license limits).  <p>  The authenticated user must have <b>ADMIN</b> permission. Unauthenticated users, and non-administrators, are  not permitted to access license details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();

try {
    $result = $api_instance->getLicense();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getLicense: ', $e->getMessage(), PHP_EOL;
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

# **getMailConfig**
> object getMailConfig()

getMailConfig

Retrieves the current mail configuration.   The authenticated user must have the <strong>SYS_ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();

try {
    $result = $api_instance->getMailConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getMailConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenderAddress**
> object getSenderAddress()

getSenderAddress

Retrieves the server email address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();

try {
    $result = $api_instance->getSenderAddress();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getSenderAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> string getUsers($filter)

getUsers

Retrieve a page of users.  <p>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$filter = "filter_example"; // string | if specified only users with usernames, display name or email addresses containing the supplied                string will be returned

try {
    $result = $api_instance->getUsers($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| if specified only users with usernames, display name or email addresses containing the supplied                string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersWithAnyPermission**
> string getUsersWithAnyPermission($filter)

getUsersWithAnyPermission

Retrieve a page of users that have been granted at least one global permission.  <p>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$filter = "filter_example"; // string | if specified only user names containing the supplied string will be returned

try {
    $result = $api_instance->getUsersWithAnyPermission($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getUsersWithAnyPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| if specified only user names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersWithoutAnyPermission**
> string getUsersWithoutAnyPermission($filter)

getUsersWithoutAnyPermission

Retrieve a page of users that have no granted global permissions.  <p>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$filter = "filter_example"; // string | if specified only user names containing the supplied string will be returned

try {
    $result = $api_instance->getUsersWithoutAnyPermission($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->getUsersWithoutAnyPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| if specified only user names containing the supplied string will be returned | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeGroupFromUser**
> string removeGroupFromUser($dynamic)

removeGroupFromUser

Remove a user from a group. This is very similar to <code>groups/remove-user</code>, but with the <em>context</em>  and <em>itemName</em> attributes of the supplied request entity reversed. On the face of it this may appear  redundant, but it facilitates a specific UI component in Stash.  <p>  In the request entity, the <em>context</em> attribute is the user and the <em>itemName</em> is the group.  <p>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->removeGroupFromUser($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->removeGroupFromUser: ', $e->getMessage(), PHP_EOL;
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

# **removeUserFromGroup**
> string removeUserFromGroup($dynamic)

removeUserFromGroup

<p><strong>Deprecated since 2.10 for removal in 3.0</strong>. Use {@code /rest/users/remove-groups} instead.</p>   Remove a user from a group.  <p>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.  <p>  In the request entity, the <em>context</em> attribute is the group and the <em>itemName</em> is the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->removeUserFromGroup($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->removeUserFromGroup: ', $e->getMessage(), PHP_EOL;
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

# **renameUser**
> string renameUser($dynamic)

renameUser

Rename a user.  <p>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->renameUser($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->renameUser: ', $e->getMessage(), PHP_EOL;
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

# **revokePermissionsForGroup**
> string revokePermissionsForGroup($name)

revokePermissionsForGroup

Revoke all global permissions for a group.   <p>  The authenticated user must have:  <ul>      <li><strong>ADMIN</strong> permission or higher; and</li>      <li>greater or equal permissions than the current permission level of the group (a user may not demote the      permission level of a group with higher permissions than them)</li>  </ul>  to call this resource. In addition, a user may not revoke a group's permissions if their own permission level  would be reduced as a result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$name = "name_example"; // string | the name of the group

try {
    $result = $api_instance->revokePermissionsForGroup($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->revokePermissionsForGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| the name of the group | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokePermissionsForUser**
> string revokePermissionsForUser($name)

revokePermissionsForUser

Revoke all global permissions for a user.  <p>  The authenticated user must have:  <ul>      <li><strong>ADMIN</strong> permission or higher; and</li>      <li>greater or equal permissions than the current permission level of the user (a user may not demote the      permission level of a user with higher permissions than them)</li>  </ul>  to call this resource. In addition, a user may not demote their own permission level.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$name = "name_example"; // string | the name of the user

try {
    $result = $api_instance->revokePermissionsForUser($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->revokePermissionsForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| the name of the user | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMailConfig**
> string setMailConfig($dynamic)

setMailConfig

Updates the mail configuration   The authenticated user must have the <strong>SYS_ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->setMailConfig($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->setMailConfig: ', $e->getMessage(), PHP_EOL;
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

# **setPermissionForGroups**
> string setPermissionForGroups($permission, $name)

setPermissionForGroups

Promote or demote a user's global permission level. Available global permissions are:  <ul>      <li>LICENSED_USER</li>      <li>PROJECT_CREATE</li>      <li>ADMIN</li>      <li>SYS_ADMIN</li>  </ul>  See the <a href=\"https://confluence.atlassian.com/display/STASH/Global+permissions\">Stash documentation</a> for  a detailed explanation of what each permission entails.  <p>  The authenticated user must have:  <ul>      <li><strong>ADMIN</strong> permission or higher; and</li>      <li>the permission they are attempting to grant or higher; and</li>      <li>greater or equal permissions than the current permission level of the group (a user may not demote the      permission level of a group with higher permissions than them)</li>  </ul>  to call this resource. In addition, a user may not demote a group's permission level if their own permission  level would be reduced as a result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$permission = "permission_example"; // string | the permission to grant
$name = "name_example"; // string | the names of the groups

try {
    $result = $api_instance->setPermissionForGroups($permission, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->setPermissionForGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **setPermissionForUsers**
> string setPermissionForUsers($name, $permission)

setPermissionForUsers

Promote or demote the global permission level of a user. Available global permissions are:  <ul>      <li>LICENSED_USER</li>      <li>PROJECT_CREATE</li>      <li>ADMIN</li>      <li>SYS_ADMIN</li>  </ul>  See the <a href=\"https://confluence.atlassian.com/display/STASH/Global+permissions\">Stash documentation</a> for  a detailed explanation of what each permission entails.  <p>  The authenticated user must have:  <ul>      <li><strong>ADMIN</strong> permission or higher; and</li>      <li>the permission they are attempting to grant; and</li>      <li>greater or equal permissions than the current permission level of the user (a user may not demote the      permission level of a user with higher permissions than them)</li>  </ul>  to call this resource. In addition, a user may not demote their own permission level.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$name = "name_example"; // string | the names of the users
$permission = "permission_example"; // string | the permission to grant

try {
    $result = $api_instance->setPermissionForUsers($name, $permission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->setPermissionForUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **setSenderAddress**
> string setSenderAddress($dynamic)

setSenderAddress

Updates the server email address   The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->setSenderAddress($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->setSenderAddress: ', $e->getMessage(), PHP_EOL;
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

# **updateLicense**
> string updateLicense($dynamic)

updateLicense

Decodes the provided encoded license and sets it as the active license. If no license was provided, a 400 is  returned. If the license cannot be decoded, or cannot be applied, a 409 is returned. Some possible reasons a  license may not be applied include:  <ul>      <li>It is for a different product</li>      <li>It is already expired</li>  </ul>  Otherwise, if the license is updated successfully, details for the new license are returned with a 200 response.  <p>  <b>Warning</b>: It is possible to downgrade the license during update, applying a license with a lower number  of permitted users. If the number of currently-licensed users exceeds the limits of the new license, pushing  will be disabled until the licensed user count is brought into compliance with the new license.  <p>  The authenticated user must have <b>SYS_ADMIN</b> permission. <b>ADMIN</b> users may <i>view</i> the current  license details, but they may not <i>update</i> the license.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->updateLicense($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->updateLicense: ', $e->getMessage(), PHP_EOL;
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

# **updateUserDetails**
> string updateUserDetails($dynamic)

updateUserDetails

Update a user's details.  <p>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->updateUserDetails($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->updateUserDetails: ', $e->getMessage(), PHP_EOL;
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

# **updateUserPassword**
> string updateUserPassword($dynamic)

updateUserPassword

Update a user's password.  <p>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource, and may not update  the password of a user with greater permissions than themselves.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdminApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->updateUserPassword($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->updateUserPassword: ', $e->getMessage(), PHP_EOL;
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

