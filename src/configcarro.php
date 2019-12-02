<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->post('/descricao/', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");
        $conexao = $container ->get('pdo');      
        
        $params = $request -> getParsedBody();

        $resultSet = $conexao->query("INSERT INTO carro (modelo,marca,ano) VALUES ('".$params['modelo1']."','" .$params['marca1']."', '" .$params['ano1']."');");


        

        // Render index view
        return $container->get('renderer')->render($response, 'tabela.phtml', $args);

    });



};
