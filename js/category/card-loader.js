//read card data from json file and display the cards
$.getJSON('js/category/card-data.json', function(data){
    for (let i = 0;i < data['card'].length;i++)
    {
        $('#category-card-container').append(
            '               <a href="category.html?category=Recent" class="category-card" style="background-image: url(\'image/category-square/' + data['card'][i]['image'] + '\')">\n' +
            '                    <div class="overlay">\n' +
            '                        <div class="icon-container">\n' +
            '                           <i class="fas ' + data['card'][i]['icon'] + '"></i>\n' +
            '                        </div>\n' +
            '                        <div class="name">' + data['card'][i]['category'] + '\n' +
            '                           <div class="counter">' + data['card'][i]['count'] + '</div>\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '                </a>\n'
        );
    }
})