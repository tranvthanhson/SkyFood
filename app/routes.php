<?php

$router->get('', 'PageController@home');
$router->get('about', 'PageController@about');
$router->get('contact', 'PageController@contact');

$router->get('users', 'UserController@index');
$router->post('users', 'UserController@store');
$router->post('users/delete', 'UserController@delete');

// ADMIN

// User
$router->get('login', 'LoginController@index');
$router->post('login', 'LoginController@login');

$router->get('feedback', 'FeedbackController@index');
