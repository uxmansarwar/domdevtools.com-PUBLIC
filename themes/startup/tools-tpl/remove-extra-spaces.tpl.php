<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12">


                <button title="Load Sample" id="load_sample" class="btn p-0 float-end">
                    <i class="pointer mx-2 mb-0" style="vertical-align: baseline; font-size:16px;">Sample</i>
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
                    <p id="letter_count" class="float-end mb-0">Char: 0</p>
                </div>
            </div>
        </div>

    </div>
    <div class="col-12">

        <div id="action_btn" class="site-color mt-2 btn rounded-0 pointer">
            Remove Now
        </div>

        <div class="bg-info text-white mt-2 btn rounded-0 pointer">
            <input class="" id="remove_all_line_breaks" type="checkbox">
            <label class="pointer" for="remove_all_line_breaks">Remove All Line Breaks</label>
        </div>

        <div class="bg-info text-white mt-2 btn rounded-0 pointer">
            <input class="" id="remove_empty_line_breaks" type="checkbox" checked>
            <label class="pointer" for="remove_empty_line_breaks">Remove Empty Line Breaks</label>
        </div>

        <div class=" bg-info text-white mt-2 btn rounded-0 pointer">
            <input class="" id="auto_working" type="checkbox" style="vertical-align: middle;" checked>
            <label class="pointer" for="auto_working" style="vertical-align: middle;">Auto</label>
        </div>

        <div id="upload_file" class="bg-info text-white mt-2 btn rounded-0 pointer">
            <i class="pointer icon icon-upload icon-white mb-1"></i> Upload File
        </div>
        <input type="file" id="input_file" hidden>

    </div>
    <div class="col-12">
        <hr>
        <div class="row">
            <div class="col-12">

                <label class="float-left" for="result_text" style="vertical-align: -webkit-baseline-middle;">Result</label>

                <button id="copy_result" class="btn p-0 float-end">
                    <i class="pointer float-end icon icon-copy icon-black icon-lg mx-2 mb-0"></i>
                </button>

                <button id="save_file" class="btn collapsed p-0 float-end">
                    <i class="pointer float-end icon icon-download-black icon-black icon-lg mx-2 mb-0"></i>
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