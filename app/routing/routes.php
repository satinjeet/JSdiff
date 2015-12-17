<?php

$routes->group(['namespace' => 'app\controllers'], function($routes)
{
	$routes->get('/', 'Home::index');
});