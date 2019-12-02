<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->post('/config/', function (Request $request, Response $response, array $args) use ($container) {

        $parms = $request -> getparsedbody();
        $conexao - $container->get('pdo');


        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");

        $resultSet = $conexao->query("INSERT INTO carro (modelo,marca,ano) VALUES ('".$params['modelo1']."','" .$params['marca1']."', '" .$params['ano1']."');");
        // Render index view
        return $container->get('renderer')->render($response, 'teste.phtml', $args);


    });

};

