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
        '/careersummary' => [[['_route' => 'career_summary_index', '_controller' => 'App\\Controller\\CareerSummaryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/careersummary/new' => [[['_route' => 'career_summary_new', '_controller' => 'App\\Controller\\CareerSummaryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categories' => [[['_route' => 'categories_index', '_controller' => 'App\\Controller\\CategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categories/new' => [[['_route' => 'categories_new', '_controller' => 'App\\Controller\\CategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/education' => [[['_route' => 'education_index', '_controller' => 'App\\Controller\\EducationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/education/new' => [[['_route' => 'education_new', '_controller' => 'App\\Controller\\EducationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/languages' => [[['_route' => 'languages_index', '_controller' => 'App\\Controller\\LanguagesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/languages/new' => [[['_route' => 'languages_new', '_controller' => 'App\\Controller\\LanguagesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/personaldata' => [[['_route' => 'personal_data_index', '_controller' => 'App\\Controller\\PersonalDataController::index'], null, ['GET' => 0], null, true, false, null]],
        '/personaldata/new' => [[['_route' => 'personal_data_new', '_controller' => 'App\\Controller\\PersonalDataController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/project' => [[['_route' => 'project_index', '_controller' => 'App\\Controller\\ProjectController::index'], null, ['GET' => 0], null, true, false, null]],
        '/project/new' => [[['_route' => 'project_new', '_controller' => 'App\\Controller\\ProjectController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/projectroles' => [[['_route' => 'project_roles_index', '_controller' => 'App\\Controller\\ProjectRolesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/projectroles/new' => [[['_route' => 'project_roles_new', '_controller' => 'App\\Controller\\ProjectRolesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/skills' => [[['_route' => 'skills_index', '_controller' => 'App\\Controller\\SkillsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/skills/new' => [[['_route' => 'skills_new', '_controller' => 'App\\Controller\\SkillsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/spokenlanguages' => [[['_route' => 'spoken_languages_index', '_controller' => 'App\\Controller\\SpokenLanguagesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/spokenlanguages/new' => [[['_route' => 'spoken_languages_new', '_controller' => 'App\\Controller\\SpokenLanguagesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/technicalexperience' => [[['_route' => 'technical_experience_index', '_controller' => 'App\\Controller\\TechnicalExperienceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/technicalexperience/new' => [[['_route' => 'technical_experience_new', '_controller' => 'App\\Controller\\TechnicalExperienceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/ca(?'
                    .'|reersummary/([^/]++)(?'
                        .'|(*:198)'
                        .'|/edit(*:211)'
                        .'|(*:219)'
                    .')'
                    .'|tegories/([^/]++)(?'
                        .'|(*:248)'
                        .'|/edit(*:261)'
                        .'|(*:269)'
                    .')'
                .')'
                .'|/education/([^/]++)(?'
                    .'|(*:301)'
                    .'|/edit(*:314)'
                    .'|(*:322)'
                .')'
                .'|/languages/([^/]++)(?'
                    .'|(*:353)'
                    .'|/edit(*:366)'
                    .'|(*:374)'
                .')'
                .'|/p(?'
                    .'|ersonaldata/([^/]++)(?'
                        .'|(*:411)'
                        .'|/edit(*:424)'
                        .'|(*:432)'
                    .')'
                    .'|roject(?'
                        .'|/([^/]++)(?'
                            .'|(*:462)'
                            .'|/edit(*:475)'
                            .'|(*:483)'
                        .')'
                        .'|roles/([^/]++)(?'
                            .'|(*:509)'
                            .'|/edit(*:522)'
                            .'|(*:530)'
                        .')'
                    .')'
                .')'
                .'|/s(?'
                    .'|kills/([^/]++)(?'
                        .'|(*:563)'
                        .'|/edit(*:576)'
                        .'|(*:584)'
                    .')'
                    .'|pokenlanguages/([^/]++)(?'
                        .'|(*:619)'
                        .'|/edit(*:632)'
                        .'|(*:640)'
                    .')'
                .')'
                .'|/technicalexperience/([^/]++)(?'
                    .'|(*:682)'
                    .'|/edit(*:695)'
                    .'|(*:703)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:729)'
                    .'|/edit(*:742)'
                    .'|(*:750)'
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
        198 => [[['_route' => 'career_summary_show', '_controller' => 'App\\Controller\\CareerSummaryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        211 => [[['_route' => 'career_summary_edit', '_controller' => 'App\\Controller\\CareerSummaryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        219 => [[['_route' => 'career_summary_delete', '_controller' => 'App\\Controller\\CareerSummaryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        248 => [[['_route' => 'categories_show', '_controller' => 'App\\Controller\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        261 => [[['_route' => 'categories_edit', '_controller' => 'App\\Controller\\CategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        269 => [[['_route' => 'categories_delete', '_controller' => 'App\\Controller\\CategoriesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        301 => [[['_route' => 'education_show', '_controller' => 'App\\Controller\\EducationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        314 => [[['_route' => 'education_edit', '_controller' => 'App\\Controller\\EducationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        322 => [[['_route' => 'education_delete', '_controller' => 'App\\Controller\\EducationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        353 => [[['_route' => 'languages_show', '_controller' => 'App\\Controller\\LanguagesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        366 => [[['_route' => 'languages_edit', '_controller' => 'App\\Controller\\LanguagesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        374 => [[['_route' => 'languages_delete', '_controller' => 'App\\Controller\\LanguagesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        411 => [[['_route' => 'personal_data_show', '_controller' => 'App\\Controller\\PersonalDataController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        424 => [[['_route' => 'personal_data_edit', '_controller' => 'App\\Controller\\PersonalDataController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        432 => [[['_route' => 'personal_data_delete', '_controller' => 'App\\Controller\\PersonalDataController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        462 => [[['_route' => 'project_show', '_controller' => 'App\\Controller\\ProjectController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        475 => [[['_route' => 'project_edit', '_controller' => 'App\\Controller\\ProjectController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        483 => [[['_route' => 'project_delete', '_controller' => 'App\\Controller\\ProjectController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        509 => [[['_route' => 'project_roles_show', '_controller' => 'App\\Controller\\ProjectRolesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        522 => [[['_route' => 'project_roles_edit', '_controller' => 'App\\Controller\\ProjectRolesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        530 => [[['_route' => 'project_roles_delete', '_controller' => 'App\\Controller\\ProjectRolesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        563 => [[['_route' => 'skills_show', '_controller' => 'App\\Controller\\SkillsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        576 => [[['_route' => 'skills_edit', '_controller' => 'App\\Controller\\SkillsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        584 => [[['_route' => 'skills_delete', '_controller' => 'App\\Controller\\SkillsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        619 => [[['_route' => 'spoken_languages_show', '_controller' => 'App\\Controller\\SpokenLanguagesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        632 => [[['_route' => 'spoken_languages_edit', '_controller' => 'App\\Controller\\SpokenLanguagesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        640 => [[['_route' => 'spoken_languages_delete', '_controller' => 'App\\Controller\\SpokenLanguagesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        682 => [[['_route' => 'technical_experience_show', '_controller' => 'App\\Controller\\TechnicalExperienceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        695 => [[['_route' => 'technical_experience_edit', '_controller' => 'App\\Controller\\TechnicalExperienceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        703 => [[['_route' => 'technical_experience_delete', '_controller' => 'App\\Controller\\TechnicalExperienceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        729 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        742 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        750 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
