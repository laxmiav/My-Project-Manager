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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/projets' => [[['_route' => 'app_projets_index', '_controller' => 'App\\Controller\\ProjetsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/projets/new' => [[['_route' => 'app_projets_new', '_controller' => 'App\\Controller\\ProjetsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
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
                .'|/projets/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/tasks/(?'
                    .'|([^/]++)(*:237)'
                    .'|done/([^/]++)(*:258)'
                    .'|new/([^/]++)(*:278)'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|show(*:305)'
                            .'|edit(*:317)'
                            .'|inprogress(*:335)'
                            .'|done(*:347)'
                        .')'
                        .'|(*:356)'
                    .')'
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
        189 => [[['_route' => 'app_projets_show', '_controller' => 'App\\Controller\\ProjetsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'app_projets_edit', '_controller' => 'App\\Controller\\ProjetsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'app_projets_delete', '_controller' => 'App\\Controller\\ProjetsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        237 => [[['_route' => 'app_tasks_index', '_controller' => 'App\\Controller\\TasksController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'app_tasks_indexDone', '_controller' => 'App\\Controller\\TasksController::indexDone'], ['id'], ['GET' => 0], null, false, true, null]],
        278 => [[['_route' => 'app_tasks_new', '_controller' => 'App\\Controller\\TasksController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        305 => [[['_route' => 'app_tasks_show', '_controller' => 'App\\Controller\\TasksController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        317 => [[['_route' => 'app_tasks_edit', '_controller' => 'App\\Controller\\TasksController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        335 => [[['_route' => 'app_tasks_inprogress', '_controller' => 'App\\Controller\\TasksController::inProgress'], ['id'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        347 => [[['_route' => 'app_tasks_done', '_controller' => 'App\\Controller\\TasksController::done'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        356 => [
            [['_route' => 'app_tasks_delete', '_controller' => 'App\\Controller\\TasksController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
