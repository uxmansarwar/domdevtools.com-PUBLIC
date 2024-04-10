

/**
 * @string text_ any string without sanitization, it will be sanitized and count characters with spaces 
 * @returns number of characters in the text
 * @returnType @int
 */
const charCounter = text_ => text_.replace(/\s+/g, ' ').length;
/**
 * @string text_ any string without sanitization, it will be sanitized and count characters with spaces 
 * @returns number of spaces in the text
 * @returnType @int
 */
const spaceCounter = text_ => text_.split(' ').length;
/**
 * @string text_ any string without sanitization, it will be sanitized and counted
 * @returns @int number of words
 * @returnType @int
 */
const wordCounter = text_ => text_.replace(/\s+/g, ' ').split(' ').length;
/**
 * @int text_ any string without sanitization, it will be sanitized and count sentences
 * @int max_sen_len maximum number of characters in a sentence
 * @returns number of sentences in the text
 * @returnType @int
 */
const sentenceCounter = (text_, max_sen_len = 7) => Array.from(text_.replace(/\s+/g, ' ').split('.')).map(sentence => sentence.trim().length < max_sen_len ? null : sentence).filter(x => x).length;


/**
 * @string _word any string without sanitization, it will be sanitized and count syllables
 * @returns @int number of syllables in given word
 * @returnType @int
 */
const syllableCounter = _word => _word.toLowerCase().match(/[^aeiouy]*[aeiouy]+/g)?.length ?? 0;


/**
 * @formula from google results Coleman Liau Index formula: 5.89 x (characters/words) - 0.3 x (sentences/words) – 15.8.
 * @IPLocation Coleman Liau Index formula: 5.125 x (characters/words) - 0.3 x (sentences/words) - 15.8
 * @int total_sen total number of sentences 
 * @int total_words total number of words 
 * @int total_chars total number of characters
 * @returns coleman_liau_index
 * @returnType @int
 */
const colemanLiau = (total_sen, total_words, total_chars) => (5.125 * (total_chars / total_words)) - 0.3 * (total_sen / total_words) - 15.8;

/**
 * 
 * @param callback callAbleFunction 
 */
function onDOMReady(callAbleFunction) {
    document.readyState == 'loading' ? document.addEventListener('DOMContentLoaded', callAbleFunction) : callAbleFunction();
}


function elemSelector(x, temp_dom = document.body, working_area_id = 'working_area', i = x.indexOf('#' + working_area_id), res = []) {
    i > -1 ? (res[working_area_id] = temp_dom = temp_dom.querySelector('#' + working_area_id)) && x.splice(i, 1) : '';
    x.forEach(e => res[e.startsWith('.') || e.startsWith('#') ? e.substr(1) : e] = e.startsWith('#') ? temp_dom.querySelector(e) : temp_dom.querySelectorAll(e));
    return res;
}



const isEmail = eml => {
    let t = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return t.test(eml);
}

const randomNumber = (max = 100, min = 0) => Math.floor((Math.random() * max) + min);


const isEmpty = prm => prm == '' || prm.length == 0 ? true : false;

