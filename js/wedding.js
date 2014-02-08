/* 
 Baptiste-Reaves Wedding
 Written by Sam Reaves & Brittany Baptiste
 January 29th, 2014
 */

$(function() {
    $(".rslides").responsiveSlides({
        auto: true, // Boolean: Animate automatically, true or false
        speed: 500, // Integer: Speed of the transition, in milliseconds
        timeout: 4000, // Integer: Time between slide transitions, in milliseconds
        pager: false, // Boolean: Show pager, true or false
        nav: false, // Boolean: Show navigation, true or false
        random: false, // Boolean: Randomize the order of the slides, true or false
        pause: false, // Boolean: Pause on hover, true or false
        pauseControls: true, // Boolean: Pause when hovering controls, true or false
        prevText: "Previous", // String: Text for the "previous" button
        nextText: "Next", // String: Text for the "next" button
        maxwidth: "", // Integer: Max-width of the slideshow, in pixels
        navContainer: "", // Selector: Where controls should be appended to, default is after the 'ul'
        manualControls: "", // Selector: Declare custom pager navigation
        namespace: "rslides", // String: Change the default namespace used
        before: function() {
        }, // Function: Before callback
        after: function() {
        }     // Function: After callback
    });
    $('a').click(function() {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
        return false;
    });
    //$("img.lazy").lazyload();
    $(".navbar-toggle").hover(function() {
        $(this).children().toggleClass("icon-bar-workaround");
    });
    //$(".navbar-toggle").click(function() {
    var navClick = 0;
    $(".navbar-toggle").click(function() {
        if (navClick === 0) {
            $("#headPicture").animate({
                marginTop: '295'
            }, 280);
            navClick = 1;
        }
        else if (navClick === 1) {
            $("#headPicture").animate({
                marginTop: '0'
            }, 280);
            navClick = 0;
        };
    });
});


