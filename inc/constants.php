<?php

/**
 * @var ROUTE_END_WITH
 * if web pages open with .html or .php extension.
 * keep it empty if no any extension needed on the end of web page
 * @example 
 * define('ROUTE_END_WITH', '');
 * define('ROUTE_END_WITH', '.asp');
 * define('ROUTE_END_WITH', '.htm');
 * define('ROUTE_END_WITH', '.html');
 * define('ROUTE_END_WITH', '.php');
 */
define('ROUTE_END_WITH', '');


require_once __DIR__ . DIRECTORY_SEPARATOR . '../autoload.inc.php';

$route = [];


define('HOST_NAME', 'domdevtools.com');
define('SITE_URL', 'https://' . HOST_NAME);
define('THEME_URL', SITE_URL . '/themes/startup');
define('IMAGES_URL', SITE_URL . '/images');
define('SITE_TITLE', 'DOM Dev Tools');
define('SITE_NAME', 'DOMDevTools.Com');

define('SITE_PATH', dirname(__DIR__));
define('THEME_PATH', SITE_PATH . '/themes/startup');
define('CACHE_PATH', SITE_PATH . '/cache');

/**
 * website version
 */
$VERSION = '1.0.1';

/**
 * @var bool
 * variable help to decide if website running on local version
 * if we are testing or running website on localhost this @var value will true.
 */
$IS_LOCALHOST = false;


$footer_script = '';
$header_script = '';






/**
 * @var MAX_NAV_LINKS ($MAX_NAV_LINKS)
 * how many link show in nav bar
 */
$MAX_NAV_LINKS = 5;


$SITE_COLOR = 'rgb(48, 95, 122)';
$SITE_COLOR = 'rgb(74, 145, 186)';
// $SITE_COLOR = '#F1C50E';

/**
 * @var bool
 * If routes is a random content generator, it can be any.
 * this var will be true. check any previous random generator
 */
$generator_result_area = false;

$routes_reg = scandir(CACHE_PATH . '/routes');


$route_not_found = [];

/**
 * @var string $home_page_tool
 * What page/route to be show/load on home page,
 * Give a page slug.
 */
$home_page_tool = 'index';



/**
 * @var string $page_slug Page slug
 * 
 */
$page_slug = '';



/**
 * @var string $page_value URL parameter value
 */
$page_value = '';

$route = [];
/**
 * What protocol site will use this can be 2
 *    1- https://
 *    2- http:// 
 */
$route['site_protocol'] = 'https://';

/**
 * What host name for this site we are using
 */
$route['host_name']     = 'domdevtools.com';

/**
 * Site name to display some in website pages
 */
$route['site_name']     = 'DOMDevTools.Com';


$route['site_url']      = $route['site_protocol'] . $route['host_name'];
$route['site_path'] = dirname(__DIR__);
$route['themes_url'] = $route['site_url'] . '/themes';
$route['themes_path'] = $route['site_path'] . '/themes';


$route['cache_path'] = $route['site_path'] . '/cache';
$route['site_version'] = '1.0.2';

$route['page_slug'] = '';
$route['page_value'] = '';
$route['page_sub_value'] =  '';
