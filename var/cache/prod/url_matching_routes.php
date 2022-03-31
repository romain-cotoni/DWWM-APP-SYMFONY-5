<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/app' => [[['_route' => 'app', '_controller' => 'App\\Controller\\AppController::index'], null, null, null, false, false, null]],
        '/ajax_select_session' => [[['_route' => 'ajax_select_session', '_controller' => 'App\\Controller\\AppController::ajaxActionSessionSelect'], null, null, null, false, false, null]],
        '/ajax_select_candidat' => [[['_route' => 'ajax_select_candidat', '_controller' => 'App\\Controller\\AppController::ajaxActionCandidatSelect'], null, null, null, false, false, null]],
        '/ajax_add_competence' => [[['_route' => 'ajax_add_competence', '_controller' => 'App\\Controller\\AppController::ajaxActionCompetence'], null, null, null, false, false, null]],
        '/ajax_add_ccp' => [[['_route' => 'ajax_add_ccp', '_controller' => 'App\\Controller\\AppController::ajaxActionCcp'], null, null, null, false, false, null]],
        '/ajax_add_jour' => [[['_route' => 'ajax_add_jour', '_controller' => 'App\\Controller\\AppController::ajaxActionJour'], null, null, null, false, false, null]],
        '/ajax_add_habilitation' => [[['_route' => 'ajax_add_habilitation', '_controller' => 'App\\Controller\\AppController::ajaxActionHabilitation'], null, null, null, false, false, null]],
        '/audit' => [[['_route' => 'audit', '_controller' => 'App\\Controller\\AuditController::index'], null, null, null, false, false, null]],
        '/conception' => [[['_route' => 'conception', '_controller' => 'App\\Controller\\ConceptionController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/entreprise' => [[['_route' => 'entreprise', '_controller' => 'App\\Controller\\EntrepriseController::index'], null, null, null, false, false, null]],
        '/formation' => [[['_route' => 'formation', '_controller' => 'App\\Controller\\FormationController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/jury' => [[['_route' => 'jury', '_controller' => 'App\\Controller\\JuryController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stage' => [[['_route' => 'stage', '_controller' => 'App\\Controller\\StageController::index'], null, null, null, false, false, null]],
        '/app/ajouter' => [[['_route' => 'ajouter', '_controller' => 'App\\Controller\\AppController::try'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
