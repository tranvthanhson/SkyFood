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
$router->get('user/add', 'UserController@addUser');
$router->post('user/add', 'UserController@storeUser');
$router->get('user/edit', 'UserController@editUser');
$router->post('user/edit', 'UserController@updateUser');
$router->get('user/del', 'UserController@deleteUser');

// Forgot Password
$router->get('forgotpassword', 'LoginController@viewForgotPassword');
$router->post('forgotpassword', 'LoginController@forgotPassword');
//Search
$router->post('user/searchUser', 'UserController@searchUser');
$router->post('shop/searchShop', 'ShopController@searchShop');

// shop
$router->get('shop', 'ShopController@index');
$router->get('shop/add', 'ShopController@add');
$router->post('shop/add', 'ShopController@addPost');
$router->get('shop/edit', 'ShopController@edit');
$router->post('shop/edit', 'ShopController@editPost');
$router->get('shop/del', 'ShopController@delete');

// Category
$router->get('cat', 'CategoryController@index');
$router->get('cat/add', 'CategoryController@add');
$router->get('cat/edit', 'CategoryController@edit');

// Statistics
$router->get('statistics', 'StatisticsController@index');
