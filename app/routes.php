<?php

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

$router->post('admin/shop/searchShop', 'ShopController@searchShop');

// shop
$router->get('admin/shop', 'ShopController@index');
$router->get('admin/shop/add', 'ShopController@add');
$router->post('admin/shop/add', 'ShopController@addPost');
$router->get('admin/shop/edit', 'ShopController@edit');
$router->post('admin/shop/edit', 'ShopController@editPost');
$router->get('admin/shop/del', 'ShopController@delete');
//comment
$router->get('admin/shop/comment', 'ShopController@loadComments');
$router->get('admin/shop/comment/del', 'ShopController@deleteComment');

//ajax
$router->post('admin/shop/ajaxDiscount', 'ShopController@ajaxDiscount');

// Category
$router->get('admin/type', 'TypeController@index');
$router->get('admin/type/add', 'TypeController@add');
$router->post('admin/type/add', 'TypeController@addType');
$router->get('admin/type/edit', 'TypeController@edit');
$router->post('admin/type/edit', 'TypeController@editType');
$router->get('admin/type/delete', 'TypeController@deleteType');

// Statistics
$router->get('admin/statistics', 'StatisticsController@index');
