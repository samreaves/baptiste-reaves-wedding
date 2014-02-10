/* 
 Baptiste-Reaves Wedding
 Written by Sam Reaves & Brittany Baptiste
 January 29th, 2014
 */

$(function() {

    // Initialize responsive slides
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

    ////////////////////////////////////////////////////
    // Change active tab when user scrolls to section //
    ////////////////////////////////////////////////////
    
    // Make sure if user clicked on nav, don't change active tab as the screen smoothscrolls
    $click = 0;

    function setClickTo0() {
        setTimeout(function() {
            $click = 0;
        }, 500);
    }

    // On scroll, check for scrollTop position. If matches with position of element, change active tab.
    $("#home").waypoint(function() {
        if ($click === 0) {
            $(".navbar-nav").children().removeClass("active");
            $(".navbar-nav li:nth-child(1)").toggleClass("active");
        }
    });
    $("#ourStory").waypoint(function() {
        if ($click === 0) {
            $(".navbar-nav").children().removeClass("active");
            $(".navbar-nav li:nth-child(2)").toggleClass("active");
        }
    });
    $("#bridalParty").waypoint(function() {
        if ($click === 0) {
            $(".navbar-nav").children().removeClass("active");
            $(".navbar-nav li:nth-child(3)").toggleClass("active");
        }
    });
    $("#photos").waypoint(function() {
        if ($click === 0) {
            $(".navbar-nav").children().removeClass("active");
            $(".navbar-nav li:nth-child(4)").toggleClass("active");
        }
    });
    $("#directions").waypoint(function() {
        if ($click === 0) {
            $(".navbar-nav").children().removeClass("active");
            $(".navbar-nav li:nth-child(5)").toggleClass("active");
        }
    });
    $("#rsvp").waypoint(function() {
        $(".navbar-nav").children().removeClass("active");
        $(".navbar-nav li:nth-child(6)").toggleClass("active");
    });
    $("#registry").waypoint(function() {
        if ($click === 0) {
            $(".navbar-nav").children().removeClass("active");
            $(".navbar-nav li:nth-child(7)").toggleClass("active");
        }
    });

    // Disable normal link behavior. Already handled with smoothscroll
    $("a").click(function(e) {
        event.preventDefault();
    });

    // On nav click, reset active tab and smooth scroll to position on site.
    $('.navbar-nav li a').click(function() {
        $click = 1;
        $(this).parent().siblings().removeClass("active");
        $(this).parent().toggleClass("active");
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500).then(setClickTo0());
    });

    //Initialize lazyload
    //$("img.lazy").lazyload();

    // On hover of navbar toggle, toggle style workaround
    $(".navbar-toggle").hover(function() {
        $(this).children().toggleClass("icon-bar-workaround");
    });

    //On navbar toggle click, move the site down below the responsive nav dropdown
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
        }
        ;
    });
});