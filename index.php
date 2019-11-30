<?php

    $routes = key($_GET)?key($_GET):"new-user";

    //dúvida: como estabelecer que a rota só vai para post se o usuário estiver logado? O código abaixo não funcionou
    // if(key($_GET)) {
    //     $routes = key($_GET);
    // } elseif (isset($_SESSION['username'])) {
    //     $routes="posts";
    // } else {
    //     $routes="login";
    // }   


    switch ($routes) {
        case "posts":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($routes);
        break;

        case "new-post":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($routes);
        break;

        case "send-post":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($routes);
        break;

        case "like":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($routes);
        break;        

        case "new-user":
            include "controllers/UserController.php";
            $controller = new UserController();
            $controller->acao($routes);
        break;

        case "register-user":
            include "controllers/UserController.php";
            $controller = new UserController();
            $controller->acao($routes);
        break;

        case "login":
            include "controllers/LoginController.php";
            $controller = new UserController();
            $controller->acao($routes);
        break;

        case "logUser":
            include "controllers/LoginController.php";
            $controller = new UserController();
            $controller->acao($routes);
        break;

        case "logout":
            include "controllers/LoginController.php";
            $controller = new UserController();
            $controller->acao($routes);
        break;
    }