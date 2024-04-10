
_$.onDOMReady(_ => {

    let _c = _$.elemSelector(['#mail_service', '#delay_time', '#mail_to_addresses', '#mail_subject', '#mail_body', '#action_btn', '#result_block', '#compose_now', '#download_txt', '#composed_links']);
    let _links = {};

    let to_addressed;

    let delay_timeV = 0;

    const hideResultBlockArea = e => _c.result_block.classList.add('d-none');

    _c.action_btn.addEventListener('click', _ev => {

        to_addressed = _c.mail_to_addresses.value.trim().replaceAll('\n', ',');
        if (to_addressed != '') {

            delay_timeV = parseInt(_c.delay_time.value) * 1000;

            to_addressed = to_addressed.split(',');

            to_addresses_filtered = [];

            to_addressed.forEach(eml => isEmail(eml.trim()) ? to_addresses_filtered.push(eml.trim()) : '');

            _c.result_block.classList.remove('d-none');

            _links = bulkEmailComposer(_c.mail_service.value.trim(), to_addresses_filtered, _c.mail_subject.value.trim(), _c.mail_body.value.trim());


            _c.composed_links.value = _links.join('\n');

        } else {
            _$.makeToasts('warning', { 'body': 'Provide all required fields' })
        }

    });

    _c.compose_now.addEventListener('click', _ev => {
        let promises = [];
        let promise_time = 0;
        Object.keys(_links).forEach(async _key => {
            promises.push(
                new Promise((resolve, reject) => {
                    setTimeout(() => {
                        window.open(_links[_key], '_blank');
                    }, promise_time);

                })
            );

            promise_time = promise_time + delay_timeV;
        });

        Promise.all(promises).then((values) => {

            console.log(values);
        });
    });

    _c.download_txt.addEventListener('click', _ => _$.simpleFileDownloader(Object.keys(_links).map((key) => _links[key]).join('\n')));

    _c.mail_service.addEventListener('change', hideResultBlockArea);
    _c.delay_time.addEventListener('input', hideResultBlockArea);
    _c.mail_to_addresses.addEventListener('input', hideResultBlockArea);
    _c.mail_subject.addEventListener('input', hideResultBlockArea);
    _c.mail_body.addEventListener('input', hideResultBlockArea);

});

