<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/tabelacarro/', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");
        $conexao = $container->get('pdo');

        $resultSet = $conexao->query('SELECT * FROM carro WHERE idcarro ="10" "'. $params['modelo1'] . '" AND marca = "' .($params['marca1']) . '"')->fetchALL();

        return $container->get('renderer')->render($response, 'tabela.phtml', $args);
    });
};