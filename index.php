<!DOCTYPE html>
<!--
    Baptiste-Reaves Wedding
    Written by Sam Reaves & Brittany Baptiste 
    January 29th, 2014
-->
<html>
    <head>
        <title>We're Getting Married</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./js/gallery/responsiveslides.css" rel="stylesheet" type="text/css"/>
        <link href="./css/style.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        < !--[if lt IE 9] >
        <script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" ></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style>
            .col-md-9 {
                background: #999;
            }
        </style>
    </head>
    <body>
        <div id="home"></div>
        <!-- navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">
                        Toggle Navigation
                    </span>
                    <span class="icon-bar icon-bar-workaround"></span>
                    <span class="icon-bar icon-bar-workaround"></span>
                    <span class="icon-bar icon-bar-workaround"></span>

                </button>
                <a class="navbar-brand">B&amp;S</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#home">Home</a>
                    </li>
                    <li><a href="#ourStory">Our Story</a></li>
                    <li><a href="#bridalParty">Bridal Party</a></li>
                    <li><a href="#photos">Photos</a></li>
                    <li><a href="#directions">Directions</a></li>
                    <li><a href="#rsvp">RSVP</a></li>
                    <li><a href="#registry">Registry</a></li>
                </ul>
            </div>
        </nav>
        <!-- end navigation -->
        <div class="spacer"></div>
        <img src="./images/steps4.png" alt="Brittany Baptiste & Sam Reaves" id="headPicture" class="img-responsive"/>
        <div id="ourStory" class="container topPadding">
            <h2 class="center header">Our Story</h2>
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="center">B</h2>
                    <h4>Bride</h4>
                    <p>
                        Brittany loves cooking, calligraphy, and graphic design
                    </p>
                </div>
                <div class="col-sm-6">
                    <h2 class="center">S</h2>
                    <h4>Groom</h4>
                    <p>
                        Sam loves code and MMA.
                    </p>
                </div>
            </div>
            <h2 class="center">&</h2>
            <div class="row">
                <div class="col-sm-6">
                    <h4>2008</h4>
                    <p>
                        GSU this. GSU that.
                    </p>
                </div>
                <div class="col-sm-6">
                    <h4>Groom</h4>
                    <p>
                        Phone? There's a phone icon.
                    </p>
                </div>          
            </div>
        </div>
        <div id="bridalParty" class="container topPadding">
            <h2 class="center header">Bridal Party</h2>
            <div class="row">
                <div class="col-sm-6">
                    <h4>Bridesmaids</h4>
                    <p>
                        GSU this. GSU that.
                    </p>
                </div>
                <div class="col-sm-6">
                    <h4>Groomsmen</h4>
                    <p>
                        Phone? There's a phone icon.
                    </p>
                </div>                    
            </div>
        </div>
        <div id="photos" class="container topPadding">
            <h2 class="center header">Photos</h2>
            <ul class="rslides">
                <?php /*
                  for ($i = 1; $i <= 120; $i++) {
                  if ($i < 10) {
                  echo "<li><img class=\"lazy\" src=\"./images/photos/brittsam00" . $i . ".jpg\"\></li>";
                  } else if ($i < 100) {
                  echo "<li><img class=\"lazy\" src=\"./images/photos/brittsam0" . $i . ".jpg\"\></li>";
                  } else {
                  echo "<li><img class=\"lazy\" src=\"./images/photos/brittsam" . $i . ".jpg\"\></li>";
                  }
                  } */
                ?>
            </ul>        
        </div>
        <div id="directions" class="container topPadding">
            <h2 class="center header">Directions</h2>
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="center">Our Venue</h4>
                    <!-- <center><iframe src="https://mapsengine.google.com/map/embed?mid=zVnRrsBSuH_c.kz6hePyLmMwc" width="480" height="480"></iframe></center>
                    -->
                    <div id="venueMap"></div>
                    <!--
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?t=h&amp;sll=33.7748275,-84.2963123&amp;sspn=0.0016637,0.0026687&amp;q=Dekalb+History+Center+Museum&amp;cid=0x63f5425ba2131ec0&amp;ie=UTF8&amp;hq=Dekalb+History+Center+Museum&amp;hnear=&amp;ll=33.774828,-84.296312&amp;spn=0.006295,0.006295&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?t=h&amp;sll=33.7748275,-84.2963123&amp;sspn=0.0016637,0.0026687&amp;q=Dekalb+History+Center+Museum&amp;cid=0x63f5425ba2131ec0&amp;ie=UTF8&amp;hq=Dekalb+History+Center+Museum&amp;hnear=&amp;ll=33.774828,-84.296312&amp;spn=0.006295,0.006295&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                    -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="center">Courtyard Marriot</h4>
                    <div id="courtyardMap"></div>
                    <!--
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=courtyard+marriott+near+Decatur,+GA&amp;aq=0&amp;oq=courtyard+marriott+de&amp;sll=33.775202,-84.296317&amp;sspn=0.001958,0.00284&amp;t=h&amp;ie=UTF8&amp;hq=courtyard+marriott&amp;hnear=Decatur,+DeKalb,+Georgia&amp;fll=33.776704,-84.296583&amp;fspn=0.002135,0.00284&amp;st=101124652325230410087&amp;rq=1&amp;ev=zi&amp;split=1&amp;ll=33.861906,-84.265015&amp;spn=0.002135,0.00284&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=courtyard+marriott+near+Decatur,+GA&amp;aq=0&amp;oq=courtyard+marriott+de&amp;sll=33.775202,-84.296317&amp;sspn=0.001958,0.00284&amp;t=h&amp;ie=UTF8&amp;hq=courtyard+marriott&amp;hnear=Decatur,+DeKalb,+Georgia&amp;fll=33.776704,-84.296583&amp;fspn=0.002135,0.00284&amp;st=101124652325230410087&amp;rq=1&amp;ev=zi&amp;split=1&amp;ll=33.861906,-84.265015&amp;spn=0.002135,0.00284" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                    -->
                </div>
                <div class="col-sm-6">
                    <h4 class="center">W Midtown</h4>
                    <div id="wMap"></div>
                    <!--
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=W+Atlanta+-+Midtown,+14th+Street+Northeast,+Atlanta,+GA&amp;aq=0&amp;oq=w+midtown&amp;sll=33.776704,-84.296583&amp;sspn=0.002135,0.00284&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=33.786952,-84.381661&amp;spn=0.006295,0.006295&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=W+Atlanta+-+Midtown,+14th+Street+Northeast,+Atlanta,+GA&amp;aq=0&amp;oq=w+midtown&amp;sll=33.776704,-84.296583&amp;sspn=0.002135,0.00284&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=33.786952,-84.381661&amp;spn=0.006295,0.006295" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                    -->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h4>Things to Do</h4>
                </div>
            </div>
        </div>

        <div id="rsvp" class="container topPadding">
            <h2 class="center header">RSVP</h2>
        </div>
        <div id="registry" class="container topPadding">
            <h2 class="center header">Registry</h2>
            <div class="row">
                <div class="col-sm-4">
                    <center><a href="http://www.crateandbarrel.com/Gift-Registry/Brittany-Baptiste-and-Sam-Reaves/r4619566"><img src="./images/crateAndBarrel.png" class="img-circle img-responsive"/></a></center>
                </div>
                <div class="col-sm-4">
                    <center><a href="http://www2.myregistry.com/Visitors/GiftList/?panel=GuestBook"><img src="./images/myRegistry.png" class="img-circle img-responsive"/></a></center>
                </div>
                <div class="col-sm-4">
                    <center><a href="http://www1.macys.com/registry/wedding/guest/?registryId=6090352"><img src="./images/macys.png" class="img-circle img-responsive"/></a></center>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src='./js/waypoints.min.js'</script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/wedding.js"></script>
        <!--<script type="text/javascript" src="https://raw.github.com/tuupola/jquery_lazyload/master/jquery.lazyload.min.js"></script>-->
        <script src="./js/gallery/responsiveslides.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaHr3QdelytOo6L2DV_R_XZ3zUicjnEL0&sensor=false">
        </script>
        <script type="text/javascript">
            function initialize() {
                var venueOptions = {
                    center: new google.maps.LatLng(33.77493, -84.29699),
                    zoom: 2
                };
                var venueMap = new google.maps.Map(document.getElementById("venueMap"),
                        venueOptions);
                var wOptions = {
                    center: new google.maps.LatLng(-34.397, 150.644),
                    zoom: 8
                };
                var wMap = new google.maps.Map(document.getElementById("wMap"),
                        wOptions);
                var courtyardOptions = {
                    center: new google.maps.LatLng(-34.397, 150.644),
                    zoom: 8
                };
                var courtyardMap = new google.maps.Map(document.getElementById("courtyardMap"),
                        courtyardOptions);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>
