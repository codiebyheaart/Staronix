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
	
	<style>
	
	
	
	.blog-cat{
	position:relative;
}

.blog-cat li{
	position:relative;
	margin-bottom:4px;
}

.blog-cat li a{
	position:relative;
	color:#242424;
	font-size:16px;
	font-weight:600;
	padding:14px 15px 14px 22px;
	display:block;
	border-left:4px solid #d2d2d2;
	background-color:#528fbf;
	transition:all 500ms ease;
	-moz-transition:all 500ms ease;
	-webkit-transition:all 500ms ease;
	-ms-transition:all 500ms ease;
	-o-transition:all 500ms ease;
	font-family: 'Poppins', sans-serif;
}

.blog-cat li.active a,
.blog-cat li a:hover{
	color:#ffffff;
	border-color:#a5afb7;
	background-color:#a5afb7;
}
.btn-style-four{
	position:relative;
	line-height:24px;
	color:#a5afb7;
	font-size:17px;
	font-weight:600;
	background:none;
	display:inline-block;
	padding:11px 43px;
	border-radius:50px;
	border:2px solid #444444;
}

.btn-style-four:hover{
	color:#ffffff;
	border-color:#25baa9;
	background:#25baa9;
}



.btn-style-two{
	position:relative;
	line-height:24px;
	color:#ffffff;
	font-size:17px;
	font-weight:600;
	background:#9fa9b2ed;
	display:inline-block;
	padding:10px 30px;
	border-radius:40px;
	border:2px solid #1a1a1a;
}

.btn-style-two:hover{
	color:#444444;
	border-color:#a5afb7;
	background:none;
}
.list-style-one.style-two li{
	color:#999999;
	font-size:17px;
	margin-bottom:6px;
}
	</style>
	
	
	
</head>

<body>
   <div class="page-wrapper">
 	
   
 	 
    
    
    	<?php include('header.php'); ?>
        <!--End Sticky Header-->
    
    
    <!--Page Title-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
   
   
  <div class="carousel-inner">
    <div class="item active">
      <img src="images\slide1.jpg" alt="Los Angeles">
    </div>

     
  </div>

  
</div>
    
     <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar">
						
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <ul class="blog-cat">
                                <li class="active"><a href="peb.php">Pre Engineered Building</a></li>
                                <li><a href="roof-sheets.php">Roof Sheets</a></li>
                                <li><a href="purlins.php">Z And C Purlins</a></li>
                                <li><a href="space-frame.php">Space Frame</a></li>
                                <li><a href="Polycarbonate-Sheet.php">Polycarbonate Sheet</a></li>
                                <li><a href="roof-ventilator.php">Roof Ventilator</a></li>
                                <li><a href="Metal-Deck-Sheet.php">Metal Deck Sheet</a></li>
                                <li><a href="Louvers.php">Louvers</a></li>
                                <li><a href="porta-cabins.php">Porta Cabins</a></li>
                                <li><a href="cold-storage.php">Cold Storage</a></li>
                                <li><a href="solar-panels.php">Solar Panel Structure</a></li>
                            </ul>
                        </div>
                        
                        <!--Brochure-->
                    	<div class="sidebar-widget brochure-widget">
								<div class="sec-title">
                    	<h2>Enquire Now</h2>
                    </div>
                        	  <form action="send_enq.php">
								  <div class="form-group">
									 <input type="text" name="name" placeholder="Your Name" class="form-control" id="email">
								  </div>
								  <div class="form-group">
									 <input type="email" name="email" placeholder="Email address" class="form-control" id="email">
								  </div>
								  <div class="form-group">
									 <input type="mobileno" name="mobileno" placeholder="Mobile No" class="form-control" id="email">
								  </div>
								  <div class="form-group">
									 <input type="address" name="address" placeholder="Address" class="form-control" id="email">
								  </div>
								  
								  <div class="form-group">
									<textarea class="form-control" rows="4" cols="50" name="message" placeholder="Your Comment"></textarea>
								  </div>
								  <div class="form-group">
									   <button class="theme-btn btn-style-two" type="submit" name="submit-form">Submit</button>
								  </div> 
								</form>                            
                        </div>
                        
                        <!--Contact Widhet-->
                    	 
                        
                    </aside>
                </div>
                
                <!--Content Side / Our Blog-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                	<div class="services-single">
						<div class="inner-box">
                        	<!--Image Gallery-->
                        <div class="sec-title">
                    	<h2>Pre Engineered Building</h2>
                    </div>
                            
							<img src="images/peb.jpg">
							<p></p>
                            <div class="text">
                            	<p>PEB is a steel structure built over a structural concept of Primary members, Secondary members and the cover sheeting connected to each other. The structural members are custom designed be lighter in weight and high in strength. It can be fitted with different structural additions like trusses, mezzanine floors, fascia, canopies and crane systems as per project requirements.</p>
                                <p>We are offering our clients with the design, fabrication and erection of pre engineered buildings, pre engineered steel buildings, pre engineered metal buildings that is catering to the demands of the construction sector.</p>
                                 
                            </div>

								<div class="images-gallery">
                            	<div class="row clearfix">
								<div class="sec-title">
									<h2>Advantage of Pre Engineered Building</h2>
								</div>
                                	<!--Image Column-->
                                    <div class="image-column col-md-6 col-sm-7 col-xs-12">
                                    	<ul class="list-style-one style-two">
                                            <li>Minimizes electric consumption for maintaining desired temperatures</li>
                                            <li>Lightweight and extremely easy to install</li>
                                            <li>Reduced Construction time</li>
                                            <li>Less Manpower at Site</li>
                                            <li>Flexibility in Design</li>
                                            <li>Seismic Resistance</li>
                                        </ul>
                                    </div>
									<div class="image-column col-md-6 col-sm-7 col-xs-12">
                                    	<div class="image">
                                        	<img src="images\peb-components.jpg" alt="">
                                        </div>
                                    </div>
                                    <!--Image Column-->
                                     
                                </div>
                            </div>
                             
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
	
    
    <!--Main Footer-->
	 <?php include('footer.php'); ?>
      <!--End Main Footer-->
    
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