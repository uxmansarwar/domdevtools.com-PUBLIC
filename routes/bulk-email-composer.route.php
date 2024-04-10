<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '.././autoload.inc.php';

$route = require_once CACHE_PATH . '/routes/' . $page_slug . '.php';


$header_script .= <<<html

html;
$footer_script .= '<script src="' . SITE_URL . '/js-workers/bulk-email-composer.worker.js"></script>' . PHP_EOL;
$footer_script .= <<<html

html;


require_once THEME_PATH . '/common-tpl/tool.tpl.php';