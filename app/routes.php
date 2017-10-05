<?php

// Example
$router->get('', 'PageController@home');
$router->get('about', 'PageController@about');
$router->get('contact', 'PageController@contact');

// $router->get('users', 'UserController@index');
// $router->post('users', 'UserController@store');
// $router->post('users/delete', 'UserController@delete');
//INDEX
$router->get('admin', 'IndexController@index');
// Feedback
$router->get('feedback', 'FeedbackController@index');

// Login
$router->get('login', 'LoginController@index');
$router->post('login', 'LoginController@login');
//LOGOUT
$router->get('logout', 'LoginController@logout');
// Register
$router->get('register', 'RegisterController@index');
$router->post('register', 'RegisterController@register');
// ADMIN

// User
$router->get('user', 'UserController@index');
$router->get('user/add', 'UserController@add');
$router->post('user/add', 'UserController@store');
$router->get('user/edit', 'UserController@edit');
// $router->post('login', 'LoginController@login');

//POST
$router->get('post', 'PostController@index');
$router->get('post/add', 'PostController@add');
$router->get('post/edit', 'PostController@edit');

//CATEGORY
$router->get('cat', 'CategoryController@index');
$router->get('cat/add', 'CategoryController@add');
$router->get('cat/edit', 'CategoryController@edit');

//STATISTICS
$router->get('statistics', 'StatisticsController@index');
