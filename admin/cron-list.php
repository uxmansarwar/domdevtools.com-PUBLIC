<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../autoload.inc.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '../inc/mysql.db.php';


require_once 'themes/head.php';
?>


<div class="col-12">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">File Name</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Route Cache Maker</td>
                <td>zz.route-data-cacher.cron.php</td>
                <td>This will create route main cache</td>
                <td>
                    <a href="https://domdevtools.com/admin/zz.route-data-cacher.cron.php?id=1" class="btn btn-secondary p-1 m-0 rounded-0">Execute Now</a>
                </td>
            </tr>
        </tbody>
    </table>

</div>

<?php
require_once 'themes/footer.php';
