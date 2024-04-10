


_$.onDOMReady(_ => {

    let max_limit = 10000;

    let results = {
        txt: '',
        md: '',
        json: '',
        xml: '',

    };

    let email_separator = '';

    let emls = [];

    const generateFakeEmails = ev => {

        ev.preventDefault();

        let how_many = _c.how_many.value?.trim();
        if (how_many.length > 0) {
            how_many = parseInt(how_many);
            how_many = how_many > max_limit ? max_limit : how_many;
            _c.result_block.classList.remove('d-none');

            email_separator = _c.email_separator.value;
            if (email_separator == 'line') {
                email_separator = '\n';
            } else if (email_separator == 'tab') {
                email_separator = '\t';
            } else if (email_separator == 'comma') {
                email_separator = ',';
            }

            emls = fakeEmailGenerator(how_many);


            results = {
                txt: emls.join(email_separator),
                md: '## ' + SITE_URL + '/' + SLUG + '<br><br>\n\n',
                json: JSON.stringify(emls, null, 4),
                xml: '<root>\n\t<generatedby>' + SITE_URL + '</generatedby>\n\t<urls>\n',

            };
            emls.forEach(eml => {

                results.md += '[' + eml + '](' + eml + ')<br>\n';
                results.xml += '\t\t<search>' + eml + '</search>\n';

            });
            results.xml += '\t</urls>\n</root>\n';

            _c.result_text.value = emls.join(email_separator);


        }

    }

    let _c = _$.elemSelector(['#tool_form', '#how_many', '#email_separator', '#action_btn', '#result_block', '#copy_result', '#save_result_in_file', '#result_text', '#download_txt', '#download_md', '#download_json', '#download_xml', '#copy_txt', '#copy_md', '#copy_json', '#copy_xml']);

    _c.tool_form.addEventListener('submit', generateFakeEmails);
    // _c.action_btn.addEventListener('click', generateFakeEmails);
    _c.how_many.addEventListener('input', generateFakeEmails);

    _c.copy_txt.addEventListener('click', _ => _$.simpleTextCopier(results.txt));
    _c.copy_md.addEventListener('click', _ => _$.simpleTextCopier(results.md));
    _c.copy_json.addEventListener('click', _ => _$.simpleTextCopier(results.json));
    _c.copy_xml.addEventListener('click', _ => _$.simpleTextCopier(results.xml));

    _c.download_txt.addEventListener('click', _ => _$.simpleFileDownloader(results.txt));
    _c.download_md.addEventListener('click', _ => _$.simpleFileDownloader(results.md, 'Content not Available', file_name = SLUG + '.md'));
    _c.download_json.addEventListener('click', _ => _$.simpleFileDownloader(results.json, 'Content not Available', file_name = SLUG + '.json'));
    _c.download_xml.addEventListener('click', _ => _$.simpleFileDownloader(results.xml, 'Content not Available', file_name = SLUG + '.xml'));

});

