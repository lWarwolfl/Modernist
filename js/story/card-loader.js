$.getJSON('js/story/card-data.json', function(data){
    let category = 'all';
    for (let i = 0;i < data['card'][category].length;i++)
    {
        let cards = data['card'][category];
        $('#story-card-container').append(
            '                <aside class="story-card">\n' +
            '                    <h2 class="tag-box">' + cards[i]['category'] + '</h2>\n' +
            '                    <span class="time-description">' + cards[i]['time'] + '</span>\n' +
            '                    <h2 class="title">' + cards[i]['title'] + '</h2>\n' +
            '                    <p class="text">' + cards[i]['text'] + '</p>\n' +
            '                    <div class="writer-box">\n' +
            '                        <div class="writer-image" style="background-image: url(\'image/people/' + cards[i]['writer']['image'] + '\')"></div>\n' +
            '                        <span class="writer-name">' + cards[i]['writer']['name'] + '</span><br>\n' +
            '                        <span class="writer-job">' + cards[i]['writer']['job'] + '</span>\n' +
            '                    </div>\n' +
            '                    <a href="#" class="button-tag">Read more <span class="material-icons-round" style="font-size: 15px">east</span></a>\n' +
            '                    <div class="story-image" style="background-image: url(\'image/story/' + cards[i]['image'] + '\')"></div>\n' +
            '                </aside>\n'
        );
    }
})