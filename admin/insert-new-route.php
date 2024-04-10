<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../autoload.inc.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '../inc/mysql.db.php';

$_INP = [];
$errors = [];


if (isset($_POST['insert_now'])) {

    $_INP = [
        'desc40' => trim($_POST['desc40']),
        'desc160' => trim($_POST['desc160']),
        'desc260' => trim($_POST['desc260']),
        'desc360' => trim($_POST['desc360']),
        'desc400' => trim($_POST['desc400']),
        'h1' => trim($_POST['h1']),
        'desc_under_h1' => trim($_POST['desc_under_h1']),
        'heading_for_route_list' => trim($_POST['heading_for_route_list']),
        'desc_for_route_list' => trim($_POST['desc_for_route_list']),
        'category' => trim($_POST['category']),
        'article' => trim($_POST['article']),
        'use_meta_data' => (isset($_POST['use_meta_data']) && $_POST['use_meta_data'] == 1 ? '1' : '0'),
        'meta_title' => trim($_POST['meta_title']),
        'meta_desc' => trim($_POST['meta_desc']),
        'meta_keyword' => trim($_POST['meta_keyword']),
        'meta_robots' => trim($_POST['meta_robots']),
        'use_og_meta' => (isset($_POST['use_og_meta']) && $_POST['use_og_meta'] == 1 ? '1' : '0'),
        'og_title' => trim($_POST['og_title']),
        'og_site_name' => trim($_POST['og_site_name']),
        'og_url' => trim($_POST['og_url']),
        'og_type' => trim($_POST['og_type']),
        'og_desc' => trim($_POST['og_desc']),
        'og_img' => trim($_POST['og_img']),
        'use_seo_schema' => (isset($_POST['use_seo_schema']) && $_POST['use_seo_schema'] == 1 ? '1' : '0'),
        'schema_name' => trim($_POST['schema_name']),
        'schema_desc' => trim($_POST['schema_desc']),
        'schema_img' => trim($_POST['schema_img']),
        'schema_url' => trim($_POST['schema_url']),
        'use_twitter_card' => (isset($_POST['use_twitter_card']) && $_POST['use_twitter_card'] == 1 ? '1' : '0'),
        'twitter_card' => trim($_POST['twitter_card']),
        'twitter_title' => trim($_POST['twitter_title']),
        'twitter_desc' => trim($_POST['twitter_desc']),
        'twitter_url' => trim($_POST['twitter_url']),
        'twitter_img' => trim($_POST['twitter_img']),
        'route_slug' => trim($_POST['route_slug']),
        'route_canonical' => trim($_POST['route_canonical']),
        'route_file_name' => trim($_POST['route_file_name']),
        'route_author_name' => trim($_POST['route_author_name']),
        'route_author_email' => trim($_POST['route_author_email']),
        'route_dev_comment' => trim($_POST['route_dev_comment']),
        'route_version' => trim($_POST['route_version']),
        'route_js_version' => trim($_POST['route_js_version']),
        'route_css_version' => trim($_POST['route_css_version']),
        'route_child_theme' => trim($_POST['route_child_theme']),
        'route_content' => trim($_POST['route_content']),
        'route_type' => trim($_POST['route_type']),
        'route_for' => trim($_POST['route_for']),
        'route_request_method' => trim($_POST['route_request_method']),
        'code_before_html_tag' => trim($_POST['code_before_html_tag']),
        'code_before_head_close' => trim($_POST['code_before_head_close']),
        'code_at_end_of_file' => trim($_POST['code_at_end_of_file']),
        'example_routes' => trim($_POST['example_routes']),
        'example_ui' => trim($_POST['example_ui']),
        'example_text_content' => trim($_POST['example_text_content']),
        'q_why_need_this_route' => trim($_POST['q_why_need_this_route']),
        'q_what_will_do_this_route' => trim($_POST['q_what_will_do_this_route']),
        'q_how_will_do_this_route' => trim($_POST['q_how_will_do_this_route']),
        'targeted_audience' => trim($_POST['targeted_audience']),
        'targeted_country' => trim($_POST['targeted_country']),
        'targeted_keyword' => trim($_POST['targeted_keyword']),
        'targeted_sub_keyword' => trim($_POST['targeted_sub_keyword']),
        'targeted_seed_keyword' => trim($_POST['targeted_seed_keyword']),
        'targeted_longtail_keyword' => trim($_POST['targeted_longtail_keyword']),
        'is_active' => (isset($_POST['is_active']) && $_POST['is_active'] == 1 ? '1' : '0'),
        'validate_csrf' => (isset($_POST['validate_csrf']) && $_POST['validate_csrf'] == 1 ? '1' : '0'),
        'validate_jwt' => (isset($_POST['validate_jwt']) && $_POST['validate_jwt'] == 1 ? '1' : '0'),
        'validate_google_v2' => (isset($_POST['validate_google_v2']) && $_POST['validate_google_v2'] == 1 ? '1' : '0'),
        'validate_google_v3' => (isset($_POST['validate_google_v3']) && $_POST['validate_google_v3'] == 1 ? '1' : '0'),
        'validate_user_login' => (isset($_POST['validate_user_login']) && $_POST['validate_user_login'] == 1 ? '1' : '0'),
        'hash_js_ids' => (isset($_POST['hash_js_ids']) && $_POST['hash_js_ids'] == 1 ? '1' : '0'),
        'hash_js_classes' => (isset($_POST['hash_js_classes']) && $_POST['hash_js_classes'] == 1 ? '1' : '0'),
        'hash_css_ids' => (isset($_POST['hash_css_ids']) && $_POST['hash_css_ids'] == 1 ? '1' : '0'),
        'hash_css_classes' => (isset($_POST['hash_css_classes']) && $_POST['hash_css_classes'] == 1 ? '1' : '0'),
        'use_dynamic_html' => (isset($_POST['use_dynamic_html']) && $_POST['use_dynamic_html'] == 1 ? '1' : '0'),
        'load_csrf' => (isset($_POST['load_csrf']) && $_POST['load_csrf'] == 1 ? '1' : '0'),
        'load_jwt' => (isset($_POST['load_jwt']) && $_POST['load_jwt'] == 1 ? '1' : '0'),
        'load_google_v2' => (isset($_POST['load_google_v2']) && $_POST['load_google_v2'] == 1 ? '1' : '0'),
        'load_google_v3' => (isset($_POST['load_google_v3']) && $_POST['load_google_v3'] == 1 ? '1' : '0')
    ];


    if (empty($_POST['route_slug']) || empty($_POST['route_file_name']) || empty($_POST['route_canonical'])) {
        $errors[] = 'Provide Required Route Data!';
    }

    if (empty($errors)) {

        try {
            $query = 'INSERT INTO routes (' . implode(', ', array_keys($_INP)) . ') VALUES (' . implode(', ', array_fill(0, count($_INP), '?')) . ');';

            $stmt = $db->prepare($query);

            // dbg(count(array_fill(0, count($_INP), '?')));
            $stmt->bind_param(str_repeat('s', count($_INP)), ...array_values($_INP));

            $stmt->execute();

            if ($db->insert_id) {
                header("Location: https://domdevtools.com/admin/route-list.php");
            }
        } catch (mysqli_sql_exception $e) {
            // trigger_error($e->getMessage());
            $errors[] = $e->getMessage();
        } catch (Exception $e) {
            // trigger_error($e->getMessage());
            $errors[] = $e->getMessage();
        }
    }
}
require_once 'themes/head.php';
?>

