<div class="row">
    <div class="col-12 col-md-8">
        <div class="row">
            <div class="col-12">
                <label for="url_inp">Insert URL</label>
                <div class="input-group mb-3">
                    <input id="url_inp" type="text" class="form-control" placeholder="Insert URL here" value="">
                </div>
            </div>
            <div class="col-12">
                <label for="_text">Insert Text and #Tags</label>
                <div class="input-group mb-3">
                    <textarea id="_text" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-12">
                <button id="action_btn" class="btn btn-info w-100 text-white mt-2 mb-3">Generate Link<i class="bi bi-twitter"></i></button>
            </div>
        </div>
        <div id="result_block" class="row d-none">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-sm-6 mt-2 mb-3">
                        <button id="open_link" class="btn text-white w-100" style="background-color: <?= $SITE_COLOR ?>;">
                            Share On All <i class="icon icon-open-in-new-tab icon-lg"></i>
                        </button>
                    </div>
                    <div class="col-12 col-sm-6 mt-2 mb-3">
                        <button id="download_txt" class="btn btn-secondary text-white w-100">Download In Text File</button>
                    </div>
                </div>
            </div>
            <div id="result_link" class="col-12 text-center">
                <div class="input-group mb-3" data-name="facebook">
                    <span class="pointer input-group-text" id="inputGroup-sizing-default">
                        <i class="icon icon-facebook icon-2x"></i>
                    </span>
                    <input id="facebook" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <span class="pointer input-group-text">
                        <i class="icon icon-open-in-new-tab icon-2x open_url_new_tab"></i>
                    </span>
                    <span class="pointer input-group-text">
                        <i class="icon icon-copy icon-2x copy_url"></i>
                    </span>
                    <span class="input-group-text pointer copy_html">
                        <strong>
                            HTML
                        </strong>
                    </span>
                </div>
                <div class="input-group mb-3" data-name="twitter">
                    <span class="pointer input-group-text" id="inputGroup-sizing-default">
                        <i class="icon icon-twitter icon-2x"></i>
                    </span>
                    <input id="twitter" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <span class="pointer input-group-text">
                        <i class="icon icon-open-in-new-tab icon-2x open_url_new_tab"></i>
                    </span>
                    <span class="pointer input-group-text">
                        <i class="icon icon-copy icon-2x copy_url"></i>
                    </span>
                    <span class="input-group-text pointer copy_html">
                        <strong>
                            HTML
                        </strong>
                    </span>
                </div>
                <div class="input-group mb-3" data-name="linkedin">
                    <span class="pointer input-group-text" id="inputGroup-sizing-default">
                        <i class="icon icon-linkedin icon-2x"></i>
                    </span>
                    <input id="linkedin" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <span class="pointer input-group-text">
                        <i class="icon icon-open-in-new-tab icon-2x open_url_new_tab"></i>
                    </span>
                    <span class="pointer input-group-text">
                        <i class="icon icon-copy icon-2x copy_url"></i>
                    </span>
                    <span class="input-group-text pointer copy_html">
                        <strong>
                            HTML
                        </strong>
                    </span>
                </div>
                <div class="input-group mb-3" data-name="pinterest">
                    <span class="pointer input-group-text" id="inputGroup-sizing-default">
                        <i class="icon icon-pinterest icon-2x"></i>
                    </span>
                    <input id="pinterest" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <span class="pointer input-group-text">
                        <i class="icon icon-open-in-new-tab icon-2x open_url_new_tab"></i>
                    </span>
                    <span class="pointer input-group-text">
                        <i class="icon icon-copy icon-2x copy_url"></i>
                    </span>
                    <span class="input-group-text pointer copy_html">
                        <strong>
                            HTML
                        </strong>
                    </span>
                </div>
                <div class="input-group mb-3" data-name="skype">
                    <span class="pointer input-group-text" id="inputGroup-sizing-default">
                        <i class="icon icon-skype icon-2x"></i>
                    </span>
                    <input id="skype" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <span class="pointer input-group-text">
                        <i class="icon icon-open-in-new-tab icon-2x open_url_new_tab"></i>
                    </span>
                    <span class="pointer input-group-text">
                        <i class="icon icon-copy icon-2x copy_url"></i>
                    </span>
                    <span class="input-group-text pointer copy_html">
                        <strong>
                            HTML
                        </strong>
                    </span>
                </div>
                <div class="input-group mb-3" data-name="yahoo">
                    <span class="pointer input-group-text" id="inputGroup-sizing-default">
                        <i class="icon icon-yahoo icon-2x"></i>
                    </span>
                    <input id="yahoo" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <span class="pointer input-group-text">
                        <i class="icon icon-open-in-new-tab icon-2x open_url_new_tab"></i>
                    </span>
                    <span class="pointer input-group-text">
                        <i class="icon icon-copy icon-2x copy_url"></i>
                    </span>
                    <span class="input-group-text pointer copy_html">
                        <strong>
                            HTML
                        </strong>
                    </span>
                </div>
                <div class="input-group mb-3" data-name="reddit">
                    <span class="pointer input-group-text" id="inputGroup-sizing-default">
                        <i class="icon icon-reddit icon-2x"></i>
                    </span>
                    <input id="reddit" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <span class="pointer input-group-text">
                        <i class="icon icon-open-in-new-tab icon-2x open_url_new_tab"></i>
                    </span>
                    <span class="pointer input-group-text">
                        <i class="icon icon-copy icon-2x copy_url"></i>
                    </span>
                    <span class="input-group-text pointer copy_html">
                        <strong>
                            HTML
                        </strong>
                    </span>
                </div>

                <div class="input-group mb-3" data-name="whatsapp">
                    <span class="pointer input-group-text" id="inputGroup-sizing-default">
                        <i class="icon icon-whatsapp icon-2x"></i>
                    </span>
                    <input id="whatsapp" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <span class="pointer input-group-text">
                        <i class="icon icon-open-in-new-tab icon-2x open_url_new_tab"></i>
                    </span>
                    <span class="pointer input-group-text">
                        <i class="icon icon-copy icon-2x copy_url"></i>
                    </span>
                    <span class="input-group-text pointer copy_html">
                        <strong>
                            HTML
                        </strong>
                    </span>
                </div>
                <div class="input-group mb-3" data-name="gmail">
                    <span class="pointer input-group-text" id="inputGroup-sizing-default">
                        <i class="icon icon-gmail icon-2x"></i>
                    </span>
                    <input id="gmail" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <span class="pointer input-group-text">
                        <i class="icon icon-open-in-new-tab icon-2x open_url_new_tab"></i>
                    </span>
                    <span class="pointer input-group-text">
                        <i class="icon icon-copy icon-2x copy_url"></i>
                    </span>
                    <span class="input-group-text pointer copy_html">
                        <strong>
                            HTML
                        </strong>
                    </span>
                </div>
                <div class="input-group mb-3" data-name="mix">
                    <span class="pointer input-group-text" id="inputGroup-sizing-default">
                        <strong style="width: 80px;">MIX</strong>
                    </span>
                    <input id="mix" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <span class="pointer input-group-text">
                        <i class="icon icon-open-in-new-tab icon-2x open_url_new_tab"></i>
                    </span>
                    <span class="pointer input-group-text">
                        <i class="icon icon-copy icon-2x copy_url"></i>
                    </span>
                    <span class="input-group-text pointer copy_html">
                        <strong>
                            HTML
                        </strong>
                    </span>
                </div>
                <div class="input-group mb-3" data-name="ok">
                    <span class="pointer input-group-text" id="inputGroup-sizing-default">
                        <strong class="" style="width: 80px;">OK</strong>
                    </span>
                    <input id="ok" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <span class="pointer input-group-text">
                        <i class="icon icon-open-in-new-tab icon-2x open_url_new_tab"></i>
                    </span>
                    <span class="pointer input-group-text">
                        <i class="icon icon-copy icon-2x copy_url"></i>
                    </span>
                    <span class="input-group-text pointer copy_html">
                        <strong>
                            HTML
                        </strong>
                    </span>
                </div>
                <div class="input-group mb-3" data-name="blogger">
                    <span class="pointer input-group-text" id="inputGroup-sizing-default">
                        <strong style="width: 80px;">BLOGGER</strong>
                    </span>
                    <input id="blogger" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <span class="pointer input-group-text">
                        <i class="icon icon-open-in-new-tab icon-2x open_url_new_tab"></i>
                    </span>
                    <span class="pointer input-group-text">
                        <i class="icon icon-copy icon-2x copy_url"></i>
                    </span>
                    <span class="input-group-text pointer copy_html">
                        <strong>
                            HTML
                        </strong>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>