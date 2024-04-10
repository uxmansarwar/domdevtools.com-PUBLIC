<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../autoload.inc.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '../inc/mysql.db.php';

// echo 'routes';


$results = [];

try {
    $query = "SELECT * FROM routes WHERE deleted_at IS NULL ORDER BY updated_at DESC";
    $stmt = $db->prepare($query);
    $stmt->execute();

    $stmt_res = $stmt->get_result();
    while ($row = $stmt_res->fetch_assoc()) {
        $results[] = "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['h1']}</td>
                <td>{$row['route_canonical']}</td>
                <td>
                    <a href='https://domdevtools.com/admin/view-route.php?id={$row['id']}' class='btn btn-secondary p-1 m-0 rounded-0'>VIEW</a>
                    <a href='https://domdevtools.com/admin/edit-route.php?id={$row['id']}' class='btn btn-info p-1 m-0 rounded-0'>EDIT</a>
                    <a href='https://domdevtools.com/admin/route-mark-deleted.php?id={$row['id']}' class='btn btn-danger p-1 m-0 rounded-0'>DELETE</a>
                </td>
                <td>{$row['updated_at']}</td>
            </tr>";
    }
} catch (mysqli_sql_exception $e) {
} catch (Exception $e) {
}
require_once 'themes/head.php';
?>


<div class="col-12">

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">h1</th>
                <th scope="col">Canonical</th>
                <th scope="col">Actions</th>
                <th scope="col">Updated At</th>
            </tr>
        </thead>
        <tbody>
            <?= implode('', $results) ?>
        </tbody>
    </table>

</div>

<?php
require_once 'themes/footer.php';