<div class="" style="max-width: 1320px; margin: auto;">
    <div id="main" class="col-10 mt-5">

        <h1>Add New Route</h1>
        <?php if (!empty($errors)) { ?>
            <div class="alert alert-danger my-3" role="alert">
                <?= (implode('<br>', $errors)) ?>
            </div>
        <?php } ?>
        <style>
            .accordion-item {
                background: clr(--clr-white);
                border: none;
                margin-bottom: 15px;
                box-shadow: 0 3px 6px #00000029;
                border-radius: 10px !important;
                overflow: hidden;
            }
        </style>
        <form method="POST">
            <div class="accordion">

                <!-- Questions & Answer -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="qna_accordion_head">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qna_accordion_body" aria-expanded="false" aria-controls="qna_accordion_body">
                            Question & Answer
                        </button>
                    </h2>
                    <div id="qna_accordion_body" class="accordion-collapse collapse" aria-labelledby="qna_accordion_head">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="q_why_need_this_route" class="form-label mb-0">Why Need this Route?</label>
                                        <textarea name="q_why_need_this_route" class="form-control" id="q_why_need_this_route" rows="2"><?= (isset($_INP['q_why_need_this_route']) ? $_INP['q_why_need_this_route'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="q_what_will_do_this_route" class="form-label mb-0">What Will Do This Route?</label>
                                        <textarea name="q_what_will_do_this_route" class="form-control" id="q_what_will_do_this_route" rows="2"><?= (isset($_INP['q_what_will_do_this_route']) ? $_INP['q_what_will_do_this_route'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="q_how_will_do_this_route" class="form-label mb-0">How Will Do This Route?</label>
                                        <textarea name="q_how_will_do_this_route" class="form-control" id="q_how_will_do_this_route" rows="2"><?= (isset($_INP['q_how_will_do_this_route']) ? $_INP['q_how_will_do_this_route'] : '') ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- article & heading -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="article_and_heading_accordion_head">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#article_and_heading_accordion_body" aria-expanded="true" aria-controls="article_and_heading_accordion_body">
                            Article & Heading
                        </button>
                    </h2>
                    <div id="article_and_heading_accordion_body" class="accordion-collapse collapse show" aria-labelledby="article_and_heading_accordion_head">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="h1" class="form-label mb-0">Heading 1:</label>
                                        <input value="<?= (isset($_INP['h1']) ? $_INP['h1'] : ''); ?>" name="h1" type="text" class="form-control" id="h1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="desc_under_h1" class="form-label mb-0">Description Under Heading 1 (160 char):</label>
                                        <textarea name="desc_under_h1" class="form-control set_tinymce" id="desc_under_h1" rows="2"><?= (isset($_INP['desc_under_h1']) ? $_INP['desc_under_h1'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="heading_for_route_list" class="form-label mb-0">Heading For Route List (20 char):</label>
                                        <input value="<?= (isset($_INP['heading_for_route_list']) ? $_INP['heading_for_route_list'] : ''); ?>" name="heading_for_route_list" type="text" class="form-control" id="heading_for_route_list">
                                    </div>
                                    <div class="mb-3">
                                        <label for="desc_for_route_list" class="form-label mb-0">Description For Route List (40 char):</label>
                                        <textarea name="desc_for_route_list" class="form-control set_tinymce" id="desc_for_route_list" rows="2"><?= (isset($_INP['desc_for_route_list']) ? $_INP['desc_for_route_list'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="category" class="form-label mb-0">Category:</label>
                                        <input value="<?= (isset($_INP['category']) ? $_INP['category'] : ''); ?>" name="category" type="text" class="form-control" id="category">
                                    </div>
                                    <div class="mb-3">
                                        <label for="article" class="form-label mb-0">Article:</label>
                                        <textarea name="article" class="form-control set_tinymce" id="article" rows="2"><?= (isset($_INP['article']) ? $_INP['article'] : '') ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- meta data -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="meta_data_accordion_head">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#meta_data_accordion_body" aria-expanded="true" aria-controls="meta_data_accordion_body">
                            Meta Data #1
                        </button>
                    </h2>
                    <div id="meta_data_accordion_body" class="accordion-collapse collapse show" aria-labelledby="meta_data_accordion_head">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="meta_title" class="form-label mb-0">Meta Title:</label>
                                        <input value="<?= (isset($_INP['meta_title']) ? $_INP['meta_title'] : ''); ?>" name="meta_title" type="text" class="form-control" id="meta_title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="meta_desc" class="form-label mb-0">Meta Description:</label>
                                        <textarea name="meta_desc" class="form-control" id="meta_desc" rows="2"><?= (isset($_INP['meta_desc']) ? $_INP['meta_desc'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="meta_keyword" class="form-label mb-0">Meta Keyword:</label>
                                        <textarea name="meta_keyword" class="form-control" id="meta_keyword" rows="2"><?= (isset($_INP['meta_keyword']) ? $_INP['meta_keyword'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="meta_robots" class="form-label mb-0">Meta Robots:</label>
                                        <input value="<?= (isset($_INP['meta_robots']) ? $_INP['meta_robots'] : ''); ?>" name="meta_robots" type="text" class="form-control" id="meta_robots">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- og meta data -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="og_data_accordion_head">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#og_data_accordion_body" aria-expanded="true" aria-controls="og_data_accordion_body">
                            Meta OG Data #1
                        </button>
                    </h2>
                    <div id="og_data_accordion_body" class="accordion-collapse collapse show" aria-labelledby="og_data_accordion_head">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="og_title" class="form-label mb-0">OG Title:</label>
                                        <input value="<?= (isset($_INP['og_title']) ? $_INP['og_title'] : ''); ?>" name="og_title" type="text" class="form-control" id="og_title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="og_site_name" class="form-label mb-0">OG Site Name:</label>
                                        <input value="<?= (isset($_INP['og_site_name']) ? $_INP['og_site_name'] : 'DOM DevTools'); ?>" name="og_site_name" type="text" class="form-control" id="og_site_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="og_url" class="form-label mb-0">OG URL:</label>
                                        <input value="<?= (isset($_INP['og_url']) ? $_INP['og_url'] : ''); ?>" name="og_url" type="text" class="form-control" id="og_url">
                                    </div>
                                    <div class="mb-3">
                                        <label for="og_type" class="form-label mb-0">OG Type:</label>
                                        <input value="<?= (isset($_INP['og_type']) ? $_INP['og_type'] : 'website'); ?>" name="og_type" type="text" class="form-control" id="og_type">
                                    </div>
                                    <div class="mb-3">
                                        <label for="og_img" class="form-label mb-0">OG Image URL:</label>
                                        <input value="<?= (isset($_INP['og_img']) ? $_INP['og_img'] : ''); ?>" name="og_img" type="text" class="form-control" id="og_img">
                                    </div>
                                    <div class="mb-3">
                                        <label for="og_desc" class="form-label mb-0">OG Description:</label>
                                        <textarea name="og_desc" class="form-control" id="og_desc" rows="2"><?= (isset($_INP['og_desc']) ? $_INP['og_desc'] : '') ?></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- meta twitter card -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="meta_twitter_card_accordion_head">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#meta_twitter_card_accordion_body" aria-expanded="true" aria-controls="meta_twitter_card_accordion_body">
                            Meta Twitter Card
                        </button>
                    </h2>
                    <div id="meta_twitter_card_accordion_body" class="accordion-collapse collapse show" aria-labelledby="meta_twitter_card_accordion_head">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="twitter_card" class="form-label mb-0">Twitter Card:</label>
                                        <input value="<?= (isset($_INP['twitter_card']) ? $_INP['twitter_card'] : 'summary_large_image'); ?>" name="twitter_card" type="text" class="form-control" id="twitter_card">
                                    </div>
                                    <div class="mb-3">
                                        <label for="twitter_title" class="form-label mb-0">Twitter Title:</label>
                                        <textarea name="twitter_title" class="form-control" id="twitter_title" rows="2"><?= (isset($_INP['twitter_title']) ? $_INP['twitter_title'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="twitter_desc" class="form-label mb-0">Twitter Description:</label>
                                        <textarea name="twitter_desc" class="form-control" id="twitter_desc" rows="2"><?= (isset($_INP['twitter_desc']) ? $_INP['twitter_desc'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="twitter_url" class="form-label mb-0">Twitter URL:</label>
                                        <input value="<?= (isset($_INP['twitter_url']) ? $_INP['twitter_url'] : ''); ?>" name="twitter_url" type="text" class="form-control" id="twitter_url">
                                    </div>
                                    <div class="mb-3">
                                        <label for="twitter_img" class="form-label mb-0">Twitter Image:</label>
                                        <input value="<?= (isset($_INP['twitter_img']) ? $_INP['twitter_img'] : ''); ?>" name="twitter_img" type="text" class="form-control" id="twitter_img">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- seo schema data -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="seo_schema_accordion_head">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#seo_schema_accordion_body" aria-expanded="true" aria-controls="seo_schema_accordion_body">
                            SEO Schema Data #1
                        </button>
                    </h2>
                    <div id="seo_schema_accordion_body" class="accordion-collapse collapse show" aria-labelledby="seo_schema_accordion_head">
                        <div class="accordion-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="schema_name" class="form-label mb-0">Schema Name:</label>
                                        <input value="<?= (isset($_INP['schema_name']) ? $_INP['schema_name'] : ''); ?>" name="schema_name" type="text" class="form-control" id="schema_name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="schema_desc" class="form-label mb-0">Schema Description:</label>
                                        <textarea name="schema_desc" class="form-control" id="schema_desc" rows="2"><?= (isset($_INP['schema_desc']) ? $_INP['schema_desc'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="schema_img" class="form-label mb-0">Schema Image:</label>
                                        <input value="<?= (isset($_INP['schema_img']) ? $_INP['schema_img'] : ''); ?>" name="schema_img" type="text" class="form-control" id="schema_img">
                                    </div>
                                    <div class="mb-3">
                                        <label for="schema_url" class="form-label mb-0">Schema URL:</label>
                                        <input value="<?= (isset($_INP['schema_url']) ? $_INP['schema_url'] : ''); ?>" name="schema_url" type="text" class="form-control" id="schema_url">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Route data -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="route_data_accordion_head">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#route_data_accordion_body" aria-expanded="true" aria-controls="route_data_accordion_body">
                            Route Data #1
                        </button>
                    </h2>
                    <div id="route_data_accordion_body" class="accordion-collapse collapse show" aria-labelledby="route_data_accordion_head">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="route_slug" class="form-label mb-0">Route Slug:</label>
                                        <input value="<?= (isset($_INP['route_slug']) ? $_INP['route_slug'] : ''); ?>" name="route_slug" type="text" class="form-control" id="route_slug">
                                    </div>
                                    <div class="mb-3">
                                        <label for="route_canonical" class="form-label mb-0">Route Canonical:</label>
                                        <input value="<?= (isset($_INP['route_canonical']) ? $_INP['route_canonical'] : ''); ?>" name="route_canonical" type="text" class="form-control" id="route_canonical">
                                    </div>
                                    <div class="mb-3">
                                        <label for="route_file_name" class="form-label mb-0">Route File Name:</label>
                                        <input value="<?= (isset($_INP['route_file_name']) ? $_INP['route_file_name'] : ''); ?>" name="route_file_name" type="text" class="form-control" id="route_file_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="route_author_name" class="form-label mb-0">Route Author Name:</label>
                                        <input value="<?= (isset($_INP['route_author_name']) ? $_INP['route_author_name'] : 'Uxman Sarwar'); ?>" name="route_author_name" type="text" class="form-control" id="route_author_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="route_author_email" class="form-label mb-0">Route Author Email:</label>
                                        <input value="<?= (isset($_INP['route_author_email']) ? $_INP['route_author_email'] : 'uxmansarwar@yahoo.com'); ?>" name="route_author_email" type="text" class="form-control" id="route_author_email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="route_dev_comment" class="form-label mb-0">Route Dev Comment:</label>
                                        <textarea name="route_dev_comment" class="form-control" id="route_dev_comment" rows="2"><?= (isset($_INP['route_dev_comment']) ? $_INP['route_dev_comment'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="route_version" class="form-label mb-0">Route Version:</label>
                                        <input value="<?= (isset($_INP['route_version']) ? $_INP['route_version'] : '0.01'); ?>" name="route_version" type="text" class="form-control" id="route_version">
                                    </div>
                                    <div class="mb-3">
                                        <label for="route_js_version" class="form-label mb-0">Route JS Version:</label>
                                        <input value="<?= (isset($_INP['route_js_version']) ? $_INP['route_js_version'] : '0.01'); ?>" name="route_js_version" type="text" class="form-control" id="route_js_version">
                                    </div>
                                    <div class="mb-3">
                                        <label for="route_css_version" class="form-label mb-0">Route CSS Version:</label>
                                        <input value="<?= (isset($_INP['route_css_version']) ? $_INP['route_css_version'] : '0.01'); ?>" name="route_css_version" type="text" class="form-control" id="route_css_version">
                                    </div>
                                    <div class="mb-3">
                                        <label for="route_child_theme" class="form-label mb-0">Route Child Theme:</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon3">domdevtools.com/themes/</span>
                                            <input value="<?= (isset($_INP['route_child_theme']) ? $_INP['route_child_theme'] : ''); ?>" name="route_child_theme" type="text" class="form-control" id="route_child_theme" aria-describedby="basic-addon3">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="route_content" class="form-label mb-0">Route Content:</label>
                                        <input value="<?= (isset($_INP['route_content']) ? $_INP['route_content'] : 'html'); ?>" name="route_content" type="text" class="form-control" id="route_content">
                                    </div>
                                    <div class="mb-3">
                                        <label for="route_type" class="form-label mb-0">Route Type:</label>
                                        <input value="<?= (isset($_INP['route_type']) ? $_INP['route_type'] : 'tool'); ?>" name="route_type" type="text" class="form-control" id="route_type">
                                    </div>
                                    <div class="mb-3">
                                        <label for="route_for" class="form-label mb-0">Route For:</label>
                                        <input value="<?= (isset($_INP['route_for']) ? $_INP['route_for'] : ''); ?>" name="route_for" type="text" class="form-control" id="route_for">
                                    </div>
                                    <div class="mb-3">
                                        <label for="route_request_method" class="form-label mb-0">Route Request Method:</label>
                                        <input value="<?= (isset($_INP['route_request_method']) ? $_INP['route_request_method'] : 'get'); ?>" name="route_request_method" type="text" class="form-control" id="route_request_method">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Other Descriptions -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="other_desc_accordion_head">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#other_desc_accordion_body" aria-expanded="false" aria-controls="other_desc_accordion_body">
                            Other Descriptions
                        </button>
                    </h2>
                    <div id="other_desc_accordion_body" class="accordion-collapse collapse" aria-labelledby="other_desc_accordion_head">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="desc40" class="form-label mb-0">Description 40 letter:</label>
                                        <textarea name="desc40" class="form-control set_tinymce" id="desc40" rows="2"><?= (isset($_INP['desc40']) ? $_INP['desc40'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="desc160" class="form-label mb-0">Description 160 letter:</label>
                                        <textarea name="desc160" class="form-control set_tinymce" id="desc160" rows="2"><?= (isset($_INP['desc160']) ? $_INP['desc160'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="desc260" class="form-label mb-0">Description 260 letter:</label>
                                        <textarea name="desc260" class="form-control set_tinymce" id="desc260" rows="2"><?= (isset($_INP['desc260']) ? $_INP['desc260'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="desc360" class="form-label mb-0">Description 360 letter:</label>
                                        <textarea name="desc360" class="form-control set_tinymce" id="desc360" rows="2"><?= (isset($_INP['desc360']) ? $_INP['desc360'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="desc400" class="form-label mb-0">Description 400 letter:</label>
                                        <textarea name="desc400" class="form-control set_tinymce" id="desc400" rows="2"><?= (isset($_INP['desc400']) ? $_INP['desc400'] : '') ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Custom Code -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="custom_code_accordion_head">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#custom_code_accordion_body" aria-expanded="false" aria-controls="custom_code_accordion_body">
                            Custom Code
                        </button>
                    </h2>
                    <div id="custom_code_accordion_body" class="accordion-collapse collapse" aria-labelledby="custom_code_accordion_head">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="code_before_html_tag" class="form-label mb-0">Javascript Before HTML Tag:</label>
                                        <textarea name="code_before_html_tag" class="form-control" id="code_before_html_tag" rows="2"><?= (isset($_INP['code_before_html_tag']) ? $_INP['code_before_html_tag'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="code_before_head_close" class="form-label mb-0">JS or HTML Before Head Tag Close:</label>
                                        <textarea name="code_before_head_close" class="form-control" id="code_before_head_close" rows="2"><?= (isset($_INP['code_before_head_close']) ? $_INP['code_before_head_close'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="code_at_end_of_file" class="form-label mb-0">JS or HTML At End Of File:</label>
                                        <textarea name="code_at_end_of_file" class="form-control" id="code_at_end_of_file" rows="2"><?= (isset($_INP['code_at_end_of_file']) ? $_INP['code_at_end_of_file'] : '') ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Example Routes -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="example_route_accordion_head">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#example_route_accordion_body" aria-expanded="false" aria-controls="example_route_accordion_body">
                            Example Routes
                        </button>
                    </h2>
                    <div id="example_route_accordion_body" class="accordion-collapse collapse" aria-labelledby="example_route_accordion_head">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="example_routes" class="form-label mb-0">Example Routes:</label>
                                        <textarea name="example_routes" class="form-control" id="example_routes" rows="2"><?= (isset($_INP['example_routes']) ? $_INP['example_routes'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="example_ui" class="form-label mb-0">Example UIs:</label>
                                        <textarea name="example_ui" class="form-control" id="example_ui" rows="2"><?= (isset($_INP['example_ui']) ? $_INP['example_ui'] : '') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="example_text_content" class="form-label mb-0">Example Text Content:</label>
                                        <textarea name="example_text_content" class="form-control" id="example_text_content" rows="2"><?= (isset($_INP['example_text_content']) ? $_INP['example_text_content'] : '') ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Target Factors -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="target_factor_accordion_head">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#target_factor_accordion_body" aria-expanded="false" aria-controls="target_factor_accordion_body">
                            Target Factors
                        </button>
                    </h2>
                    <div id="target_factor_accordion_body" class="accordion-collapse collapse" aria-labelledby="target_factor_accordion_head">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="targeted_audience" class="form-label mb-0">Targeted Audience:</label>
                                        <input value="<?= (isset($_INP['targeted_audience']) ? $_INP['targeted_audience'] : ''); ?>" name="targeted_audience" type="text" class="form-control" id="targeted_audience">
                                    </div>
                                    <div class="mb-3">
                                        <label for="targeted_country" class="form-label mb-0">Targeted Country:</label>
                                        <input value="<?= (isset($_INP['targeted_country']) ? $_INP['targeted_country'] : ''); ?>" name="targeted_country" type="text" class="form-control" id="targeted_country">
                                    </div>
                                    <div class="mb-3">
                                        <label for="targeted_keyword" class="form-label mb-0">Targeted Keyword:</label>
                                        <input value="<?= (isset($_INP['targeted_keyword']) ? $_INP['targeted_keyword'] : ''); ?>" name="targeted_keyword" type="text" class="form-control" id="targeted_keyword">
                                    </div>
                                    <div class="mb-3">
                                        <label for="targeted_sub_keyword" class="form-label mb-0">Targeted Sub-Keyword:</label>
                                        <input value="<?= (isset($_INP['targeted_sub_keyword']) ? $_INP['targeted_sub_keyword'] : ''); ?>" name="targeted_sub_keyword" type="text" class="form-control" id="targeted_sub_keyword">
                                    </div>
                                    <div class="mb-3">
                                        <label for="targeted_seed_keyword" class="form-label mb-0">Target Seed-Keyword:</label>
                                        <input value="<?= (isset($_INP['targeted_seed_keyword']) ? $_INP['targeted_seed_keyword'] : ''); ?>" name="targeted_seed_keyword" type="text" class="form-control" id="targeted_seed_keyword">
                                    </div>
                                    <div class="mb-3">
                                        <label for="targeted_longtail_keyword" class="form-label mb-0">Target Longtail Keyword:</label>
                                        <input value="<?= (isset($_INP['targeted_longtail_keyword']) ? $_INP['targeted_longtail_keyword'] : ''); ?>" name="targeted_longtail_keyword" type="text" class="form-control" id="targeted_longtail_keyword">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Set Flags -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="set_flags_accordion_head">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#set_flags_accordion_body" aria-expanded="true" aria-controls="set_flags_accordion_body">
                            Set Flags
                        </button>
                    </h2>
                    <div id="set_flags_accordion_body" class="accordion-collapse collapse show" aria-labelledby="set_flags_accordion_head">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Services</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $n = 0; ?>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['is_active']) && $_INP['is_active'] > 0  ? 'checked' : ''); ?> name="is_active" class="form-check-input" type="checkbox" value="1" id="is_active">
                                                        <label class="form-check-label" for="is_active">
                                                            Is Active Route
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['use_meta_data']) && $_INP['use_meta_data'] > 0  ? 'checked' : ''); ?> name="use_meta_data" class="form-check-input" type="checkbox" value="1" id="use_meta_data">
                                                        <label class="form-check-label" for="use_meta_data">
                                                            Use Meta Data
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['use_og_meta']) && $_INP['use_og_meta'] > 0  ? 'checked' : ''); ?> name="use_og_meta" class="form-check-input" type="checkbox" value="1" id="use_og_meta">
                                                        <label class="form-check-label" for="use_og_meta">
                                                            Use OG Meta Data
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['use_seo_schema']) && $_INP['use_seo_schema'] > 0  ? 'checked' : ''); ?> name="use_seo_schema" class="form-check-input" type="checkbox" value="1" id="use_seo_schema">
                                                        <label class="form-check-label" for="use_seo_schema">
                                                            Use SEO Schema
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['use_twitter_card']) && $_INP['use_twitter_card'] > 0  ? 'checked' : ''); ?> name="use_twitter_card" class="form-check-input" type="checkbox" value="1" id="use_twitter_card">
                                                        <label class="form-check-label" for="use_twitter_card">
                                                            Use Twitter Card
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['validate_csrf']) && $_INP['validate_csrf'] > 0  ? 'checked' : ''); ?> name="validate_csrf" class="form-check-input" type="checkbox" value="1" id="validate_csrf">
                                                        <label class="form-check-label" for="validate_csrf">
                                                            Validate CSRF
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['validate_jwt']) && $_INP['validate_jwt'] > 0  ? 'checked' : ''); ?> name="validate_jwt" class="form-check-input" type="checkbox" value="1" id="validate_jwt">
                                                        <label class="form-check-label" for="validate_jwt">
                                                            Validate JWT
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['validate_google_v2']) && $_INP['validate_google_v2'] > 0  ? 'checked' : ''); ?> name="validate_google_v2" class="form-check-input" type="checkbox" value="1" id="validate_google_v2">
                                                        <label class="form-check-label" for="validate_google_v2">
                                                            Validate Google V2 Captcha
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['validate_google_v3']) && $_INP['validate_google_v3'] > 0  ? 'checked' : ''); ?> name="validate_google_v3" class="form-check-input" type="checkbox" value="1" id="validate_google_v3">
                                                        <label class="form-check-label" for="validate_google_v3">
                                                            Validate Google V3 Captcha
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['validate_user_login']) && $_INP['validate_user_login'] > 0  ? 'checked' : ''); ?> name="validate_user_login" class="form-check-input" type="checkbox" value="1" id="validate_user_login">
                                                        <label class="form-check-label" for="validate_user_login">
                                                            Validate User Login
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['hash_js_ids']) && $_INP['hash_js_ids'] > 0  ? 'checked' : ''); ?> name="hash_js_ids" class="form-check-input" type="checkbox" value="1" id="hash_js_ids">
                                                        <label class="form-check-label" for="hash_js_ids">
                                                            Hash JS IDs
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['hash_js_classes']) && $_INP['hash_js_classes'] > 0  ? 'checked' : ''); ?> name="hash_js_classes" class="form-check-input" type="checkbox" value="1" id="hash_js_classes">
                                                        <label class="form-check-label" for="hash_js_classes">
                                                            Hash JS Classes
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['hash_css_ids']) && $_INP['hash_css_ids'] > 0  ? 'checked' : ''); ?> name="hash_css_ids" class="form-check-input" type="checkbox" value="1" id="hash_css_ids">
                                                        <label class="form-check-label" for="hash_css_ids">
                                                            Hash CSS IDs
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['hash_css_classes']) && $_INP['hash_css_classes'] > 0  ? 'checked' : ''); ?> name="hash_css_classes" class="form-check-input" type="checkbox" value="1" id="hash_css_classes">
                                                        <label class="form-check-label" for="hash_css_classes">
                                                            Hash CSS Classes
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['use_dynamic_html']) && $_INP['use_dynamic_html'] > 0  ? 'checked' : ''); ?> name="use_dynamic_html" class="form-check-input" type="checkbox" value="1" id="use_dynamic_html">
                                                        <label class="form-check-label" for="use_dynamic_html">
                                                            Use Dynamic HTML
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['load_csrf']) && $_INP['load_csrf'] > 0  ? 'checked' : ''); ?> name="load_csrf" class="form-check-input" type="checkbox" value="1" id="load_csrf">
                                                        <label class="form-check-label" for="load_csrf">
                                                            Load CSRF
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['load_jwt']) && $_INP['load_jwt'] > 0  ? 'checked' : ''); ?> name="load_jwt" class="form-check-input" type="checkbox" value="1" id="load_jwt">
                                                        <label class="form-check-label" for="load_jwt">
                                                            Load JWT
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['load_google_v2']) && $_INP['load_google_v2'] > 0  ? 'checked' : ''); ?> name="load_google_v2" class="form-check-input" type="checkbox" value="1" id="load_google_v2">
                                                        <label class="form-check-label" for="load_google_v2">
                                                            Load Google V2 Captcha
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?= ++$n; ?></th>
                                                <td>
                                                    <div class="form-check">
                                                        <input <?= (isset($_INP['load_google_v3']) && $_INP['load_google_v3'] > 0  ? 'checked' : ''); ?> name="load_google_v3" class="form-check-input" type="checkbox" value="1" id="load_google_v3">
                                                        <label class="form-check-label" for="load_google_v3">
                                                            Load Google V3 Captcha
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button name="insert_now" class="btn btn-success d-block w-100 mb-5" type="submit">Insert Now</button>
        </form>

    </div>
    <div class="col-2">

    </div>

</div>








<?php
require_once 'themes/footer.php';
