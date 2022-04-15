<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/produits' => [[['_route' => 'produits.list', '_controller' => 'App\\Controller\\ProduitsController::index'], null, null, null, true, false, null]],
        '/public' => [[['_route' => 'app_public', '_controller' => 'App\\Controller\\PublicController::index'], null, null, null, false, false, null]],
        '/template' => [[['_route' => 'template', '_controller' => 'App\\Controller\\PublicController::template'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/produits/(?'
                    .'|pdf/([^/]++)(*:194)'
                    .'|stats/age/([^/]++)/([^/]++)(*:229)'
                    .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:269)'
                    .'|(\\d+)(*:282)'
                    .'|edit(?:/([^/]++))?(*:308)'
                    .'|delete/([^/]++)(*:331)'
                    .'|update/([^/]++)/([^/]++)/prix\\}(*:370)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'produits.pdf', '_controller' => 'App\\Controller\\ProduitsController::generatePdfProduits'], ['id'], null, null, false, true, null]],
        229 => [[['_route' => 'produits.list.age', '_controller' => 'App\\Controller\\ProduitsController::statsProduitsByAge'], ['prixMin', 'prixMax'], null, null, false, true, null]],
        269 => [[['_route' => 'produits.list.alls', 'page' => '1', 'nbre' => '12', '_controller' => 'App\\Controller\\ProduitsController::indexAlls'], ['page', 'nbre'], null, null, false, true, null]],
        282 => [[['_route' => 'produits.detail', '_controller' => 'App\\Controller\\ProduitsController::detail'], ['id'], null, null, false, true, null]],
        308 => [[['_route' => 'produits.edit', 'id' => '0', '_controller' => 'App\\Controller\\ProduitsController::addProduits'], ['id'], null, null, false, true, null]],
        331 => [[['_route' => 'produits.delete', '_controller' => 'App\\Controller\\ProduitsController::deleteProduits'], ['id'], null, null, false, true, null]],
        370 => [
            [['_route' => 'produits.update', '_controller' => 'App\\Controller\\ProduitsController::updateProduits'], ['id', 'nom'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
