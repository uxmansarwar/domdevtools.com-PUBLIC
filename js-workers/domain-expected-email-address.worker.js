
function domainExpectedEmailAddresses(
    domains = [],
    expectUser = [
        'admin',
        'info',
        'contact',
        'us',
        'query',
        'contact-us'
    ]
) {
    let res = [];
    domains.forEach(dmn => {
        expectUser.forEach(usr => res.push(usr + '@' + dmn));
    });
    return res;
}