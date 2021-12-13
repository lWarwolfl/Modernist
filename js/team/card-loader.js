//read card data from json file and display the cards
$.getJSON('js/team/card-data.json', function(data){
    for (let i = 0;i < data['card'].length;i++)
    {
        let stars_num = data['card'][i]['stars'];
        let stars = '';
        for (let j = 0;j < stars_num;j++)
        {
            stars += '<i class="fas fa-star"></i>\n';
        }

        $('#team-card-container').append(
            '                <aside class="team-card">\n' +
            '                    <div class="person">\n' +
            '                       <div class="image" style="background-image: url(\'image/people/' + data['card'][i]['image'] + '\')"></div>\n' +
            '                       <h2 class="intro bold">' + data['card'][i]['name'] + '</h2>\n' +
            '                       <h3 class="intro">' + data['card'][i]['job'] + '</h3>\n' +
            '                    </div>\n' +
            '                    <div class="stars-container">\n' + stars + '</div>\n' +
            '                    <p class="description">' + data['card'][i]['description'] + '</p>\n' +
            '                </aside>'
        );
    }
})