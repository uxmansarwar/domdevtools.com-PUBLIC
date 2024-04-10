<li id="result_li" class="list-group-item m-0 p-3 shadow-lg my-2 bg-body rounded-3 d-none" style="border-radius: 15px !important;">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12">

                    <p class="float-start h3">Generated Content</p>

                    <button class="btn px-3 py-2 float-end collapsed border shadow-sm mx-2" data-bs-toggle="collapse" data-bs-target="#d_copy" aria-expanded="false" aria-controls="collapseDownload">
                        Copy Results<i class="pointer float-end icon icon-copy icon-black icon-lg mx-2 mb-0"></i>
                    </button>
                    <button class="btn px-3 py-2 float-end collapsed border shadow-sm mx-2" data-bs-toggle="collapse" data-bs-target="#d_download" aria-expanded="false" aria-controls="collapseDownload">Download Result<i class="pointer float-end icon icon-download-black icon-black icon-lg mx-2 mb-0"></i></button>

                </div>
                <div class="col-12">
                    <div class="row collapse" id="d_download">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="downloadTxtOnclick('result_block')" id="download_txt" class="btn site-color my-1 records d-block" data-type="d-md" href="javascript:void(0);" role="button">Download In Text</a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="downloadMDOnclick('result_block')" id="download_md" class="btn site-color my-1 records d-block" data-type="c-md" href="javascript:void(0);" role="button">Download In Markdown</a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="downloadJSONOnclick('result_block')" id="download_json" class="btn site-color my-1 records d-block" data-type="d-txt" href="javascript:void(0);" role="button">Download In JSON</a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="downloadXMLOnclick('result_block')" id="download_xml" class="btn site-color my-1 records d-block" data-type="c-txt" href="javascript:void(0);" role="button">Download In XML</a>
                        </div>
                    </div>
                    <div class="row collapse" id="d_copy">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="copyTxtOnclick('result_block')" id="copy_txt" class="btn site-color my-1 records d-block" data-type="d-md" href="javascript:void(0);" role="button">Copy As Text</a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="copyMDOnclick('result_block')" id="copy_md" class="btn site-color my-1 records d-block" data-type="c-md" href="javascript:void(0);" role="button">Copy As Markdown</a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="copyJSONOnclick('result_block')" id="copy_json" class="btn site-color my-1 records d-block" data-type="d-txt" href="javascript:void(0);" role="button">Copy As JSON</a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="copyXMLOnclick('result_block')" id="copy_xml" class="btn site-color my-1 records d-block" data-type="c-txt" href="javascript:void(0);" role="button">Copy As XML</a>
                        </div>
                    </div>
                </div>
                <hr class="text-info my-2">
            </div>
            <div class="row">
                <div id="result_block" class="col-12" style="font-size: 16px;">

                </div>
            </div>
        </div>
    </div>
</li>


<li id="selected_li" class="list-group-item m-0 p-3 shadow-lg my-2 bg-body rounded-3 d-none" style="border-radius: 15px !important;">

    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12">

                    <p id="selected_heading" class="float-start h3">selected content</p>

                    <button id="copy_selected_btn" class="btn px-3 py-2 float-end collapsed border shadow-sm mx-2" data-bs-toggle="collapse" data-bs-target="#selected_d_copy" aria-expanded="false" aria-controls="collapseDownload">
                        Copy Selected<i class="pointer float-end icon icon-copy icon-black icon-lg mx-2 mb-0"></i>
                    </button>
                    <button id="save_selected_in_file" class="btn px-3 py-2 float-end collapsed border shadow-sm mx-2" data-bs-toggle="collapse" data-bs-target="#selected_d_download" aria-expanded="false" aria-controls="collapseDownload">Download Selected<i class="pointer float-end icon icon-download-black icon-black icon-lg mx-2 mb-0"></i></button>

                </div>
                <div class="col-12">
                    <div class="row collapse" id="selected_d_download">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="downloadTxtOnclick('selected_block')" id="selected_download_txt" class="btn site-color my-1 records d-block" data-type="d-md" href="javascript:void(0);" role="button">Download In Text</a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="downloadMDOnclick('selected_block')" id="selected_download_md" class="btn site-color my-1 records d-block" data-type="c-md" href="javascript:void(0);" role="button">Download In Markdown</a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="downloadJSONOnclick('selected_block')" id="selected_download_json" class="btn site-color my-1 records d-block" data-type="d-txt" href="javascript:void(0);" role="button">Download In JSON</a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="downloadXMLOnclick('selected_block')" id="selected_download_xml" class="btn site-color my-1 records d-block" data-type="c-txt" href="javascript:void(0);" role="button">Download In XML</a>
                        </div>
                    </div>
                    <div class="row collapse" id="selected_d_copy">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="copyTxtOnclick('selected_block')" id="selected_copy_txt" class="btn site-color my-1 records d-block" data-type="d-md" href="javascript:void(0);" role="button">Copy As Text</a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="copyMDOnclick('selected_block')" id="selected_copy_md" class="btn site-color my-1 records d-block" data-type="c-md" href="javascript:void(0);" role="button">Copy As Markdown</a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="copyJSONOnclick('selected_block')" id="selected_copy_json" class="btn site-color my-1 records d-block" data-type="d-txt" href="javascript:void(0);" role="button">Copy As JSON</a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a onclick="copyXMLOnclick('selected_block')" id="selected_copy_xml" class="btn site-color my-1 records d-block" data-type="c-txt" href="javascript:void(0);" role="button">Copy As XML</a>
                        </div>
                    </div>
                </div>
                <hr class="text-info my-2">
            </div>
            <div class="row">
                <div id="selected_block" class="col-12" style="font-size: 16px;">

                </div>
            </div>
        </div>
    </div>
</li>