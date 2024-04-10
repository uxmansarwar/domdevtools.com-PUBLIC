<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '.././autoload.inc.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '../inc/mysql.db.php';

// manual-plagiarism-finder
// real-time-plagiarism-opener.tool
getRouteData($db, $route['page_slug'], $route);
if (
    !isset($route['is_active']) ||
    !$route['is_active']
)
    require_once __DIR__ . DIRECTORY_SEPARATOR . './errors.tool.php';



/**
 * authentication
 */
if ((bool)$route['validate_user_login']) {
    session_start();
    if (!isset($_SESSION['login_user'])) {
        die('404 Not Found');
    }
}


$sub_route_path = $route['site_path'] . '/routes/' . $route['route_file_name'] . '/' . $route['page_value'] . '.route';


if (file_exists($sub_route_path . '.py')) {
    header('Content-Type: application/json');
    echo shell_exec("python $sub_route_path" . '.py https://www.youtube.com/playlist?list=PL2smiiifFtJcQCDxgBVvf2uYLNq__qmhd');
} else
    die('404 not found');
