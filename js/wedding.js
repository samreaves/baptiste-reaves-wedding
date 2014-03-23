/* 
 Baptiste-Reaves Wedding
 Written by Sam Reaves & Brittany Baptiste
 January 29th, 2014
 */

/* Map Factory */
function initializeMap(lat, long, content, title, divId) {
    var myOptions = {
        center: new google.maps.LatLng(lat, long),
        zoom: 16,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById(divId), myOptions);
    /*'<div id="content">' +
     '<div id="siteNotice">' +
     '</div>' +
     '<h1 id="firstHeading" class="firstHeading">Uluru</h1>' +
     '<div id="bodyContent">' +
     '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
     'sandstone rock formation in the southern part of the ' +
     'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) ' +
     'south west of the nearest large town, Alice Springs; 450&#160;km ' +
     '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major ' +
     'features of the Uluru - Kata Tjuta National Park. Uluru is ' +
     'sacred to the Pitjantjatjara and Yankunytjatjara, the ' +
     'Aboriginal people of the area. It has many springs, waterholes, ' +
     'rock caves and ancient paintings. Uluru is listed as a World ' +
     'Heritage Site.</p>' +
     '<p>Attribution: Uluru, <a href="http://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
     'http://en.wikipedia.org/w/index.php?title=Uluru</a> ' +
     '(last visited June 22, 2009).</p>' +
     '</div>' +
     '</div>';*/

    var infowindow = new google.maps.InfoWindow({
        content: content
    });
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(lat, long),
        map: map,
        title: title,
        maxwidth: 300,
        maxheight: 120
    });
    infowindow.open(map, marker);
}



$(function() {
    
    // Set up Old Courthouse On The Square map
    var courthouseContent = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h3 id="firstHeading" class="firstHeading">Old Courthouse on the Square</h3>' +
            '<div id="bodyContent">' +
            '<p><b>Dekalb History Center Museum<br/>' +
            '101 E Court Sq<br/>' +
            'Decatur, GA 30030<br/><br/>' +
            '<a target="_blank" href="https://www.google.com/maps/place/Dekalb+History+Center+Museum/@33.7748275,-84.2963123,17z/data=!3m1!4b1!4m2!3m1!1s0x88f5073e75fc4bfd:0x63f5425ba2131ec0">View on Google Maps</a></p>' +
            '</div>' +
            '</div>';

    initializeMap(33.774671, -84.296516, courthouseContent, "Old Courthouse on the Square", "courthouse-map");


    // Set up parking garage map
    var parkingContent = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h3 id="firstHeading" class="firstHeading">Parking at Decatur Square</h3>' +
            '<div id="bodyContent">' +
            '<p><b>Parking Garage<br/>' +
            '300 W Trinity Pl<br/>' +
            'Decatur, GA 30030<br/><br/>' +
            '<a target="_blank" href="https://www.google.com/maps/place/300+W+Trinity+Pl/@33.7735728,-84.2990754,17z/data=!3m1!4b1!4m2!3m1!1s0x88f5073cff3157d3:0xdfb3e213f7788005">View on Google Maps</a></p>' +
            '</div>' +
            '</div>';
    initializeMap(33.773573, -84.298875, parkingContent, "Venue Parking", "parking-map");

    // Set up Marriot map
    var marriotContent = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h3 id="firstHeading" class="firstHeading">Marriott on Decatur Square</h3>' +
            '<div id="bodyContent">' +
            '<p><b>Courtyard Marriott<br/>' +
            '130 Clairemont Ave <br/>' +
            'Decatur, GA 30030<br/><br/>' +
            '<a target="_blank" href="https://www.google.com/maps/place/130+Clairemont+Ave/@33.776941,-84.2967518,17z/data=!3m1!4b1!4m2!3m1!1s0x88f50716033a9ae3:0xc3ea9aab6a434f50">View on Google Maps</a></p>' +
            '</div>' +
            '</div>';

    initializeMap(33.776941, -84.296752, marriotContent, "Marriot Decatur", "marriot-map");


    // Set up W Midtown map
    var wContent = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h3 id="firstHeading" class="firstHeading">W in Midtown Atlanta</h3>' +
            '<div id="bodyContent">' +
            '<p><b>W Midtown<br/>' +
            '188 14th St NE<br/>' +
            'Atlanta, GA 30361<br/><br/>' +
            '<a target="_blank" href="https://www.google.com/maps/place/188+14th+St+NE/@33.786612,-84.3819748,17z/data=!3m1!4b1!4m2!3m1!1s0x88f504440e15d84d:0x6d6acd18378ff7b5">View on Google Maps</a></p>' +
            '</div>' +
            '</div>';
    initializeMap(33.786612, -84.381975, wContent, "W Midtown", "w-map");








    // Reset click event for our scroll tracking function that works only when mouse is clicked
    $.fn.setClickToZero = function() {
        return this.each(function() {
            setTimeout(function() {
                $click = 0;
            }, 500);
        });
    };
    // Initialize responsive slides
    $(".rslides").responsiveSlides({
        auto: false,
        pager: true,
        nav: true,
        speed: 1500,
        maxwidth: 800,
        namespace: "centered-btns"
        
        /*auto: true, // Boolean: Animate automatically, true or false
        speed: 500, // Integer: Speed of the transition, in milliseconds
        timeout: 4000, // Integer: Time between slide transitions, in milliseconds
        pager: true, // Boolean: Show pager, true or false
        nav: true, // Boolean: Show navigation, true or false
        random: false, // Boolean: Randomize the order of the slides, true or false
        pause: false, // Boolean: Pause on hover, true or false
        pauseControls: true, // Boolean: Pause when hovering controls, true or false
        prevText: "Previous", // String: Text for the "previous" button
        nextText: "Next", // String: Text for the "next" button
        maxwidth: "", // Integer: Max-width of the slideshow, in pixels
        maxheight: "300",
        navContainer: "", // Selector: Where controls should be appended to, default is after the 'ul'
        manualControls: "", // Selector: Declare custom pager navigation
        namespace: "rslides", // String: Change the default namespace used
        before: function() {
        }, // Function: Before callback
        after: function() {
        }   */  // Function: After callback
    });
    
    ////////////////////////////////////////////////////
    // Change active tab when user scrolls to section //
    ////////////////////////////////////////////////////

    // Make sure if user clicked on nav, don't change active tab as the screen smoothscrolls
    $click = 0;
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
    // On nav click, reset active tab and smooth scroll to position on site.
    $('.navbar-nav li a, .blueLink').click(function(event) {
        event.preventDefault();
        $click = 1;
        $(this).parent().siblings().removeClass("active");
        $(this).parent().toggleClass("active");
        $('html, body').animate({
            scrollTop: $(
                    $.attr(this, 'href'))
                    .offset()
                    .top
        }, 500).setClickToZero();
    });
    //Initialize lazyload
    $("img.lazy").lazyload();
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
            $(".navbar-collapse").slideToggle();
        }
        else if (navClick === 1) {
            $("#headPicture").animate({
                marginTop: '0'
            }, 280);
            navClick = 0;
            $(".navbar-collapse").slideToggle();
        }
        ;
    });
});