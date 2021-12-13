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
//define the category and id
let id = parseInt(get['id']);
if (!get['id']){
    id = 0;
}
let category = get['category'];
if (!get['category']){
    category = 'Recent';
}

//preparing page according to category
$.getJSON('js/story/card-data.json', function(data){
    //get the story
    let story = data['card'][category.toLowerCase()][id];
    //set the page title
    $('title').html(story['title'] + ' - ' + story['category'] + ' - ' + 'Modernist');
    //set images
    $('.information-card .image').css('background-image','url(\'image/people/' + story['writer']['image'] + '\')');
    $('.hero-image-box .hero-image').css('background-image','url(\'image/story-high-res/' + story['image'] + '\')');
    //set information card data
    $('.information-card .title').html(story['writer']['name']);
    $('.information-card .title.bold').html(story['writer']['job']);
    //set time and stars
    let description = $('.information-card .description');
    description.html(story['writer']['time']);
    let stars_num = story['writer']['stars'];
    let stars = '<span class="stars">';
    for (let j = 0;j < stars_num;j++)
    {
        stars += '<i class="fas fa-star"></i>\n';
    }
    stars += '</span>';
    description.append(stars);
    //set active category tag
    $('.side-bar .category-bar .link').each(function (){
        if ($(this).html() === category){
            $(this).addClass('active');
        }
    });
    //set hero data
    $('.hero-text .title').html(story['title']);
    $('.hero-text .text').html(story['text']);
    //set title
    $('#story-title').html(story['title']);
    //set story
    $('.main-text').html(story['story']);
});