<?php
/*
 * StashAPILib
 *
 * This file was automatically generated for DS by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace StashAPILib;

use StashAPILib\Controllers;

/**
 * StashAPILib client class
 */
class StashAPIClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $stashDomain = null,
        $basicAuthUserName = null,
        $basicAuthPassword = null
    ) {
        Configuration::$stashDomain = $stashDomain ? $stashDomain : Configuration::$stashDomain;
        Configuration::$basicAuthUserName = $basicAuthUserName ? $basicAuthUserName : Configuration::$basicAuthUserName;
        Configuration::$basicAuthPassword = $basicAuthPassword ? $basicAuthPassword : Configuration::$basicAuthPassword;
    }
 
    /**
     * Singleton access to Repository controller
     * @return Controllers\RepositoryController The *Singleton* instance
     */
    public function getRepository()
    {
        return Controllers\RepositoryController::getInstance();
    }
 
    /**
     * Singleton access to Admin controller
     * @return Controllers\AdminController The *Singleton* instance
     */
    public function getAdmin()
    {
        return Controllers\AdminController::getInstance();
    }
 
    /**
     * Singleton access to PullRequest controller
     * @return Controllers\PullRequestController The *Singleton* instance
     */
    public function getPullRequest()
    {
        return Controllers\PullRequestController::getInstance();
    }
 
    /**
     * Singleton access to Hook controller
     * @return Controllers\HookController The *Singleton* instance
     */
    public function getHook()
    {
        return Controllers\HookController::getInstance();
    }
 
    /**
     * Singleton access to Project controller
     * @return Controllers\ProjectController The *Singleton* instance
     */
    public function getProject()
    {
        return Controllers\ProjectController::getInstance();
    }
 
    /**
     * Singleton access to Task controller
     * @return Controllers\TaskController The *Singleton* instance
     */
    public function getTask()
    {
        return Controllers\TaskController::getInstance();
    }
 
    /**
     * Singleton access to Group controller
     * @return Controllers\GroupController The *Singleton* instance
     */
    public function getGroup()
    {
        return Controllers\GroupController::getInstance();
    }
 
    /**
     * Singleton access to Profile controller
     * @return Controllers\ProfileController The *Singleton* instance
     */
    public function getProfile()
    {
        return Controllers\ProfileController::getInstance();
    }
 
    /**
     * Singleton access to Application controller
     * @return Controllers\ApplicationController The *Singleton* instance
     */
    public function getApplication()
    {
        return Controllers\ApplicationController::getInstance();
    }
 
    /**
     * Singleton access to Log controller
     * @return Controllers\LogController The *Singleton* instance
     */
    public function getLog()
    {
        return Controllers\LogController::getInstance();
    }
 
    /**
     * Singleton access to User controller
     * @return Controllers\UserController The *Singleton* instance
     */
    public function getUser()
    {
        return Controllers\UserController::getInstance();
    }
 
    /**
     * Singleton access to Markup controller
     * @return Controllers\MarkupController The *Singleton* instance
     */
    public function getMarkup()
    {
        return Controllers\MarkupController::getInstance();
    }
}
