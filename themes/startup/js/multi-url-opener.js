
_$.onDOMReady(_ => {

    _c = _$.elemSelector(['#load_sample', '#copy_input_text', '#delete_input', '#input_text', '#action_btn', '#upload_file', '#input_file']);


    _$.multiURLOpenerTool = _ev => {

        _c.input_textV = _c.input_text.value.trim().replaceAll(',', '\n');


        if ((_ev?.target?.id == 'action_btn' || _ev === true)) {
            if (_c.input_textV.length > 0) {


                _c.input_textV.split('\n').forEach(ur => {
                    _url = _$.isURL(ur.trim());
                    if (_url) {
                        window.open(_url, '_blank');
                    }
                });
            } else {
                _$.makeToasts('warning', { 'body': 'Empty Input: \n Please Provide Valid URL With Comma/Line-break Separator' })
            }



        }

    };

    _c.action_btn.addEventListener('click', _$.multiURLOpenerTool);


    _c.load_sample.addEventListener('click', _ => {
        _c.input_text.value = SITE_URL + '/' + SLUG + '\n' + SITE_URL + '\nwww.google.com';
        _$.multiURLOpenerTool();
    });


    _c.copy_input_text.addEventListener('click', _ => _$.simpleTextCopier(_c.input_text.value.trim(), 'Empty Input'));


    _c.delete_input.addEventListener('click', _ => {
        _c.input_text.value = '';
        _$.multiURLOpenerTool();
    });



    _c.upload_file.addEventListener('click', _ => _c.input_file.click());


    _c.input_file.addEventListener('click', _ => {
        _$.uploadFileData('input_file', _c.input_text, _$.multiURLOpenerTool);
    });


});

