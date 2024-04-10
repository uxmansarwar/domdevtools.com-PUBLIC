<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '.././autoload.inc.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '../inc/mysql.db.php';

// manual-plagiarism-finder
// real-time-plagiarism-opener.tool
getRouteData($db, $page_slug, $route);

if (
    !isset($route['is_active']) ||
    !$route['is_active']
)
    require_once __DIR__ . DIRECTORY_SEPARATOR . './errors.tool.php';

/**
 * we will over "route_child_theme" to theme_path in db
 * which will have absolute path of current theme
 */
$route['theme_path'] = $route['themes_path'] . '/' . $route['route_child_theme'];
$route['theme_url']  = $route['themes_url'] . '/' . $route['route_child_theme'];

require_once $route['theme_path'] . '/tpl/' . $route['route_file_name'] . '.tpl.php';
