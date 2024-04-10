
onDOMReady(_ => {
    let _c = elemSelector(['#plagi_text', '#action_btn', '#analysis_table', '#total_words', '#total_sentences', '#total_chars', '#total_spaces', '#result_area', '#open_all_with_google', '#open_all_with_youtube', '#open_all_with_bing', '#result_tbody']);

    _c.action_btn.addEventListener('click', _ => {
        console.log('clicked');
        let txt = _c.plagi_text.value.trim();

        if (txt.length < 1) {
            return false;
        }

        _c.result_area.classList.remove('d-none');

        let all_delimiters = ['.', '\n'];

        all_delimiters.forEach(deli => txt = txt.replaceAll(deli, ','));

        let html_tr = '';
        let n = 0;
        txt.split(',').forEach(txt_chunk => {
            if (txt_chunk.trim() != '') {

                html_tr += `<tr>
                    <td class="py-4 h5 over-hidden">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" style="background-color: <?= $SITE_COLOR; ?>;">` + ++n + `</span>
                            <input type="text" class="form-control" value='"` + txt_chunk.trim() + `"'>
                            <button class="btn bg-success text-white" type="button" onclick="openWithGoogle(event);">Google</button>
                            <button class="btn bg-warning text-white" type="button" onclick="openWithYouTube(event);">YouTube</button>
                            <button class="btn bg-primary text-white" type="button" onclick="openWithBing(event);">Bing</button>
                        </div>
                    </td>
                </tr>`;
            }
        });
        _c.result_tbody.innerHTML = '';
        _c.result_tbody.insertAdjacentHTML('afterbegin', html_tr);

    });

    _c.plagi_text.addEventListener('input', _ => {


        _c.analysis_table.classList.remove('d-none');

        _c.total_words.innerHTML = wordCounter(_c.plagi_text.value);
        _c.total_sentences.innerHTML = sentenceCounter(_c.plagi_text.value);
        _c.total_chars.innerHTML = charCounter(_c.plagi_text.value);
        _c.total_spaces.innerHTML = spaceCounter(_c.plagi_text.value);
    });

    _c.open_all_with_google.addEventListener('click', _ => {
        _c.result_tbody.querySelectorAll('input').forEach(inp => window.open('https://google.com/search?q=' + encodeURIComponent(inp.value.trim()), '_BLANK'));
    });

    _c.open_all_with_youtube.addEventListener('click', _ => {
        _c.result_tbody.querySelectorAll('input').forEach(inp => window.open('https://youtube.com/results?search_query=' + encodeURIComponent(inp.value.trim()), '_BLANK'));
    });

    _c.open_all_with_bing.addEventListener('click', _ => {
        _c.result_tbody.querySelectorAll('input').forEach(inp => window.open('https://bing.com/search?q=' + encodeURIComponent(inp.value.trim()), '_BLANK'));
    });



});

function openWithGoogle(e) {
    window.open('https://google.com/search?q=' + encodeURIComponent(e.target.closest('div').querySelector('input').value.trim()), '_BLANK');
}

function openWithYouTube(e) {
    window.open('https://youtube.com/results?search_query=' + encodeURIComponent(e.target.closest('div').querySelector('input').value.trim()), '_BLANK');
}

function openWithBing(e) {
    window.open('https://bing.com/search?q=' + encodeURIComponent(e.target.closest('div').querySelector('input').value.trim()), '_BLANK');
}


