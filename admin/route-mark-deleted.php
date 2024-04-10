<?php


require_once __DIR__ . DIRECTORY_SEPARATOR . '../autoload.inc.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '../inc/mysql.db.php';

$id = isset($_GET['id']) ? $_GET['id'] : header('Location: https://domdevtools.com/admin/route-list.php');


try {

    $query = 'UPDATE routes SET deleted_at=current_timestamp() WHERE id=?';

    $stmt = $db->prepare($query);


    $stmt->bind_param('i', ...[$id]);

    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        header("Location: https://domdevtools.com/admin/route-list.php");
    }
} catch (mysqli_sql_exception $e) {
    // trigger_error($e->getMessage());
    $errors[] = $e->getMessage();
} catch (Exception $e) {
    // trigger_error($e->getMessage());
    $errors[] = $e->getMessage();
}
