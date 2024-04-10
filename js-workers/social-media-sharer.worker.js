/**
 * 
 * @param {*} _url 
 * @param {*} _text 
 * @returns 
 * line breaks use '%0D%0A%0D%0A%0D%0A'
 */
function socialMediaSharer(_url = SITE_URL + '/' + page_slug, _text = '') {
    return {
        facebook: `https://www.facebook.com/sharer/sharer.php?u=` + encodeURIComponent(_url),
        twitter: `https://twitter.com/intent/tweet?url=${encodeURIComponent(_url)}&text= ` + encodeURIComponent(_text),
        linkedin: `https://www.linkedin.com/shareArticle?mini=true&url=` + encodeURIComponent(_url),
        pinterest: `https://pinterest.com/pin/create/button/?url=` + encodeURIComponent(_url),
        skype: `https://web.skype.com/share?url=` + encodeURIComponent(_url),
        yahoo: `https://compose.mail.yahoo.com/?body=` + encodeURIComponent(_url) + '&subject=' + encodeURIComponent(_text),
        reddit: `https://reddit.com/submit?url=` + encodeURIComponent(_url) + '%0D' + encodeURIComponent(_text) + '&title=' + encodeURIComponent(_text.slice(0, 100)),
        whatsapp: `https://web.whatsapp.com/send?text=` + encodeURIComponent(_url) + '%0A' + encodeURIComponent(_text),
        gmail: `https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&body=` + encodeURIComponent(_url) + '%0D' + encodeURIComponent(_text) + '&su=' + encodeURIComponent(_text.slice(0, 100)),
        mix: `https://mix.com/share?url=` + encodeURIComponent(_url),
        ok: `https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&st.shareUrl=` + encodeURIComponent(_url),
        blogger: `https://www.blogger.com/blog-this.g?b=` + encodeURIComponent(_url) + '&t=' + encodeURIComponent(_text.slice(0, 100)) + '&v=3' + '&b=' + encodeURIComponent(_text.slice(0, 100)),


    };
}
