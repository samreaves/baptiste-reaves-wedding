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
                <?php
                for ($i = 1; $i <= 120; $i++) {
                    if ($i < 10) {
                        echo "<li><img class=\"lazy\" src=\"./images/photos/brittsam00" . $i . ".jpg\"\></li>";
                    } else if ($i < 100) {
                        echo "<li><img class=\"lazy\" src=\"./images/photos/brittsam0" . $i . ".jpg\"\></li>";
                    } else {
                        echo "<li><img class=\"lazy\" src=\"./images/photos/brittsam" . $i . ".jpg\"\></li>";
                    }
                }
                ?>
            </ul>        
        </div>
        <div id="directions" class="container topPadding">
            <h2 class="center header">Directions</h2>
            <div id="courthouse" class="row">                  
                <div class="col-xs-12">
                    <iframe id="venue" class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.4518693219457!2d-84.29631229999998!3d33.7748275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5073e75fc4bfd%3A0x63f5425ba2131ec0!2sDekalb+History+Center+Museum!5e0!3m2!1sen!2sus!4v1392493415013" draggable="0" frameborder="0" style="border:0"></iframe>
                    <p>
                        We're getting married at a beautiful 1800s marble courthouse in Decatur, GA -- Atlanta's peaceful and niche suburb to the East. If you need directions, click the "view in Google maps" link and select "Directions" in the information box to the left.
                    </p>
                </div>
            </div>
            <div id="courtyardDecatur" class="row">
                <div class="col-xs-12">
                    <iframe id="courtyard" class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.779382211738!2d-84.29722357857621!3d33.77643362072889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10bb615ab0d2dec5!2sCourtyard+Atlanta+Decatur+Downtown%2FEmory!5e0!3m2!1sen!2sus!4v1392493798318" draggable="0" frameborder="0" style="border:0"></iframe>
                    <p>
                        We're getting married at a beautiful 1800s marble courthouse in Decatur, GA -- Atlanta's peaceful and niche suburb to the East. If you need directions, click the "view in Google maps" link and select "Directions" in the information box to the left.
                    </p>
                </div>
            </div>
            <div id="wMidtown" class="row">
                <div class="col-xs-12">
                    <iframe id="w" class="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3315.991359400639!2d-84.38165004999999!3d33.7867213!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f504440e448dcd%3A0x2cc2e6d6029cdccd!2sW+Atlanta+-+Midtown!5e0!3m2!1sen!2sus!4v1392493852640" draggable="0" frameborder="0" style="border:0"></iframe>
                    <p>
                        We're getting married at a beautiful 1800s marble courthouse in Decatur, GA -- Atlanta's peaceful and niche suburb to the East. If you need directions, click the "view in Google maps" link and select "Directions" in the information box to the left.
                    </p>
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
                    <center><a href="http://www.crateandbarrel.com/Gift-Registry/Brittany-Baptiste-and-Sam-Reaves/r4619566"><img src="./images/crateAndBarrel.png" class="rsvpBorder img-circle img-responsive"/></a></center>
                </div>
                <div class="col-sm-4">
                    <center><a href="http://www2.myregistry.com/Visitors/GiftList/?panel=GuestBook"><img src="./images/myRegistry.png" class="rsvpBorder img-circle img-responsive"/></a></center>
                </div>
                <div class="col-sm-4">
                    <center><a href="http://www1.macys.com/registry/wedding/guest/?registryId=6090352"><img src="./images/macys.png" class="rsvpBorder img-circle img-responsive"/></a></center>
                </div>
            </div>
        </div>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src='./js/waypoints.min.js'</script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/gallery/responsiveslides.min.js"></script>
        <script src="./js/wedding.js"></script>
        <script type="text/javascript" src="https://raw.github.com/tuupola/jquery_lazyload/master/jquery.lazyload.min.js"></script>
    </body>
</html>
