//display categories from json files
$.getJSON('js/category/card-data.json', function(data){
    for (let i = 0;i < data['card'].length;i++)
    {
        $('.side-bar .category-bar').append('<a href="category.html?category=' + data['card'][i]['category'] + '" class="link">' + data['card'][i]['category'] + '</a>');
    }
});
//splitting window location to store $_GET values inside a variable
let parts = window.location.search.substr(1).split("&");
let get = {};
for (let i = 0; i < parts.length; i++) {
    let temp = parts[i].split("=");
    get[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
}
//define the category
let category = get['category'];
if (!get['category']){
    category = 'Recent';
}

//preparing page according to category
$.getJSON('js/category/card-data.json', function(data){
    for (let i = 0;i < data['card'].length;i++)
    {
        if (data['card'][i]['category'] === category){
            //set the page title
            $('title').html(category + ' - ' + 'Modernist');
            //set images
            $('.information-card .image').css('background-image','url(\'image/category-icon/' + data['card'][i]['image'] + '\')');
            $('.hero-image-box .hero-image').css('background-image','url(\'image/category-high-res/' + data['card'][i]['image'] + '\')');
            //set information card data
            $('.information-card .title').html(category + ' ' + 'category');
            $('.information-card .title.bold').html(data['card'][i]['count'] + ' ' + 'stories');
            $('.information-card .description').html(data['card'][i]['status']);
            //set active category tag
            $('.side-bar .category-bar .link').each(function (){
                if ($(this).html() === category){
                    $(this).addClass('active');
                }
            });
            //set hero data
            $('.hero-text .title').html(data['card'][i]['title']);
            $('.hero-text .text').html(data['card'][i]['description']);
            //set title
            $('#category-title').html(category + ' <span class="first-color-text">stories</span>');
        }
    }
});
//show cards
$.getJSON('js/story/card-data.json', function(data){
    let cat = category.toLowerCase();
    for (let i = 0;i < data['card'][cat].length;i++)
    {
        let cards = data['card'][cat];
        $('#story-card-category-container').append(
            '           <aside class="story-card flat">' +
            '                 <div class="story-image flat" style="background-image: url(\'image/story/' + cards[i]['image'] + '\')"></div>\n' +
            '                 <div class="text-container flat">\n' +
            '                    <h2 class="tag-box">' + cards[i]['category'] + '</h2>\n' +
            '                    <span class="time-description">' + cards[i]['time'] + '</span>\n' +
            '                    <h2 class="title">' + cards[i]['title'] + '</h2>\n' +
            '                    <p class="text">' + cards[i]['text'] + '</p>\n' +
            '                    <a href="story.html?id=' + i + '&category=' + cat + '" class="button-tag">Read more <i class="fas fa-arrow-right"></i></a>\n' +
            '                 </div>' +
            '           </aside>\n'
        );
    }
})