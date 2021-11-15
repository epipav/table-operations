<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/home' => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/api/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'login-index', '_controller' => 'App\\Controller\\LoginController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/tables' => [[['_route' => 'api', '_controller' => 'App\\Controller\\TableController::getTable'], null, ['GET' => 0], null, false, false, null]],
        '/api/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\TableController::search'], null, ['POST' => 0], null, false, false, null]],
        '/table' => [[['_route' => 'table', '_controller' => 'App\\Controller\\TableController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
