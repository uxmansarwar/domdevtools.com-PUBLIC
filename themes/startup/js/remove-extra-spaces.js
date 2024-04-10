
_$.onDOMReady(_ => {

    _c = _$.elemSelector(['#load_sample', '#copy_input_text', '#delete_input', '#input_text', '#letter_count', '#action_btn', '#remove_all_line_breaks', '#remove_empty_line_breaks', '#auto_working', '#upload_file', '#input_file', '#copy_result', '#save_file', '#result_text']);



    _$.removeExtraSpacesTool = _ev => {

        _c.input_textV = _c.input_text.value.trim();

        _c.letter_count.innerHTML = 'Char: ' + _c.input_textV.length;

        //if auto checkbox checked then do working
        if (_c.auto_working.checked || _ev?.target?.id == 'action_btn' || _ev === true) {

            _c.random_string = _$.randomString(64);


            if (_c.remove_empty_line_breaks.checked) {
                _c.input_textV = _$.removeEmptyLineBreaks(_c.input_textV);
            }


            if (!_c.remove_all_line_breaks.checked) {
                _c.input_textV = _c.input_textV.replaceAll('\n', _c.random_string);
            }


            _c.result_textV = _$.removeExtraSpaces(_c.input_textV).replaceAll(_c.random_string, '\n');
            _c.result_text.value = _c.result_textV;

        }

    };


    _c.input_text.addEventListener('input', _$.removeExtraSpacesTool);

    _c.action_btn.addEventListener('click', _$.removeExtraSpacesTool);
    _c.remove_all_line_breaks.addEventListener('change', _$.removeExtraSpacesTool);
    _c.remove_empty_line_breaks.addEventListener('change', _$.removeExtraSpacesTool);
    _c.auto_working.addEventListener('change', _$.removeExtraSpacesTool);


    _c.load_sample.addEventListener('click', _ => {
        _c.input_text.value = 'This is      example   text  by: \n\n\n' + SITE_URL;
        _$.removeExtraSpacesTool();
    });


    _c.copy_input_text.addEventListener('click', _ => _$.simpleTextCopier(_c.input_text.value.trim(), 'Empty Input'));


    _c.delete_input.addEventListener('click', _ => {
        _c.input_text.value = '';
        _c.result_text.value = '';
        _$.removeExtraSpacesTool();
    });

    _c.copy_result.addEventListener('click', _ => _$.simpleTextCopier(_c.result_text.value.trim(), 'Empty Result'));



    _c.save_file.addEventListener('click', _ => _$.simpleFileDownloader(_c.result_text.value.trim()));

    _c.upload_file.addEventListener('click', _ => _c.input_file.click());

    _c.input_file.addEventListener('click', _ => {
        _$.uploadFileData('input_file', _c.input_text, _$.removeExtraSpacesTool);
    });


});

