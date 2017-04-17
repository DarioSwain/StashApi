# Swagger\Client\ProfileApi

All URIs are relative to *http://example.com/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProfileRepositoriesRecentlyAccessed**](ProfileApi.md#getProfileRepositoriesRecentlyAccessed) | **GET** /api/1.0/profile/recent/repos | getProfileRepositoriesRecentlyAccessed


# **getProfileRepositoriesRecentlyAccessed**
> string getProfileRepositoriesRecentlyAccessed($permission)

getProfileRepositoriesRecentlyAccessed

Retrieve a page of recently accessed repositories for the currently authenticated user.  <p>  Repositories are ordered from most recently to least recently accessed.  <p>  Only authenticated users may call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ProfileApi();
$permission = "permission_example"; // string | (optional) if specified, it must be a valid repository permission level name and will limit                    the resulting repository list to ones that the requesting user has the specified permission                    level to. If not specified, the default <code>REPO_READ</code> permission level will be assumed.

try {
    $result = $api_instance->getProfileRepositoriesRecentlyAccessed($permission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->getProfileRepositoriesRecentlyAccessed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permission** | **string**| (optional) if specified, it must be a valid repository permission level name and will limit                    the resulting repository list to ones that the requesting user has the specified permission                    level to. If not specified, the default &lt;code&gt;REPO_READ&lt;/code&gt; permission level will be assumed. | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

