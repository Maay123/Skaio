<?php
  include "App/database/db.php";
  include "App/helpers/validateUser.php";
  include "App/controllers/users.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Skaoi</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
<body>
    <br><br>
    <?php
        include "App/blocks/header.php";
      ?>
    <br><br>
    <header class="nav-down responsive-nav hidden-lg hidden-md">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <nav>
                    <ul class="nav navbar-nav">
                        <li><a href="#top">Home</a></li>
                        <li><a href="#Lifts">Lifts</a></li>
                        <li><a href="#projects">Recent Projects</a></li>
                        <li><a href="#video">Presentation</a></li>
                        <li><a href="#blog">World Cup</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="sidebar-navigation hidde-sm hidden-xs">
            
            <a href="index.html">ENG</a>|<a href="indexgeo.html">GEO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php">Registration \ Login</a> 
            <div class="logo">
                <a href="#">Skaoi<em><img src="img/logo.png" alt="Girl in a jacket" width="120" height="80"></em></a>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="#top">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#Lifts">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Lifts
                        </a>
                    </li>
                    <li>
                        <a href="#projects">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Recent Projects
                        </a>
                    </li>
                    <li>
                        <a href="#video">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Presentation
                        </a>
                    </li>
                    <li>
                        <a href="#blog">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            World Cup
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Contact Us/ Location
                        </a>
                    </li>
                </ul>
            </nav>
            <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
        </div>

        <!-- //item -->
        <div class="slider">
            <div class="Modern-Slider content-section" id="top">
                <!-- Item -->
                <div class="item item-1">
                    <div class="img-fill">
                    <div class="image"></div>
                    <div class="info">
                        <div>
                          <h1>GUDAURI<br>RESORT</h1>
                          <p>young and rapid developing winter sports resort located at Kazbegi region of Georgia,<br>120 km from Tbilisi, at the height of 2,196 m (about 7,200 feet) near the Cross Pass. <br>Skiing season asts from December to April, comfort skiing on all routes. <br>
                            In May skiing is possible on the five (highest) lift or even on the second lift in snow years</p>
                          <div class="white-button button">
                              <a href="gudauri.html">Continue</a>
                          </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- // Item -->
                <!-- Item -->
                <div class="item item-2">
                    <div class="img-fill">
                        <div class="image"></div>
                        <div class="info">
                        <div>
                          <h1>BAKURIANI <br>RESORT </h1>
                          <p>The region around Bakuriani is covered by coniferous forests (mainly made up of spruce). <br>The resort lies 30 km (19 mi) from Borjomi and is located within the so-called <br>Bakuriani Depression/caldera. The resort is connected with Borjomi by an electrified narrow-gauge railway.
							<br>The present-day area of the town was built up by lava flows from the nearby Mukhera volcano.</p>
                          
                          <div class="white-button button">
                              <a href="bakuriani.html">Continue</a>
                          </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- // Item -->
                <!-- Item -->
                <div class="item item-3">
                    <div class="img-fill">
                        <div class="image"></div>
                        <div class="info">
                        <div>
                          <h1>MESTIA<br>RESORT</h1>
                          <p>Mestia IPA: [mɛstʼiɑ]) is a highland townlet (daba) in <br> northwest Georgia, at an elevation of 1,500 metres <br> (4,921 feet) in the Caucasus Mountains.Mestia is located in the Svaneti<br> region of Samegrelo-Zemo Svaneti province (mkhare), some 128 kilometres<br> (80 miles) northeast of the regional capital of Zugdidi. <br>Mestia and the adjoining 132 villages form Mestia District</p>
                          
                          <div class="white-button button">
                              <a href="mestia.html">Continue</a>
                          </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- // Item -->
           
        <div class="item item-4">
            <div class="img-fill">
                <div class="image"></div>
                <div class="info">
                <div>
                  <h1>GODERDZI<br>RESORT</h1>
                  <p>located in Adjara region, south-west part of Georgia, at an elevation of 2027 meters MSL. <br> It's 252 kilometers away from Tbilisi and 109 <br> kilometers away from Batumi. Annual precipitation of this place is <br> highercompared to other ski resorts because it's close to the Black Sea.</p>
                  
                  <div class="white-button button">
                      <a href="goderdzi.html">Continue</a>
                  </div>
                </div>
                </div>
            </div>
        </div>
        <!-- // Item -->
    </div>
