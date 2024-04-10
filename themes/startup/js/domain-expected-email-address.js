


_$.onDOMReady(_ => {

    let results = {
        txt: '',
        md: '',
        json: '',
        xml: '',

    };

    let emls = [];

    function expectedEmailGen() {
        let text = _c.input_text.value?.trim();
        if (text.length > 0) {
            let domains = [];
            text = text.replaceAll('\n', ',').split(',');
            text.forEach(u => {
                u = _$.isURL(u);
                u ? domains.push(u.host) : '';
            });

            let emls = domainExpectedEmailAddresses(domains);

            results = {
                txt: emls.join('\n'),
                md: '## ' + SITE_URL + '/' + SLUG + '<br><br>\n\n',
                json: JSON.stringify(emls, null, 4),
                xml: '<root>\n\t<generatedby>' + SITE_URL + '</generatedby>\n\t<urls>\n',

            };
            emls.forEach(eml => {

                results.md += '[' + eml + '](' + eml + ')<br>\n';
                results.xml += '\t\t<search>' + eml + '</search>\n';

            });
            results.xml += '\t</urls>\n</root>\n';

            _c.result_text.innerHTML = results.txt;
        }

    }



    let _c = _$.elemSelector(['#load_sample', '#refresh_tool', '#copy_input_text', /* '#save_input_in_link', */ '#delete_input', '#input_text', '#action_btn', '#upload_file', '#input_file', '#copy_result', '#save_result_in_file', '#result_text', '#download_txt', '#download_md', '#download_json', '#download_xml', '#copy_txt', '#copy_md', '#copy_json', '#copy_xml']);



    _c.action_btn.addEventListener('click', expectedEmailGen);



    _c.copy_input_text.addEventListener('click', _ => _$.simpleTextCopier(_c.input_text.value));

    _c.copy_txt.addEventListener('click', _ => _$.simpleTextCopier(results.txt));
    _c.copy_md.addEventListener('click', _ => _$.simpleTextCopier(results.md));
    _c.copy_json.addEventListener('click', _ => _$.simpleTextCopier(results.json));
    _c.copy_xml.addEventListener('click', _ => _$.simpleTextCopier(results.xml));





    _c.download_txt.addEventListener('click', _ => _$.simpleFileDownloader(results.txt));
    _c.download_md.addEventListener('click', _ => _$.simpleFileDownloader(results.md, 'Content not Available', file_name = SLUG + '.md'));
    _c.download_json.addEventListener('click', _ => _$.simpleFileDownloader(results.json, 'Content not Available', file_name = SLUG + '.json'));
    _c.download_xml.addEventListener('click', _ => _$.simpleFileDownloader(results.xml, 'Content not Available', file_name = SLUG + '.xml'));








    _c.delete_input.addEventListener('click', _ => {
        _c.result_text.innerHTML = '';
        _c.input_text.value = '';
        _$.makeToasts('danger', { 'body': 'Input Text Deleted' });
    });


    _c.refresh_tool.addEventListener('click', _$.refreshPage);

    _c.load_sample.addEventListener('click', _ => _c.input_text.value = 'domdevtools.com');


    _c.upload_file.addEventListener('click', _ => _c.input_file.click());

    _c.input_file.addEventListener('click', _ => {
        _$.uploadFileData('input_file', _c.input_text);

    });

});

