<?php

// Example
$router->get('', 'PageController@home');
$router->get('about', 'PageController@about');
$router->get('contact', 'PageController@contact');

// Index
$router->get('admin', 'IndexController@index');

// Feedback
$router->get('admin/feedback', 'FeedbackController@index');
$router->get('admin/feedback/delete', 'FeedbackController@delete');
$router->post('admin/feedback/reply', 'FeedbackController@reply');
$router->post('admin/feedback/searchFeedback', 'FeedbackController@searchFeedback');

// Login
$router->get('login', 'LoginController@index');
$router->post('login', 'LoginController@login');

// Logout
$router->get('logout', 'LoginController@logout');

// Register
$router->get('register', 'RegisterController@index');
$router->post('register', 'RegisterController@register');

// User
$router->get('admin/user', 'UserController@index');
$router->get('admin/user/add', 'UserController@addUser');
$router->post('admin/user/add', 'UserController@storeUser');
$router->post('admin/user/checkUser', 'UserController@checkUser');
$router->get('admin/user/edit', 'UserController@editUser');
$router->post('admin/user/edit', 'UserController@updateUser');
$router->get('admin/user/del', 'UserController@deleteUser');

//loadImages
$router->post('user/loadimage', 'UserController@loadImages');

// Forgot Password
$router->get('forgotpassword', 'LoginController@viewForgotPassword');
$router->post('forgotpassword', 'LoginController@forgotPassword');
//Search
$router->post('admin/user/searchUser', 'UserController@searchUser');

$router->post('shop/searchShop', 'ShopController@searchShop');

// shop
$router->get('shop', 'ShopController@index');
$router->get('shop/add', 'ShopController@add');
$router->post('shop/add', 'ShopController@addPost');
$router->get('shop/edit', 'ShopController@edit');
$router->post('shop/edit', 'ShopController@editPost');
$router->get('shop/del', 'ShopController@delete');
//comment
$router->get('shop/comment', 'ShopController@loadComments');
$router->get('shop/comment/del', 'ShopController@deleteComment');

//ajax
$router->post('shop/ajaxDiscount', 'ShopController@ajaxDiscount');

// Category
$router->get('cat', 'CategoryController@index');
$router->get('cat/add', 'CategoryController@add');
$router->get('cat/edit', 'CategoryController@edit');

// Statistics
$router->get('statistics', 'StatisticsController@index');
