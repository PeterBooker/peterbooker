jQuery('.menu-toggle').on('click', function(e) {
    jQuery('.menu-toggle').toggleClass('active');
    jQuery('.title-bar').toggleClass('active');
    e.preventDefault();
});