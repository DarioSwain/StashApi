# Swagger\Client\HookApi

All URIs are relative to *http://example.com/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAvatar**](HookApi.md#getAvatar) | **GET** /api/1.0/hooks/{hookKey}/avatar | getAvatar


# **getAvatar**
> string getAvatar($hook_key, $version)

getAvatar

Retrieve the avatar for the project matching the supplied <strong>moduleKey</strong>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HookApi();
$hook_key = "hook_key_example"; // string | the complete module key of the hook module
$version = "version_example"; // string | optional version used for HTTP caching only - any non-blank version will result in a large max-age Cache-Control header.                 Note that this does not affect the Last-Modified header.

try {
    $result = $api_instance->getAvatar($hook_key, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HookApi->getAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hook_key** | **string**| the complete module key of the hook module |
 **version** | **string**| optional version used for HTTP caching only - any non-blank version will result in a large max-age Cache-Control header.                 Note that this does not affect the Last-Modified header. | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

