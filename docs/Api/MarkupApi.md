# Swagger\Client\MarkupApi

All URIs are relative to *http://example.com/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**previewMarkup**](MarkupApi.md#previewMarkup) | **POST** /api/1.0/markup/preview | previewMarkup


# **previewMarkup**
> string previewMarkup($dynamic, $url_mode, $hardwrap, $html_escape)

previewMarkup

Preview the generated html for given markdown contents.  <p>  Only authenticated users may call this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\MarkupApi();
$dynamic = NULL; // object | 
$url_mode = "url_mode_example"; // string | 
$hardwrap = true; // bool | 
$html_escape = true; // bool | 

try {
    $result = $api_instance->previewMarkup($dynamic, $url_mode, $hardwrap, $html_escape);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarkupApi->previewMarkup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **url_mode** | **string**|  | [optional]
 **hardwrap** | **bool**|  | [optional]
 **html_escape** | **bool**|  | [optional]

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

