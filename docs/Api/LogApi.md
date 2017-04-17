# Swagger\Client\LogApi

All URIs are relative to *http://example.com/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLevel**](LogApi.md#getLevel) | **GET** /api/1.0/logs/logger/{loggerName} | getLevel
[**getRootLevel**](LogApi.md#getRootLevel) | **GET** /api/1.0/logs/rootLogger | getRootLevel
[**setLevel**](LogApi.md#setLevel) | **PUT** /api/1.0/logs/logger/{loggerName}/{levelName} | setLevel
[**setRootLevel**](LogApi.md#setRootLevel) | **PUT** /api/1.0/logs/rootLogger/{levelName} | setRootLevel


# **getLevel**
> string getLevel($logger_name)

getLevel

Retrieve the current log level for a given logger.  <p>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\LogApi();
$logger_name = "logger_name_example"; // string | the name of the logger.

try {
    $result = $api_instance->getLevel($logger_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->getLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logger_name** | **string**| the name of the logger. |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRootLevel**
> string getRootLevel()

getRootLevel

Retrieve the current log level for the root logger.  <p>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\LogApi();

try {
    $result = $api_instance->getRootLevel();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->getRootLevel: ', $e->getMessage(), PHP_EOL;
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

# **setLevel**
> object setLevel($level_name, $logger_name)

setLevel

Set the current log level for a given logger.  <p>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\LogApi();
$level_name = "level_name_example"; // string | the level to set the logger to. Either TRACE, DEBUG, INFO, WARN or ERROR
$logger_name = "logger_name_example"; // string | the name of the logger.

try {
    $result = $api_instance->setLevel($level_name, $logger_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->setLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level_name** | **string**| the level to set the logger to. Either TRACE, DEBUG, INFO, WARN or ERROR |
 **logger_name** | **string**| the name of the logger. |

### Return type

**object**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRootLevel**
> object setRootLevel($level_name)

setRootLevel

Set the current log level for the root logger.  <p>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\LogApi();
$level_name = "level_name_example"; // string | the level to set the logger to. Either TRACE, DEBUG, INFO, WARN or ERROR

try {
    $result = $api_instance->setRootLevel($level_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->setRootLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level_name** | **string**| the level to set the logger to. Either TRACE, DEBUG, INFO, WARN or ERROR |

### Return type

**object**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

