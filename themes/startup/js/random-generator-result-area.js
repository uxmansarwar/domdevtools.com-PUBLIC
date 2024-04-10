
const obtainContentFromElemId = id => {
    let res = [];
    document.getElementById(id).childNodes.forEach(elem => res.push(elem.dataset?.content));
    return res;
}

const downloadTxtOnclick = (id = '') => {
    if (id == '')
        return false;
    _$.simpleFileDownloader(obtainContentFromElemId(id).join('\n'));
}

const downloadMDOnclick = (id = '') => {
    if (id == '')
        return false;
    let md = '## ' + SITE_URL + '/' + SLUG + '<br><br>\n\n';
    obtainContentFromElemId(id).forEach(item => md += '[' + item + '](' + item + ')<br>\n');
    _$.simpleFileDownloader(md, 'Content not Available', file_name = SLUG + '.md');
}

const downloadJSONOnclick = (id = '') => {
    if (id == '')
        return false;
    _$.simpleFileDownloader(JSON.stringify(obtainContentFromElemId(id), null, 4), 'Content not Available', file_name = SLUG + '.json')
}

const downloadXMLOnclick = (id = '') => {
    if (id == '')
        return false;
    let xml = '<root>\n\t<generatedby>' + SITE_URL + '</generatedby>\n\t<list>\n';
    obtainContentFromElemId(id).forEach(item => xml += '\t\t<item>' + item + '</item>\n');
    xml += '\t</list>\n</root>\n';
    _$.simpleFileDownloader(xml, 'Content not Available', file_name = SLUG + '.xml');
}


const copyTxtOnclick = (id = '') => {
    if (id == '')
        return false;
    _$.simpleTextCopier(obtainContentFromElemId(id).join('\n'));
}

const copyMDOnclick = (id = '') => {
    if (id == '')
        return false;
    let md = '## ' + SITE_URL + '/' + SLUG + '<br><br>\n\n';
    obtainContentFromElemId(id).forEach(item => md += '[' + item + '](' + item + ')<br>\n');
    _$.simpleTextCopier(md);
}

const copyJSONOnclick = (id = '') => {
    if (id == '')
        return false;
    _$.simpleTextCopier(JSON.stringify(obtainContentFromElemId(id), null, 4))
}

const copyXMLOnclick = (id = '') => {
    if (id == '')
        return false;
    let xml = '<root>\n\t<generatedby>' + SITE_URL + '</generatedby>\n\t<list>\n';
    obtainContentFromElemId(id).forEach(item => xml += '\t\t<item>' + item + '</item>\n');
    xml += '\t</list>\n</root>\n';
    _$.simpleTextCopier(xml);
}
/******************************** exporting section end here ********************************/


const resSpanHTMLMaker = (data = [], span_colors = ['text-primary', 'text-secondary', 'text-success', 'text-danger', 'text-warning', 'text-info', 'text-info', 'text-dark'], icon_classes = 'icon-plus icon-lg') => {
    let res = [];

    data.forEach(item => {
        res.push(
            `<span class="m-2 ps-3 pe-2 py-2 ${span_colors[randomNumber(span_colors.length)]} d-inline-block  shadow-lg pointer add_selected_on_single_click remove_this" data-content="${item}">${item} <i class="icon ${icon_classes} text-end ms-3 add_selected_on_single_click" data-content="${item}"></i></span>`
        );
    });

    return res;
}

const selectedSpanHTMLMaker = (data = [], span_colors = ['text-primary', 'text-secondary', 'text-success', 'text-danger', 'text-warning', 'text-info', 'text-info', 'text-dark'], icon_classes = 'icon-minus icon-lg') => {
    let res = [];

    data.forEach(item => {
        res.push(
            `<span class="m-2 ps-3 pe-2 py-2 ${span_colors[randomNumber(span_colors.length)]} d-inline-block  shadow-lg pointer remove_selected_on_single_click remove_this" data-content="${item}">${item} <i class="icon ${icon_classes} text-end ms-3 remove_selected_on_single_click" data-content="${item}"></i></span>`
        );
    });

    return res;
}


let max_local_storage_items = 36;

let _c_elem = _$.elemSelector(['#action_btn', '#result_li', '#selected_li', '#copy_result_btn', '#d_download', '#d_copy', '#result_block', '#selected_heading', '#selected_d_copy', '#selected_d_download', '#selected_block']);


let displayResultItems = item => {
    _c_elem.result_li.classList.remove('d-none');
    if (Array.isArray(item)) {
        _c_elem.result_block.innerHTML = resSpanHTMLMaker(item).join('');
    } else if (item.length > 0 && Object.prototype.toString.call(item) == '[object String]' && obtainContentFromElemId('result_block').indexOf(item) < 0) {
        _c_elem.result_block.insertAdjacentHTML('afterbegin', resSpanHTMLMaker([item]).join(''));
    }
}

window.addEventListener('load', _ => {




    let displaySelectedItems = (item = '') => {
        let previous_data = JSON.parse(localStorage[SLUG] || null) || [];

        if (!item && previous_data.length > 0) {
            _c_elem.selected_block.innerHTML = '';
            _c_elem.selected_block.insertAdjacentHTML('afterbegin', selectedSpanHTMLMaker(previous_data).join(''));
            _c_elem.selected_li.classList.remove('d-none');
        } else if (item.length > 0 && !(previous_data.indexOf(item.toString()) > -1)) {
            _c_elem.selected_li.classList.remove('d-none');
            _c_elem.selected_block.insertAdjacentHTML('afterbegin', selectedSpanHTMLMaker([item]).join(''));
        } else if (previous_data.indexOf(item.toString()) > -1) {
            // show modal here, item already exist in selected list
            _$.makeToasts('warning', {
                'body': 'Item already exists in Selected list!'
            })
        }


    };


    const storeInLocalStorage = item => {

        let previous_data = JSON.parse(localStorage[SLUG] || null) || [];

        if (previous_data.indexOf(item) < 0) {
            previous_data.push(item);
        }

        if (previous_data.length > max_local_storage_items)
            previous_data?.shift();

        localStorage.setItem(SLUG, JSON.stringify(previous_data));
    }

    const removeFromLocalStorage = item => {
        let previous_data = JSON.parse(localStorage[SLUG] || null) || [];
        if (previous_data.indexOf(item) > -1) {
            previous_data.splice(previous_data.indexOf(item), 1)
        }

        localStorage.setItem(SLUG, JSON.stringify(previous_data));



    }

    const addSelected = event => {
        if (event.target.classList.contains('add_selected_on_single_click')) {
            displaySelectedItems(event.target.dataset.content);
            storeInLocalStorage(event.target.dataset.content);

            // remove_this
            let remove_elem = event.target;
            if (!event.target.classList.contains('remove_this'))
                remove_elem = event.target.closest('.remove_this');

            remove_elem?.remove();



        }
    }

    const removeSelected = event => {
        if (event.target.classList.contains('remove_selected_on_single_click')) {
            // storeInLocalStorage(event.target.dataset.content);
            // displaySelectedItems(event.target.dataset.content);

            // remove_this
            let remove_elem = event.target;
            if (!event.target.classList.contains('remove_this'))
                remove_elem = event.target.closest('.remove_this');

            removeFromLocalStorage(remove_elem.dataset.content);
            displayResultItems(remove_elem.dataset.content);
            remove_elem?.remove();



        }
    }


    /**
     * this will add item to selected list
     */
    _c_elem.result_block.addEventListener('click', addSelected);

    _c_elem.selected_block.addEventListener('click', removeSelected);



    displaySelectedItems();





});