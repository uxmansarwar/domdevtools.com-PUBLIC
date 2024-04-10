<!-- footer start -->
<div class="container-fluid bg-header" style="bottom: 0px !important;">
    <div class="row">
        <div class="col-12 p-0 text-center text-light">
            Copyright © <a class="link-light" href="<?= SITE_URL ?>" style="text-decoration: none;"><?= SITE_NAME ?></a>, All Rights Reserved.
        </div>
    </div>

</div>
<script src="<?= THEME_URL ?>/third_parties/bootstrap-5.0.2/js/bootstrap.min.js"></script>
<script src="<?= THEME_URL ?>/third_parties/jquery/jquery-3.5.1.min.js"></script>
<script src="<?= THEME_URL ?>/js/main.js?v=<?= $VERSION ?>"></script>


<?php echo $footer_script; ?>


<div aria-live="polite" aria-atomic="true" style="left: auto;" class="fixed-bottom col-6 col-sm-3 col-md-3 col-lg-2" id="toasts_container"></div>
<script src="<?= THEME_URL . '/js/' . $page_slug . '.js?v=' . $route['version'] ?>"></script>
<!-- footer close -->

</body>

</html>