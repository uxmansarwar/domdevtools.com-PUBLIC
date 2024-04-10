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
                    <label class="input_text_label" for="input_text ">Insert URLs</label>
                    <textarea id="input_text" rows="8" class="form-control text_border_etc" placeholder="Example <?= SITE_URL ?>"></textarea>
                </div>
            </div>
        </div>

    </div>
    <div class="col-12">

        <div id="action_btn" class="site-color mt-2 btn rounded-0 pointer">
            Open All URL in New Tab
        </div>



        <div id="upload_file" class="bg-info text-white mt-2 btn rounded-0 pointer">
            <i class="pointer icon icon-upload icon-white mb-1"></i> Upload URL File
        </div>
        <input type="file" id="input_file" hidden>

    </div>

</div>