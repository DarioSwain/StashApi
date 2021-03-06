**UNSTABLE - under heavy development.**

# About

Auto-generated PHP client for Stash API. Was generated using [APIMATIC](https://apimatic.io/), based on Stash official [WADL definition](https://developer.atlassian.com/static/rest/stash/3.11.6/stash-rest.wadl).

# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=Stash%20API-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the StashAPILib library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Stash%20API-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Stash%20API-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Stash%20API-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Stash%20API-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=Stash%20API-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Stash%20API-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Stash%20API-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Stash%20API-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Stash%20API-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Stash%20API-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Stash%20API-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=Stash%20API-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| stashDomain | TODO: add a description |
| basicAuthUserName | The username to use with basic authentication |
| basicAuthPassword | The password to use with basic authentication |



API client can be initialized as following.

```php
// Configuration parameters and credentials
$stashDomain = "stashDomain";
$basicAuthUserName = "basicAuthUserName"; // The username to use with basic authentication
$basicAuthPassword = "basicAuthPassword"; // The password to use with basic authentication

$client = new StashAPILib\StashAPILibClient($stashDomain, $basicAuthUserName, $basicAuthPassword);
```

## Class Reference

### <a name="list_of_controllers"></a>List of Controllers

* [RepositoryController](#repository_controller)
* [AdminController](#admin_controller)
* [PullRequestController](#pull_request_controller)
* [HookController](#hook_controller)
* [ProjectController](#project_controller)
* [TaskController](#task_controller)
* [GroupController](#group_controller)
* [ProfileController](#profile_controller)
* [ApplicationController](#application_controller)
* [LogController](#log_controller)
* [UserController](#user_controller)
* [MarkupController](#markup_controller)

### <a name="repository_controller"></a>![Class: ](https://apidocs.io/img/class.png ".RepositoryController") RepositoryController

#### Get singleton instance

The singleton instance of the ``` RepositoryController ``` class can be accessed from the API Client.

```php
$repository = $client->getRepository();
```

#### <a name="get_repository_commit_changes"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryCommitChanges") getRepositoryCommitChanges

> Retrieve a page of changes made in a specified commit.
>  <p>
>  <strong>Note:</strong> The implementation will apply a hard cap ({@code page.max.changes}) and it is not
>  possible to request subsequent content when that cap is exceeded.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryCommitChanges(
        $projectKey,
        $repositorySlug,
        $commitId,
        $since = null,
        $withComments = true)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| commitId |  ``` Required ```  | the commit to retrieve changes for |
| since |  ``` Optional ```  | the commit to which <code>until</code> should be compared to produce a page of changes.
                     If not specified the commit's first parent is assumed (if one exists) |
| withComments |  ``` Optional ```  ``` DefaultValue ```  | {@code true} to apply comment counts in the changes (the default); otherwise, {@code false}
                     to stream changes without comment counts |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$commitId = 'commitId';
$since = 'since';
$withComments = true;

$result = $repository->getRepositoryCommitChanges($projectKey, $repositorySlug, $commitId, $since, $withComments);

```


#### <a name="get_repository_compare_diff_by_path"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryCompareDiffByPath") getRepositoryCompareDiffByPath

> Gets a diff of the changes available in the {@code from} changeset but not in the {@code to} changeset.
>  <p>
>  If either the {@code from} or {@code to} changeset are not specified, they will be replaced by the
>  default branch of their containing repository.


```php
function getRepositoryCompareDiffByPath(
        $projectKey,
        $repositorySlug,
        $path,
        $from = null,
        $to = null,
        $fromRepo = null,
        $srcPath = null,
        $contextLines = -1,
        $whitespace = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| path |  ``` Required ```  | the path to the file to diff (optional) |
| from |  ``` Optional ```  | the source changeset (can be a partial/full changeset id or qualified/unqualified ref name) |
| to |  ``` Optional ```  | the target changeset (can be a partial/full changeset id or qualified/unqualified ref name) |
| fromRepo |  ``` Optional ```  | an optional parameter specifying the source repository containing the source changeset
                 if that changeset is not present in the current repository; the repository can be specified
                 by either its ID <em>fromRepo=42</em> or by its project key plus its repo slug separated by
                 a slash: <em>fromRepo=projectKey/repoSlug</em> |
| srcPath |  ``` Optional ```  | TODO: Add a parameter description |
| contextLines |  ``` Optional ```  ``` DefaultValue ```  | an optional number of context lines to include around each added or removed lines in the diff |
| whitespace |  ``` Optional ```  | an optional whitespace flag which can be set to <code>ignore-all</code> |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$path = 'path';
$from = 'from';
$to = 'to';
$fromRepo = 'fromRepo';
$srcPath = 'srcPath';
$contextLines = -1;
$whitespace = 'whitespace';

$result = $repository->getRepositoryCompareDiffByPath($projectKey, $repositorySlug, $path, $from, $to, $fromRepo, $srcPath, $contextLines, $whitespace);

```


#### <a name="get_repository_compare_changes"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryCompareChanges") getRepositoryCompareChanges

> Gets the file changes available in the {@code from} changeset but not in the {@code to} changeset.
>  <p>
>  If either the {@code from} or {@code to} changeset are not specified, they will be replaced by the
>  default branch of their containing repository.


```php
function getRepositoryCompareChanges(
        $projectKey,
        $repositorySlug,
        $from = null,
        $to = null,
        $fromRepo = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| from |  ``` Optional ```  | the source changeset (can be a partial/full changeset id or qualified/unqualified ref name) |
| to |  ``` Optional ```  | the target changeset (can be a partial/full changeset id or qualified/unqualified ref name) |
| fromRepo |  ``` Optional ```  | an optional parameter specifying the source repository containing the source changeset
                 if that changeset is not present in the current repository; the repository can be specified
                 by either its ID <em>fromRepo=42</em> or by its project key plus its repo slug separated by
                 a slash: <em>fromRepo=projectKey/repoSlug</em> |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$from = 'from';
$to = 'to';
$fromRepo = 'fromRepo';

$result = $repository->getRepositoryCompareChanges($projectKey, $repositorySlug, $from, $to, $fromRepo);

```


#### <a name="get_repository_compare_commits"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryCompareCommits") getRepositoryCompareCommits

> Gets the commits accessible from the {@code from} changeset but not in the {@code to} changeset.
>  <p>
>  If either the {@code from} or {@code to} changeset are not specified, they will be replaced by the
>  default branch of their containing repository.


```php
function getRepositoryCompareCommits(
        $projectKey,
        $repositorySlug,
        $from = null,
        $to = null,
        $fromRepo = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| from |  ``` Optional ```  | the source changeset (can be a partial/full changeset id or qualified/unqualified ref name) |
| to |  ``` Optional ```  | the target changeset (can be a partial/full changeset id or qualified/unqualified ref name) |
| fromRepo |  ``` Optional ```  | an optional parameter specifying the source repository containing the source changeset
                 if that changeset is not present in the current repository; the repository can be specified
                 by either its ID <em>fromRepo=42</em> or by its project key plus its repo slug separated by
                 a slash: <em>fromRepo=projectKey/repoSlug</em> |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$from = 'from';
$to = 'to';
$fromRepo = 'fromRepo';

$result = $repository->getRepositoryCompareCommits($projectKey, $repositorySlug, $from, $to, $fromRepo);

```


#### <a name="get_repository_branches"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryBranches") getRepositoryBranches

> Retrieve the branches matching the supplied <strong>filterText</strong> param.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryBranches(
        $projectKey,
        $repositorySlug,
        $base = null,
        $details = null,
        $filterText = null,
        $orderBy = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| base |  ``` Optional ```  | base branch or tag to compare each branch to (for the metadata providers that uses that information) |
| details |  ``` Optional ```  | whether to retrieve plugin-provided metadata about each branch |
| filterText |  ``` Optional ```  | the text to match on |
| orderBy |  ``` Optional ```  | ordering of refs either ALPHABETICAL (by name) or MODIFICATION (last updated) |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$base = 'base';
$details = false;
$filterText = 'filterText';
$orderBy = 'orderBy';

$result = $repository->getRepositoryBranches($projectKey, $repositorySlug, $base, $details, $filterText, $orderBy);

```


#### <a name="get_repository_default_branch"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryDefaultBranch") getRepositoryDefaultBranch

> Get the default branch of the repository.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryDefaultBranch(
        $projectKey,
        $repositorySlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';

$result = $repository->getRepositoryDefaultBranch($projectKey, $repositorySlug);

```


#### <a name="update_set_repository_default_branch"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.updateSetRepositoryDefaultBranch") updateSetRepositoryDefaultBranch

> Update the default branch of a repository.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function updateSetRepositoryDefaultBranch(
        $dynamic,
        $projectKey,
        $repositorySlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';

$result = $repository->updateSetRepositoryDefaultBranch($dynamic, $projectKey, $repositorySlug);

```


#### <a name="update_set_repository_permission_for_group"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.updateSetRepositoryPermissionForGroup") updateSetRepositoryPermissionForGroup

> Promote or demote a group's permission level for the specified repository. Available repository permissions are:
>  <ul>
>      <li>REPO_READ</li>
>      <li>REPO_WRITE</li>
>      <li>REPO_ADMIN</li>
>  </ul>
>  See the <a href="https://confluence.atlassian.com/display/STASH/Managing+permissions+for+a+repository">Stash documentation</a>
>  for a detailed explanation of what each permission entails.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource. In addition, a user may not demote a group's permission level if their
>  own permission level would be reduced as a result.


```php
function updateSetRepositoryPermissionForGroup(
        $projectKey,
        $repositorySlug,
        $permission = null,
        $name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| permission |  ``` Optional ```  | the permission to grant |
| name |  ``` Optional ```  | the names of the groups |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$permission = 'permission';
$name = 'name';

$result = $repository->updateSetRepositoryPermissionForGroup($projectKey, $repositorySlug, $permission, $name);

```


#### <a name="get_repository_groups_with_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryGroupsWithAnyPermission") getRepositoryGroupsWithAnyPermission

> Retrieve a page of groups that have been granted at least one permission for the specified repository.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource.


```php
function getRepositoryGroupsWithAnyPermission(
        $projectKey,
        $repositorySlug,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$filter = 'filter';

$result = $repository->getRepositoryGroupsWithAnyPermission($projectKey, $repositorySlug, $filter);

```


#### <a name="delete_revoke_repository_permissions_for_group"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.deleteRevokeRepositoryPermissionsForGroup") deleteRevokeRepositoryPermissionsForGroup

> Revoke all permissions for the specified repository for a group.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource.
>  <p>
>  In addition, a user may not revoke a group's permissions if it will reduce their own permission level.


```php
function deleteRevokeRepositoryPermissionsForGroup(
        $projectKey,
        $repositorySlug,
        $name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| name |  ``` Optional ```  | the name of the group |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$name = 'name';

$result = $repository->deleteRevokeRepositoryPermissionsForGroup($projectKey, $repositorySlug, $name);

```


#### <a name="update_set_repository_permission_for_user"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.updateSetRepositoryPermissionForUser") updateSetRepositoryPermissionForUser

> Promote or demote a user's permission level for the specified repository. Available repository permissions are:
>  <ul>
>      <li>REPO_READ</li>
>      <li>REPO_WRITE</li>
>      <li>REPO_ADMIN</li>
>  </ul>
>  See the <a href="https://confluence.atlassian.com/display/STASH/Managing+permissions+for+a+repository">Stash documentation</a>
>  for a detailed explanation of what each permission entails.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource. In addition, a user may not reduce their own permission level unless
>  they have a project or global permission that already implies that permission.


```php
function updateSetRepositoryPermissionForUser(
        $projectKey,
        $repositorySlug,
        $name = null,
        $permission = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| name |  ``` Optional ```  | the names of the users |
| permission |  ``` Optional ```  | the permission to grant |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$name = 'name';
$permission = 'permission';

$result = $repository->updateSetRepositoryPermissionForUser($projectKey, $repositorySlug, $name, $permission);

```


#### <a name="get_repository_users_with_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryUsersWithAnyPermission") getRepositoryUsersWithAnyPermission

> Retrieve a page of users that have been granted at least one permission for the specified repository.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource.


```php
function getRepositoryUsersWithAnyPermission(
        $projectKey,
        $repositorySlug,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$filter = 'filter';

$result = $repository->getRepositoryUsersWithAnyPermission($projectKey, $repositorySlug, $filter);

```


#### <a name="delete_revoke_repository_permissions_for_user"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.deleteRevokeRepositoryPermissionsForUser") deleteRevokeRepositoryPermissionsForUser

> Revoke all permissions for the specified repository for a user.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource.
>  <p>
>  In addition, a user may not revoke their own repository permissions if they do not have a higher
>  project or global permission.


```php
function deleteRevokeRepositoryPermissionsForUser(
        $projectKey,
        $repositorySlug,
        $name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| name |  ``` Optional ```  | the name of the user |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$name = 'name';

$result = $repository->deleteRevokeRepositoryPermissionsForUser($projectKey, $repositorySlug, $name);

```


#### <a name="get_repository_groups_without_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryGroupsWithoutAnyPermission") getRepositoryGroupsWithoutAnyPermission

> Retrieve a page of groups that have no granted permissions for the specified repository.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource.


```php
function getRepositoryGroupsWithoutAnyPermission(
        $projectKey,
        $repositorySlug,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$filter = 'filter';

$result = $repository->getRepositoryGroupsWithoutAnyPermission($projectKey, $repositorySlug, $filter);

```


#### <a name="get_repository_users_without_permission"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryUsersWithoutPermission") getRepositoryUsersWithoutPermission

> Retrieve a page of <i>licensed</i> users that have no granted permissions for the specified repository.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource.


```php
function getRepositoryUsersWithoutPermission(
        $projectKey,
        $repositorySlug,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$filter = 'filter';

$result = $repository->getRepositoryUsersWithoutPermission($projectKey, $repositorySlug, $filter);

```


#### <a name="get_repository_commits"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryCommits") getRepositoryCommits

> Retrieve a page of commits from a given starting commit or "between" two commits. If no explicit commit is
>  specified, the tip of the repository's default branch is assumed. commits may be identified by branch or tag
>  name or by ID. A path may be supplied to restrict the returned commits to only those which affect that path.
>  <p>
>  The authenticated user must have <b>REPO_READ</b> permission for the specified repository to call this
>  resource.


```php
function getRepositoryCommits(
        $projectKey,
        $repositorySlug,
        $path = null,
        $since = null,
        $until = null,
        $withCounts = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| path |  ``` Optional ```  | an optional path to filter commits by |
| since |  ``` Optional ```  | the commit ID or ref (exclusively) to retrieve commits after |
| until |  ``` Optional ```  | the commit ID (SHA1) or ref (inclusively) to retrieve commits before |
| withCounts |  ``` Optional ```  ``` DefaultValue ```  | optionally include the total number of commits and total number of unique authors |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$path = 'path';
$since = 'since';
$until = 'until';
$withCounts = false;

$result = $repository->getRepositoryCommits($projectKey, $repositorySlug, $path, $since, $until, $withCounts);

```


#### <a name="get_repository_commit"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryCommit") getRepositoryCommit

> Retrieve a single commit <i>identified by its ID</i>>. In general, that ID is a SHA1. <u>From 2.11, ref names
>  like "refs/heads/master" are no longer accepted by this resource.</u>
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryCommit(
        $projectKey,
        $repositorySlug,
        $commitId,
        $path = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| commitId |  ``` Required ```  | the commit ID to retrieve |
| path |  ``` Optional ```  | an optional path to filter the commit by. If supplied the details returned <i>may not</i>
             be for the specified commit. Instead, starting from the specified commit, they will be the
             details for the first commit affecting the specified path. |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$commitId = 'commitId';
$path = 'path';

$result = $repository->getRepositoryCommit($projectKey, $repositorySlug, $commitId, $path);

```


#### <a name="get_repository_tags"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryTags") getRepositoryTags

> Retrieve the tags matching the supplied <strong>filterText</strong> param.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the context repository to call this
>  resource.


```php
function getRepositoryTags(
        $projectKey,
        $repositorySlug,
        $filterText = null,
        $orderBy = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| filterText |  ``` Optional ```  | the text to match on |
| orderBy |  ``` Optional ```  | ordering of refs either ALPHABETICAL (by name) or MODIFICATION (last updated) |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$filterText = 'filterText';
$orderBy = 'orderBy';

$result = $repository->getRepositoryTags($projectKey, $repositorySlug, $filterText, $orderBy);

```


#### <a name="get_repositories"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositories") getRepositories

> Retrieve a page of repositories based on query parameters that control the search. See the documentation of the
>  parameters for more details.
>  <p>
>  This resource is anonymously accessible.
>  <p>
>  <b>Note on permissions.</b> In absence of the {@code permission} query parameter the implicit 'read' permission
>  is assumed. Please note that this permission is lower than the REPO_READ permission rather than being equal to
>  it. The implicit 'read' permission for a given repository is assigned to any user that has any of the higher
>  permissions, such as <tt>REPO_READ</tt>, as well as to anonymous users if the repository is marked as public.
>  The important implication of the above is that an anonymous request to this resource with a permission level
>  <tt>REPO_READ</tt> is guaranteed to receive an empty list of repositories as a result. For anonymous requests
>  it is therefore recommended to not specify the <tt>permission</tt> parameter at all.


```php
function getRepositories(
        $name = null,
        $projectname = null,
        $permission = null,
        $visibility = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | (optional) if specified, this will limit the resulting repository list to ones whose name
                    matches this parameter's value. The match will be done case-insensitive and any leading
                    and/or trailing whitespace characters on the <code>name</code> parameter will be stripped. |
| projectname |  ``` Optional ```  | (optional) if specified, this will limit the resulting repository list to ones whose project's
                    name matches this parameter's value. The match will be done case-insensitive and any leading
                    and/or trailing whitespace characters on the <code>projectname</code> parameter will
                    be stripped. |
| permission |  ``` Optional ```  | (optional) if specified, it must be a valid repository permission level name and will limit
                    the resulting repository list to ones that the requesting user has the specified permission
                    level to. If not specified, the default implicit 'read' permission level will be assumed. The
                    currently supported explicit permission values are <tt>REPO_READ</tt>, <tt>REPO_WRITE</tt>
                    and <tt>REPO_ADMIN</tt>. |
| visibility |  ``` Optional ```  | (optional) if specified, this will limit the resulting repository list based on the
                    repositories visibility. Valid values are <em>public</em> or <em>private</em>. |



#### Example Usage

```php
$name = 'name';
$projectname = 'projectname';
$permission = 'permission';
$visibility = 'visibility';

$result = $repository->getRepositories($name, $projectname, $permission, $visibility);

```


#### <a name="list_repository_files"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.listRepositoryFiles") listRepositoryFiles

> Retrieve a page of files from particular directory of a repository. The search is done recursively, so all files
>  from any sub-directory of the specified directory will be returned.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function listRepositoryFiles(
        $projectKey,
        $repositorySlug,
        $at = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| at |  ``` Optional ```  | the changeset id or ref (e.g. a branch or tag) to list the files at.
             If not specified the default branch will be used instead. |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$at = 'at';

$result = $repository->listRepositoryFiles($projectKey, $repositorySlug, $at);

```


#### <a name="list_repository_files_by_path"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.listRepositoryFilesByPath") listRepositoryFilesByPath

> Retrieve a page of files from particular directory of a repository. The search is done recursively, so all files
>  from any sub-directory of the specified directory will be returned.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function listRepositoryFilesByPath(
        $projectKey,
        $repositorySlug,
        $path,
        $at = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| path |  ``` Required ```  | the directory to list files for. |
| at |  ``` Optional ```  | the changeset id or ref (e.g. a branch or tag) to list the files at.
             If not specified the default branch will be used instead. |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$path = 'path';
$at = 'at';

$result = $repository->listRepositoryFilesByPath($projectKey, $repositorySlug, $path, $at);

```


#### <a name="create_repository"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.createRepository") createRepository

> Create a new repository. Requires an existing project in which this repository will be created.
>  The only parameters which will be used are name and scmId.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the context project to call this
>  resource.


```php
function createRepository(
        $dynamic,
        $projectKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | the parent project key |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';

$result = $repository->createRepository($dynamic, $projectKey);

```


#### <a name="delete_repository"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.deleteRepository") deleteRepository

> Schedule the repository matching the supplied <strong>projectKey</strong> and <strong>repositorySlug</strong> to
>  be deleted. If the request repository is not present
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function deleteRepository(
        $repositorySlug,
        $projectKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| repositorySlug |  ``` Required ```  | the repository slug |
| projectKey |  ``` Required ```  | the parent project key |



#### Example Usage

```php
$repositorySlug = 'repositorySlug';
$projectKey = 'projectKey';

$result = $repository->deleteRepository($repositorySlug, $projectKey);

```


#### <a name="create_fork_repository"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.createForkRepository") createForkRepository

> Create a new repository forked from an existing repository.
>  <p>
>  The JSON body for this {@code POST} is not required to contain <i>any</i> properties. Even the name may be
>  omitted. The following properties will be used, if provided:
>  <ul>
>      <li>{@code "name":"Fork name"} - Specifies the forked repository's name
>      <ul>
>          <li>Defaults to the name of the origin repository if not specified</li>
>      </ul>
>      </li>
>      <li>{@code "project":{"key":"TARGET_KEY"}} - Specifies the forked repository's target project by key
>      <ul>
>          <li>Defaults to the current user's personal project if not specified</li>
>      </ul>
>      </li>
>  </ul>
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository and
>  <strong>PROJECT_ADMIN</strong> on the target project to call this resource. Note that users <i>always</i>
>  have <b>PROJECT_ADMIN</b> permission on their personal projects.


```php
function createForkRepository(
        $dynamic,
        $repositorySlug,
        $projectKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | the repository slug |
| projectKey |  ``` Required ```  | the parent project key |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$repositorySlug = 'repositorySlug';
$projectKey = 'projectKey';

$result = $repository->createForkRepository($dynamic, $repositorySlug, $projectKey);

```


#### <a name="get_repository"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepository") getRepository

> Retrieve the repository matching the supplied <strong>projectKey</strong> and <strong>repositorySlug</strong>.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getRepository(
        $repositorySlug,
        $projectKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| repositorySlug |  ``` Required ```  | the repository slug |
| projectKey |  ``` Required ```  | the parent project key |



#### Example Usage

```php
$repositorySlug = 'repositorySlug';
$projectKey = 'projectKey';

$result = $repository->getRepository($repositorySlug, $projectKey);

```


#### <a name="update_repository"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.updateRepository") updateRepository

> Update the repository matching the <strong>repositorySlug</strong> supplied in the resource path.
>  <p>
>  The repository's slug is derived from its name. If the name changes the slug may also change.
>  <p>
>  This API can be used to move the repository to a different project by setting the new project in the request,
>  example: {@code {"project":{"key":"NEW_KEY"}}} .
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function updateRepository(
        $dynamic,
        $repositorySlug,
        $projectKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | the repository slug |
| projectKey |  ``` Required ```  | the parent project key |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$repositorySlug = 'repositorySlug';
$projectKey = 'projectKey';

$result = $repository->updateRepository($dynamic, $repositorySlug, $projectKey);

```


#### <a name="get_forked_repositories"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getForkedRepositories") getForkedRepositories

> Retrieve repositories which have been forked from this one. Unlike {@link #getRelatedRepositories(Repository,
>  PageRequest) related repositories}, this only looks at a given repository's direct forks. If those forks have
>  themselves been the origin of more forks, such "grandchildren" repositories will not be retrieved.
>  <p>
>  Only repositories to which the authenticated user has <b>REPO_READ</b> permission will be included, even
>  if other repositories have been forked from this one.


```php
function getForkedRepositories(
        $projectKey,
        $repositorySlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';

$result = $repository->getForkedRepositories($projectKey, $repositorySlug);

```


#### <a name="get_related_repositories"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRelatedRepositories") getRelatedRepositories

> Retrieve repositories which are related to this one. Related repositories are from the same
>  {@link Repository#getHierarchyId() hierarchy} as this repository.
>  <p>
>  Only repositories to which the authenticated user has <b>REPO_READ</b> permission will be included, even
>  if more repositories are part of this repository's hierarchy.


```php
function getRelatedRepositories(
        $projectKey,
        $repositorySlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';

$result = $repository->getRelatedRepositories($projectKey, $repositorySlug);

```


#### <a name="create_retry_create_repository"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.createRetryCreateRepository") createRetryCreateRepository

> If a create or fork operation fails, calling this method will clean up the broken repository and try again. The
>  repository must be in an INITIALISATION_FAILED state.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project to call this
>  resource.


```php
function createRetryCreateRepository(
        $projectKey,
        $repositorySlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';

$result = $repository->createRetryCreateRepository($projectKey, $repositorySlug);

```


#### <a name="get_repository_show_diff"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryShowDiff") getRepositoryShowDiff

> Retrieve the diff for a specified file path between two provided revisions.
>  <p>
>  <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally apply a hard cap
>  to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded. In the event
>  that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags will be set to
>  <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryShowDiff(
        $projectKey,
        $repositorySlug,
        $contextLines = -1,
        $since = null,
        $srcPath = null,
        $until = null,
        $whitespace = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| contextLines |  ``` Optional ```  ``` DefaultValue ```  | the number of context lines to include around added/removed lines in the diff |
| since |  ``` Optional ```  | the base revision to diff from. If omitted the parent revision of the until revision is used |
| srcPath |  ``` Optional ```  | the source path for the file, if it was copied, moved or renamed |
| until |  ``` Optional ```  | the target revision to diff to (required) |
| whitespace |  ``` Optional ```  | optional whitespace flag which can be set to <code>ignore-all</code> |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$contextLines = -1;
$since = 'since';
$srcPath = 'srcPath';
$until = 'until';
$whitespace = 'whitespace';

$result = $repository->getRepositoryShowDiff($projectKey, $repositorySlug, $contextLines, $since, $srcPath, $until, $whitespace);

```


#### <a name="get_repository_show_diff_by_path"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryShowDiffByPath") getRepositoryShowDiffByPath

> Retrieve the diff for a specified file path between two provided revisions.
>  <p>
>  <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally apply a hard cap
>  to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded. In the event
>  that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags will be set to
>  <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryShowDiffByPath(
        $projectKey,
        $repositorySlug,
        $path,
        $contextLines = -1,
        $since = null,
        $srcPath = null,
        $until = null,
        $whitespace = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| path |  ``` Required ```  | the path to the file which should be diffed (required) |
| contextLines |  ``` Optional ```  ``` DefaultValue ```  | the number of context lines to include around added/removed lines in the diff |
| since |  ``` Optional ```  | the base revision to diff from. If omitted the parent revision of the until revision is used |
| srcPath |  ``` Optional ```  | the source path for the file, if it was copied, moved or renamed |
| until |  ``` Optional ```  | the target revision to diff to (required) |
| whitespace |  ``` Optional ```  | optional whitespace flag which can be set to <code>ignore-all</code> |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$path = 'path';
$contextLines = -1;
$since = 'since';
$srcPath = 'srcPath';
$until = 'until';
$whitespace = 'whitespace';

$result = $repository->getRepositoryShowDiffByPath($projectKey, $repositorySlug, $path, $contextLines, $since, $srcPath, $until, $whitespace);

```


#### <a name="get_repository_content"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryContent") getRepositoryContent

> Retrieve a page of content for a file path at a specified revision.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryContent(
        $projectKey,
        $repositorySlug,
        $at = null,
        $type = false,
        $blame = null,
        $noContent = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| at |  ``` Optional ```  | the changeset id or ref to retrieve the content for. |
| type |  ``` Optional ```  ``` DefaultValue ```  | if true only the type will be returned for the file path instead of the contents. |
| blame |  ``` Optional ```  | if present the blame will be returned for the file as well. |
| noContent |  ``` Optional ```  | if present and used with blame only the blame is retrieved instead of the contents. |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$at = 'at';
$type = false;
$blame = 'blame';
$noContent = 'noContent';

$result = $repository->getRepositoryContent($projectKey, $repositorySlug, $at, $type, $blame, $noContent);

```


#### <a name="get_repository_content_by_path"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryContentByPath") getRepositoryContentByPath

> Retrieve a page of content for a file path at a specified revision.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryContentByPath(
        $projectKey,
        $repositorySlug,
        $path,
        $at = null,
        $type = false,
        $blame = null,
        $noContent = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| path |  ``` Required ```  | the file path to retrieve content from |
| at |  ``` Optional ```  | the changeset id or ref to retrieve the content for. |
| type |  ``` Optional ```  ``` DefaultValue ```  | if true only the type will be returned for the file path instead of the contents. |
| blame |  ``` Optional ```  | if present the blame will be returned for the file as well. |
| noContent |  ``` Optional ```  | if present and used with blame only the blame is retrieved instead of the contents. |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$path = 'path';
$at = 'at';
$type = false;
$blame = 'blame';
$noContent = 'noContent';

$result = $repository->getRepositoryContentByPath($projectKey, $repositorySlug, $path, $at, $type, $blame, $noContent);

```


#### <a name="create_repository_commit_comment"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.createRepositoryCommitComment") createRepositoryCommitComment

> Add a new comment.
>  <p>
>  Comments can be added in a few places by setting different attributes:
>  <p>
>  General commit comment:
> 
>  <pre>
>      {
>          "text": "An insightful general comment on a commit."
>      }
>      </pre>
> 
>  Reply to a comment:
> 
>  <pre>
>      {
>          "text": "A measured reply.",
>          "parent": {
>              "id": 1
>          }
>      }
>      </pre>
> 
>  General file comment:
> 
>  <pre>
>      {
>          "text": "An insightful general comment on a file.",
>          "anchor": {
>              "path": "path/to/file",
>              "srcPath": "path/to/file"
>          }
>      }
>      </pre>
> 
>  File line comment:
> 
>  <pre>
>      {
>          "text": "A pithy comment on a particular line within a file.",
>          "anchor": {
>              "line": 1,
>              "lineType": "CONTEXT",
>              "fileType": "FROM"
>              "path": "path/to/file",
>              "srcPath": "path/to/file"
>      }
>      }
>      </pre>
>  <strong>Note: general file comments are an experimental feature and may change in the near future!</strong>
>  <p>
>  For file and line comments, 'path' refers to the path of the file to which the comment should be applied and
>  'srcPath' refers to the path the that file used to have (only required for copies and moves).
>  <p>
>  For line comments, 'line' refers to the line in the diff that the comment should apply to. 'lineType' refers to
>  the type of diff hunk, which can be:
>  <ul>
>      <li>'ADDED' - for an added line;</li>
>      <li>'REMOVED' - for a removed line; or</li>
>      <li>'CONTEXT' - for a line that was unmodified but is in the vicinity of the diff.</li>
>  </ul>
>  'fileType' refers to the file of the diff to which the anchor should be attached - which is of relevance when
>  displaying the diff in a side-by-side way. Currently the supported values are:
>  <ul>
>      <li>'FROM' - the source file of the diff</li>
>      <li>'TO' - the destination file of the diff</li>
>  </ul>
>  If the current user is not a participant the user is added as one and updated to watch the commit.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the commit
>  is in to call this resource.


```php
function createRepositoryCommitComment(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $commitId,
        $since = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| commitId |  ``` Required ```  | TODO: Add a parameter description |
| since |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$commitId = 'commitId';
$since = 'since';

$result = $repository->createRepositoryCommitComment($dynamic, $projectKey, $repositorySlug, $commitId, $since);

```


#### <a name="get_repository_commit_comments"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryCommitComments") getRepositoryCommitComments

> TODO: Add a method description


```php
function getRepositoryCommitComments(
        $projectKey,
        $repositorySlug,
        $commitId,
        $path = null,
        $since = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| commitId |  ``` Required ```  | TODO: Add a parameter description |
| path |  ``` Optional ```  | TODO: Add a parameter description |
| since |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$commitId = 'commitId';
$path = 'path';
$since = 'since';

$result = $repository->getRepositoryCommitComments($projectKey, $repositorySlug, $commitId, $path, $since);

```


#### <a name="update_repository_commit_comment"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.updateRepositoryCommitComment") updateRepositoryCommitComment

> Update the text of a comment. Only the user who created a comment may update it.
>  <p>
>  <strong>Note:</strong> the supplied supplied JSON object must contain a <code>version</code> that must match
>  the server's version of the comment or the update will fail. To determine the current version of the comment,
>  the comment should be fetched from the server prior to the update. Look for the 'version' attribute in the
>  returned JSON structure.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the commit
>  is in to call this resource.


```php
function updateRepositoryCommitComment(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $commitId,
        $commentId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| commitId |  ``` Required ```  | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository |
| commentId |  ``` Required ```  | the ID of the comment to retrieve |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$commitId = 'commitId';
$commentId = 51;

$result = $repository->updateRepositoryCommitComment($dynamic, $projectKey, $repositorySlug, $commitId, $commentId);

```


#### <a name="delete_repository_commit_comment"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.deleteRepositoryCommitComment") deleteRepositoryCommitComment

> Delete a commit comment. Anyone can delete their own comment. Only users with <strong>REPO_ADMIN</strong>
>  and above may delete comments created by other users. Comments which have replies <i>may not be deleted</i>,
>  regardless of the user's granted permissions.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the commit
>  is in to call this resource.


```php
function deleteRepositoryCommitComment(
        $projectKey,
        $repositorySlug,
        $commitId,
        $commentId,
        $version = -1)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| commitId |  ``` Required ```  | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository |
| commentId |  ``` Required ```  | the ID of the comment to retrieve |
| version |  ``` Optional ```  ``` DefaultValue ```  | The expected version of the comment. This must match the server's version of the comment or
                  the delete will fail. To determine the current version of the comment, the comment should be
                  fetched from the server prior to the delete. Look for the 'version' attribute in the returned
                  JSON structure. |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$commitId = 'commitId';
$commentId = 51;
$version = -1;

$result = $repository->deleteRepositoryCommitComment($projectKey, $repositorySlug, $commitId, $commentId, $version);

```


#### <a name="get_repository_commit_comment"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryCommitComment") getRepositoryCommitComment

> Retrieves a commit discussion comment.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the commit
>  is in to call this resource.


```php
function getRepositoryCommitComment(
        $projectKey,
        $repositorySlug,
        $commitId,
        $commentId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| commitId |  ``` Required ```  | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository |
| commentId |  ``` Required ```  | the ID of the comment to retrieve |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$commitId = 'commitId';
$commentId = 51;

$result = $repository->getRepositoryCommitComment($projectKey, $repositorySlug, $commitId, $commentId);

```


#### <a name="get_repository_hooks"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryHooks") getRepositoryHooks

> Retrieve a page of repository hooks for this repository.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryHooks(
        $projectKey,
        $repositorySlug,
        $type = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| type |  ``` Optional ```  | the optional type to filter by. Valid values are <code>PRE_RECEIVE</code> or <code>POST_RECEIVE</code> |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$type = 'type';

$result = $repository->getRepositoryHooks($projectKey, $repositorySlug, $type);

```


#### <a name="update_set_repository_hook_settings"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.updateSetRepositoryHookSettings") updateSetRepositoryHookSettings

> Modify the settings for a repository hook for this repositories.
>  <p>
>  The service will reject any settings which are too large, the current limit is 32KB once serialized.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function updateSetRepositoryHookSettings(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $hookKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| hookKey |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$hookKey = 'hookKey';

$result = $repository->updateSetRepositoryHookSettings($dynamic, $projectKey, $repositorySlug, $hookKey);

```


#### <a name="get_repository_hook_settings"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryHookSettings") getRepositoryHookSettings

> Retrieve the settings for a repository hook for this repositories.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryHookSettings(
        $projectKey,
        $repositorySlug,
        $hookKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| hookKey |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$hookKey = 'hookKey';

$result = $repository->getRepositoryHookSettings($projectKey, $repositorySlug, $hookKey);

```


#### <a name="get_repository_hook"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryHook") getRepositoryHook

> Retrieve a repository hook for this repositories.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryHook(
        $projectKey,
        $repositorySlug,
        $hookKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| hookKey |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$hookKey = 'hookKey';

$result = $repository->getRepositoryHook($projectKey, $repositorySlug, $hookKey);

```


#### <a name="update_enable_repository_hook"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.updateEnableRepositoryHook") updateEnableRepositoryHook

> Enable a repository hook for this repositories and optionally applying new configuration.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function updateEnableRepositoryHook(
        $projectKey,
        $repositorySlug,
        $hookKey,
        $contentLength = 0)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| hookKey |  ``` Required ```  | TODO: Add a parameter description |
| contentLength |  ``` Optional ```  ``` DefaultValue ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$hookKey = 'hookKey';
$contentLength = 0;

$result = $repository->updateEnableRepositoryHook($projectKey, $repositorySlug, $hookKey, $contentLength);

```


#### <a name="delete_disable_repository_hook"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.deleteDisableRepositoryHook") deleteDisableRepositoryHook

> Disable a repository hook for this repositories.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function deleteDisableRepositoryHook(
        $projectKey,
        $repositorySlug,
        $hookKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| hookKey |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$hookKey = 'hookKey';

$result = $repository->deleteDisableRepositoryHook($projectKey, $repositorySlug, $hookKey);

```


#### <a name="get_repository_changes"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryChanges") getRepositoryChanges

> Retrieve a page of changes made in a specified commit.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryChanges(
        $projectKey,
        $repositorySlug,
        $since = null,
        $until = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| since |  ``` Optional ```  | the commit to which <code>until</code> should be compared to produce a page of changes.
                     If not specified the commit's first parent is assumed (if one exists) |
| until |  ``` Optional ```  | the commit to retrieve changes for |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$since = 'since';
$until = 'until';

$result = $repository->getRepositoryChanges($projectKey, $repositorySlug, $since, $until);

```


#### <a name="delete_unwatch_repository_commit"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.deleteUnwatchRepositoryCommit") deleteUnwatchRepositoryCommit

> Removes the authenticated user as a watcher for the specified commit.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository containing the commit
>  to call this resource.


```php
function deleteUnwatchRepositoryCommit(
        $projectKey,
        $repositorySlug,
        $commitId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| commitId |  ``` Required ```  | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$commitId = 'commitId';

$result = $repository->deleteUnwatchRepositoryCommit($projectKey, $repositorySlug, $commitId);

```


#### <a name="create_watch_repository_commit"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.createWatchRepositoryCommit") createWatchRepositoryCommit

> Adds the authenticated user as a watcher for the specified commit.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository containing the commit
>  to call this resource.


```php
function createWatchRepositoryCommit(
        $projectKey,
        $repositorySlug,
        $commitId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| commitId |  ``` Required ```  | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$commitId = 'commitId';

$result = $repository->createWatchRepositoryCommit($projectKey, $repositorySlug, $commitId);

```


#### <a name="get_repository_commit_diff"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryCommitDiff") getRepositoryCommitDiff

> Retrieve the diff between two provided revisions.
>  <p>
>  <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally apply a hard cap
>  to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded. In the event
>  that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags will be set to
>  <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryCommitDiff(
        $projectKey,
        $repositorySlug,
        $commitId,
        $contextLines = -1,
        $since = null,
        $srcPath = null,
        $whitespace = null,
        $withComments = true)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| commitId |  ``` Required ```  | TODO: Add a parameter description |
| contextLines |  ``` Optional ```  ``` DefaultValue ```  | the number of context lines to include around added/removed lines in the diff |
| since |  ``` Optional ```  | the base revision to diff from. If omitted the parent revision of the until revision is used |
| srcPath |  ``` Optional ```  | the source path for the file, if it was copied, moved or renamed |
| whitespace |  ``` Optional ```  | optional whitespace flag which can be set to <code>ignore-all</code> |
| withComments |  ``` Optional ```  ``` DefaultValue ```  | <code>true</code> to embed comments in the diff (the default); otherwise <code>false</code>
                     to stream the diff without comments |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$commitId = 'commitId';
$contextLines = -1;
$since = 'since';
$srcPath = 'srcPath';
$whitespace = 'whitespace';
$withComments = true;

$result = $repository->getRepositoryCommitDiff($projectKey, $repositorySlug, $commitId, $contextLines, $since, $srcPath, $whitespace, $withComments);

```


#### <a name="get_repository_commit_diff_by_path"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositoryCommitDiffByPath") getRepositoryCommitDiffByPath

> Retrieve the diff between two provided revisions.
>  <p>
>  <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally apply a hard cap
>  to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded. In the event
>  that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags will be set to
>  <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryCommitDiffByPath(
        $projectKey,
        $repositorySlug,
        $path,
        $commitId,
        $contextLines = -1,
        $since = null,
        $srcPath = null,
        $whitespace = null,
        $withComments = true)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| path |  ``` Required ```  | the path to the file which should be diffed (optional) |
| commitId |  ``` Required ```  | TODO: Add a parameter description |
| contextLines |  ``` Optional ```  ``` DefaultValue ```  | the number of context lines to include around added/removed lines in the diff |
| since |  ``` Optional ```  | the base revision to diff from. If omitted the parent revision of the until revision is used |
| srcPath |  ``` Optional ```  | the source path for the file, if it was copied, moved or renamed |
| whitespace |  ``` Optional ```  | optional whitespace flag which can be set to <code>ignore-all</code> |
| withComments |  ``` Optional ```  ``` DefaultValue ```  | <code>true</code> to embed comments in the diff (the default); otherwise <code>false</code>
                     to stream the diff without comments |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$path = 'path';
$commitId = 'commitId';
$contextLines = -1;
$since = 'since';
$srcPath = 'srcPath';
$whitespace = 'whitespace';
$withComments = true;

$result = $repository->getRepositoryCommitDiffByPath($projectKey, $repositorySlug, $path, $commitId, $contextLines, $since, $srcPath, $whitespace, $withComments);

```


#### <a name="get_repositories1"></a>![Method: ](https://apidocs.io/img/method.png ".RepositoryController.getRepositories1") getRepositories1

> Retrieve repositories from the project corresponding to the supplied <strong>projectKey</strong>.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified project to call this
>  resource.


```php
function getRepositories1($projectKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | the parent project key |



#### Example Usage

```php
$projectKey = 'projectKey';

$result = $repository->getRepositories1($projectKey);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="admin_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AdminController") AdminController

#### Get singleton instance

The singleton instance of the ``` AdminController ``` class can be accessed from the API Client.

```php
$admin = $client->getAdmin();
```

#### <a name="get_cluster_information"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.getClusterInformation") getClusterInformation

> Gets information about the nodes that currently make up the stash cluster.
>  <p>
>  The authenticated user must have the <strong>SYS_ADMIN</strong> permission to call this resource.


```php
function getClusterInformation()
```

#### Example Usage

```php

$result = $admin->getClusterInformation();

```


#### <a name="update_license"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.updateLicense") updateLicense

> Decodes the provided encoded license and sets it as the active license. If no license was provided, a 400 is
>  returned. If the license cannot be decoded, or cannot be applied, a 409 is returned. Some possible reasons a
>  license may not be applied include:
>  <ul>
>      <li>It is for a different product</li>
>      <li>It is already expired</li>
>  </ul>
>  Otherwise, if the license is updated successfully, details for the new license are returned with a 200 response.
>  <p>
>  <b>Warning</b>: It is possible to downgrade the license during update, applying a license with a lower number
>  of permitted users. If the number of currently-licensed users exceeds the limits of the new license, pushing
>  will be disabled until the licensed user count is brought into compliance with the new license.
>  <p>
>  The authenticated user must have <b>SYS_ADMIN</b> permission. <b>ADMIN</b> users may <i>view</i> the current
>  license details, but they may not <i>update</i> the license.


```php
function updateLicense($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $admin->updateLicense($dynamic);

```


#### <a name="delete_mail_config"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.deleteMailConfig") deleteMailConfig

> Deletes the current mail configuration.
>  <p>
>  The authenticated user must have the <strong>SYS_ADMIN</strong> permission to call this resource.


```php
function deleteMailConfig()
```

#### Example Usage

```php

$result = $admin->deleteMailConfig();

```


#### <a name="get_mail_config"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.getMailConfig") getMailConfig

> Retrieves the current mail configuration.
> 
>  The authenticated user must have the <strong>SYS_ADMIN</strong> permission to call this resource.


```php
function getMailConfig()
```

#### Example Usage

```php

$result = $admin->getMailConfig();

```


#### <a name="update_set_mail_config"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.updateSetMailConfig") updateSetMailConfig

> Updates the mail configuration
> 
>  The authenticated user must have the <strong>SYS_ADMIN</strong> permission to call this resource.


```php
function updateSetMailConfig($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $admin->updateSetMailConfig($dynamic);

```


#### <a name="delete_clear_sender_address"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.deleteClearSenderAddress") deleteClearSenderAddress

> Clears the server email address.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function deleteClearSenderAddress()
```

#### Example Usage

```php

$result = $admin->deleteClearSenderAddress();

```


#### <a name="get_sender_address"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.getSenderAddress") getSenderAddress

> Retrieves the server email address


```php
function getSenderAddress()
```

#### Example Usage

```php

$result = $admin->getSenderAddress();

```


#### <a name="update_set_sender_address"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.updateSetSenderAddress") updateSetSenderAddress

> Updates the server email address
> 
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function updateSetSenderAddress($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $admin->updateSetSenderAddress($dynamic);

```


#### <a name="get_users_without_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.getUsersWithoutAnyPermission") getUsersWithoutAnyPermission

> Retrieve a page of users that have no granted global permissions.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function getUsersWithoutAnyPermission($filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | if specified only user names containing the supplied string will be returned |



#### Example Usage

```php
$filter = 'filter';

$result = $admin->getUsersWithoutAnyPermission($filter);

```


#### <a name="get_groups_with_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.getGroupsWithAnyPermission") getGroupsWithAnyPermission

> Retrieve a page of groups that have been granted at least one global permission.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function getGroupsWithAnyPermission($filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$filter = 'filter';

$result = $admin->getGroupsWithAnyPermission($filter);

```


#### <a name="update_set_permission_for_groups"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.updateSetPermissionForGroups") updateSetPermissionForGroups

> Promote or demote a user's global permission level. Available global permissions are:
>  <ul>
>      <li>LICENSED_USER</li>
>      <li>PROJECT_CREATE</li>
>      <li>ADMIN</li>
>      <li>SYS_ADMIN</li>
>  </ul>
>  See the <a href="https://confluence.atlassian.com/display/STASH/Global+permissions">Stash documentation</a> for
>  a detailed explanation of what each permission entails.
>  <p>
>  The authenticated user must have:
>  <ul>
>      <li><strong>ADMIN</strong> permission or higher; and</li>
>      <li>the permission they are attempting to grant or higher; and</li>
>      <li>greater or equal permissions than the current permission level of the group (a user may not demote the
>      permission level of a group with higher permissions than them)</li>
>  </ul>
>  to call this resource. In addition, a user may not demote a group's permission level if their own permission
>  level would be reduced as a result.


```php
function updateSetPermissionForGroups(
        $permission = null,
        $name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| permission |  ``` Optional ```  | the permission to grant |
| name |  ``` Optional ```  | the names of the groups |



#### Example Usage

```php
$permission = 'permission';
$name = 'name';

$result = $admin->updateSetPermissionForGroups($permission, $name);

```


#### <a name="delete_revoke_permissions_for_group"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.deleteRevokePermissionsForGroup") deleteRevokePermissionsForGroup

> Revoke all global permissions for a group.
> 
>  <p>
>  The authenticated user must have:
>  <ul>
>      <li><strong>ADMIN</strong> permission or higher; and</li>
>      <li>greater or equal permissions than the current permission level of the group (a user may not demote the
>      permission level of a group with higher permissions than them)</li>
>  </ul>
>  to call this resource. In addition, a user may not revoke a group's permissions if their own permission level
>  would be reduced as a result.


```php
function deleteRevokePermissionsForGroup($name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | the name of the group |



#### Example Usage

```php
$name = 'name';

$result = $admin->deleteRevokePermissionsForGroup($name);

```


#### <a name="get_groups_without_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.getGroupsWithoutAnyPermission") getGroupsWithoutAnyPermission

> Retrieve a page of groups that have no granted global permissions.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function getGroupsWithoutAnyPermission($filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$filter = 'filter';

$result = $admin->getGroupsWithoutAnyPermission($filter);

```


#### <a name="get_users_with_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.getUsersWithAnyPermission") getUsersWithAnyPermission

> Retrieve a page of users that have been granted at least one global permission.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function getUsersWithAnyPermission($filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | if specified only user names containing the supplied string will be returned |



#### Example Usage

```php
$filter = 'filter';

$result = $admin->getUsersWithAnyPermission($filter);

```


#### <a name="update_set_permission_for_users"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.updateSetPermissionForUsers") updateSetPermissionForUsers

> Promote or demote the global permission level of a user. Available global permissions are:
>  <ul>
>      <li>LICENSED_USER</li>
>      <li>PROJECT_CREATE</li>
>      <li>ADMIN</li>
>      <li>SYS_ADMIN</li>
>  </ul>
>  See the <a href="https://confluence.atlassian.com/display/STASH/Global+permissions">Stash documentation</a> for
>  a detailed explanation of what each permission entails.
>  <p>
>  The authenticated user must have:
>  <ul>
>      <li><strong>ADMIN</strong> permission or higher; and</li>
>      <li>the permission they are attempting to grant; and</li>
>      <li>greater or equal permissions than the current permission level of the user (a user may not demote the
>      permission level of a user with higher permissions than them)</li>
>  </ul>
>  to call this resource. In addition, a user may not demote their own permission level.


```php
function updateSetPermissionForUsers(
        $name = null,
        $permission = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | the names of the users |
| permission |  ``` Optional ```  | the permission to grant |



#### Example Usage

```php
$name = 'name';
$permission = 'permission';

$result = $admin->updateSetPermissionForUsers($name, $permission);

```


#### <a name="delete_revoke_permissions_for_user"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.deleteRevokePermissionsForUser") deleteRevokePermissionsForUser

> Revoke all global permissions for a user.
>  <p>
>  The authenticated user must have:
>  <ul>
>      <li><strong>ADMIN</strong> permission or higher; and</li>
>      <li>greater or equal permissions than the current permission level of the user (a user may not demote the
>      permission level of a user with higher permissions than them)</li>
>  </ul>
>  to call this resource. In addition, a user may not demote their own permission level.


```php
function deleteRevokePermissionsForUser($name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | the name of the user |



#### Example Usage

```php
$name = 'name';

$result = $admin->deleteRevokePermissionsForUser($name);

```


#### <a name="get_users"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.getUsers") getUsers

> Retrieve a page of users.
>  <p>
>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.


```php
function getUsers($filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | if specified only users with usernames, display name or email addresses containing the supplied
               string will be returned |



#### Example Usage

```php
$filter = 'filter';

$result = $admin->getUsers($filter);

```


#### <a name="create_user"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.createUser") createUser

> Creates a new user from the assembled query parameters.
>  <p>
>  The default group can be used to control initial permissions for new users, such as granting users the ability
>  to login or providing read access to certain projects or repositories. If the user is not added to the default
>  group, they may not be able to login after their account is created until explicit permissions are configured.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function createUser(
        $name = null,
        $password = null,
        $displayName = null,
        $emailAddress = null,
        $addToDefaultGroup = true,
        $notify = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | the username for the new user |
| password |  ``` Optional ```  | the password for the new user |
| displayName |  ``` Optional ```  | the display name for the new user |
| emailAddress |  ``` Optional ```  | the e-mail address for the new user |
| addToDefaultGroup |  ``` Optional ```  ``` DefaultValue ```  | <code>true</code> to add the user to the default group, which can be used to grant them
                          a set of initial permissions; otherwise, <code>false</code> to not add them to a group |
| notify |  ``` Optional ```  | if present and not <code>false</code> instead of requiring a password,
                          the create user will be notified via email their account has been created and requires
                          a password to be reset. This option can only be used if a mail server has been configured |



#### Example Usage

```php
$name = 'name';
$password = 'password';
$displayName = 'displayName';
$emailAddress = 'emailAddress';
$addToDefaultGroup = true;
$notify = 'notify';

$result = $admin->createUser($name, $password, $displayName, $emailAddress, $addToDefaultGroup, $notify);

```


#### <a name="delete_user"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.deleteUser") deleteUser

> Deletes the specified user, removing them from the system. This also removes any permissions that may have been
>  granted to the user.
>  <p>
>  A user may not delete themselves, and a user with <strong>ADMIN</strong> permissions may not delete a user with
>  <strong>SYS_ADMIN</strong>permissions.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function deleteUser($name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | the username identifying the user to delete |



#### Example Usage

```php
$name = 'name';

$result = $admin->deleteUser($name);

```


#### <a name="update_user_details"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.updateUserDetails") updateUserDetails

> Update a user's details.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function updateUserDetails($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $admin->updateUserDetails($dynamic);

```


#### <a name="create_rename_user"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.createRenameUser") createRenameUser

> Rename a user.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function createRenameUser($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $admin->createRenameUser($dynamic);

```


#### <a name="delete_clear_user_captcha_challenge"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.deleteClearUserCaptchaChallenge") deleteClearUserCaptchaChallenge

> Clears any CAPTCHA challenge that may constrain the user with the supplied username when they authenticate.
>  Additionally any counter or metric that contributed towards the user being issued the CAPTCHA challenge
>  (for instance too many consecutive failed logins) will also be reset.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource, and may not clear
>  the CAPTCHA of a user with greater permissions than themselves.


```php
function deleteClearUserCaptchaChallenge($name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$name = 'name';

$result = $admin->deleteClearUserCaptchaChallenge($name);

```


#### <a name="delete_group"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.deleteGroup") deleteGroup

> Deletes the specified group, removing them from the system. This also removes any permissions that may have been
>  granted to the group.
>  <p>
>  A user may not delete the last group that is granting them administrative permissions, or a group with greater
>  permissions than themselves.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function deleteGroup($name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | the name identifying the group to delete |



#### Example Usage

```php
$name = 'name';

$result = $admin->deleteGroup($name);

```


#### <a name="create_group"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.createGroup") createGroup

> Create a new group.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function createGroup($name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | Name of the group. |



#### Example Usage

```php
$name = 'name';

$result = $admin->createGroup($name);

```


#### <a name="get_groups"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.getGroups") getGroups

> Retrieve a page of groups.
>  <p>
>  The authenticated user must have <strong>LICENSED_USER</strong> permission or higher to call this resource.


```php
function getGroups($filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$filter = 'filter';

$result = $admin->getGroups($filter);

```


#### <a name="add_user_to_group"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.addUserToGroup") addUserToGroup

> <p><strong>Deprecated since 2.10 for removal in 4.0</strong>. Use {@code /rest/users/add-groups} instead.</p>
> 
>  Add a user to a group.
>  <p>
>  In the request entity, the <em>context</em> attribute is the group and the <em>itemName</em> is the user.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function addUserToGroup($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $admin->addUserToGroup($dynamic);

```


#### <a name="add_group_to_user"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.addGroupToUser") addGroupToUser

> <p><strong>Deprecated since 2.10 for removal in 4.0</strong>. Use {@code /rest/users/add-groups} instead.</p>
> 
>  Add a user to a group. This is very similar to <code>groups/add-user</code>, but with the <em>context</em> and
>  <em>itemName</em> attributes of the supplied request entity reversed. On the face of it this may appear
>  redundant, but it facilitates a specific UI component in Stash.
>  <p>
>  In the request entity, the <em>context</em> attribute is the user and the <em>itemName</em> is the group.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function addGroupToUser($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $admin->addGroupToUser($dynamic);

```


#### <a name="add_users_to_group"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.addUsersToGroup") addUsersToGroup

> Add multiple users to a group.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function addUsersToGroup($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $admin->addUsersToGroup($dynamic);

```


#### <a name="add_user_to_groups"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.addUserToGroups") addUserToGroups

> Add a user to one or more groups.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function addUserToGroups($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $admin->addUserToGroups($dynamic);

```


#### <a name="create_remove_user_from_group"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.createRemoveUserFromGroup") createRemoveUserFromGroup

> <p><strong>Deprecated since 2.10 for removal in 3.0</strong>. Use {@code /rest/users/remove-groups} instead.</p>
> 
>  Remove a user from a group.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.
>  <p>
>  In the request entity, the <em>context</em> attribute is the group and the <em>itemName</em> is the user.


```php
function createRemoveUserFromGroup($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $admin->createRemoveUserFromGroup($dynamic);

```


#### <a name="create_remove_group_from_user"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.createRemoveGroupFromUser") createRemoveGroupFromUser

> Remove a user from a group. This is very similar to <code>groups/remove-user</code>, but with the <em>context</em>
>  and <em>itemName</em> attributes of the supplied request entity reversed. On the face of it this may appear
>  redundant, but it facilitates a specific UI component in Stash.
>  <p>
>  In the request entity, the <em>context</em> attribute is the user and the <em>itemName</em> is the group.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function createRemoveGroupFromUser($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $admin->createRemoveGroupFromUser($dynamic);

```


#### <a name="find_users_in_group"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.findUsersInGroup") findUsersInGroup

> Retrieves a list of users that are members of a specified group.
>  <p>
>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.


```php
function findUsersInGroup(
        $context = null,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| context |  ``` Optional ```  | the group which should be used to locate members |
| filter |  ``` Optional ```  | if specified only users with usernames, display names or email addresses containing the
                  supplied string will be returned |



#### Example Usage

```php
$context = 'context';
$filter = 'filter';

$result = $admin->findUsersInGroup($context, $filter);

```


#### <a name="find_users_not_in_group"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.findUsersNotInGroup") findUsersNotInGroup

> Retrieves a list of users that are <em>not</em> members of a specified group.
>  <p>
>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.


```php
function findUsersNotInGroup(
        $context = null,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| context |  ``` Optional ```  | the group which should be used to locate non-members |
| filter |  ``` Optional ```  | if specified only users with usernames, display names or email addresses containing the
                  supplied string will be returned |



#### Example Usage

```php
$context = 'context';
$filter = 'filter';

$result = $admin->findUsersNotInGroup($context, $filter);

```


#### <a name="find_groups_for_user"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.findGroupsForUser") findGroupsForUser

> Retrieves a list of groups the specified user is a member of.
>  <p>
>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.


```php
function findGroupsForUser(
        $context = null,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| context |  ``` Optional ```  | the user which should be used to locate groups |
| filter |  ``` Optional ```  | if specified only groups with names containing the supplied string will be returned |



#### Example Usage

```php
$context = 'context';
$filter = 'filter';

$result = $admin->findGroupsForUser($context, $filter);

```


#### <a name="find_other_groups_for_user"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.findOtherGroupsForUser") findOtherGroupsForUser

> Retrieves a list of groups the specified user is <em>not</em> a member of.
>  <p>
>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.


```php
function findOtherGroupsForUser(
        $context = null,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| context |  ``` Optional ```  | the user which should be used to locate groups |
| filter |  ``` Optional ```  | if specified only groups with names containing the supplied string will be returned |



#### Example Usage

```php
$context = 'context';
$filter = 'filter';

$result = $admin->findOtherGroupsForUser($context, $filter);

```


#### <a name="update_user_password"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.updateUserPassword") updateUserPassword

> Update a user's password.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource, and may not update
>  the password of a user with greater permissions than themselves.


```php
function updateUserPassword($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $admin->updateUserPassword($dynamic);

```


#### <a name="get_license"></a>![Method: ](https://apidocs.io/img/method.png ".AdminController.getLicense") getLicense

> Retrieves details about the current license, as well as the current status of the system with regards to the
>  installed license. The status includes the current number of users applied toward the license limit, as well
>  as any status messages about the license (warnings about expiry or user counts exceeding license limits).
>  <p>
>  The authenticated user must have <b>ADMIN</b> permission. Unauthenticated users, and non-administrators, are
>  not permitted to access license details.


```php
function getLicense()
```

#### Example Usage

```php

$result = $admin->getLicense();

```


[Back to List of Controllers](#list_of_controllers)

### <a name="pull_request_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PullRequestController") PullRequestController

#### Get singleton instance

The singleton instance of the ``` PullRequestController ``` class can be accessed from the API Client.

```php
$pullRequest = $client->getPullRequest();
```

#### <a name="delete_unwatch_pull_request"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.deleteUnwatchPullRequest") deleteUnwatchPullRequest

> Make the authenticated user stop watching the specified pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function deleteUnwatchPullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;

$result = $pullRequest->deleteUnwatchPullRequest($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="create_watch_pull_request"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.createWatchPullRequest") createWatchPullRequest

> Make the authenticated user watch the specified pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function createWatchPullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;

$result = $pullRequest->createWatchPullRequest($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="get_pull_request_diff"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.getPullRequestDiff") getPullRequestDiff

> Streams a diff within a pull request.
>  <p>
>  If the specified file has been copied, moved or renamed, the <code>srcPath</code> must also be specified to
>  produce the correct diff.
>  <p>
>  Note: This RESTful endpoint is currently <i>not paged</i>. The server will internally apply a hard cap to the
>  streamed lines, and it is not possible to request subsequent pages if that cap is exceeded.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getPullRequestDiff(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $contextLines = -1,
        $srcPath = null,
        $whitespace = null,
        $withComments = true)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |
| contextLines |  ``` Optional ```  ``` DefaultValue ```  | the number of context lines to include around added/removed lines in the diff |
| srcPath |  ``` Optional ```  | the previous path to the file, if the file has been copied, moved or renamed |
| whitespace |  ``` Optional ```  | optional whitespace flag which can be set to <code>ignore-all</code> |
| withComments |  ``` Optional ```  ``` DefaultValue ```  | <code>true</code> to embed comments in the diff (the default); otherwise, <code>false</code>
                     to stream the diff without comments |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 'pullRequestId';
$contextLines = -1;
$srcPath = 'srcPath';
$whitespace = 'whitespace';
$withComments = true;

$result = $pullRequest->getPullRequestDiff($projectKey, $repositorySlug, $pullRequestId, $contextLines, $srcPath, $whitespace, $withComments);

```


#### <a name="get_pull_request_diff_by_path"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.getPullRequestDiffByPath") getPullRequestDiffByPath

> Streams a diff within a pull request.
>  <p>
>  If the specified file has been copied, moved or renamed, the <code>srcPath</code> must also be specified to
>  produce the correct diff.
>  <p>
>  Note: This RESTful endpoint is currently <i>not paged</i>. The server will internally apply a hard cap to the
>  streamed lines, and it is not possible to request subsequent pages if that cap is exceeded.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getPullRequestDiffByPath(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $path,
        $contextLines = -1,
        $srcPath = null,
        $whitespace = null,
        $withComments = true)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |
| path |  ``` Required ```  | the path to the file which should be diffed (optional) |
| contextLines |  ``` Optional ```  ``` DefaultValue ```  | the number of context lines to include around added/removed lines in the diff |
| srcPath |  ``` Optional ```  | the previous path to the file, if the file has been copied, moved or renamed |
| whitespace |  ``` Optional ```  | optional whitespace flag which can be set to <code>ignore-all</code> |
| withComments |  ``` Optional ```  ``` DefaultValue ```  | <code>true</code> to embed comments in the diff (the default); otherwise, <code>false</code>
                     to stream the diff without comments |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 'pullRequestId';
$path = 'path';
$contextLines = -1;
$srcPath = 'srcPath';
$whitespace = 'whitespace';
$withComments = true;

$result = $pullRequest->getPullRequestDiffByPath($projectKey, $repositorySlug, $pullRequestId, $path, $contextLines, $srcPath, $whitespace, $withComments);

```


#### <a name="get_pull_request_commits"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.getPullRequestCommits") getPullRequestCommits

> Retrieve changesets for the specified pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getPullRequestCommits(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $withCounts = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |
| withCounts |  ``` Optional ```  | if set to true, the service will add "authorCount" and "totalCount" at the end of the page.
                     "authorCount" is the number of different authors and "totalCount" is the total number of changesets. |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;
$withCounts = true;

$result = $pullRequest->getPullRequestCommits($projectKey, $repositorySlug, $pullRequestId, $withCounts);

```


#### <a name="get_pull_request_tasks"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.getPullRequestTasks") getPullRequestTasks

> Retrieve the tasks associated with a pull request.


```php
function getPullRequestTasks(
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 'pullRequestId';

$result = $pullRequest->getPullRequestTasks($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="get_count_pull_request_tasks"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.getCountPullRequestTasks") getCountPullRequestTasks

> Retrieve the total number of {@link com.atlassian.stash.task.TaskState#OPEN open} and
>  {@link com.atlassian.stash.task.TaskState#RESOLVED resolved} tasks associated with a pull request.


```php
function getCountPullRequestTasks(
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 'pullRequestId';

$result = $pullRequest->getCountPullRequestTasks($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="create_pull_request_comment"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.createPullRequestComment") createPullRequestComment

> Add a new comment.
>  <p>
>  Comments can be added in a few places by setting different attributes:
>  <p>
>  General pull request comment:
> 
>  <pre>
>      {
>          "text": "An insightful general comment on a pull request."
>      }
>      </pre>
> 
>  Reply to a comment:
> 
>  <pre>
>      {
>          "text": "A measured reply.",
>          "parent": {
>              "id": 1
>          }
>      }
>      </pre>
> 
>  General file comment:
> 
>  <pre>
>      {
>          "text": "An insightful general comment on a file.",
>          "anchor": {
>              "path": "path/to/file",
>              "srcPath": "path/to/file"
>          }
>      }
>      </pre>
> 
>  File line comment:
> 
>  <pre>
>      {
>          "text": "A pithy comment on a particular line within a file.",
>          "anchor": {
>              "line": 1,
>              "lineType": "CONTEXT",
>              "fileType": "FROM"
>              "path": "path/to/file",
>              "srcPath": "path/to/file"
>          }
>      }
>      </pre>
>  <strong>Note: general file comments are an experimental feature and may change in the near future!</strong>
>  <p>
>  For file and line comments, 'path' refers to the path of the file to which the comment should be applied and
>  'srcPath' refers to the path the that file used to have (only required for copies and moves).
>  <p>
>  For line comments, 'line' refers to the line in the diff that the comment should apply to. 'lineType' refers to
>  the type of diff hunk, which can be:
>  <ul>
>      <li>'ADDED' - for an added line;</li>
>      <li>'REMOVED' - for a removed line; or</li>
>      <li>'CONTEXT' - for a line that was unmodified but is in the vicinity of the diff.</li>
>  </ul>
>  'fileType' refers to the file of the diff to which the anchor should be attached - which is of relevance when
>  displaying the diff in a side-by-side way. Currently the supported values are:
>  <ul>
>      <li>'FROM' - the source file of the diff</li>
>      <li>'TO' - the destination file of the diff</li>
>  </ul>
>  If the current user is not a participant the user is added as a watcher of the pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function createPullRequestComment(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;

$result = $pullRequest->createPullRequestComment($dynamic, $projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="get_pull_request_comments"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.getPullRequestComments") getPullRequestComments

> TODO: Add a method description


```php
function getPullRequestComments(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $path = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |
| path |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;
$path = 'path';

$result = $pullRequest->getPullRequestComments($projectKey, $repositorySlug, $pullRequestId, $path);

```


#### <a name="update_pull_request_comment"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.updatePullRequestComment") updatePullRequestComment

> Update the text of a comment. Only the user who created a comment may update it.
>  <p>
>  <strong>Note:</strong> the supplied supplied JSON object must contain a <code>version</code> that must match the
>  server's version of the comment or the update will fail. To determine the current version of
>  the comment, the comment should be fetched from the server prior to the update. Look for the
>  'version' attribute in the returned JSON structure.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function updatePullRequestComment(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $commentId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | the id of the pull request within the repository |
| commentId |  ``` Required ```  | the id of the comment to retrieve |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;
$commentId = 234;

$result = $pullRequest->updatePullRequestComment($dynamic, $projectKey, $repositorySlug, $pullRequestId, $commentId);

```


#### <a name="delete_pull_request_comment"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.deletePullRequestComment") deletePullRequestComment

> Delete a pull request comment. Anyone can delete their own comment. Only users with <strong>REPO_ADMIN</strong>
>  and above may delete comments created by other users.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function deletePullRequestComment(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $commentId,
        $version = -1)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | the id of the pull request within the repository |
| commentId |  ``` Required ```  | the id of the comment to retrieve |
| version |  ``` Optional ```  ``` DefaultValue ```  | The expected version of the comment. This must match the server's version of the comment or
                      the delete will fail. To determine the current version of the comment, the comment should be
                      fetched from the server prior to the delete. Look for the 'version' attribute in the
                      returned JSON structure. |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;
$commentId = 234;
$version = -1;

$result = $pullRequest->deletePullRequestComment($projectKey, $repositorySlug, $pullRequestId, $commentId, $version);

```


#### <a name="get_pull_request_comment"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.getPullRequestComment") getPullRequestComment

> Retrieves a pull request comment.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getPullRequestComment(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $commentId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | the id of the pull request within the repository |
| commentId |  ``` Required ```  | the id of the comment to retrieve |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;
$commentId = 234;

$result = $pullRequest->getPullRequestComment($projectKey, $repositorySlug, $pullRequestId, $commentId);

```


#### <a name="get_pull_request_changes"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.getPullRequestChanges") getPullRequestChanges

> Gets changes for the specified PullRequest.
>  <p>
>  Note: This resource is currently <i>not paged</i>. The server will return at most one page. The server will
>  truncate the number of changes to either the request's page limit or an internal maximum, whichever is smaller.
>  The start parameter of the page request is also ignored.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getPullRequestChanges(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $withComments = true)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |
| withComments |  ``` Optional ```  ``` DefaultValue ```  | {@code true} to apply comment counts in the changes (the default); otherwise, {@code false}
                     to stream changes without comment counts |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 'pullRequestId';
$withComments = true;

$result = $pullRequest->getPullRequestChanges($projectKey, $repositorySlug, $pullRequestId, $withComments);

```


#### <a name="get_pull_requests"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.getPullRequests") getPullRequests

> Retrieve a page of pull requests to or from the specified repository.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call
>  this resource.
> 
>  Optionally clients can specify PR participant filters. Each filter has a mandatory {@code username.N}
>  parameter, and the optional {@code role.N} and {@code approved.N} parameters.
>  <ul>
>      <li>
>          {@code username.N} - the "root" of a single participant filter, where "N" is a natural number
>          starting from 1. This allows clients to specify multiple participant filters, by providing consecutive
>          filters as {@code username.1}, {@code username.2} etc. Note that the filters numbering has to start
>          with 1 and be continuous for all filters to be processed. The total allowed number of participant
>          filters is 10 and all filters exceeding that limit will be dropped.
>      </li>
>      <li>
>          {@code role.N}(optional) the role associated with {@code username.N}.
>          This must be one of {@code AUTHOR}, {@code REVIEWER}, or{@code PARTICIPANT}
>      </li>
>      <li>
>          {@code approved.N}(optional) the approved status associated with {@code username.N}.
>          That is whether {@code username.N} has approved the PR. Either {@code true}, or {@code false}
>      </li>
>  </ul>


```php
function getPullRequests(
        $projectKey,
        $repositorySlug,
        $direction = 'incoming',
        $at = null,
        $state = null,
        $order = null,
        $withAttributes = true,
        $withProperties = true)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| direction |  ``` Optional ```  ``` DefaultValue ```  | (optional, defaults to <strong>INCOMING</strong>) the direction relative to the specified
                  repository. Either <strong>INCOMING</strong> or <strong>OUTGOING</strong>. |
| at |  ``` Optional ```  | (optional) a <i>fully-qualified</i> branch ID to find pull requests to or from,
           such as {@code refs/heads/master} |
| state |  ``` Optional ```  | (optional, defaults to <strong>OPEN</strong>). Supply <strong>ALL</strong> to return pull request
               in any state. If a state is supplied only pull requests in the specified state will be returned.
               Either <strong>OPEN</strong>, <strong>DECLINED</strong> or <strong>MERGED</strong>. |
| order |  ``` Optional ```  | (optional) the order to return pull requests in, either <strong>OLDEST</strong> (as in: "oldest
              first") or <strong>NEWEST</strong>. |
| withAttributes |  ``` Optional ```  ``` DefaultValue ```  | (optional) defaults to true, whether to return additional pull request attributes |
| withProperties |  ``` Optional ```  ``` DefaultValue ```  | (optional) defaults to true, whether to return additional pull request properties |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$direction = 'incoming';
$at = 'at';
$state = 'state';
$order = 'order';
$withAttributes = true;
$withProperties = true;

$result = $pullRequest->getPullRequests($projectKey, $repositorySlug, $direction, $at, $state, $order, $withAttributes, $withProperties);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | The request was malformed. |
| 401 | The currently authenticated user has insufficient permissions to view the specified pull request. |
| 404 | The specified repository or pull request does not exist. |
| 0 | Something goes wrong. |



#### <a name="create_decline_pull_request"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.createDeclinePullRequest") createDeclinePullRequest

> Decline a pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function createDeclinePullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $version = -1)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |
| version |  ``` Optional ```  ``` DefaultValue ```  | the current version of the pull request. If the server's version isn't the same as the specified
                version the operation will fail. To determine the current version of the pull request it should be
                fetched from the server prior to this operation. Look for the 'version' attribute in the returned
                JSON structure. |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;
$version = -1;

$result = $pullRequest->createDeclinePullRequest($projectKey, $repositorySlug, $pullRequestId, $version);

```


#### <a name="get_pull_request_activities"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.getPullRequestActivities") getPullRequestActivities

> Retrieve a page of activity associated with a pull request.
>  <p>
>  Activity items include comments, approvals, rescopes (i.e. adding and removing of commits), merges and more.
>  <p>
>  Different types of activity items may be introduced in newer versions of Stash or by user installed plugins, so
>  clients should be flexible enough to handle unexpected entity shapes in the returned page.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getPullRequestActivities(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $fromId = null,
        $fromType = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | the id of the pull request within the repository |
| fromId |  ``` Optional ```  | (optional) the id of the activity item to use as the first item in the returned page |
| fromType |  ``` Optional ```  | (required if <strong>fromId</strong> is present) the type of the activity item specified by
                 <strong>fromId</strong> (either <strong>COMMENT</strong> or <strong>ACTIVITY</strong>) |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;
$fromId = 234;
$fromType = 'fromType';

$result = $pullRequest->getPullRequestActivities($projectKey, $repositorySlug, $pullRequestId, $fromId, $fromType);

```


#### <a name="create_reopen_pull_request"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.createReopenPullRequest") createReopenPullRequest

> Re-open a declined pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function createReopenPullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $version = -1)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | the id of the pull request within the repository |
| version |  ``` Optional ```  ``` DefaultValue ```  | the current version of the pull request. If the server's version isn't the same as the specified
                version the operation will fail. To determine the current version of the pull request it should be
                fetched from the server prior to this operation. Look for the 'version' attribute in the returned
                JSON structure. |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;
$version = -1;

$result = $pullRequest->createReopenPullRequest($projectKey, $repositorySlug, $pullRequestId, $version);

```


#### <a name="get_can_merge_pull_request"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.getCanMergePullRequest") getCanMergePullRequest

> Test whether a pull request can be merged.
>  <p>
>  A pull request may not be merged if:
>  <ul>
>      <li>there are conflicts that need to be manually resolved before merging; and/or</li>
>      <li>one or more merge checks have vetoed the merge.</li>
>  </ul>
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getCanMergePullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;

$result = $pullRequest->getCanMergePullRequest($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="create_merge_pull_request"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.createMergePullRequest") createMergePullRequest

> Merge the specified pull request.
>  <p>
>  The authenticated user must have <strong>REPO_WRITE</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function createMergePullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $version = -1)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | the id of the pull request within the repository |
| version |  ``` Optional ```  ``` DefaultValue ```  | the current version of the pull request. If the server's version isn't the same as the specified
                version the operation will fail. To determine the current version of the pull request it should be
                fetched from the server prior to this operation. Look for the 'version' attribute in the returned
                JSON structure. |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;
$version = -1;

$result = $pullRequest->createMergePullRequest($projectKey, $repositorySlug, $pullRequestId, $version);

```


#### <a name="get_pull_request"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.getPullRequest") getPullRequest

> Retrieve a pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getPullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 'pullRequestId';

$result = $pullRequest->getPullRequest($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="update_pull_request"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.updatePullRequest") updatePullRequest

> Update the title, description, reviewers or destination branch of an existing pull request.
>  <p>
>  <strong>Note:</strong> the <em>reviewers</em> list may be updated using this resource. However the
>  <em>author</em> and <em>participants</em> list may not.
>  <p>
>  The authenticated user must either:
>  <ul>
>      <li>be the author of the pull request and have the <strong>REPO_READ</strong> permission for the repository
>      that this pull request targets; or</li>
>      <li>have the <strong>REPO_WRITE</strong> permission for the repository that this pull request targets</li>
>  </ul>
>  to call this resource.


```php
function updatePullRequest(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 'pullRequestId';

$result = $pullRequest->updatePullRequest($dynamic, $projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="create_assign_pull_request_participant_role"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.createAssignPullRequestParticipantRole") createAssignPullRequestParticipantRole

> Assigns a participant to an explicit role in pull request. Currently only the REVIEWER role may be assigned.
>  <p>
>  If the user is not yet a participant in the pull request, they are made one and assigned the supplied role.
>  <p>
>  If the user is already a participant in the pull request, their previous role is replaced with the supplied role
>  unless they are already assigned the AUTHOR role which cannot be changed and will result in a Bad Request (400)
>  response code.
>  <p>
>  The authenticated user must have <strong>REPO_WRITE</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function createAssignPullRequestParticipantRole(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | the id of the pull request within the repository |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;

$result = $pullRequest->createAssignPullRequestParticipantRole($dynamic, $projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="delete_unassign_pull_request_participant_role"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.deleteUnassignPullRequestParticipantRole") deleteUnassignPullRequestParticipantRole

> Unassigns a participant from the REVIEWER role they may have been given in a pull request.
>  <p>
>  If the participant has no explicit role this method has no effect.
>  <p>
>  Afterwards, the user will still remain a participant in the pull request but their role will be reduced to
>  PARTICIPANT. This is because once made a participant of a pull request,
>  a user will forever remain a participant. Only their role may be altered.
>  <p>
>  The authenticated user must have <strong>REPO_WRITE</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function deleteUnassignPullRequestParticipantRole(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $username = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | the id of the pull request within the repository |
| username |  ``` Optional ```  | the participant's user name |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;
$username = 'username';

$result = $pullRequest->deleteUnassignPullRequestParticipantRole($projectKey, $repositorySlug, $pullRequestId, $username);

```


#### <a name="list_pull_request_participants"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.listPullRequestParticipants") listPullRequestParticipants

> Retrieves a page of the participants for a given pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function listPullRequestParticipants(
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;

$result = $pullRequest->listPullRequestParticipants($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="create_approve_pull_request"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.createApprovePullRequest") createApprovePullRequest

> Approve a pull request as the current user. Implicitly adds the user as a participant if they are not already.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function createApprovePullRequest(
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 234;

$result = $pullRequest->createApprovePullRequest($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="delete_withdraw_pull_request_approval"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.deleteWithdrawPullRequestApproval") deleteWithdrawPullRequestApproval

> Remove approval from a pull request as the current user. This does not remove the user as a participant.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function deleteWithdrawPullRequestApproval(
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 192;

$result = $pullRequest->deleteWithdrawPullRequestApproval($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="create_pull_request"></a>![Method: ](https://apidocs.io/img/method.png ".PullRequestController.createPullRequest") createPullRequest

> Create a new pull request between two branches. The branches may be in the same repository, or different ones.
>  When using different repositories, they must still be in the same {@link Repository#getHierarchyId() hierarchy}.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the "from" and "to"repositories to
>  call this resource.


```php
function createPullRequest(
        $pullRequest,
        $projectKey,
        $repositorySlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| pullRequest |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$pullRequest = new PullRequest();
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';

$result = $pullRequest->createPullRequest($pullRequest, $projectKey, $repositorySlug);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | The pull request entity supplied in the request was malformed. |
| 401 | The currently authenticated user has insufficient permissions to create a pull request between the two specified repositories. |
| 404 | One of the specified repositories or branches does not exist. |
| 409 | One of the following error cases occurred (check the error message for more details): There was a problem resolving one or more reviewers. The specified branches were the same. The to branch is already up-to-date with all the commits on the from branch. A pull request between the two branches already exists. |
| 0 | Something goes wrong. |



[Back to List of Controllers](#list_of_controllers)

### <a name="hook_controller"></a>![Class: ](https://apidocs.io/img/class.png ".HookController") HookController

#### Get singleton instance

The singleton instance of the ``` HookController ``` class can be accessed from the API Client.

```php
$hook = $client->getHook();
```

#### <a name="get_avatar"></a>![Method: ](https://apidocs.io/img/method.png ".HookController.getAvatar") getAvatar

> Retrieve the avatar for the project matching the supplied <strong>moduleKey</strong>.


```php
function getAvatar(
        $hookKey,
        $version = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| hookKey |  ``` Required ```  | the complete module key of the hook module |
| version |  ``` Optional ```  | optional version used for HTTP caching only - any non-blank version will result in a large max-age Cache-Control header.
                Note that this does not affect the Last-Modified header. |



#### Example Usage

```php
$hookKey = 'hookKey';
$version = 'version';

$result = $hook->getAvatar($hookKey, $version);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="project_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ProjectController") ProjectController

#### Get singleton instance

The singleton instance of the ``` ProjectController ``` class can be accessed from the API Client.

```php
$project = $client->getProject();
```

#### <a name="get_project_groups_with_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.getProjectGroupsWithAnyPermission") getProjectGroupsWithAnyPermission

> Retrieve a page of groups that have been granted at least one permission for the specified project.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.


```php
function getProjectGroupsWithAnyPermission(
        $projectKey,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$filter = 'filter';

$result = $project->getProjectGroupsWithAnyPermission($projectKey, $filter);

```


#### <a name="update_set_project_permission_for_groups"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.updateSetProjectPermissionForGroups") updateSetProjectPermissionForGroups

> Promote or demote a group's permission level for the specified project. Available project permissions are:
>  <ul>
>      <li>PROJECT_READ</li>
>      <li>PROJECT_WRITE</li>
>      <li>PROJECT_ADMIN</li>
>  </ul>
>  See the <a href="https://confluence.atlassian.com/display/STASH/Managing+permissions+for+a+project">Stash documentation</a>
>  for a detailed explanation of what each permission entails.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource. In addition, a user may not demote a group's permission level if their
>  own permission level would be reduced as a result.


```php
function updateSetProjectPermissionForGroups(
        $projectKey,
        $permission = null,
        $name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| permission |  ``` Optional ```  | the permission to grant |
| name |  ``` Optional ```  | the names of the groups |



#### Example Usage

```php
$projectKey = 'projectKey';
$permission = 'permission';
$name = 'name';

$result = $project->updateSetProjectPermissionForGroups($projectKey, $permission, $name);

```


#### <a name="delete_revoke_project_permissions_for_group"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.deleteRevokeProjectPermissionsForGroup") deleteRevokeProjectPermissionsForGroup

> Revoke all permissions for the specified project for a group.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.
>  <p>
>  In addition, a user may not revoke a group's permissions if it will reduce their own permission level.


```php
function deleteRevokeProjectPermissionsForGroup(
        $projectKey,
        $name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| name |  ``` Optional ```  | the name of the group |



#### Example Usage

```php
$projectKey = 'projectKey';
$name = 'name';

$result = $project->deleteRevokeProjectPermissionsForGroup($projectKey, $name);

```


#### <a name="get_project_groups_without_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.getProjectGroupsWithoutAnyPermission") getProjectGroupsWithoutAnyPermission

> Retrieve a page of groups that have no granted permissions for the specified project.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.


```php
function getProjectGroupsWithoutAnyPermission(
        $projectKey,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$filter = 'filter';

$result = $project->getProjectGroupsWithoutAnyPermission($projectKey, $filter);

```


#### <a name="get_project_users_with_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.getProjectUsersWithAnyPermission") getProjectUsersWithAnyPermission

> Retrieve a page of users that have been granted at least one permission for the specified project.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.


```php
function getProjectUsersWithAnyPermission(
        $projectKey,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$filter = 'filter';

$result = $project->getProjectUsersWithAnyPermission($projectKey, $filter);

```


#### <a name="update_set_project_permission_for_users"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.updateSetProjectPermissionForUsers") updateSetProjectPermissionForUsers

> Promote or demote a user's permission level for the specified project. Available project permissions are:
>  <ul>
>      <li>PROJECT_READ</li>
>      <li>PROJECT_WRITE</li>
>      <li>PROJECT_ADMIN</li>
>  </ul>
>  See the <a href="https://confluence.atlassian.com/display/STASH/Managing+permissions+for+a+project">Stash documentation</a>
>  for a detailed explanation of what each permission entails.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource. In addition, a user may not reduce their own permission level unless
>  they have a global permission that already implies that permission.


```php
function updateSetProjectPermissionForUsers(
        $projectKey,
        $name = null,
        $permission = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| name |  ``` Optional ```  | the names of the users |
| permission |  ``` Optional ```  | the permission to grant |



#### Example Usage

```php
$projectKey = 'projectKey';
$name = 'name';
$permission = 'permission';

$result = $project->updateSetProjectPermissionForUsers($projectKey, $name, $permission);

```


#### <a name="delete_revoke_project_permissions_for_user"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.deleteRevokeProjectPermissionsForUser") deleteRevokeProjectPermissionsForUser

> Revoke all permissions for the specified project for a user.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.
>  <p>
>  In addition, a user may not revoke their own project permissions if they do not have a higher global permission.


```php
function deleteRevokeProjectPermissionsForUser(
        $projectKey,
        $name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| name |  ``` Optional ```  | the name of the user |



#### Example Usage

```php
$projectKey = 'projectKey';
$name = 'name';

$result = $project->deleteRevokeProjectPermissionsForUser($projectKey, $name);

```


#### <a name="get_project_users_without_permission"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.getProjectUsersWithoutPermission") getProjectUsersWithoutPermission

> Retrieve a page of <i>licensed</i> users that have no granted permissions for the specified project.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.


```php
function getProjectUsersWithoutPermission(
        $projectKey,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$filter = 'filter';

$result = $project->getProjectUsersWithoutPermission($projectKey, $filter);

```


#### <a name="get_has_project_all_user_permission"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.getHasProjectAllUserPermission") getHasProjectAllUserPermission

> Check whether the specified permission is the default permission (granted to all users) for a project. Available
>  project permissions are:
>  <ul>
>      <li>PROJECT_READ</li>
>      <li>PROJECT_WRITE</li>
>      <li>PROJECT_ADMIN</li>
>  </ul>
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.


```php
function getHasProjectAllUserPermission(
        $projectKey,
        $permission)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| permission |  ``` Required ```  | the permission to grant |



#### Example Usage

```php
$projectKey = 'projectKey';
$permission = 'permission';

$result = $project->getHasProjectAllUserPermission($projectKey, $permission);

```


#### <a name="modify_project_all_user_permission"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.modifyProjectAllUserPermission") modifyProjectAllUserPermission

> Grant or revoke a project permission to all users, i.e. set the default permission. Available project permissions
>  are:
>  <ul>
>      <li>PROJECT_READ</li>
>      <li>PROJECT_WRITE</li>
>      <li>PROJECT_ADMIN</li>
>  </ul>
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.


```php
function modifyProjectAllUserPermission(
        $projectKey,
        $permission,
        $allow = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| permission |  ``` Required ```  | the permission to grant |
| allow |  ``` Optional ```  | <em>true</em> to grant the specified permission to all users, or <em>false</em> to revoke it |



#### Example Usage

```php
$projectKey = 'projectKey';
$permission = 'permission';
$allow = true;

$result = $project->modifyProjectAllUserPermission($projectKey, $permission, $allow);

```


#### <a name="create_project"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.createProject") createProject

> Create a new project.
>  <p>
>  To include a custom avatar for the project, the project definition should contain an additional attribute with
>  the key <code>avatar</code> and the value a data URI containing Base64-encoded image data. The URI should be in
>  the following format:
>  <pre>
>      data:(content type, e.g. image/png);base64,(data)
>  </pre>
>  If the data is not Base64-encoded, or if a character set is defined in the URI, or the URI is otherwise invalid,
>  <em>project creation will fail</em>.
>  <p>
>  The authenticated user must have <strong>PROJECT_CREATE</strong> permission to call this resource.


```php
function createProject($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $project->createProject($dynamic);

```


#### <a name="get_projects"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.getProjects") getProjects

> Retrieve a page of projects.
>  <p>
>  Only projects for which the authenticated user has the <strong>PROJECT_VIEW</strong> permission will be returned.


```php
function getProjects(
        $name = null,
        $permission = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | TODO: Add a parameter description |
| permission |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$name = 'name';
$permission = 'permission';

$result = $project->getProjects($name, $permission);

```


#### <a name="delete_project"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.deleteProject") deleteProject

> Delete the project matching the supplied <strong>projectKey</strong>.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project to call this
>  resource.


```php
function deleteProject($projectKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';

$result = $project->deleteProject($projectKey);

```


#### <a name="update_project"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.updateProject") updateProject

> Update the project matching the <strong>projectKey</strong> supplied in the resource path.
>  <p>
>  To include a custom avatar for the updated project, the project definition should contain an additional attribute
>  with the key <code>avatar</code> and the value a data URI containing Base64-encoded image data. The URI should be
>  in the following format:
>  <code>
>      data:(content type, e.g. image/png);base64,(data)
>  </code>
>  If the data is not Base64-encoded, or if a character set is defined in the URI, or the URI is otherwise invalid,
>  <em>project creation will fail</em>.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project to call this
>  resource.


```php
function updateProject(
        $dynamic,
        $projectKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';

$result = $project->updateProject($dynamic, $projectKey);

```


#### <a name="get_project"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.getProject") getProject

> Retrieve the project matching the supplied <strong>projectKey</strong>.
>  <p>
>  The authenticated user must have <strong>PROJECT_VIEW</strong> permission for the specified project to call this
>  resource.


```php
function getProject($projectKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';

$result = $project->getProject($projectKey);

```


#### <a name="get_project_avatar"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.getProjectAvatar") getProjectAvatar

> Retrieve the avatar for the project matching the supplied <strong>projectKey</strong>.
>  <p>
>  The authenticated user must have <strong>PROJECT_VIEW</strong> permission for the specified project to call this
>  resource.


```php
function getProjectAvatar(
        $projectKey,
        $s = 0)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| s |  ``` Optional ```  ``` DefaultValue ```  | The desired size of the image. The server will return an image as close as possible to the specified
             size. |



#### Example Usage

```php
$projectKey = 'projectKey';
$s = 0;

$result = $project->getProjectAvatar($projectKey, $s);

```


#### <a name="upload_project_avatar"></a>![Method: ](https://apidocs.io/img/method.png ".ProjectController.uploadProjectAvatar") uploadProjectAvatar

> Update the avatar for the project matching the supplied <strong>projectKey</strong>.
>  <p>
>  This resource accepts POST multipart form data, containing a single image in a form-field named 'avatar'.
>  <p>
>  There are configurable server limits on both the dimensions (1024x1024 pixels by default) and uploaded file size
>  (1MB by default). Several different image formats are supported, but <strong>PNG</strong> and
>  <strong>JPEG</strong> are preferred due to the file size limit.
>  <p>
>  An example <a href="http://curl.haxx.se/">curl</a> request to upload an image name 'avatar.png' would be:
>  <pre>
>  curl -X POST -u username:password http://example.com/rest/api/1.0/projects/STASH/avatar.png -F avatar=@avatar.png
>  </pre>
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project to call this
>  resource.


```php
function uploadProjectAvatar($projectKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';

$result = $project->uploadProjectAvatar($projectKey);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="task_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TaskController") TaskController

#### Get singleton instance

The singleton instance of the ``` TaskController ``` class can be accessed from the API Client.

```php
$task = $client->getTask();
```

#### <a name="create_task"></a>![Method: ](https://apidocs.io/img/method.png ".TaskController.createTask") createTask

> Create a new task.


```php
function createTask($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $task->createTask($dynamic);

```


#### <a name="delete_task"></a>![Method: ](https://apidocs.io/img/method.png ".TaskController.deleteTask") deleteTask

> Delete a task.
>  <p>
>  Note that only the task's creator, the context's author or an admin of the context's repository can delete a
>  task. (For a pull request task, those are the task's creator, the pull request's author or an admin on the
>  repository containing the pull request). Additionally a task cannot be deleted if it has already been resolved.


```php
function deleteTask($taskId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| taskId |  ``` Required ```  | the id identifying the task to delete |



#### Example Usage

```php
$taskId = 192;

$result = $task->deleteTask($taskId);

```


#### <a name="update_task"></a>![Method: ](https://apidocs.io/img/method.png ".TaskController.updateTask") updateTask

> Update a existing task.
>  <p>
>  As of Stash 3.3, only the state and text of a task can be updated.
>  <p>
>  Updating the state of a task is allowed for any user having <em>READ</em> access to the repository.
>  However only the task's creator, the context's author or an admin of the context's repository can update the
>  task's text. (For a pull request task, those are the task's creator, the pull request's author or an admin on the
>  repository containing the pull request). Additionally the task's text cannot be updated if it has been resolved.


```php
function updateTask(
        $dynamic,
        $taskId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| taskId |  ``` Required ```  | the id identifying the task to delete |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$taskId = 192;

$result = $task->updateTask($dynamic, $taskId);

```


#### <a name="get_task"></a>![Method: ](https://apidocs.io/img/method.png ".TaskController.getTask") getTask

> Retrieve a existing task.


```php
function getTask($taskId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| taskId |  ``` Required ```  | the id identifying the task to delete |



#### Example Usage

```php
$taskId = 192;

$result = $task->getTask($taskId);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="group_controller"></a>![Class: ](https://apidocs.io/img/class.png ".GroupController") GroupController

#### Get singleton instance

The singleton instance of the ``` GroupController ``` class can be accessed from the API Client.

```php
$group = $client->getGroup();
```

#### <a name="get_groups"></a>![Method: ](https://apidocs.io/img/method.png ".GroupController.getGroups") getGroups

> Retrieve a page of group names.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission or higher to call this resource.


```php
function getGroups($filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$filter = 'filter';

$result = $group->getGroups($filter);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="profile_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ProfileController") ProfileController

#### Get singleton instance

The singleton instance of the ``` ProfileController ``` class can be accessed from the API Client.

```php
$profile = $client->getProfile();
```

#### <a name="get_profile_repositories_recently_accessed"></a>![Method: ](https://apidocs.io/img/method.png ".ProfileController.getProfileRepositoriesRecentlyAccessed") getProfileRepositoriesRecentlyAccessed

> Retrieve a page of recently accessed repositories for the currently authenticated user.
>  <p>
>  Repositories are ordered from most recently to least recently accessed.
>  <p>
>  Only authenticated users may call this resource.


```php
function getProfileRepositoriesRecentlyAccessed($permission = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| permission |  ``` Optional ```  | (optional) if specified, it must be a valid repository permission level name and will limit
                   the resulting repository list to ones that the requesting user has the specified permission
                   level to. If not specified, the default <code>REPO_READ</code> permission level will be assumed. |



#### Example Usage

```php
$permission = 'permission';

$result = $profile->getProfileRepositoriesRecentlyAccessed($permission);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="application_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ApplicationController") ApplicationController

#### Get singleton instance

The singleton instance of the ``` ApplicationController ``` class can be accessed from the API Client.

```php
$application = $client->getApplication();
```

#### <a name="get_application_properties"></a>![Method: ](https://apidocs.io/img/method.png ".ApplicationController.getApplicationProperties") getApplicationProperties

> Retrieve version information and other application properties.
>  <p>
>  No authentication is required to call this resource.


```php
function getApplicationProperties()
```

#### Example Usage

```php

$result = $application->getApplicationProperties();

```


[Back to List of Controllers](#list_of_controllers)

### <a name="log_controller"></a>![Class: ](https://apidocs.io/img/class.png ".LogController") LogController

#### Get singleton instance

The singleton instance of the ``` LogController ``` class can be accessed from the API Client.

```php
$log = $client->getLog();
```

#### <a name="get_root_level"></a>![Method: ](https://apidocs.io/img/method.png ".LogController.getRootLevel") getRootLevel

> Retrieve the current log level for the root logger.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function getRootLevel()
```

#### Example Usage

```php

$result = $log->getRootLevel();

```


#### <a name="update_set_root_level"></a>![Method: ](https://apidocs.io/img/method.png ".LogController.updateSetRootLevel") updateSetRootLevel

> Set the current log level for the root logger.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function updateSetRootLevel($levelName)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| levelName |  ``` Required ```  | the level to set the logger to. Either TRACE, DEBUG, INFO, WARN or ERROR |



#### Example Usage

```php
$levelName = 'levelName';

$result = $log->updateSetRootLevel($levelName);

```


#### <a name="get_level"></a>![Method: ](https://apidocs.io/img/method.png ".LogController.getLevel") getLevel

> Retrieve the current log level for a given logger.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function getLevel($loggerName)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| loggerName |  ``` Required ```  | the name of the logger. |



#### Example Usage

```php
$loggerName = 'loggerName';

$result = $log->getLevel($loggerName);

```


#### <a name="update_set_level"></a>![Method: ](https://apidocs.io/img/method.png ".LogController.updateSetLevel") updateSetLevel

> Set the current log level for a given logger.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function updateSetLevel(
        $levelName,
        $loggerName)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| levelName |  ``` Required ```  | the level to set the logger to. Either TRACE, DEBUG, INFO, WARN or ERROR |
| loggerName |  ``` Required ```  | the name of the logger. |



#### Example Usage

```php
$levelName = 'levelName';
$loggerName = 'loggerName';

$result = $log->updateSetLevel($levelName, $loggerName);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="user_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UserController") UserController

#### Get singleton instance

The singleton instance of the ``` UserController ``` class can be accessed from the API Client.

```php
$user = $client->getUser();
```

#### <a name="get_users"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.getUsers") getUsers

> Retrieve a page of users, optionally run through provided filters.
>  <p>
>  Only authenticated users may call this resource.
> 
>  <h3>Supported Filters</h3>
>  <p>
>  Filters are provided in query parameters in a standard <code>name=value</code> fashion. The following filters are
>  currently supported:
>  <ul>
>      <li>
>          {@code filter} - return only users, whose username, name or email address <i>contain</i> the
>          {@code filter} value
>      </li>
>      <li>
>          {@code permission} - the "root" of a permission filter, whose value must be a valid global,
>          project, or repository permission. Additional filter parameters referring to this filter that specify the
>          resource (project or repository) to apply the filter to must be prefixed with <code>permission.</code>. See the
>          section "Permission Filters" below for more details.
>      </li>
>      <li>
>          {@code permission.N} - the "root" of a single permission filter, similar to the {@code permission}
>          parameter, where "N" is a natural number starting from 1. This allows clients to specify multiple permission
>          filters, by providing consecutive filters as {@code permission.1}, {@code permission.2} etc. Note that
>          the filters numbering has to start with 1 and be continuous for all filters to be processed. The total allowed
>          number of permission filters is 50 and all filters exceeding that limit will be dropped. See the section
>          "Permission Filters" below for more details on how the permission filters are processed.
>      </li>
>  </ul>
>  
> 
>  <h3>Permission Filters</h3>
>  <p>
>  The following three sub-sections list parameters supported for permission filters (where <code>[root]</code> is
>  the root permission filter name, e.g. {@code permission}, {@code permission.1} etc.) depending on the
>  permission resource. The system determines which filter to apply (Global, Project or Repository permission)
>  based on the <code>[root]</code> permission value. E.g. {@code ADMIN} is a global permission,
>  {@code PROJECT_ADMIN} is a project permission and {@code REPO_ADMIN} is a repository permission. Note
>  that the parameters for a given resource will be looked up in the order as they are listed below, that is e.g.
>  for a project resource, if both {@code projectId} and {@code projectKey} are provided, the system will
>  use {@code projectId} for the lookup.
>  <h4>Global permissions</h4>
>  <p>
>  The permission value under <code>[root]</code> is the only required and recognized parameter, as global
>  permissions do not apply to a specific resource.
>  <p>
>  Example valid filter: <code>permission=ADMIN</code>.
>  <h4>Project permissions</h4>
>  <ul>
>      <li><code>[root]</code>- specifies the project permission</li>
>      <li><code>[root].projectId</code> - specifies the project ID to lookup the project by</li>
>      <li><code>[root].projectKey</code> - specifies the project key to lookup the project by</li>
>  </ul>
>  <p>
>  Example valid filter: <code>permission.1=PROJECT_ADMIN&permission.1.projectKey=TEST_PROJECT</code>.
>  <h4>Repository permissions</h4>
>  <ul>
>      <li><code>[root]</code>- specifies the repository permission</li>
>      <li><code>[root].projectId</code> - specifies the repository ID to lookup the repository by</li>
>      <li><code>[root].projectKey</code> and <code>[root].repositorySlug</code>- specifies the project key and
>      repository slug to lookup the repository by; both values <i>need to</i> be provided for this look up to be
>      triggered</li>
>  </ul>
>  Example valid filter: <code>permission.2=REPO_ADMIN&permission.2.projectKey=TEST_PROJECT&permission.2.repositorySlug=test_repo</code>.


```php
function getUsers()
```

#### Example Usage

```php

$result = $user->getUsers();

```


#### <a name="update_user_details"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.updateUserDetails") updateUserDetails

> Update the currently authenticated user's details. Note that <em>the name attribute is ignored</em>, the update
>  will always be applied to the currently authenticated user.


```php
function updateUserDetails($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $user->updateUserDetails($dynamic);

```


#### <a name="delete_user_avatar"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.deleteUserAvatar") deleteUserAvatar

> Delete the avatar associated to a user.
>  <p>
>  Users are always allowed to delete their own avatar. To delete someone else's avatar the authenticated user must
>  have global <strong>ADMIN</strong> permission, or global <strong>SYS_ADMIN</strong> permission to update a
>  <strong>SYS_ADMIN</strong> user's avatar.


```php
function deleteUserAvatar($userSlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userSlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$userSlug = 'userSlug';

$result = $user->deleteUserAvatar($userSlug);

```


#### <a name="upload_user_avatar"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.uploadUserAvatar") uploadUserAvatar

> Update the avatar for the user with the supplied <strong>slug</strong>.
>  <p>
>  This resource accepts POST multipart form data, containing a single image in a form-field named 'avatar'.
>  <p>
>  There are configurable server limits on both the dimensions (1024x1024 pixels by default) and uploaded
>  file size (1MB by default). Several different image formats are supported, but <strong>PNG</strong> and
>  <strong>JPEG</strong> are preferred due to the file size limit.
>  <p>
>  This resource has Cross-Site Request Forgery (XSRF) protection. To allow the request to
>  pass the XSRF check the caller needs to send an <code>X-Atlassian-Token</code> HTTP header with the
>  value <code>no-check</code>.
>  <p>
>  An example <a href="http://curl.haxx.se/">curl</a> request to upload an image name 'avatar.png' would be:
>  <pre>
>  curl -X POST -u username:password -H "X-Atlassian-Token: no-check" http://example.com/rest/api/latest/users/jdoe/avatar.png -F avatar=@avatar.png
>  </pre>
>  <p>
>  Users are always allowed to update their own avatar. To update someone else's avatar the authenticated user must
>  have global <strong>ADMIN</strong> permission, or global <strong>SYS_ADMIN</strong> permission to update a
>  <strong>SYS_ADMIN</strong> user's avatar.


```php
function uploadUserAvatar($userSlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userSlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$userSlug = 'userSlug';

$result = $user->uploadUserAvatar($userSlug);

```


#### <a name="get_user"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.getUser") getUser

> Retrieve the user matching the supplied <strong>userSlug</strong>.
>  <p>


```php
function getUser($userSlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userSlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$userSlug = 'userSlug';

$result = $user->getUser($userSlug);

```


#### <a name="update_user_password"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.updateUserPassword") updateUserPassword

> Update the currently authenticated user's password.


```php
function updateUserPassword($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $user->updateUserPassword($dynamic);

```


#### <a name="get_user_settings"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.getUserSettings") getUserSettings

> Retrieve a map of user setting key values for a specific user identified by the user slug.
>  <p>


```php
function getUserSettings($userSlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userSlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$userSlug = 'userSlug';

$result = $user->getUserSettings($userSlug);

```


#### <a name="update_user_settings"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.updateUserSettings") updateUserSettings

> Update the entries of a map of user setting key/values for a specific user identified by the user slug.
>  <p>


```php
function updateUserSettings(
        $dynamic,
        $userSlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| userSlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$userSlug = 'userSlug';

$result = $user->updateUserSettings($dynamic, $userSlug);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="markup_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MarkupController") MarkupController

#### Get singleton instance

The singleton instance of the ``` MarkupController ``` class can be accessed from the API Client.

```php
$markup = $client->getMarkup();
```

#### <a name="create_preview_markup"></a>![Method: ](https://apidocs.io/img/method.png ".MarkupController.createPreviewMarkup") createPreviewMarkup

> Preview the generated html for given markdown contents.
>  <p>
>  Only authenticated users may call this resource.


```php
function createPreviewMarkup(
        $dynamic,
        $urlMode = null,
        $hardwrap = null,
        $htmlEscape = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| urlMode |  ``` Optional ```  | TODO: Add a parameter description |
| hardwrap |  ``` Optional ```  | TODO: Add a parameter description |
| htmlEscape |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$urlMode = 'urlMode';
$hardwrap = true;
$htmlEscape = true;

$result = $markup->createPreviewMarkup($dynamic, $urlMode, $hardwrap, $htmlEscape);

```


[Back to List of Controllers](#list_of_controllers)



