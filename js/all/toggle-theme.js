//splitting window location to store $_GET values inside a variable
let parts = window.location.search.substr(1).split("&");
let get = {};
for (let i = 0; i < parts.length; i++) {
    let temp = parts[i].split("=");
    get[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
}
$(window).on('load',function (){
    //set webpage color file
    if (get['color'])
    {
        localStorage.setItem('color',get['color']);
    }
    else
    {

    }
    $('#theme').replaceWith('<link id="theme" rel="stylesheet" href="css/theme/root-' + localStorage.getItem('color') + '.css">');

    let matched = window.matchMedia('(prefers-color-scheme: dark)').matches;
    let toggle_button = $('#toggle-theme');
    let toggle_icon = $('#toggle-theme i');
    let mobile_toggle_icon = $('#mobile-toggle-theme .icon');
    let body = $('body');

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