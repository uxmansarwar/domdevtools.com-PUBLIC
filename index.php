<?php
define('HACKING_STOPPED', true);
require_once __DIR__ . DIRECTORY_SEPARATOR . 'autoload.inc.php';


/**
 * @var string $extended_url_part URL parameter value
 */
$extended_url_part = $_GET['page_slug'] ?? '';


$extended_url_partX = str_ireplace(['?', '#'], '/', $extended_url_part);
$extended_url_partX = explode('/', $extended_url_partX);


$page_slug = $route['page_slug'] = $extended_url_partX[0] ?? '';
$page_value = $route['page_value'] = $extended_url_partX[1] ?? '';
$route['page_sub_value'] = $extended_url_partX[2] ?? '';


if (in_array($page_slug, ['index', 'home'])) {
    //* Permanently redirect page
    header("Location: /", TRUE, 301);
}



if (empty($route['page_slug'])) {
    $page_slug = $route['page_slug'] = $home_page_tool;
}




if (file_exists(SITE_PATH . '/routes/' . $route['page_slug'] . '.tool.php')) {
    require_once SITE_PATH . '/routes/' . $route['page_slug'] . '.tool.php';
} elseif (file_exists(SITE_PATH . '/routes/' . $route['page_slug'] . '.route.php')) {
    require_once SITE_PATH . '/routes/' . $route['page_slug'] . '.route.php';
} else {
    require_once SITE_PATH . DIRECTORY_SEPARATOR . 'routes/errors.tool.php';
}

exit;
