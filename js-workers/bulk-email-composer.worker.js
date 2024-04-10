const bulkEmailComposer = (
    service_provider = 'gmail',
    to_addresses = [],
    mail_subject = '',
    mail_body = ''
) => {

    let res = [];
    to_addresses.forEach(addr => {
        if (service_provider == 'gmail') {
            res.push(
                'https://mail.google.com/mail/?view=cm&fs=1&tf=1' +
                '&to=' + encodeURIComponent(addr) +
                '&body=' + encodeURIComponent(mail_body) +
                // '%0D' +
                '&su=' + encodeURIComponent(mail_subject)
            );
        } else if (service_provider == 'yahoo') {
            res.push(
                'https://compose.mail.yahoo.com/?' +
                'body=' + encodeURIComponent(mail_body/* .replaceAll('\n', '\n') */) +
                '&to=' + encodeURIComponent(addr) +
                // '%0D' +
                '&subject=' + encodeURIComponent(mail_subject)
            );
        }
    })
    return res;
}