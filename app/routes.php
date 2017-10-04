<?php

// Example
$router->get('', 'PageController@home');
$router->get('about', 'PageController@about');
$router->get('contact', 'PageController@contact');

$router->get('users', 'UserController@index');
$router->post('users', 'UserController@store');
$router->post('users/delete', 'UserController@delete');

// Feedback
$router->get('feedback', 'FeedbackController@index');

// Login
$router->get('login', 'LoginController@index');
$router->post('login', 'LoginController@login');
// Register
$router->get('register', 'RegisterController@index');
$router->post('register', 'RegisterController@register');
// ADMIN

// User
$router->get('login', 'LoginController@index');
$router->post('login', 'LoginController@login');