</div>
<!-- lifts potoebi -->
        <div class="page-content">
            <section id="Lifts" class="content-section">
                <div class="section-heading">
                    <h1>Lifts<br><em>Places</em></h1>
                    <p>Praesent pellentesque efficitur magna, 
                    <br>sed pellentesque neque malesuada vitae.</p>
                </div>
                <div class="section-content">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="image">
                                <img src="img/BakurianiLifts/1.png" alt="">
                                <div class="featured-button button">
                                    <a href="#projects">Continue Reading</a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Lorem ipsum dolor</h4>
                                <span>Proin et sapien</span>
                                <p>#1 You are allowed to use Sentra Template for your business or client websites. You can use it for commercial or non-commercial or educational purposes.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/BakurianiLifts/2.png" alt="">
                                <div class="featured-button button">
                                    <a href="#projects">Continue Reading</a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Phasellus a lacus ac odio</h4>
                                <span>Maximus</span>
                                <p>#2 You are NOT allowed to re-distribute this on any template website. You <strong>can post</strong> a screenshot and a link back to original template page on your blog or site. Thank you.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/BakurianiLifts/3.jpeg" alt="">
                                <div class="featured-button button">
                                    <a href="#projects">Continue Reading</a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Proin sit amet fringilla</h4>
                                <span>Vulputate</span>
                                <p>#3 Aliquam mollis lacus eget metus efficitur lobortis. Suspendisse libero lacus, accumsan vitae commodo tristique, luctus gravida metus.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/BakurianiLifts/4.jpeg" alt="">
                                <div class="featured-button button">
                                    <a href="#projects">Continue Reading</a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>In volutpat augue lectus</h4>
                                <span>Elementum</span>
                                <p>#4 Aliquam mollis lacus eget metus efficitur lobortis. Suspendisse libero lacus, accumsan vitae commodo tristique, luctus gravida metus.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/BakurianiLifts/5.jpeg" alt="">
                                <div class="featured-button button">
                                    <a href="#projects">Continue Reading</a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Cras commodo odio</h4>
                                <span>Aliquam</span>
                                <p>#5 Mauris lacinia pretium libero, ut tincidunt lacus molestie ornare. Phasellus a facilisis erat. Praesent eleifend nibh mauris, quis sodales lorem convallis pulvinar.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/BakurianiLifts/6.jpeg" alt="">
                                <div class="featured-button button">
                                    <a href="#projects">Continue Reading</a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Sed at massa turpis</h4>
                                <span>Curabitur</span>
                                <p>#6 Vestibulum tincidunt ornare ligula vel molestie. Curabitur hendrerit mauris mollis ipsum vulputate rutrum. Phasellus luctus odio eget dui imperdiet.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/BakurianiLifts/7.jpeg" alt="">
                                <div class="featured-button button">
                                    <a href="#projects">Continue Reading</a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Aliquam mollis lacus</h4>
                                <span>Suspendisse</span>
                                <p>#7 Suspendisse suscipit nulla sed nisl fermentum, auctor suscipit nunc rhoncus. Proin faucibus metus diam, nec hendrerit purus pharetra in.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/BakurianiLifts/baku2.jpeg" alt="">
                                <div class="featured-button button">
                                    <a href="#projects">Continue Reading</a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Mauris lacinia pretium</h4>
                                <span>Vestibulum</span>
                                <p>#8 Suspendisse suscipit nulla sed nisl fermentum, auctor suscipit nunc rhoncus. Proin faucibus metus diam, nec hendrerit purus pharetra in.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/BakurianiLifts/8.jpeg" alt="">
                                <div class="featured-button button">
                                    <a href="#projects">Continue Reading</a>
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>Proin sit amet fringilla erat</h4>
                                <span>Convallis</span>
                                <p>#9 Suspendisse suscipit nulla sed nisl fermentum, auctor suscipit nunc rhoncus. Proin faucibus metus diam, nec hendrerit purus pharetra in.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="projects" class="content-section">
                <div class="section-heading">
                    <h1>Recent<br><em>Projects</em></h1>
                    <p>Praesent pellentesque efficitur magna, 
                    <br>sed pellentesque neque malesuada vitae.</p>
                </div>
                <div class="section-content">
                    <div class="masonry">
                        <div class="row">
                            <div class="item">
                                <div class="col-md-8">
                                    <a href="img/proj1.jpeg" data-lightbox="image"><img src="img/proj1.jpeg" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item second-item">
                                <div class="col-md-4">
                                    <a href="img/proj2.jpeg" data-lightbox="image"><img src="img/proj2.jpeg" alt="image 2"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/proj3.jpeg" data-lightbox="image"><img src="img/proj3.jpeg" alt="image 3"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="img/proj4.jpeg" data-lightbox="image"><img src="img/proj4.jpeg" alt="image 4"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-8">
                                    <a href="img/proj5.png" data-lightbox="image"><img src="img/proj5.png" alt="image 5"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </section>
            <section id="video" class="content-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h1>This is a <em>Georgia</em> presentation.</h1>
                            <p>Georgia (Sakartvelo) is a country located in the Caucasus, at the intersection of Eastern Europe and Western Asia. It is bounded by the Black Sea to the west, by Russia to the north and east, by Turkey to the southwest, by Armenia to the south, and by Azerbaijan to the southeast. The country covers an area of 69,700 square kilometres, and has a population of 3.7 million people </p>
                        </div>
                        <div class="text-content">
                            
                        </div>
                        <div class="accent-button button">
                            <a href="https://en.wikipedia.org/wiki/Georgia_(country)">Continue Reading</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box-video">
                            <div class="bg-video" <img src="https://cdn.theculturetrip.com/wp-content/uploads/2019/04/georgia-country--tracy-ben-shutterstock.jpg" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb KAlRDb" alt="Georgia, Europe travel guide" data-noaft="1" style="width: 356.8215892053973px; height: 238px; margin: 0px;">;">
                                <div class="bt-play">Play</div>
                            </div>
                            <div class="video-container">
                                <iframe width="100%" height="520" src="https://www.youtube.com/embed/KNUcUBdYT58" title="YouTube video player" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="blog" class="content-section">
                <div class="section-heading">
                    <h1>Ski World<br><em>Cup</em></h1>
                    <p>Curabitur hendrerit mauris mollis ipsum vulputate rutrum. 
                    <br>Phasellus luctus odio eget dui imperdiet.</p>
                </div>
                <div class="section-content">
                    <div class="tabs-content">
                        <div class="wrapper">
                            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                              <li><a href="#tab1" class="active">February 2022</a></li>
                              <li><a href="#tab3">February 2023</a></li>
                              <li><a href="#tab4">March 2023</a></li>
                            </ul>
                            <section id="first-tab-group" class="tabgroup">
                                <div id="tab1">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <img src="img/slalom1.jpeg" alt="">
                                                <div class="text-content">
                                                    <h4>Parallel Slalom (Snowboard)</h4>
                                                    <span>19 February 2022</span>
                                                    <p>The men's parallel giant slalom competition in snowboarding at the 2022 Winter Olympics was held on 8 February, at the Genting Snow Park in Zhangjiakou.[1] The event was won by Benjamin Karl of Austria, the 2010 silver and 2014 bronze medalist. Tim Mastnak of Slovenia won silver, his first Olympic medal.</p>
                                                
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="img/slalom2.jpeg" alt="">
                                                <div class="text-content">
                                                    <h4>Giant Slalom (Snowboard)</h4>
                                                    <span>20 February 2022</span>
                                                    <p>Giant slalom (GS) is an alpine skiing and alpine snowboarding discipline. It involves skiing between sets of poles ("gates") spaced at a greater distance from each other than in slalom but less than in Super-G.</p>
                                                 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="img/slalom3.jpeg" alt="">
                                                <div class="text-content">
                                                    <h4>Freeski (Snowboard)</h4>
                                                    <span>21 February 2022</span>
                                                    <p>Freeskiing, or new school skiing, is a specific type of alpine skiing, which involves tricks, jumps, and terrain park features, such as rails, boxes, jibs, or other obstacles. This form of skiing resulted from the growth of snowboarding combined with the progression of freestyle skiing. </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                               
                                <div id="tab3">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <img src="img/march1.jpeg" alt="">
                                                <div class="text-content">
                                                    <h4>Slalom Sking</h4>
                                                    <span>5 February 2023</span>
                                                    <p>Slalom is an alpine skiing and alpine snowboarding discipline, involving skiing between poles or gates. These are spaced more closely than those in giant slalom, super giant slalom and downhill, necessitating quicker and shorter turns. </p>
                                                   
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="img/march2.jpeg" alt="">
                                                <div class="text-content">
                                                    <h4>Snowboard</h4>
                                                    <span>6 February 2023</span>
                                                    <p>The latest events in Bakuriani served as test events in preparation for the 2023 World Championships. Despite pandemic-related restrictions, the resort successfully hosted test events of the World Cup last year. On 3-6 March 2022, Bakuriani will once again host World Cup stages, with up to 200 athletes from 40 countries visiting Georgia to compete.</p>
                                                  
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="img/march3.webp" alt="">
                                                <div class="text-content">
                                                    <h4>freestyle</h4>
                                                    <span>8 February 2023</span>
                                                    <p>Freestyle skiing is a skiing discipline comprising aerials, moguls, cross, half-pipe, slopestyle and big air as part of the Winter Olympics. It can consist of a skier performing aerial flips and spins and can include skiers sliding rails and boxes on their skis.</p>
                                                   
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab4">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <img src="img/freestyle1.jpeg" alt="">
                                                <div class="text-content">
                                                    <h4>Ski Freestyle</h4>
                                                    <span>5 March 2023</span>
                                                    <p>
                                                        Freestyle skiing is a skiing discipline comprising aerials, moguls, cross,  half-pipe, slopestyle and big air as part of the Winter Olympics. It can consist of a skier performing aerial flips and spins and can include skiers sliding rails and boxes on their skis.</p>
                                                </div>
                                            </div>
                                        </li>                                
                                        <li>
                                            <div class="item">
                                                <img src="img/freestyle2.webp" alt="">
                                                <div class="text-content">
                                                    <h4>Integer ultrices augue eu</h4>
                                                    <span>6 March 2023</span>
                                                    <p>Freestyle skiing is a skiing discipline comprising aerials, moguls, cross, half-pipe, slopestyle and big air as part of the Winter Olympics. It can consist of a skier performing aerial flips and spins and can include skiers sliding rails and boxes on their skis.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="img/freestyle3.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Cras commodo odio ut</h4>
                                                    <span>7 March 2023</span>
                                                    <p>Freestyle snowboarding is a winter sport in which athletes perform various on-air and ground tricks while riding a snowboard. It is the most popular style of snowboarding as it provides athletes with the most challenge and thrill.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </section> 
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="content-section">
                <div id="map">
                
                	<!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6050083.681022861!2d38.858544616835594!3d42.232770185836266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd7e64f626b%3A0x4f907964122d4ac2!2sGeorgia!5e0!3m2!1sen!2sge!4v1655487470102!5m2!1sen!2sge" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div id="contact-content">
                    <div class="section-heading">
                        <h1>Contact<br><em>Skaoi</em></h1>
                        <p>If You have any question. <br> Or any idea Contact us!</p>
                        
                    </div>
                    <div class="section-content">
                        <form id="contact" action="#" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-4">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                  </fieldset>
                                </div>
                                 <div class="col-md-4">
                                  <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="footer">
                <p>Copyright &copy; 2022 Goga And Lado Name 
                
                . Design: GOLA</p>
            </section>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    //
        

    
    
    
    
    
    
    
    

    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

</body>
</html>