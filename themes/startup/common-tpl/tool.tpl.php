<?php
require_once THEME_PATH . '/common-tpl/head.tpl.php';
?>
<div id="working_area" class="container-fluid px-0" style="min-height: 1000px;">
    <div class="container">
        <div class="row">
            <div id="main" class="col-12">
                <ul class="p-0">
                    <li class="list-group-item m-0 p-3 shadow-lg my-2 bg-body rounded-3" style="border-radius: 15px !important;">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-start d-inline">
                                    <?php echo  $route['h1']; ?>
                                </h1>

                                <p class="mb-1">
                                    <?php echo  trim($route['desc']); ?>
                                </p>

                            </div>
                            <div class="col-12">
                                <hr>
                                <?php
                                require_once THEME_PATH . '/tools-tpl/' . $page_slug . '.tpl.php';
                                ?>
                            </div>
                        </div>
                    </li>



                    <?php
                    if ($generator_result_area)
                        require_once THEME_PATH . '/common-tpl/random-generator-result-area.tpl.php';
                    ?>
                    <?php require_once THEME_PATH . '/common-tpl/related-tools.tpl.php'; ?>


                    <li class="list-group-item m-0 p-3 shadow-lg my-2 bg-body rounded-3" style="border-radius: 15px !important;">

                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <?php
                                echo $route['article'];
                                ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- main close -->
<!-- main close -->

<?php
require_once THEME_PATH . '/common-tpl/footer.tpl.php';
