
_$.onDOMReady(_ => {

    let _c = _$.elemSelector(['#url_inp', '#_text', '#action_btn', '#result_block', '#result_link', '#open_link', '#download_txt', '#facebook', '#twitter', '#linkedin', '#pinterest', '#skype', '#yahoo', '#reddit', '#whatsapp', '#gmail', '#mix', '#ok', '#blogger', '#tumblr', '#goo', '#skyrock', '#vk', '.copy_url', '.copy_html', '.open_url_new_tab']);
    let _links = {};

    _c.action_btn.addEventListener('click', _ev => {
        if (_$.isURL(_c.url_inp.value)) {
            _c.result_block.classList.remove('d-none');

            _links = socialMediaSharer(_c.url_inp.value, _c._text.value);

            _c.facebook.value = _links.facebook;
            _c.twitter.value = _links.twitter;
            _c.linkedin.value = _links.linkedin;
            _c.pinterest.value = _links.pinterest;
            _c.skype.value = _links.skype;
            _c.yahoo.value = _links.yahoo;
            _c.reddit.value = _links.reddit;
            _c.whatsapp.value = _links.whatsapp;
            _c.gmail.value = _links.gmail;
            _c.mix.value = _links.mix;
            _c.ok.value = _links.ok;
            _c.blogger.value = _links.blogger;

        } else {
            _$.makeToasts('warning', { 'body': 'Please provide a valid URL' })
        }

    });


    _c.open_link.addEventListener('click', _ev => {
        Object.keys(_links).forEach(_key => {
            window.open(_links[_key], '_blank');
        });
    });



    _c.download_txt.addEventListener('click', _ => _$.simpleFileDownloader(Object.keys(_links).map((key) => _links[key]).join('\n')));



    _c.copy_url.forEach(elem => {
        elem.addEventListener('click', _ => {
            _$.simpleTextCopier(_links[elem.closest('div').dataset.name]);
        });
    });


    _c.copy_html.forEach(elem => {
        elem.addEventListener('click', _ => {
            _$.simpleTextCopier(
                '<a href="' + _links[elem.closest('div').dataset.name] + '">' + elem.closest('div').dataset.name.toUpperCase() + '</a>'
            );
        });
    });



    _c.open_url_new_tab.forEach(elem => {
        elem.addEventListener('click', _ => {
            window.open(_links[elem.closest('div').dataset.name], '_blank');
        });
    });

});

