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
        '/certificate/my-certificates' => [[['_route' => 'app_certificate_index', '_controller' => 'App\\Controller\\CertificateController::index'], null, ['GET' => 0], null, false, false, null]],
        '/certificate/new' => [[['_route' => 'app_certificate_new', '_controller' => 'App\\Controller\\CertificateController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/courses' => [[['_route' => 'app_courses_index', '_controller' => 'App\\Controller\\CoursesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/courses/new' => [[['_route' => 'app_courses_new', '_controller' => 'App\\Controller\\CoursesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\HomePageController::index'], null, null, null, false, false, null]],
        '/instructor/dashboard' => [[['_route' => 'app_instructor_dashboard', '_controller' => 'App\\Controller\\InstructorController::index'], null, null, null, false, false, null]],
        '/lessons' => [[['_route' => 'app_lessons_index', '_controller' => 'App\\Controller\\LessonsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lessons/new' => [[['_route' => 'app_lessons_new', '_controller' => 'App\\Controller\\LessonsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/profile/new' => [[['_route' => 'app_profile_new', '_controller' => 'App\\Controller\\ProfileController::new'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/student/dashboard' => [[['_route' => 'app_student_dashboard', '_controller' => 'App\\Controller\\StudentController::enrolledCourses'], null, ['GET' => 0], null, true, false, null]],
        '/users/all' => [[['_route' => 'app_all_users', '_controller' => 'App\\Controller\\UserController::users'], null, null, null, false, false, null]],
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
                .'|/c(?'
                    .'|ertificate/([^/]++)(?'
                        .'|(*:196)'
                        .'|/edit(*:209)'
                        .'|(*:217)'
                    .')'
                    .'|ourses/([^/]++)(?'
                        .'|(*:244)'
                        .'|/(?'
                            .'|e(?'
                                .'|dit(*:263)'
                                .'|nroll(?'
                                    .'|ements(*:285)'
                                    .'|(*:293)'
                                .')'
                            .')'
                            .'|unenroll(*:311)'
                        .')'
                        .'|(*:320)'
                    .')'
                .')'
                .'|/lessons/([^/]++)(?'
                    .'|(*:350)'
                    .'|/(?'
                        .'|edit(*:366)'
                        .'|complete(*:382)'
                    .')'
                    .'|(*:391)'
                .')'
                .'|/profile/([^/]++)/edit(*:422)'
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
        196 => [[['_route' => 'app_certificate_show', '_controller' => 'App\\Controller\\CertificateController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        209 => [[['_route' => 'app_certificate_edit', '_controller' => 'App\\Controller\\CertificateController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        217 => [[['_route' => 'app_certificate_delete', '_controller' => 'App\\Controller\\CertificateController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        244 => [[['_route' => 'app_courses_show', '_controller' => 'App\\Controller\\CoursesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        263 => [[['_route' => 'app_courses_edit', '_controller' => 'App\\Controller\\CoursesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        285 => [[['_route' => 'app_courses_show_enrollements', '_controller' => 'App\\Controller\\CoursesController::showEnrollements'], ['id'], ['GET' => 0], null, false, false, null]],
        293 => [[['_route' => 'app_courses_enroll', '_controller' => 'App\\Controller\\CoursesController::enroll'], ['id'], ['GET' => 0], null, false, false, null]],
        311 => [[['_route' => 'app_courses_unenroll', '_controller' => 'App\\Controller\\CoursesController::unenroll'], ['id'], ['GET' => 0], null, false, false, null]],
        320 => [[['_route' => 'app_courses_delete', '_controller' => 'App\\Controller\\CoursesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        350 => [[['_route' => 'app_lessons_show', '_controller' => 'App\\Controller\\LessonsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        366 => [[['_route' => 'app_lessons_edit', '_controller' => 'App\\Controller\\LessonsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        382 => [[['_route' => 'app_lessons_complete', '_controller' => 'App\\Controller\\LessonsController::complete'], ['id'], ['GET' => 0], null, false, false, null]],
        391 => [[['_route' => 'app_lessons_delete', '_controller' => 'App\\Controller\\LessonsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        422 => [
            [['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
