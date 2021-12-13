//display category bar
function expand_category() {
    $('#category-bar-mobile').css({'max-height':'3000px','padding':'20px'});
    $('#category-bar-mobile-expand svg.expand').replaceWith('<i class="fas fa-chevron-up expand"></i>');
    $('#category-bar-mobile-expand').attr('onclick','hide_category()');
}
function hide_category() {
    $('#category-bar-mobile').css({'max-height':'0','padding':'0 20px'});
    $('#category-bar-mobile-expand svg.expand').replaceWith('<i class="fas fa-chevron-down expand"></i>');
    $('#category-bar-mobile-expand').attr('onclick','expand_category()');
}
//hide search bar when user clicked outside of it
document.addEventListener("click", (evt) => {
    let targetElement = evt.target; // clicked element

    const bar = document.getElementById("category-bar-mobile-expand");
    const expander = document.getElementById("category-bar-mobile");

    do {
        if (targetElement === bar || targetElement === expander) {
            return;
        }
        targetElement = targetElement.parentNode;
    } while (targetElement);

    $('#category-bar-mobile').css({'max-height':'0','padding':'0 20px'});
    $('#category-bar-mobile-expand svg.expand').replaceWith('<i class="fas fa-chevron-down expand"></i>');
    $('#category-bar-mobile-expand').attr('onclick','expand_category()');
});