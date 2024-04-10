<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '../autoload.inc.php';

function dbg($data = '')
{
    // var_dump($data);
    echo "<br /><pre>";
    print_r($data);
    echo "</pre><br />";
    // var_dump($data);
    echo 'Script execution Time is :::: ' . (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']) . '<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';
    exit();
}

/**
 * @method strEndsWith (string $haystack, string $needle): bool
 */
function strEndsWith(string $haystack, string $needle): bool
{
    return empty($needle) || substr($haystack, -strlen($needle)) === $needle;
}

function getRouteData(mysqli $db, string $route_slug, &$route)
{
    $errors = [];
    if (empty($route_slug) || !is_array($route))
        return false;

    try {
        $query = 'SELECT * FROM routes WHERE route_slug=?';
        $stmt = $db->prepare($query);

        $stmt->bind_param('s', ...[$route_slug]);

        $stmt->execute();

        $db_result = $stmt->get_result()->fetch_assoc();
        if ($db_result)
            $route = array_merge($db_result, $route);
    } catch (mysqli_sql_exception $e) {
        $errors[] = $e->getMessage();
    } catch (Exception $e) {
        $errors[] = $e->getMessage();
    }
}
