$('.category-box .category-tag').on('click', function (event) {
    event.preventDefault();

    $('.category-box .category-tag').removeClass('active');
    $(this).addClass('active');

    let category = $(this).html();
    let all_popular = ['Design','Technology','Lifestyle'];

    if (category === 'All'){
        $('.story-card .tag-box').each(function (index){
            $(this).html(all_popular[index]);
        });

        $('.story-card .story-image').each(function (index){
            $(this).css('background-image','url(\'image/story/' + all_popular[index].toLowerCase() + '-' + (index + 1) + '.jpeg\')');
        });
    }

    if (category !== 'All'){
        $('.story-card .tag-box').each(function (index){
            $(this).html(category);
        });

        $('.story-card .story-image').each(function (index){
            $(this).css('background-image','url(\'image/story/' + category.toLowerCase() + '-' + (index + 1) + '.jpeg\')');
        });
    }
});