</div>
</div>
</div>
</div>
</div>


<!-- footer start -->
<div class="container-fluid bg-header" style="bottom: 0px !important;">
    <div class="row">
        <div class="col-12 p-0 text-center text-light">
            Copyright © <a class="link-light" href="<?= $route['site_url']; ?>" style="text-decoration: none;"><?= $route['site_name']; ?></a>, All Rights Reserved.
        </div>
    </div>
</div>

<script src="<?= $route['themes_url'] ?>/common/bootstrap-5.0.2/js/bootstrap.min.js"></script>
<script src="<?= $route['theme_url'] ?>/js/main.js?v=<?= $route['site_version'] ?>"></script>
<script src="<?= $route['theme_url'] ?>/js/<?= $route['route_file_name'] ?>.js?v=<?= $route['route_js_version'] ?>"></script>


<?php echo $footer_script; ?>

</body>

</html>