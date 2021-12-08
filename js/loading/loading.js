//execute loading animations and transitions and destroy loading when complete
$(window).on('load',function (){
    setTimeout(function (){
        $('.loading-container').css({'width':'100vw','height':'100vh','border-radius':'0','top':'0','left':'0'});
        setTimeout(function (){
            $('.loading-screen').css('opacity','0');
            setTimeout(function (){
                $('.loading-screen').remove();
                $('body').css('overflow-x','unset');
            },500);
        },500);
    },2000);
});