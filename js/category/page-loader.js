//splitting window location to store $_GET values inside a variable
let parts = window.location.search.substr(1).split("&");
let GET = {};
for (let i = 0; i < parts.length; i++) {
    let temp = parts[i].split("=");
    GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
}

$.getJSON('js/category/card-data.json', function(data){
    let category = GET['category'];
    for (let i = 0;i < data['card'].length;i++)
    {
        let cards = data['card'][category];
    }
})