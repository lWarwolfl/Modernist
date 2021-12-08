//skip loading when page is already loaded
$(window).on('load',function (){
    $('.loading-screen').remove();
    $('body').css('overflow-x','unset');
});