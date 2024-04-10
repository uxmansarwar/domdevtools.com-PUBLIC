_$.onDOMReady(_ => {

    let _c = _$.elemSelector(['#tool_form', '#start_from', '#end_on', '#action_btn']);

    let start_from = 1;
    let end_on = 100;


    _c.tool_form.addEventListener('submit', _ => {

        _.preventDefault();

        start_from = parseInt(_c.start_from.value.trim() || start_from);
        end_on = parseInt(_c.end_on.value.trim() || end_on);


        if (parseInt(start_from) > 0) {

            displayResultItems(primeNumberGenerator(start_from, end_on));


        }

    });
});

