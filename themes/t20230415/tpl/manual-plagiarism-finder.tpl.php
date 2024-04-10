<?php
// dbg($route);
require_once $route['theme_path'] . '/tpl/general-head.tpl.php';
?>

<div id="main" class="col-12 px-0 px-md-2 shadow-lg my-2 bg-body rounded-3" style="border-radius: 15px !important;">

    <div class="row p-2">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-start ps-sm-2 pt-sm-2 mb-0 h2">
                        <?= $route['h1']; ?>
                    </h1>
                    <p class="text-start ps-sm-2 pt-sm-2">
                        <?= $route['desc_under_h1']; ?>
                    </p>
                    <hr>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-sm-8">
                    <textarea id="plagi_text" cols="30" rows="8" class="form-control"></textarea>
                    <button id="action_btn" class="btn btn-inf d-block w-100 mt-3 text-white" style="background-color: <?= $SITE_COLOR; ?>;">Generate Real Time Plagiarism Checker</button>
                </div>
                <div id="analysis_table" class="col-12 col-sm-4 d-none">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th style="width: 120px;">Total Words:</th>
                                <td id="total_words">0</td>
                            </tr>
                            <tr>
                                <th style="width: 120px;">Total Sentences:</th>
                                <td id="total_sentences">0</td>
                            </tr>
                            <tr>
                                <th style="width: 120px;">Total Chars:</th>
                                <td id="total_chars">0</td>
                            </tr>
                            <tr>
                                <th style="width: 120px;">Total Spaces:</th>
                                <td id="total_spaces">0</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- '#plagi_text', '#action_btn', '#analysis_table', '#total_words', '#total_sentences', '#total_chars', '#total_spaces', '#result_area', '#open_all_with_google', '#open_all_with_youtube', '#open_all_with_bing', '#result_tbody', -->
                </div>
            </div>
        </div>
    </div>
</div>

<div id="result_area" class="col-12 px-0 px-md-2 shadow-lg my-2 bg-body rounded-3 d-none" style="border-radius: 15px !important;">

    <div class="row p-2">
        <div class="col-12 my-3">
            <div class="btn-group w-100" role="group" aria-label="Basic example">
                <button id="open_all_with_google" type="button" class="btn btn-success p-4">Check All With Google</button>
                <button id="open_all_with_youtube" type="button" class="btn btn-warning p-4">Check All With YouTube</button>
                <button id="open_all_with_bing" type="button" class="btn btn-primary p-4">Check All With Bing</button>
            </div>
            <?php $n = 0; ?>
            <table id="" class="table table-stripe mt-2">
                <tbody id="result_tbody">
                    <tr>
                        <td class="py-4 h5 over-hidden">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text" style="background-color: <?= $SITE_COLOR; ?>;"><?= ++$n; ?></span>
                                <input type="text" class="form-control" value="typesetting industry. The roots of that standard text go way back to the 1500s when an unknown printer took">
                                <a class="btn bg-success text-white" type="button">Google</a>
                                <a class="btn bg-warning text-white" type="button">YouTube</a>
                                <a class="btn bg-primary text-white" type="button">Bing</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
require_once $route['theme_path'] . '/tpl/general-related-route-section.tpl.php';
?>

<!-- article area -->
<div class="col-12 px-0 px-md-2 shadow-lg my-2 bg-body rounded-3" style="border-radius: 15px !important;">

    <div class="row p-2">
        <div class="col-12 p-2 p-sm-3">
            <?= $route['article'] . PHP_EOL; ?>
        </div>
    </div>
</div>

<?php
require_once $route['theme_path'] . '/tpl/general-footer.tpl.php';
