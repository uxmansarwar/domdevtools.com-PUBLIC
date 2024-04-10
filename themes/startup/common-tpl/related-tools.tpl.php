<style>
    .tools-list,
    a:link {
        text-decoration: none !important;
    }

    .tool_card:hover {
        background-color: <?= $SITE_COLOR ?> !important;
        color: white !important;
        box-shadow: 10px 10px B9F3F3 !important;

    }

    .tool_card:hover a {
        color: white !important;

    }
</style>

<li class="list-group-item m-0 p-3 shadow-lg my-2 bg-body rounded-3" style="border-radius: 15px !important;">
    <div class="row">

        <div class="col-12">

            <h3 class="text-start ps-sm-2 pt-sm-2">
                Related Tools
            </h3>

            <div class="row">
                <?php
                foreach ($route['related_tools'] as $slug => $v) {
                    echo '<div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-2 mb-3">
                        <div class="card border-0 shadow-lg tool_card">
                            <div class="card-body" title="Base64 to Image Converter">
                                <a href="' . SITE_URL . '/' . $slug . '" class="text-dark" target="_BLANK">
                                    <h5 class="card-title">
                                        ' . $v['title'] . ' 
                                    </h5>
                                    <p class="card-text  text-truncate">
                                        ' . $v['desc'] . '
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>
</li>