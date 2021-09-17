<?php

// Rutas para manejo de vistas
$route->get('/','ApiController@inicio');
$route->get('/api','ApiController@api');
$route->get('/productos','ApiController@productos');
