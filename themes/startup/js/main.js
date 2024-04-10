const LOC = window.location.href;

const URL_OBJ = new URL(LOC);

const SITE_URL = URL_OBJ.origin,
    SLUG = URL_OBJ.pathname.replaceAll('/', '');


let $page_value = SLUG;
let _c = {};



/**
 * 
 * @param callback callAbleFunction 
 */
function onDOMReady(callAbleFunction) {

    document.readyState == 'loading' ? document.addEventListener('DOMContentLoaded', callAbleFunction) : callAbleFunction();
}


const isEmail = eml => {
    let t = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return t.test(eml);
}

const randomNumber = (max = 100, min = 0) => Math.floor((Math.random() * max) + min);



const arr = {
    shuffle: arr => arr.sort(() => .5 - Math.random()),

    unique: arr => {

    },

    column: arr => {

    },

    is_empty: arr => arr.length == 0 ? true : false,

    is_array: arr => {

    }
};


const isEmpty = prm => prm == '' || prm.length == 0 ? true : false;



(((obj, _) => _._$ = obj)({


    onDOMReady: x => document.readyState == 'loading' ? document.addEventListener('DOMContentLoaded', x) : x(),
    /**
     * 
     * @param {string} possible 
     * @param {int} length 
     * @param {bool} all_unique if this true then, a letter will not repeated in generated string..
     * @returns 
     */

    randomString: (length = 7, all_unique = false, possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789") => {
        let text = "", ltr;

        for (let i = 0; i < length; i++) {
            ltr = possible.charAt(Math.floor(Math.random() * possible.length));
            all_unique ? possible = possible.replaceAll(ltr, '') : '';
            text += ltr;
        }
        return text;
    },

    randomNumber: n => Math.floor((Math.random() * n) + 1),

    refreshPage: () => window.location.reload(),
    refresh: _ => window.location.reload(),

    /**
     * @param {string} text 
     * @returns @string
     * this @method also remove all(texted & empty) line breaks
     */
    removeExtraSpaces: text => text.replace(/\s+/g, ' ').trim(),


    /**
     * @param {string} text 
     * @returns @string
     * this @method can bear empty value
     */
    removeEmptyLineBreaks: text => {
        let res = [];
        text.split('\n').forEach(el => {
            if (el != '' && el) {
                res.push(el.trim());
            }
        });;
        return res.join('\n');

    },


    titleCase: text => text.split(' ').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' '),

    sentenceCase: text => text.split('.').map(word => (word.charAt(0).toUpperCase() + word.slice(1) ?? '')).join(' '),

    /**
     * @string text_ any string without sanitization, it will be sanitized and count characters with spaces 
     * @returns number of characters in the text
     * @returnType @int
     */
    charCounter: text_ => text_.replace(/\s+/g, ' ').length,

    /**
     * @string text_ any string without sanitization, it will be sanitized and count characters with spaces 
     * @returns number of spaces in the text
     * @returnType @int
     */
    spaceCounter: text_ => text_.split(' ').length,

    /**
     * @string text_ any string without sanitization, it will be sanitized and counted
     * @returns @int number of words
     * @returnType @int
     */
    wordCounter: text_ => text_.replace(/\s+/g, ' ').split(' ').length,


    /**
     * @int text_ any string without sanitization, it will be sanitized and count sentences
     * @int max_sen_len maximum number of characters in a sentence
     * @returns number of sentences in the text
     * @returnType @int
     */
    sentenceCounter: (text_, max_sen_len = 7) => Array.from(text_.replace(/\s+/g, ' ').split('.')).map(sentence => sentence.trim().length < max_sen_len ? null : sentence).filter(x => x).length,

    /**
     * @string _word any string without sanitization, it will be sanitized and count syllables
     * @returns @int number of syllables in given word
     * @returnType @int
     */
    syllableCounter: _word => _word.toLowerCase().match(/[^aeiouy]*[aeiouy]+/g)?.length ?? 0,

    /**
     * @formula from google results Coleman Liau Index formula: 5.89 x (characters/words) - 0.3 x (sentences/words) – 15.8.
     * @IPLocation Coleman Liau Index formula: 5.125 x (characters/words) - 0.3 x (sentences/words) - 15.8
     * @int total_sen total number of sentences 
     * @int total_words total number of words 
     * @int total_chars total number of characters
     * @returns coleman_liau_index
     * @returnType @int
     */
    colemanLiau: (total_sen, total_words, total_chars) => (5.125 * (total_chars / total_words)) - 0.3 * (total_sen / total_words) - 15.8,




    downloadFile: (text, filename, typeStr = 'data:text/plain;charset=utf-8,') => {
        const a = document.createElement('a');
        a.href = typeStr + encodeURIComponent(text);
        a.setAttribute('download', filename);
        a.style.display = 'none';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    },


    copyToClipboard: str => {
        return new Promise((accept, reject) => {
            let textArea = document.createElement('textarea');
            textArea.value = str;
            document.body.appendChild(textArea);
            textArea.select();
            try {
                let successful = document.execCommand('copy');
                if (!successful)
                    reject('Unable to copy');
                else
                    accept(true);
            } catch (err) {
                reject('Unable to copy');
            }
            document.body.removeChild(textArea);
        });
    },
    elemSelector: (x, temp_dom = document.body, working_area_id = 'working_area', i = x.indexOf('#' + working_area_id), res = []) => {
        i > -1 ? (res[working_area_id] = temp_dom = temp_dom.querySelector('#' + working_area_id)) && x.splice(i, 1) : '';
        x.forEach(e => res[e.startsWith('.') || e.startsWith('#') ? e.substr(1) : e] = e.startsWith('#') ? temp_dom.querySelector(e) : temp_dom.querySelectorAll(e));
        return res;
    },



    sleep: function (ms) {
        return new Promise((resolve) => setTimeout(resolve, ms));
    },

    uploadFileData: function (btnId, resultId, callThisFun = false) {
        btnId2 = '#' + btnId;
        if (window.FileReader) {
            document.getElementById(btnId).addEventListener('change', handleFileSelect, false);
            function handleFileSelect(evt) {
                let files = evt.target.files;
                let fileTypeOnly = ['txt', 'html', 'md', 'sql', 'js', 'css', 'csv', 'jpg'];
                if (files && files[0]) {
                    let extension = files[0].name.split('.').pop().toLowerCase(),
                        isFileTypeExist = fileTypeOnly.indexOf(extension) > -1;
                    if (isFileTypeExist) {
                        let fileReader = new FileReader();
                        fileReader.onload = function (event) {
                            let contents = event.target.result;
                            let input = $(btnId2);
                            input.replaceWith(input.val('').clone(true));
                            resultId.value = contents;
                            callThisFun != false ? callThisFun() : '';
                        };
                        fileReader.readAsText(files[0]);
                    } else {
                        _$.makeToasts('danger', { 'body': 'File Type Not Supported' });
                    }
                }
                evt.target.value = null;
            }

        }
    },





    makeToasts: (
        theme,
        msg = {
            'heading': '',
            'body': '',
            'icon': ''
        },
        destruct = true,
        autoHide = false,
        delay = 7000) => new Promise((accept, reject) => {
            let options = {
                'primary': {
                    'bg': 'bg-primary',
                    'text': 'text-white',
                    'icon': 'icon bg-white icon-alarm',
                    'heading': 'Alert',
                },
                'secondary': {
                    'bg': 'bg-secondary',
                    'text': 'text-white',
                    'icon': 'icon bg-white icon-envelope-open',
                    'heading': 'Alert',
                },
                'info': {
                    'bg': 'bg-info',
                    'text': 'text-white',
                    'icon': 'icon bg-white icon-info-circle',
                    'heading': 'Alert',
                },
                'warning': {
                    'bg': 'bg-warning',
                    'text': 'text-white',
                    'icon': 'icon bg-white icon-exclamation-triangle',
                    'heading': 'Alert',
                },
                'success': {
                    'bg': 'bg-success',
                    'text': 'text-white',
                    'icon': 'icon bg-white icon-checked-circle',
                    'heading': 'Alert',
                },
                'danger': {
                    'bg': 'bg-danger',
                    'text': 'text-white',
                    'icon': 'icon icon-error',
                    'heading': 'Alert',
                }
            };
            if (theme.trim().length < 1 || !options.hasOwnProperty(theme))
                reject('Invalid Theme');
            if (!autoHide)
                destruct = false;
            let heading = options[theme].heading;
            let body = '';
            let icon = options[theme].icon;
            if (msg.hasOwnProperty('heading') && msg.heading.trim().length > 0) {
                heading = msg.heading.trim();
            }
            if (msg.hasOwnProperty('body') && msg.body.trim().length > 0) {
                body = msg.body.trim();
            } else {
                reject('Invalid body');
            }
            if (msg.hasOwnProperty('icon') && msg.icon.trim().length > 0) {
                icon = msg.icon.trim();
            }

            let u_id = _$.randomString();
            try {
                let toast = '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="' + autoHide + '" data-delay="' + delay + '" id="' + u_id + '">\n' +
                    ' <div class="toast-header ' + options[theme].bg + ' ' + options[theme].text + '">\n' +
                    ' <strong class="me-auto float-start"><i class="' + icon + '" style="vertical-align: baseline;"></i> ' + heading + '</strong>\n' +
                    ' <i class="icon icon-exit ms-2 mb-1 close float-end pointer" style="vertical-align: baseline;"></i>\n' +
                    ' </div>\n' +
                    ' <div class="toast-body">\n' +
                    ' ' + body + '\n' +
                    ' </div>\n' +
                    ' </div>';
                $('#toasts_container').append(toast);
                $('#' + u_id).toast('show');

                if (destruct) {
                    setTimeout(function () {
                        $('#' + u_id).remove();
                    }, (delay + 500));
                }
            } catch (error) {
                console.log(error);
            }

        }),

    simpleTextCopier: (text_to_copy = '', empty_text_msg = 'Content not available', success_msg = 'Selected Content Successfully Copied', error_msg = 'Unable to Copy') => {
        if (text_to_copy) {
            _$.copyToClipboard(text_to_copy).then(_r => {
                _r ? _$.makeToasts('success', { 'body': success_msg }) : _$.makeToasts('danger', { 'body': error_msg })
            })
        }
        else {
            _$.makeToasts('warning', { 'body': empty_text_msg })
        }
    },

    simpleFileDownloader: (file_data = '', empty_data_msg = 'Content not Available', file_name = SLUG + '.txt') => {
        if (file_data)
            _$.downloadFile(file_data, file_name)
        else
            _$.makeToasts('warning', { 'body': empty_data_msg })
    },


    isURL: str => {
        str = !str.startsWith('https://') && !str.startsWith('http://') ? str = 'https://' + str : str;
        str = str.startsWith('http://') ? str = str.replace('http://', 'https://') : str;
        var exs = str.indexOf('.');
        if (exs > 7) {
            try {
                url = new URL(str);
            } catch (_) {
                return false;
            }
            return url.protocol === "http:" || url.protocol === "https:" ? url : false;
        }
    }

}, window));