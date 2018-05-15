<?php

namespace Cache;

class cache20170910020034
{
    public function __invoke(\Slim\App $app) {
        $route = $app->map(["GET"], "/prefix3/rota2", "Test\Controller\DilsonController:method");
$route->setName("rote.id");
$route->add(new \Test\Middleware\ExampleMiddleware());
$route->add(new \Test\Middleware\ExampleMiddleware());
$route->add(new \Test\Middleware\ExampleMiddleware());
$route = $app->map(["GET"], "/prefix3/rota3/{id}/{id2}/[{idgenilson}]", "Test\Controller\DilsonController:method2");
$route->setName("route2.id");
$route = $app->map(["POST"], "/prefix3/rota7/{id}", "Test\Controller\DilsonController:method3");
$route->setName("route3.id");
$route = $app->map(["PUT"], "/prefix3/rota4/{id}", "Test\Controller\DilsonController:method4");
$route->setName("route4.id");
$route = $app->map(["DELETE"], "/prefix3/rota5/{id}", "Test\Controller\DilsonController:method5");
$route->setName("route5.id");

    }

    public function getArrayControllersSerialize() {
        return 'a:5:{i:0;O:33:"Slim3\Annotation\Model\RouteModel":6:{s:39:" Slim3\Annotation\Model\RouteModel verb";s:3:"GET";s:40:" Slim3\Annotation\Model\RouteModel route";s:14:"/prefix3/rota2";s:44:" Slim3\Annotation\Model\RouteModel className";s:32:"Test\Controller\DilsonController";s:45:" Slim3\Annotation\Model\RouteModel methodName";s:6:"method";s:40:" Slim3\Annotation\Model\RouteModel alias";s:7:"rote.id";s:50:" Slim3\Annotation\Model\RouteModel classMiddleware";a:3:{i:0;s:33:"Test\Middleware\ExampleMiddleware";i:1;s:33:"Test\Middleware\ExampleMiddleware";i:2;s:33:"Test\Middleware\ExampleMiddleware";}}i:1;O:33:"Slim3\Annotation\Model\RouteModel":6:{s:39:" Slim3\Annotation\Model\RouteModel verb";s:3:"GET";s:40:" Slim3\Annotation\Model\RouteModel route";s:40:"/prefix3/rota3/{id}/{id2}/[{idgenilson}]";s:44:" Slim3\Annotation\Model\RouteModel className";s:32:"Test\Controller\DilsonController";s:45:" Slim3\Annotation\Model\RouteModel methodName";s:7:"method2";s:40:" Slim3\Annotation\Model\RouteModel alias";s:9:"route2.id";s:50:" Slim3\Annotation\Model\RouteModel classMiddleware";N;}i:2;O:33:"Slim3\Annotation\Model\RouteModel":6:{s:39:" Slim3\Annotation\Model\RouteModel verb";s:4:"POST";s:40:" Slim3\Annotation\Model\RouteModel route";s:19:"/prefix3/rota7/{id}";s:44:" Slim3\Annotation\Model\RouteModel className";s:32:"Test\Controller\DilsonController";s:45:" Slim3\Annotation\Model\RouteModel methodName";s:7:"method3";s:40:" Slim3\Annotation\Model\RouteModel alias";s:9:"route3.id";s:50:" Slim3\Annotation\Model\RouteModel classMiddleware";N;}i:3;O:33:"Slim3\Annotation\Model\RouteModel":6:{s:39:" Slim3\Annotation\Model\RouteModel verb";s:3:"PUT";s:40:" Slim3\Annotation\Model\RouteModel route";s:19:"/prefix3/rota4/{id}";s:44:" Slim3\Annotation\Model\RouteModel className";s:32:"Test\Controller\DilsonController";s:45:" Slim3\Annotation\Model\RouteModel methodName";s:7:"method4";s:40:" Slim3\Annotation\Model\RouteModel alias";s:9:"route4.id";s:50:" Slim3\Annotation\Model\RouteModel classMiddleware";N;}i:4;O:33:"Slim3\Annotation\Model\RouteModel":6:{s:39:" Slim3\Annotation\Model\RouteModel verb";s:6:"DELETE";s:40:" Slim3\Annotation\Model\RouteModel route";s:19:"/prefix3/rota5/{id}";s:44:" Slim3\Annotation\Model\RouteModel className";s:32:"Test\Controller\DilsonController";s:45:" Slim3\Annotation\Model\RouteModel methodName";s:7:"method5";s:40:" Slim3\Annotation\Model\RouteModel alias";s:9:"route5.id";s:50:" Slim3\Annotation\Model\RouteModel classMiddleware";N;}}';
    }
}