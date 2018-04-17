<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app = new \Slim\App;

//GET All Customers
$app->get( '/api/customers', function (Request $request, Response $response ){
    echo 'Klienci';
});