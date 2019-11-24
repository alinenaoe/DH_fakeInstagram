<?php

    $routes = key($_GET)?key($_GET):"posts";

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

        case "new-user":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($routes);
        break;

        case "register-user":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($routes);
        break;

        case "login":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($routes);
        break;
    }