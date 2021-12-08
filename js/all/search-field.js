//display search bar
function expand_search() {
    $('.top-nav .link').css('display', 'none');
    $('#top-search-bar').css('width', '500px');
}
//hide search bar when user clicked outside of it
document.addEventListener("click", (evt) => {
    const bar = document.getElementById("top-search-bar");
    const button = document.getElementById("top-search-expand");
    let targetElement = evt.target; // clicked element

    do {
        if (targetElement == bar || targetElement == button) {
            return;
        }
        targetElement = targetElement.parentNode;
    } while (targetElement);
    $('.top-nav .link').css('display', 'inline-block');
    $('#top-search-bar').css('width', '0');
});