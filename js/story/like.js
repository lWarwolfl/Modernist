//add onclick event to like buttons
$('.like').on('click', function (event) {
    event.preventDefault();

    //change the button to liked
    let like_num = parseInt($(this).html()) + 1;
    $(this).html(like_num + ' <i class="fas fa-heart"></i>');
});