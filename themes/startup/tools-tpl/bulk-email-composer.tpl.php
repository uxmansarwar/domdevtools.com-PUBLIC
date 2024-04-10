<div class="row">
    <div class="col-12 col-md-8">
        <div class="row">
            <div class="col-12 col-sm-6">
                <label for="mail_service">Select Email Service</label>
                <div class="input-group mb-3">
                    <select class="form-control" id="mail_service">
                        <option value="gmail">Gmail.com</option>
                        <option value="yahoo" selected>Yahoo.com</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <label for="delay_time">Delay Time(s)</label>
                <div class="input-group mb-3">

                    <input id="delay_time" type="number" class="form-control" placeholder="Email Subject Will be Here" value="2">
                </div>
            </div>
            <div class="col-12">
                <label for="mail_to_addresses">Insert Mail To Addresses</label>
                <div class="input-group mb-3">
                    <textarea id="mail_to_addresses" rows="5" class="form-control" placeholder="admin@domdevtools.com<?= PHP_EOL ?>info@domdevtools.com"></textarea>
                </div>
            </div>
            <div class="col-12">
                <label for="mail_subject">Subject</label>
                <div class="input-group mb-3">
                    <input id="mail_subject" type="text" class="form-control" placeholder="Email Subject Will be Here" value="">
                </div>
            </div>
            <div class="col-12">
                <label for="mail_body">Message/Body</label>
                <div class="input-group mb-3">
                    <textarea id="mail_body" rows="5" class="form-control" placeholder="You Email Text Message/Body Here"></textarea>
                </div>
            </div>
            <div class="col-12">
                <button id="action_btn" class="btn btn-info w-100 text-white mt-2 mb-3">Generate Composing Link<i class="bi bi-twitter"></i></button>
            </div>
        </div>
        <div id="result_block" class="row d-none">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-sm-6 mt-2 mb-3">
                        <button id="compose_now" class="btn text-white w-100" style="background-color: <?= $SITE_COLOR ?>;">
                            Compose Now <i class="icon icon-open-in-new-tab icon-lg"></i>
                        </button>
                    </div>
                    <div class="col-12 col-sm-6 mt-2 mb-3">
                        <button id="download_txt" class="btn btn-secondary text-white w-100">Download In Text File</button>
                    </div>
                </div>
            </div>
            <div id="result_link" class="col-12 text-center">
                <textarea class="form-control" id="composed_links" rows="10" readonly></textarea>
            </div>
        </div>
    </div>
</div>