<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Request;

ErrorHandler::register();
ExceptionHandler::register();

$app->register(new Silex\Provider\DoctrineServiceProvider());

$app['dao.cooltainer'] = function ($app) {
    return new Agrifun\DAO\CooltainerDAO($app['db']);
};

$app->before(function (Request $request, Silex\Application $app) {

    if($request->query->get('token') !== $app['token']){
        $error = array('message' => 'Access is denied due to invalid token.');
        return $app->json($error, 401);
    }

});