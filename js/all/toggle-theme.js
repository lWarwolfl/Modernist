//splitting window location to store $_GET values inside a variable
let settings = window.location.search.substr(1).split("&");
let gets = {};
for (let i = 0; i < settings.length; i++) {
    let temp = settings[i].split("=");
    gets[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
}

$(window).on('load',function (){
    let body = $('body');
    let setting = {};
    //get customization setting from json file
    $.getJSON('setting.json', function(data){
        let setting = data['setting'];
        set_setting(setting);
    });

    function set_setting(setting){
        //set webpage color file
        if (gets['color'])
        {
            localStorage.setItem('color',gets['color']);
        }
        else
        {
            localStorage.setItem('color',setting['color']);
        }
        $('#theme').replaceWith('<link id="theme" rel="stylesheet" href="css/theme/root-' + localStorage.getItem('color') + '.css">');

        if (gets['box'])
        {
            localStorage.setItem('box',gets['box']);
        }
        else
        {
            localStorage.setItem('box',setting['box']);
        }
        if (localStorage.getItem('box') === 'no')
        {
            body.addClass('no-box');
        }

        if (gets['wave'])
        {
            localStorage.setItem('wave',gets['wave']);
        }
        else
        {
            localStorage.setItem('wave',setting['wave']);
        }
        if (localStorage.getItem('wave') !== 'none')
        {
            body.addClass('has-wave');
            body.addClass(localStorage.getItem('wave'));
        }

        if (gets['circle'])
        {
            localStorage.setItem('circle',gets['circle']);
        }
        else
        {
            localStorage.setItem('circle',setting['circle']);
        }
        if (localStorage.getItem('circle') !== 'none')
        {
            body.addClass('has-circle');
            body.addClass(localStorage.getItem('circle'));
        }
    }

    let matched = window.matchMedia('(prefers-color-scheme: dark)').matches;
    let toggle_button = $('#toggle-theme');
    let toggle_icon = $('#toggle-theme i');
    let mobile_toggle_icon = $('#mobile-toggle-theme .icon');

    if (!localStorage.getItem('theme')){
        if (matched){
            localStorage.setItem('theme','dark');
        }
        else{
            localStorage.setItem('theme','light');
        }
    }

    if(matched && (localStorage.getItem('theme') === 'dark')){
        body.addClass('dark');
        toggle_icon.replaceWith('<i class="fas fa-moon"></i>');
        mobile_toggle_icon.replaceWith('<i class="fas fa-moon icon"></i>');
        toggle_button.addClass('dark');
    }
    else{
        body.addClass('light');
        toggle_icon.replaceWith('<i class="fas fa-sun"></i>');
        mobile_toggle_icon.replaceWith('<i class="fas fa-sun icon"></i>');
        toggle_button.addClass('light');
    }

    body.removeClass('hidden');
});

function toggle_theme(){
    let toggle_button = $('#toggle-theme');
    let toggle_icon = $('#toggle-theme svg');
    let mobile_toggle_icon = $('#mobile-toggle-theme .icon');
    let body = $('body');

    if (toggle_button.hasClass('light')){
        body.removeClass('light');
        body.addClass('dark');
        toggle_icon.replaceWith('<i class="fas fa-moon"></i>');
        mobile_toggle_icon.replaceWith('<i class="fas fa-moon icon"></i>');
        toggle_button.removeClass('light');
        toggle_button.addClass('dark');

        localStorage.setItem('theme','dark');
    }

    else if (toggle_button.hasClass('dark')){
        body.removeClass('dark');
        body.addClass('light');
        toggle_icon.replaceWith('<i class="fas fa-sun"></i>');
        mobile_toggle_icon.replaceWith('<i class="fas fa-sun icon"></i>');
        toggle_button.removeClass('dark');
        toggle_button.addClass('light');

        localStorage.setItem('theme','light');
    }
}