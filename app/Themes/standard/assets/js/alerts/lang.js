let driverObj;

$('#lang_close').on('click', (e) => {
    setCookie('accept_cookie', 'true', 365);
    closeLangNotify();
});

$('.choose_lang').on('click', (e) => {
    openMiniProfile();
    closeNotifications();
    closeSearch();
    
    const langContainer = $('.miniprofile_langs_container');

    if ($(e.currentTarget).data('auth') == '1') {
        const baseContainer = $('.miniprofile_base');
    
        if (!langContainer.is(':visible')) {
            langContainer.show();
            baseContainer.hide();
        }
    } else {
        langContainer.show();
        $('.miniprofile_container').addClass('opened');
    }

    driverObj = driver({
        onDestroyed: (e) => {
            closeAllHandle();
        },
    });

    driverObj.highlight({
        element: '.miniprofile_langs_container',
    });
});

$('.choose_correct').on('click', (e) => {
    setLang($(e.currentTarget).data('value'));
});

function closeLangNotify() {
    let element = $('.toast-lang');
    element.removeClass('show');
    setTimeout(() => element.remove(), 300);
}

function setLang(lang) {
    setCookie('current_lang', lang, 365);
    closeLangNotify();
}
