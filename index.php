<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bill</title>
    <!-- Stylesheets -->
    <!-- bootstrap v3.3.6 css -->
    <link href="css\bootstrap.css" rel="stylesheet">
    <!-- font-awesome css -->
    <link href="css\font-awesome.css" rel="stylesheet">
    <!-- flaticon css -->
    <link href="css\flaticon.css" rel="stylesheet">
    <!-- animate css -->
    <link href="css\animate.css" rel="stylesheet">
    <!-- owl.carousel css -->
    <link href="css\owl.css" rel="stylesheet">
    <!-- fancybox css -->
    <link href="css\jquery.fancybox.css" rel="stylesheet">
    <link href="css\hover.css" rel="stylesheet">
    <!-- style css -->
    <link href="css\style.css" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="css\revolution\settings.css">
    <link rel="stylesheet" type="text/css" href="css\revolution\layers.css">
    <link rel="stylesheet" type="text/css" href="css\revolution\navigation.css">

    <!--Favicon-->
    <link rel="shortcut icon" href="images\favicon.ico" type="image/x-icon">
    <link rel="icon" href="images\favicon.ico" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css\responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
      

        <!-- Main Header -->
     <?php include('header.php'); ?>
        <!-- Main Header end -->

        <!--Main Slider-->
        <section class="rev_slider_wrapper">
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item">
      <img src="images\slide1.jpg" alt="Los Angeles">
    </div>

    <div class="item active">
      <img src="images\slide1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="images\slide1.jpg" alt="Los Angeles">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </section>
        <!--Main Slider  end-->

        <!--welcome container-->
        <div class="welcome-sec2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-md-8 col-sm-6">
                        <div class="weltext">
                            <h2>About Our<span> Construction</span> Company</h2>
                            <p class="midtext">cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum.Lorem ipsum dolor sit amet, cons ectetur elit.nec odio ipsum.</p>
                            <p>Dorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum.Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse.</p>
                            <ul class="aboutlist">
                                <li>
                                    <div class="abouticon">
                                        <i class="flaticon-mechanic-tool" aria-hidden="true"></i>
                                    </div>
                                    <div class="abouttext">
                                        <p>CONSTRUCTION</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="abouticon">
                                        <i class="flaticon-building " aria-hidden="true"></i>
                                    </div>
                                    <div class="abouttext">
                                        <p>RENOVATION</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="abouticon">
                                        <i class="flaticon-office-worker-outline" aria-hidden="true"></i>
                                    </div>
                                    <div class="abouttext">
                                        <p>CONSULTING</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="abouticon">
                                        <i class="fa fa-viacoin" aria-hidden="true"></i>
                                    </div>
                                    <div class="abouttext">
                                        <p>ARCHITECTURE</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="abouticon">
                                        <i class="flaticon-cogwheel-1" aria-hidden="true"></i>
                                    </div>
                                    <div class="abouttext">
                                        <p>CONSTRUCT</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="abouticon">
                                        <i class="flaticon-energy" aria-hidden="true"></i>
                                    </div>
                                    <div class="abouttext">
                                        <p>ELECTRICAL</p>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-offset-1 col-md-4 col-sm-6">
                        <div class="welimage">
                            <img src="images\gallery\welimg.jpg" alt="image">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--welcome container end-->

        

        <!--All services-->
        <div class="services-sec2">
            <div class="container">
                <div class="sec-title text-center">
                    <h2>Our Products</h2>
                    <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                    <span class="colorborder"></span>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-servicebox">
                            <div class="servicebox-image">
                                <a class="lightbox-image" data-fancybox="gallery" href="images\services\8.jpg">
                                    <img src="images\services\8.jpg" alt="image">
                                    <div class="mask"><i class="fa fa-search"></i></div>
                                    <span class="flaticon-tool picon"></span>
                                </a>
                            </div>
                            <div class="servicebox-content">
                                <h3><a href="cho_test.php">Construction Consultant</a></h3>
                                <p>Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit</p>
                                <div class="link">
                                    <a href="#" class="readmore-btn">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-servicebox">
                            <div class="servicebox-image">
                                <a class="lightbox-image" data-fancybox="gallery" href="images\services\7.jpg">
                                    <img src="images\services\7.jpg" alt="image">
                                    <div class="mask"><i class="fa fa-search"></i></div>
                                    <span class="flaticon-screwdriver picon"></span>
                                </a>
                            </div>
                            <div class="servicebox-content">
                                <h3><a href="taxation.html">General Contracting</a></h3>
                                <p>Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit</p>
                                <div class="link">
                                    <a href="#" class="readmore-btn">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-servicebox">
                            <div class="servicebox-image">
                                <a class="lightbox-image" data-fancybox="gallery" href="images\services\9.jpg">
                                    <img src="images\services\9.jpg" alt="image">
                                    <div class="mask"><i class="fa fa-search"></i></div>
                                    <span class="flaticon-power picon"></span>
                                </a>
                            </div>
                            <div class="servicebox-content">
                                <h3><a href="investment-planning.html">Architectural Design</a></h3>
                                <p>Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit</p>
                                <div class="link">
                                    <a href="#" class="readmore-btn">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-servicebox">
                            <div class="servicebox-image">
                                <a class="lightbox-image" data-fancybox="gallery" href="images\services\10.jpg">
                                    <img src="images\services\10.jpg" alt="image">
                                    <div class="mask"><i class="fa fa-search"></i></div>
                                    <span class="flaticon-tractor-front picon"></span>
                                </a>
                            </div>
                            <div class="servicebox-content">
                                <h3><a href="retirement-planning">Resconstruction Services</a></h3>
                                <p>Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit</p>
                                <div class="link">
                                    <a href="#" class="readmore-btn">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-servicebox">
                            <div class="servicebox-image">
                                <a class="lightbox-image" data-fancybox="gallery" href="images\services\12.jpg">
                                    <img src="images\services\12.jpg" alt="image">
                                    <div class="mask"><i class="fa fa-search"></i></div>
                                    <span class="flaticon-science picon"></span>
                                </a>
                            </div>
                            <div class="servicebox-content">
                                <h3><a href="#">Building Information</a></h3>
                                <p>Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit</p>
                                <div class="link">
                                    <a href="#" class="readmore-btn">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-servicebox">
                            <div class="servicebox-image">
                                <a class="lightbox-image" data-fancybox="gallery" href="images\services\13.jpg">
                                    <img src="images\services\13.jpg" alt="image">
                                    <div class="mask"><i class="fa fa-search"></i></div>
                                    <span class="flaticon-oil picon"></span>
                                </a>
                            </div>
                            <div class="servicebox-content">
                                <h3><a href="#">Project Partnering</a></h3>
                                <p>Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit</p>
                                <div class="link">
                                    <a href="#" class="readmore-btn">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--All services end-->

        <!--conter section-->
      
        <!--conter section end-->

        <!--Gallery Section-->
        
        <!--Gallery Section end-->

        <!-- testimonial section-->
          <!-- testimonial section end-->

        <!-- contact-form start -->
        <section class="contact-form quotestyle2">
            <div class="outer-container clearfix">

                <!--Column-->
                <div class="column form-column">
                    <div class="inner-box">

                        <div class="default-form">
                            <form method="post" action="#" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="quotetext">
                                            <div class="sec-title text-left">
                                                <h2 class="lftheading">Request for Quote</h2>
                                                <span class="colorborder"></span>
                                            </div>
                                            <p class="quotecallinfo">For Business inquiry fill our feedback form and Troll Free Number or you can call us on <span>(+91) 0123 456 85</span></p>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input name="username" value="" placeholder="Name *" required="" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <input name="email" value="" placeholder="Email *" required="" type="email">
                                                </div>

                                                <div class="form-group">
                                                    <input name="phone" value="" placeholder="Phone *" required="" type="text">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input name="subject" value="" placeholder="Subject *" type="text">
                                                </div>

                                                <div class="form-group">
                                                    <textarea name="message" placeholder="Requirement" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="text-left">
                                                    <button type="submit" class="btn-two">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- contact-form end -->

        <!-- blog section end -->
       
        <!-- blog section end -->

        <!--Partener slider -->
        <section class="parterer-sec">
            <div class="auto-container">
                <div class="partener-slider">
                    <div class="image-box">
                        <a href="#"><img src="images\clients\1.png" alt=""></a>
                    </div>
                    <div class="image-box">
                        <a href="#"><img src="images\clients\2.png" alt=""></a>
                    </div>
                    <div class="image-box">
                        <a href="#"><img src="images\clients\3.png" alt=""></a>
                    </div>
                    <div class="image-box">
                        <a href="#"><img src="images\clients\4.png" alt=""></a>
                    </div>
                    <div class="image-box">
                        <a href="#"><img src="images\clients\5.png" alt=""></a>
                    </div>
                    <div class="image-box">
                        <a href="#"><img src="images\clients\1.png" alt=""></a>
                    </div>
                    <div class="image-box">
                        <a href="#"><img src="images\clients\2.png" alt=""></a>
                    </div>
                    <div class="image-box">
                        <a href="#"><img src="images\clients\3.png" alt=""></a>
                    </div>
                    <div class="image-box">
                        <a href="#"><img src="images\clients\4.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <!--Partener slider end-->

        <!-- footer section -->
       <?php include('footer.php'); ?>
        <!-- footer section end -->

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".site-header"><span class="icon fa fa-long-arrow-up"></span></div>

    <!-- jquery Liabrary -->
    <script src="js\jquery-1.12.4.min.js"></script>
    <!-- bootstrap v3.3.6 js -->
    <script src="js\bootstrap.min.js"></script>
    <!-- fancybox js -->
    <script src="js\jquery.fancybox.pack.js"></script>
    <script src="js\jquery.fancybox-media.js"></script>
    <!-- owl.carousel js -->
    <script src="js\owl.js"></script>
    <!-- counter js -->
    <script src="js\jquery.appear.js"></script>
    <script src="js\jquery.countTo.js"></script>
    <!-- mixitup js -->
    <script src="js\mixitup.js"></script>
    <!-- validate js -->
    <script src="js\validate.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="js\revolution\jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js\revolution\jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js\revolution\extensions\revolution.extension.video.min.js"></script>

    <!-- script JS  -->
    <script src="js\script.js"></script>
</body>

</html>