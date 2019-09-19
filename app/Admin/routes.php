<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

//    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->redirect('/', '/admin/customers');
    $router->get('users', 'UsersController@index');
    $router->get('users/create', 'UsersController@create');
    $router->post('users', 'UsersController@store');
    $router->get('users/{id}', 'UsersController@show');
    $router->get('users/{id}/edit', 'UsersController@edit');
    $router->put('users/{id}', 'UsersController@update');
    $router->get('customers', 'CustomersController@index');
    $router->get('customers/create', 'CustomersController@create');
    $router->post('customers', 'CustomersController@store');
    $router->get('customers', 'CustomersController@index');
    $router->get('customers/{id}', 'CustomersController@show');
    $router->get('customers/{id}/edit', 'CustomersController@edit');
    $router->put('customers/{id}', 'CustomersController@update');
    $router->delete('customers/{id}', 'CustomersController@destroy');
    $router->get('option_configs', 'OptionConfigsController@index');
    $router->get('option_configs/create', 'OptionConfigsController@create');
    $router->post('option_configs', 'OptionConfigsController@store');
    $router->get('option_configs', 'OptionConfigsController@index');
    $router->get('option_configs/{id}', 'OptionConfigsController@show');
    $router->get('option_configs/{id}/edit', 'OptionConfigsController@edit');
    $router->put('option_configs/{id}', 'OptionConfigsController@update');
});
