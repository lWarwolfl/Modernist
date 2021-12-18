$(window).on('load',function (){
    let matched = window.matchMedia('(prefers-color-scheme: dark)').matches;
    let toggle_button = $('#toggle-theme');
    let toggle_icon = $('#toggle-theme i');
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
        toggle_button.addClass('dark');
    }
    else{
        body.addClass('light');
        toggle_icon.replaceWith('<i class="fas fa-sun"></i>');
        toggle_button.addClass('light');
    }

    body.removeClass('hidden');
});

function toggle_theme(){
    let toggle_button = $('#toggle-theme');
    let toggle_icon = $('#toggle-theme svg');
    let body = $('body');

    if (toggle_button.hasClass('light')){
        body.removeClass('light');
        body.addClass('dark');
        toggle_icon.replaceWith('<i class="fas fa-moon"></i>');
        toggle_button.removeClass('light');
        toggle_button.addClass('dark');

        localStorage.setItem('theme','dark');
    }

    else if (toggle_button.hasClass('dark')){
        body.removeClass('dark');
        body.addClass('light');
        toggle_icon.replaceWith('<i class="fas fa-sun"></i>');
        toggle_button.removeClass('dark');
        toggle_button.addClass('light');

        localStorage.setItem('theme','light');
    }
}