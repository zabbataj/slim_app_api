<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes - rozwijanie adresów

// Wyswietlanie na stronie parametru przekazanego przez adres

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

// Pierwsze API 

$app->get('/api/customers', function (Request $request, Response $response ){
    echo 'Klienci';
});