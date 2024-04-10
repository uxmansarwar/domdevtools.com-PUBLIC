<div class="row">
    <div class="col-12 col-sm-12 col-md-8">

        <label for="how_many">How Many Emails:</label>
        <form id="tool_form">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="input-group mb-3">

                        <input id="how_many" type="number" class="form-control" placeholder="Number of Fake Email" aria-label="Number of Fake Email">

                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <select id="email_separator" class="form-select">
                        <option value="line">New Line</option>
                        <option value="tab">Tab (4 Spaces)</option>
                        <option value="comma">(,) Comma</option>
                    </select>
                </div>
                <div class="col-12">
                    <button class="btn site-color" type="submit" id="action_btn">Generator Emails</button>
                </div>
            </div>

        </form>
    </div>

    <div id="result_block" class="col-12 col-sm-12 col-md-8 d-non">
        <div class="row">
            <div class="col-12 mt-3 mt-md-0">
                <div class="">
                    <button id="copy_result" class="btn p-0 float-end" data-bs-toggle="collapse" data-bs-target="#d_copy" aria-expanded="false" aria-controls="collapseDownload">
                        Copy Results<i class="pointer float-end icon icon-copy icon-black icon-lg mx-2 mb-0"></i>
                    </button>

                    <button id="save_result_in_file" class="btn collapsed p-0 float-end" data-bs-toggle="collapse" data-bs-target="#d_download" aria-expanded="false" aria-controls="collapseDownload">Download Result<i class="pointer float-end icon icon-download-black icon-black icon-lg mx-2 mb-0"></i></button>
                </div>


            </div>
        </div>
        <div class="row collapse" id="d_download">
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="download_txt" class="btn site-color my-1 records d-block" data-type="d-md" href="javascript:void(0);" role="button"><i class="pointer icon icon-download-black icon-black icon-lg mx-2 mb-0"></i>Text</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="download_md" class="btn site-color my-1 records d-block" data-type="c-md" href="javascript:void(0);" role="button"><i class="pointer icon icon-download-black icon-black icon-lg mx-2 mb-0"></i>Markdown</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="download_json" class="btn site-color my-1 records d-block" data-type="d-txt" href="javascript:void(0);" role="button"><i class="pointer icon icon-download-black icon-black icon-lg mx-2 mb-0"></i>JSON</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="download_xml" class="btn site-color my-1 records d-block" data-type="c-txt" href="javascript:void(0);" role="button"><i class="pointer icon icon-download-black icon-black icon-lg mx-2 mb-0"></i>XML</a>
            </div>
        </div>
        <div class="row collapse" id="d_copy">
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="copy_txt" class="btn site-color my-1 records d-block" data-type="d-md" href="javascript:void(0);" role="button"><i class="pointer icon icon-copy icon-black icon-lg mx-2 mb-0"></i>Text</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="copy_md" class="btn site-color my-1 records d-block" data-type="c-md" href="javascript:void(0);" role="button"><i class="pointer icon icon-copy icon-black icon-lg mx-2 mb-0"></i>Markdown</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="copy_json" class="btn site-color my-1 records d-block" data-type="d-txt" href="javascript:void(0);" role="button"><i class="pointer icon icon-copy icon-black icon-lg mx-2 mb-0"></i>JSON</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="copy_xml" class="btn site-color my-1 records d-block" data-type="c-txt" href="javascript:void(0);" role="button"><i class="pointer icon icon-copy icon-black icon-lg mx-2 mb-0"></i>XML</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="position-relative">
                    <textarea id="result_text" class="form-control text_border_etc_readonly" style="height: 300px; overflow-y: scroll;" readonly>
                    </textarea>
                </div>
            </div>
        </div>
    </div>
</div>