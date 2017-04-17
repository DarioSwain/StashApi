# Swagger\Client\GroupApi

All URIs are relative to *http://example.com/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGroups**](GroupApi.md#getGroups) | **GET** /api/1.0/groups | getGroups


# **getGroups**
> string getGroups($filter)

getGroups

Retrieve a page of group names.  <p>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission or higher to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\GroupApi();
$filter = "filter_example"; // string | if specified only group names containing the supplied string will be returned

try {
    $result = $api_instance->getGroups($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroups: ', $e->getMessage(), PHP_EOL;
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

