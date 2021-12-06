$.getJSON('js/team/card-data.json', function(data){
    for (let i = 0;i < data['card'].length;i++)
    {
        let stars_num = data['card'][i]['stars'];
        let stars = '';
        for (let j = 0;j < stars_num;j++)
        {
            stars += '<span class="material-icons-round">grade</span>\n';
        }

        $('#team-card-container').append(
            '                <aside class="team-card">\n' +
            '                    <div class="image" style="background-image: url(\'image/people/' + data['card'][i]['image'] + '\')"></div>\n' +
            '                    <div class="text-container">\n' +
            '                        <p class="description">' + data['card'][i]['description'] + '</p>\n' +
            '                        <h2 class="name">' + data['card'][i]['name'] + '</h2>\n' +
            '                        <h3 class="job">' + data['card'][i]['job'] + '</h3>\n' +
            '                        <div class="stars-container">\n' + stars + '</div>\n' +
            '                    </div>\n' +
            '                </aside>'
        );
    }
})