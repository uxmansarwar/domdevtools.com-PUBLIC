<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12">


                <button title="Load Sample" id="load_sample" class="btn p-0 float-end">
                    <i class="pointer   mx-2 mb-0" style="vertical-align: baseline; font-size:16px;">Sample</i>
                </button>

                <button title="Refresh Page" id="refresh_tool" class="btn p-0 float-end">
                    <i id="" class="pointer icon icon-refresh icon-black icon-lg  mx-2 mb-0"></i>
                </button>

                <button title="Copy Input Text" id="copy_input_text" class="btn p-0 float-end">
                    <i id="" class="pointer icon icon-copy icon-black icon-lg  mx-2 mb-0"></i>
                </button>

                <button title="Delete Input" id="delete_input" class="btn p-0 float-end">
                    <i id="" class="pointer icon icon-recycle-bin icon-black icon-lg  mx-2 mb-0"></i>
                </button>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="position-relative">
                    <label class="input_text_label" for="input_text ">Insert URLs</label>
                    <textarea id="input_text" rows="8" class="form-control text_border_etc" placeholder="Insert Your Keywords here"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">

        <div id="action_btn" class="site-color mt-2 btn rounded-0 pointer">
            Generator Google Search Links
        </div>



        <div id="upload_file" class="bg-info text-white mt-2 btn rounded-0 pointer">
            <i class="pointer icon icon-upload icon-white mb-1"></i> Upload Keywords File
        </div>
        <input type="file" id="input_file" hidden>

    </div>
    <div class="col-12">
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
                <a id="download_txt" class="btn site-color my-1 records d-block" data-type="d-md" href="javascript:void(0);" role="button">Download In Text</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="download_md" class="btn site-color my-1 records d-block" data-type="c-md" href="javascript:void(0);" role="button">Download In Markdown</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="download_json" class="btn site-color my-1 records d-block" data-type="d-txt" href="javascript:void(0);" role="button">Download In JSON</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="download_xml" class="btn site-color my-1 records d-block" data-type="c-txt" href="javascript:void(0);" role="button">Download In XML</a>
            </div>
        </div>
        <div class="row collapse" id="d_copy">
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="copy_txt" class="btn site-color my-1 records d-block" data-type="d-md" href="javascript:void(0);" role="button">Copy As Text</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="copy_md" class="btn site-color my-1 records d-block" data-type="c-md" href="javascript:void(0);" role="button">Copy As Markdown</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="copy_json" class="btn site-color my-1 records d-block" data-type="d-txt" href="javascript:void(0);" role="button">Copy As JSON</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a id="copy_xml" class="btn site-color my-1 records d-block" data-type="c-txt" href="javascript:void(0);" role="button">Copy As XML</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="position-relative">
                    <div id="result_text" class="form-control text_border_etc_readonly" style="height: 300px; overflow-y: scroll;" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>