<?php

// Example
$router->get('', 'PageController@home');
$router->get('about', 'PageController@about');
$router->get('contact', 'PageController@contact');

// Index
$router->get('admin', 'IndexController@index');

// Feedback
$router->get('feedback', 'FeedbackController@index');
$router->get('feedback/delete', 'FeedbackController@delete');
$router->post('feedback/reply', 'FeedbackController@reply');

// Login
$router->get('login', 'LoginController@index');
$router->post('login', 'LoginController@login');

// Logout
$router->get('logout', 'LoginController@logout');

// Register
$router->get('register', 'RegisterController@index');
$router->post('register', 'RegisterController@register');

// User
$router->get('user', 'UserController@index');
$router->get('user/add', 'UserController@add');
$router->post('user/add', 'UserController@store');
$router->get('user/edit', 'UserController@edit');
$router->post('user/edit', 'UserController@update');
$router->get('user/del', 'UserController@del');

// Post
$router->get('post', 'PostController@index');
$router->get('post/add', 'PostController@add');
$router->post('post/add', 'PostController@addPost');
$router->get('post/edit', 'PostController@edit');
$router->post('post/edit', 'PostController@editPost');
$router->get('post/del', 'PostController@del');

// Category
$router->get('cat', 'CategoryController@index');
$router->get('cat/add', 'CategoryController@add');
$router->get('cat/edit', 'CategoryController@edit');

// Statistics
$router->get('statistics', 'StatisticsController@index');
