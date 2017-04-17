# Swagger\Client\ApplicationApi

All URIs are relative to *http://example.com/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApplicationProperties**](ApplicationApi.md#getApplicationProperties) | **GET** /api/1.0/application-properties | getApplicationProperties


# **getApplicationProperties**
> string getApplicationProperties()

getApplicationProperties

Retrieve version information and other application properties.  <p>  No authentication is required to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ApplicationApi();

try {
    $result = $api_instance->getApplicationProperties();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->getApplicationProperties: ', $e->getMessage(), PHP_EOL;
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

