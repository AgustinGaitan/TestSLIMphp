<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;

require __DIR__ . '/../vendor/autoload.php';
require_once 'usuario.php';

$app = AppFactory::create();

$app->group('/usuario', function(RouteCollectorProxy $grupo){

    $grupo->get('/', Usuario::class . ':TraerTodos');
    $grupo->get('/{id}', Usuario::class . ':TraerUnUsuario');
    $grupo->post('/', Usuario::class . ':AgregarUnUsuario');

});





$app->run();

