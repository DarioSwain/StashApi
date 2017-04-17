# Swagger\Client\TaskApi

All URIs are relative to *http://example.com/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTask**](TaskApi.md#createTask) | **POST** /api/1.0/tasks | createTask
[**deleteTask**](TaskApi.md#deleteTask) | **DELETE** /api/1.0/tasks/{taskId} | deleteTask
[**getTask**](TaskApi.md#getTask) | **GET** /api/1.0/tasks/{taskId} | getTask
[**updateTask**](TaskApi.md#updateTask) | **PUT** /api/1.0/tasks/{taskId} | updateTask


# **createTask**
> string createTask($dynamic)

createTask

Create a new task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\TaskApi();
$dynamic = NULL; // object | 

try {
    $result = $api_instance->createTask($dynamic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->createTask: ', $e->getMessage(), PHP_EOL;
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

# **deleteTask**
> string deleteTask($task_id)

deleteTask

Delete a task.  <p>  Note that only the task's creator, the context's author or an admin of the context's repository can delete a  task. (For a pull request task, those are the task's creator, the pull request's author or an admin on the  repository containing the pull request). Additionally a task cannot be deleted if it has already been resolved.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\TaskApi();
$task_id = 789; // int | the id identifying the task to delete

try {
    $result = $api_instance->deleteTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->deleteTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **int**| the id identifying the task to delete |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTask**
> string getTask($task_id)

getTask

Retrieve a existing task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\TaskApi();
$task_id = 789; // int | the id identifying the task to delete

try {
    $result = $api_instance->getTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **int**| the id identifying the task to delete |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTask**
> string updateTask($dynamic, $task_id)

updateTask

Update a existing task.  <p>  As of Stash 3.3, only the state and text of a task can be updated.  <p>  Updating the state of a task is allowed for any user having <em>READ</em> access to the repository.  However only the task's creator, the context's author or an admin of the context's repository can update the  task's text. (For a pull request task, those are the task's creator, the pull request's author or an admin on the  repository containing the pull request). Additionally the task's text cannot be updated if it has been resolved.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: auth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\TaskApi();
$dynamic = NULL; // object | 
$task_id = 789; // int | the id identifying the task to delete

try {
    $result = $api_instance->updateTask($dynamic, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->updateTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic** | **object**|  |
 **task_id** | **int**| the id identifying the task to delete |

### Return type

**string**

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

