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
        <br/>
        <img class="img-responsive" src="./images/reavesdividerlogo2.png"/>
        <div class="container">
            <div class="row">
                
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div id="Welcome" class="col-sm-8 col-sm-offset-2">
                    Welcome to our site! We can't wait to celebrate our wedding with you on 
                    September 28th! Until then, we hope our site gives you all the information 
                    you need. <a class="blueLink" href="#rsvp">Don't forget to RSVP!</a> - B + S
                </div>
            </div>
        </div> 
        <div id="ourStory" class="container topPadding">
            <h2 class="center header" id="OurStoryPadding">Our Story</h2>
            <div class="row">
                <div class="col-sm-6">
                    <center><img src="images/BrittsSoloImagePerfect.png"/></center>
                    <h4 id='BrittsBio'>Bride</h4>
                    <p>
                        Hi there! My name is Brittany, but you probably already knew that. Atlanta is my home, but Brooklyn always has my heart. I love cooking almost as much as I love a great cheeseburger. I sing sometimes and listen to music all the time. I'm always up for a good laugh and swapping a story or two over a glass of wine. I'm kind of in love with this guy named Sam...
                    </p>
                </div>
                <div class="col-sm-6">
                    <center><img src="images/SamSoloImageBald.png"/></center>
                    <h4>Groom</h4>
                    <p>
                        Sam loves code and MMA.
                    </p>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-sm-12">
                    <center>
                        <img src="images/brittsamwall.gif" />
                    </center>
                </div>          
            </div>
        </div>      
        <div id="bridalParty" class="container topPadding">
            <hr/>
            <h2 class="center header">Bridal Party</h2>
            <div class="row">
                <div class="col-sm-5">
                    <h3>Bridesmaids</h3>
                    <div class="lovedOne" class="container">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-circle img-responsive bridalPartyInline first" src="images/SkyeandNanaThisOne1.png"/>                     
                            </div>
                            <div class="col-xs-9">
                                <p class="bridalPartyInline">                         
                                    <b>Skye Baptiste:</b> Skye is half of the fun-loving duo that is the Baptiste twins. She's most likely to make
                                    you a collage or video montage that you would adore. She a lover of puppies, kitties and unicorns,
                                    a derby girl, an artist and most importantly, my loveable and snarky little sister, my ride or die. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lovedOne" class="container">
                        <div class="row">
                            <div class="col-xs-9">
                                <p class="bridalPartyInline first">                           
                                    <b>Anais Baptiste:</b> Anais is the second half of the amazing Baptiste twins. To her family and close friends,
                                    she's lovingly called Nana. She's the queen of Belgian waffle-making, a derby girl, a lover of 
                                    design and most importantly my adorable and optimistic little sister, my ride or die. 
                                </p>
                            </div>
                            <div class="col-xs-3">
                                <img class="img-circle img-responsive bridalPartyInline" src="images/NanaThisOne1.png"/>
                            </div>  
                        </div>
                    </div>
                    <div class="lovedOne" class="container">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-circle img-responsive bridalPartyInline first" src="images/MalloryThisOneFirst1.png"/>                     
                            </div>
                            <div class="col-xs-9">
                                <p class="bridalPartyInline">                         
                                    <b>Mallory Baxley:</b> After 10 years of friendship, I know Mallory is one of 
                                    the sweetest people ever. She's also one of the funniest and most awkward and I
                                    know we have many more years of laughter and adventure ahead of us. She a dancer and choreographer,
                                    a woman filled with a quiet strength, a confidant and most importantly, a best friend. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lovedOne" class="container">
                        <div class="row">
                            <div class="col-xs-9">
                                <p class="bridalPartyInline first">                           
                                    <b>Jennifer Therrien:</b> Jennifer is the girl I met in French class in college and just
                                    knew we HAD to be friends. Turns out I was right. She has the biggest heart and cares 
                                    and accepts so many. She's a sociologist, a lover of a certain little furry Man, a giver of 
                                    handmade presents created with love and most importantly an amazing, life-long friend.                       
                                </p>
                            </div>                    
                            <div class="col-xs-3">
                                <img class="img-circle img-responsive bridalPartyInline" src="images/JenniferThisOne1.png"/>
                            </div>
                        </div>
                    </div>
                    <div class="lovedOne" class="container">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-circle img-responsive bridalPartyInline first" src="images/ImaniThisOne1.png"/>                     
                            </div>
                            <div class="col-xs-9">
                                <p class="bridalPartyInline">                         
                                    <b>Imani Ellis:</b> Imani is the one I (quite literally) danced through high school with. We 
                                    sang through hallways and played characters on stage. Imani is the friend that's always been 
                                    there for me and no matter how long it's beens since we last spoke or saw each other, it's 
                                    like no time has passed when we're together. She's a Southern girl with New York in her heart,
                                    a fashion afficionado, a woman with more drive than you can imagine and most importantly an 
                                    awesome, life-long friend. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-sm-offset-1">
                    <h3>Groomsmen</h3>
                    <div class="lovedOne" class="container">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-circle img-responsive bridalPartyInline first" src="images/PhilipThisOne1.png"/>                     
                            </div>
                            <div class="col-xs-9">
                                <p class="bridalPartyInline">                         
                                    <b>Philip Reaves:</b> Philip has been an influential part of my life from day 1. From asking our mother for a brother when he was young, 
                                    driving me to school in middle school, to enveloping me with dance music in in our adult lives, I could not appreciate him more. Always planning
                                    an adventure, his enthusiasm for life shows every day. On September 28th, 2014, Philip will be my <i>best man</i>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lovedOne" class="container">
                        <div class="row">
                            <div class="col-xs-9">
                                <p class="bridalPartyInline first">                           
                                    <b>Darren Head:</b> Darren, a loving husband and father of two, sets the bar high for his life.
                                    He takes care of his family and friends. He plays a major role in <a href="http://www.zacbrownband.com">one of the best selling country artists'</a> 
                                    success each day. Yet despite his lack of me time, he always manages to have enough energy and liveliness 
                                    to make everyone around him smile and laugh. Darren is one of my role models, and he should be one of yours too.
                                </p>
                            </div>
                            <div class="col-xs-3">
                                <img class="img-circle img-responsive bridalPartyInline" src="images/DarrenThisOne1.png"/>
                            </div>  
                        </div>
                    </div>
                    <div class="lovedOne" class="container">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-circle img-responsive bridalPartyInline first" src="images/GriffThisOne1.png"/>                     
                            </div>
                            <div class="col-xs-9">
                                <p class="bridalPartyInline">                         
                                    <b>Griff Fulton:</b> Griff and I first met online, deciding to meet when I was in Manhattan 
                                    interviewing producer/DJ <a href="https://www.facebook.com/sebastienleger">Sebastien Leger</a>. I introduced Griff and his brother - <a href="http://www.youtube.com/watch?v=oXFHVIThTyc">who now DJs for a 
                                        living across the world</a> - to their first clubbing experience, and we've been close friends ever since. 
                                    Despite living 740 miles from each other, we rarely go a day without having a great conversation. Griff is one of 
                                    the few people who lives and breathes dance music with me. I can't wait for you to meet him.
                                    <br/><br/>
                                    Oh - and our music for the occasion will be spun by Griff's brother <a href="https://www.facebook.com/PierceFulton">Pierce</a>. Join us on the dancefloor after the ceremony!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lovedOne" class="container">
                        <div class="row">
                            <div class="col-xs-9">
                                <p class="bridalPartyInline first">                           
                                    <b>Tyler Reid:</b> Tyler and I have been nerding out for nearly two decades. From leading the free world playing Civilization
                                    in 4th grade all the way to building enterprise web applications in our adult lives, Tyler and I have always teamed up 
                                    using our intellect to get where we want to go in life. I'm very sure we will team up to build impactful very soon. After all,
                                    Tyler has already <a href="http://www.tyler-reid.com/dataAnalysis.html">developed an algorithm that predicts hospital visits in an Oregon hospital</a>.

                                </p>
                            </div>                    
                            <div class="col-xs-3">
                                <img class="img-circle img-responsive bridalPartyInline" src="images/TylerThisOne1.png"/>
                            </div>
                        </div>
                    </div>
                    <div class="lovedOne" class="container">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-circle img-responsive bridalPartyInline first" src="images/KaanThisOne1.png"/>                     
                            </div>
                            <div class="col-xs-9">
                                <p class="bridalPartyInline">                         
                                    <b>Kaan Ural:</b> Kaan graced us with his charm when he moved from Turkey in middle school. Since then, he's lived life "70's big" 
                                    and made sure we do the same too. Always providing comedic relief, Kaan is a friend no one feels uncomfortable around, and I'm sure 
                                    everyone will be no match for his rugged good looks.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>           
            <div id="photosBack">
                <div id="photos" class="container topPadding">
                    <h2 class="center header">Photos</h2>
                    <ul class="rslides">
                        <?php
                        /* for ($i = 1; $i <= 120; $i++) {
                          if ($i < 10) {
                          echo "<li><img class=\"lazy\" src=\"./images/photos/converted/brittsam00" . $i . ".jpg\"\></li>";
                          } else if ($i < 100) {
                          echo "<li><img class=\"lazy\" src=\"./images/photos/converted/brittsam0" . $i . ".jpg\"\></li>";
                          } else {
                          echo "<li><img class=\"lazy\" src=\"./images/photos/converted/brittsam" . $i . ".jpg\"\></li>";
                          }
                          } */
                        ?>
                        <li>
                            <img class="lazy" src="./images/photos/1.png"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/2.png"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/3.png"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/4.png"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/5.png"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/6.png"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/7.jpg"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/8.png"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/9.png"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/10.png"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/11.png"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/12.png"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/13.png"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/14.png"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/15.png"/>
                        </li>
                        <li>
                            <img class="lazy" src="./images/photos/16.png"/>
                        </li>
                    </ul>        
                </div>
            </div>
            <div id="directions" class="container topPadding">
                <hr/>
                <h2 class="center header">Directions</h2>
                <div id="courthouse" class="row">
                    <!--                <div class="col-xs-12">
                                        <h4 class="center">Our Venue</h4>
                                         <center><iframe src="https://mapsengine.google.com/map/embed?mid=zVnRrsBSuH_c.kz6hePyLmMwc" width="480" height="480"></iframe></center>
                    -->                    
                    <div class="col-xs-12">
                        <iframe id="venue" class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.4518693219457!2d-84.29631229999998!3d33.7748275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5073e75fc4bfd%3A0x63f5425ba2131ec0!2sDekalb+History+Center+Museum!5e0!3m2!1sen!2sus!4v1392493415013" draggable="0" frameborder="0" style="border:0"></iframe>
                        <h3>Ceremony & Reception</h3>
                        <p>
                            We're getting married at a beautiful old courthouse located in Decatur, GA 
                            -- Atlanta's peaceful and niche suburb to the East. In fact, the venue is 
                            actually called The Old Courthouse on the Square. It was built in the 1800s
                            and it's marble walls and big windows hold a piece of Georgia history. 
                            If you need directions, click the "view in Google maps" link and select 
                            "Directions" in the information box to the left. 
                            <br/>
                            <br/>
                            <b>The wedding ceremony will begin at 6:30pm</b>, so be sure to get there before then!
                            The cocktail hour and reception will both be held in the Old Courthouse as well,
                            so get comfy and have some fun with us!
                            <br/>
                            <br/>
                            If you're driving yourself to the Old Courthouse, you can either park at the current
                            courthouse parking deck located at <b>[ADDRESS]</b> or you can find some street parking closeby
                            (street parking is free on Sundays!).
                        </p>
                    </div>
                    <!--
                                         <div id="venueMap"></div> 
                    
                    
                                    </div>-->
                </div>
                <div id="courtyardDecatur" class="row">
                    <div class="col-xs-12">

                    </div>
                    <!--                <div class="col-sm-6">
                                        <h4 class="center">Courtyard Marriot</h4>
                                        <div id="courtyardMap"></div> -->
                    <iframe id="courtyard" class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.779382211738!2d-84.29722357857621!3d33.77643362072889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10bb615ab0d2dec5!2sCourtyard+Atlanta+Decatur+Downtown%2FEmory!5e0!3m2!1sen!2sus!4v1392493798318" draggable="0" frameborder="0" style="border:0"></iframe>
                    <h3>Courtyard Marriott</h3>
                    <p>
                        The Courtyard Marriott is just down the block from the Old Courthouse 
                        (and that's a Georgia block, not a big Manhattan-sized one). To book a 
                        room here, please contact Marriott reservations at 1-888-236-2427 or contact 
                        the Hotel directly at 404-371-0204. Don't forget to mention you're booking for 
                        the Baptiste/Reaves Wedding and use the group code BRS.
                    </p>
                </div>
                <div id="wMidtown" class="row">
                    <div class="col-xs-12">
                        <iframe id="w" class="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3315.991359400639!2d-84.38165004999999!3d33.7867213!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f504440e448dcd%3A0x2cc2e6d6029cdccd!2sW+Atlanta+-+Midtown!5e0!3m2!1sen!2sus!4v1392493852640" draggable="0" frameborder="0" style="border:0"></iframe>
                        <h3>W Atlanta Midtown</h3>
                        <p>
                            The W Midtown is located in the heart of Atlanta's Midtown area. If you decide to stay
                            here, you'll definitely be a part of all the action! The W was sweet enough to create a
                            personalized site just for our guests! To book a room at the W Midtown, please click
                            <a target="_blank" href="https://www.starwoodmeeting.com/StarGroupsWeb/booking/reservation?id=1402076928&key=7EAE9" class="blueLink2">this link</a>. 
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Things to Do in Decatur</h3>
                        <ul>
                            <li><a class="blueLink2" target="_blank" href="http://www.eddiesattic.com">Eddie's Attic (where John Mayer got his start)</a></li>
                            <li><a class="blueLink2" target="_blank" href="http://decaturfarmersmarket.com/wordpress/">Decatur Farmer's Market</a></li>
                            <li><a class="blueLink2" target="_blank" href="http://www.vicsandwich.com">Victory Sandwich Bar</a></li>
                            <li><a class="blueLink2" target="_blank" href="http://www.theiberianpigatl.com/index">The Iberian Pig</a></li>
                            <li><a class="blueLink2" target="_blank" href="http://www.leonsfullservice.com">Leon's Full Service</a></li>
                            <li><a class="blueLink2" target="_blank" href="http://www.decaturhotyoga.com">Decatur Yoga and Pilates</a></li>
                            <li>For more information & ideas visit: <a class="blueLink2" target="_blank" href="http://www.decaturga.com">www.decaturga.com</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h3>Things to Do in Midtown</h3>
                        <ul>
                            <li><a class="blueLink2" target="_blank" href="http://www.high.org">The High Museum of Art</a></li>
                            <li><a class="blueLink2" target="_blank" href="http://www.piedmontpark.org">Piedmont Park</a></li>
                            <li><a class="blueLink2" target="_blank" href="http://www.georgiaaquarium.org">Georgia Aquarium</a></li>
                            <li><a class="blueLink2" target="_blank" href="http://ecco-atlanta.com">Ecco</a></li>
                            <li><a class="blueLink2" target="_blank" href="http://steelatlanta.com">Steel</a></li>
                            <li><a class="blueLink2" target="_blank" href="http://article14.com">Article 14</a></li>
                            <li>For more information & ideas visit: <a class="blueLink2" target="_blank" href="http://www.midtownatl.com">www.midtownatl.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <div id="RSVPBack">
        <div id="rsvp" class="container topPadding">
            <h2 class="center header">RSVP</h2>
        </div>
    </div>
    <div id="ourRegistryBack">
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
    </div>
    <div id="footerBack">
        <div id="footer" class="container topPadding">
            <center>
                <p>Created by the bride and groom</p>
            </center>
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
