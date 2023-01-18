<?php 

//require_once './vendor/autoload.php';

$request = $_SERVER['REQUEST_URI'];
$request_type = $_SERVER['REQUEST_METHOD'];

if ($request_type == 'POST') {
    switch ($request) {
        case '/sponsor' :
            echo "sponsor";
            break;
        case '/contact' :
            echo "contact";
            break;
        default:
            echo "Default";
            break;
    }
} else {
    switch ($request) {
        case '':
        case '/':
        case '/home' :
            require __DIR__ . '/views/index.php';
            break;
        case '/accolades' :
            require __DIR__ . '/views/accolades.php';
            break;
        case '/contact' :
            require __DIR__ . '/views/contact.php';
            break;
        case '/about/drones' :
            require __DIR__ . '/views/about-drones.php';
            break;
        case '/about/team' :
            require __DIR__ . '/views/about-team.php';
            break;
        case '/about/tmav' :
            require __DIR__ . '/views/about-tmav.php';
            break;
        case '/sponsor' :
            require __DIR__ . '/views/sponsor.php';
            break;
        default:
            http_response_code(404);
            require __DIR__ . '/views/404.php';
            break;
    }
}




