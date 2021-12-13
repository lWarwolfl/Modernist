//reads card data from json file and displays the cards
$.getJSON('js/story/card-data.json', function(data){
    let category = 'all';
    for (let i = 0;i < data['card'][category].length;i++)
    {
        let cards = data['card'][category];
        $('#story-card-container').append(
            '           <aside class="story-card">' +
            '                 <div class="story-image" style="background-image: url(\'image/story/' + cards[i]['image'] + '\')"></div>\n' +
            '                 <div class="text-container">\n' +
            '                    <h2 class="tag-box">' + cards[i]['category'] + '</h2>\n' +
            '                    <span class="time-description">' + cards[i]['time'] + '</span>\n' +
            '                    <h2 class="title">' + cards[i]['title'] + '</h2>\n' +
            '                    <p class="text">' + cards[i]['text'] + '</p>\n' +
            '                    <div class="writer-box">\n' +
            '                        <div class="writer-image" style="background-image: url(\'image/people/' + cards[i]['writer']['image'] + '\')"></div>\n' +
            '                        <span class="writer-name">' + cards[i]['writer']['name'] + '</span><br>\n' +
            '                        <span class="writer-job">' + cards[i]['writer']['job'] + '</span>\n' +
            '                    </div>\n' +
            '                    <a href="story.html?id=' + i + '&category=' + category + '" class="button-tag">Read more <i class="fas fa-arrow-right"></i></a>\n' +
            '                 </div>' +
            '           </aside>\n'
        );
    }
});