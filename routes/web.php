<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/** @var \Laravel\Lumen\Routing\Router $router */

// Home Route
$router->get('/', 'HomeController@index');

// API Routes
$router->group(['prefix' => 'api'], function () use ($router) {
    // API Routes Here
});
