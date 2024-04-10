/**
 * 
 * @param string input_text 
 * @param string search_url 
 * @returns array 
 */
function buildGoogleSearchURL(input_text = '', search_url = "https://www.google.com/search?q=") {
    res = []
    text = input_text.trim();
    if (text.length > 0) {

        text = text.replaceAll(',', '\n');
        text = text.replaceAll("'", '"');
        text = text.replaceAll('"', '%22');
        text = text.replaceAll('(', '%28');
        text = text.replaceAll(')', '%29');
        text = text.replaceAll('!', '%21');
        text = text.replaceAll('?', '%3F');
        text = text.replaceAll(':', '%3A');
        text = text.replaceAll(';', '%3B');
        // text = text.replaceAll(',', '%2C');
        text = text.replaceAll('.', '%2E');
        text = text.replaceAll('/', '%2F');
        text = text.replaceAll('\\', '%5C');
        text = text.replaceAll('[', '%5B');
        text = text.replaceAll(']', '%5D');
        text = text.replaceAll('{', '%7B');
        text = text.replaceAll('}', '%7D');
        text = text.replaceAll('|', '%7C');
        text = text.replaceAll('`', '%60');
        text = text.replaceAll('~', '%7E');
        text = text.replaceAll('@', '%40');
        text = text.replaceAll('#', '%23');
        text = text.replaceAll('$', '%24');
        // text = text.replaceAll('%', '%25');
        text = text.replaceAll('^', '%5E');
        text = text.replaceAll('&', '%26');
        text = text.replaceAll('*', '%2A');
        text = text.replaceAll('-', '%2D');
        text = text.replaceAll('_', '%5F');
        text = text.replaceAll('=', '%3D');
        // text = text.replaceAll('+', '%2B');
        text = text.replaceAll('<', '%3C');
        text = text.replaceAll('>', '%3E');
        text = text.split('\n');

        text.forEach(keyword => {
            keyword = keyword.trim();
            keyword = keyword.replaceAll(/ /g, "+");
            res.push(search_url + keyword);
        });
    }
    return res;
}





_$.onDOMReady(_ => {

    let results = {
        txt: '',
        md: '',
        json: '',
        xml: '',

    };


    function googleSearchURLGenerator() {
        let text = _c.input_text.value?.trim();
        if (text.length > 0) {

            let search_url = buildGoogleSearchURL(text);
            results = {
                txt: '',
                md: '## ' + SITE_URL + '/' + SLUG + '<br><br>\n\n',
                json: JSON.stringify(search_url, null, 4),
                xml: '<root>\n\t<generatedby>' + SITE_URL + '</generatedby>\n\t<urls>\n',

            };
            let search_url_html = '';
            search_url.forEach(_url => {

                results.txt += _url + '\n';
                results.md += '[' + _url + '](' + _url + ')<br>\n';
                results.xml += '\t\t<search>' + _url + '</search>\n';

                search_url_html += '<a href="' + _url + '" target="_blank">' + _url + '</a><br>';
            });
            results.xml += '\t</urls>\n</root>\n';
            _c.result_text.innerHTML = search_url_html;
        }

    }



    let _c = _$.elemSelector(['#load_sample', '#refresh_tool', '#copy_input_text', /* '#save_input_in_link', */ '#delete_input', '#input_text', '#action_btn', '#upload_file', '#input_file', '#copy_result', '#save_result_in_file', '#result_text', '#download_txt', '#download_md', '#download_json', '#download_xml', '#copy_txt', '#copy_md', '#copy_json', '#copy_xml']);



    _c.action_btn.addEventListener('click', googleSearchURLGenerator);



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

    _c.load_sample.addEventListener('click', _ => _c.input_text.value = SLUG);


    _c.upload_file.addEventListener('click', _ => _c.input_file.click());

    _c.input_file.addEventListener('click', _ => {
        _$.uploadFileData('input_file', _c.input_text);

    });

});

