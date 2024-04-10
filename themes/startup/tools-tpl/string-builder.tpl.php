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
                    <label class="input_text_label" for="input_text ">Insert Text</label>
                    <textarea id="input_text" rows="8" class="form-control text_border_etc"></textarea>
                    <p id="letter_count" class="float-end">Char: 0</p>
                </div>
            </div>
        </div>

    </div>
    <div class="col-12 text-center mt-3 mb-md-1 mb-3">

        <label for="add_new_line">Add New Line</label>
        <input id="add_new_line" class="me-3 me-md-4" type="checkbox">

        <label for="padded_space">Extra Padded Space</label>
        <input id="padded_space" class="me-3 me-md-4" type="checkbox">

        <label for="line_separator">Separator</label>
        <input id="line_separator" class="" type="input" value="+" style="max-width: 50px;">


    </div>
    <div class="col-12 text-center mt-3 mb-md-1 mb-3">
        <label for="auto" style="vertical-align: middle;">Auto</label>
        <input id="auto" class="" type="checkbox" style="vertical-align: middle;" checked>
        <button id="build_now" type="button" class="btn btn-info rounded-0 mt-1">
            Build Now
        </button>
        <button id="upload_file" type="button" class="btn btn-header rounded-0 mt-1">
            <i class="pointer icon icon-upload icon-white mb-1"></i> Upload File
        </button>
        <input type="file" id="input_file" hidden>

    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-12">

                <label class="float-left" for="result_text" style="vertical-align: -webkit-baseline-middle;">Result</label>
                <button id="copy_result" class="btn p-0 float-end">
                    Copy <i class="pointer float-end icon icon-copy icon-black icon-lg mx-2 mb-0"></i>
                </button>

                <button id="download_result" class="btn collapsed p-0 float-end">
                    Download <i class="pointer float-end icon icon-download-black icon-black icon-lg mx-2 mb-0"></i>
                </button>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="position-relative">

                    <textarea id="result_text" rows="8" class="form-control text_border_etc_readonly" readonly></textarea>
                </div>
            </div>
        </div>
    </div>
</div>