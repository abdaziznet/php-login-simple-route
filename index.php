<?php
$project_location = "/login-bootstrap-sqlserver";
$me = $project_location;

// For get URL PATH
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case $me . '/':
        require "app/views/page_home.php";
        break;
    case $me . '/register':
        require "app/views/page_register.php";
        break;
    case $me . '/register-process':
        require "app/dao/register.php";
        break;
    case $me . '/login':
        require "app/views/page_login.php";
        break;
    case $me . '/login-process':
        require "app/dao/login.php";
        break;
    case $me . '/timeline':
        require "app/views/page_timeline.php";
        break;
    case $me . '/logout-process':
        require "app/dao/logout.php";
        break;
    default:
        http_response_code(404);
        echo "404";
        break;
}