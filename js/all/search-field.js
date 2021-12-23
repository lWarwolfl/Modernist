//display search bar
function expand_search() {
    $('.top-nav .link').css('display', 'none');
    $('#top-search-bar').css('width', '534px');
}
//hide search bar when user clicked outside of it
document.addEventListener("click", (evt) => {
    const bar = document.getElementById("top-search-bar");
    const button = document.getElementById("top-search-expand");
    let targetElement = evt.target; // clicked element

    do {
        if (targetElement === bar || targetElement === button) {
            return;
        }
        targetElement = targetElement.parentNode;
    } while (targetElement);
    $('.top-nav .link').css('display', 'inline-block');
    $('#top-search-bar').css('width', '0');
});

//display mobile bar
function expand_search_mobile() {
    $('.mobile-nav-bar .link').css('opacity', '0');
    $('#mobile-search-bar').css('width', 'calc(100% - 20px)');
}
//hide search bar when user clicked outside of it
document.addEventListener("click", (evt) => {
    const bar = document.getElementById("mobile-search-bar");
    const button = document.getElementById("mobile-search-expand");
    const button_close = document.getElementById("mobile-search-close");
    let bars = $('#mobile-search-bar');
    let links = $('.mobile-nav-bar .link');
    let targetElement = evt.target; // clicked element

    do {
        if (targetElement === bar || targetElement === button) {
            return;
        }
        if (targetElement === button_close) {
            links.css('opacity', '1');
            bars.css('width', '0');
        }
        targetElement = targetElement.parentNode;
    } while (targetElement);
    links.css('opacity', '1');
    bars.css('width', '0');
});