<?php
session_start();
if(!isset($_SESSION["email"]) && $_SESSION["email"] === true){
  header("location: contact.php");

  exit();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>College | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">  

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                    <span></span>
                  </div>
                    <span></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                 
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.html"><i class="fa fa-university"></i><span>College Era</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
          </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="index.php">Home</a></li>            
           <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Subject <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">              
                <li class="active"><a href="course-detail.html">Java</a></li> 
                 <li ><a href="course.html">Computer Networking</a></li>   

                <li><a href="course-detail.html">Python</a></li> 
                </ul>
            </li>
              <li><a href="Class.php">Live Class</a></li>  
          <!--  /*<li><a href="exam.php">Gallery</a></li>*/  -->  
          
            <li><a href="signout.php">Sign Out</a></li>
            
             </li>
            
          </ul>                   
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Java</h2>
           <ol class="breadcrumb">
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/java.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="https://www.google.com/search?q=introduction+in+java&rlz=1C1UEAD_enIN960IN960&oq=in&aqs=chrome.1.69i59j35i39j69i57j69i60l5.2146j0j7&sourceid=chrome&ie=UTF-8" target="_blank">Unit-1</a>
                          <span><i class="fa fa-clock-o"></i> 6 Hours  of study</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">Introduction to Java</a></h4>
                        <p>What is Java ?</p>
                        <p> How Java is Object Oriented Programming </p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="computernetworkunit1.php">In depth</a>
                          <span class="mu-course-price" href="#"></span>
                        </div>
                      </div>
                    </div> 
                  </div>                  
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/Object.png" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Unit-2 </a>
                          <span><i class="fa fa-clock-o"></i> 8 Hours  of study</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="https://www.google.com/search?q=object+oriented+in+java&source=lmns&bih=758&biw=1536&hl=en&sa=X&ved=2ahUKEwjqop-nuMzyAhVED3IKHQoYBXoQ_AUoAHoECAEQAA"  target="_blank">Obejct Oriented</a></h4>
                        <p>What are Object, Class Inheritance, Polymorphism and ETC?  </p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="computernetworkunit1.php">In depth </a>
                          <span class="mu-course-price" href="#"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/java-data-types.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Unit-3</a>
                          <span><i class="fa fa-clock-o"></i> 10 Hours  of study</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="https://www.google.com/search?q=data+types+in+java&oq=data&aqs=chrome.1.69i59l2j69i57j69i59l2j69i60j69i61j69i60.3890j0j1&sourceid=chrome&ie=UTF-8" target="_blank" >Datatype</a></h4>
                        <p>what is int, short, byte long,  </p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">In depth</a>
                          <span class="mu-course-price" href="#"></span>
                        </div>
                      </div>
                    </div> 
                  </div>                  
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/0_UVG1F-0kLAEWAT3k.png" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Unit-4 </a>
                          <span><i class="fa fa-clock-o">15 Hours  of study</i></span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="https://www.google.com/search?q=datastructure+in+java++logo&source=lmns&bih=758&biw=1519&hl=en&sa=X&ved=2ahUKEwjg2u-HvszyAhWUBysKHQg9Bd4Q_AUoAHoECAEQAA" target="_blank">Data-structure</a></h4>
                        <p>Arrays, Class, Linked list .</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">In depth</a>
                          <span class="mu-course-price" href="#"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                 
                <!-- end course content container -->
                <!-- start course pagination
                <div class="mu-pagination">
                  <nav>
                    <ul class="pagination">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span class="fa fa-angle-left"></span> Prev 
                        </a>
                      </li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                         Next <span class="fa fa-angle-right"></span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
               end course pagination 
              </div>
              <div class="col-md-3">
              start sidebar -->
             <!--   <aside class="mu-sidebar">-->
                  <!-- start single sidebar -->
                                  <!--  <div class="mu-single-sidebar">
                    <h3>Categories</h3>
                    <ul class="mu-sidebar-catg">
                      <li><a href="#">Web Design</a></li>
                      <li><a href="">Web Development</a></li>
                      <li><a href="">Math</a></li>
                      <li><a href="">Physics</a></li>
                      <li><a href="">Camestry</a></li>
                      <li><a href="">English</a></li>
                    </ul>
                  </div>-->
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                                 <!--   <div class="mu-single-sidebar">
                    <h3>Popular Course</h3>
                    <div class="mu-sidebar-popular-courses">
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/1.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Medical Science</a></h4>                      
                          <span class="popular-course-price">$200.00</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/2.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Web Design</a></h4>                      
                          <span class="popular-course-price">$250.00</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/3.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Health & Sports</a></h4>                      
                          <span class="popular-course-price">$90.00</span>
                        </div>
                      </div>
                    </div>
                  </div>-->
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                <!--   <div class="mu-single-sidebar">
                    <h3>Archives</h3>
                    <ul class="mu-sidebar-catg mu-sidebar-archives">
                      <li><a href="#">May <span>(25)</span></a></li>
                      <li><a href="">June <span>(35)</span></a></li>
                      <li><a href="">July <span>(20)</span></a></li>
                      <li><a href="">August <span>(125)</span></a></li>
                      <li><a href="">September <span>(45)</span></a></li>
                      <li><a href="">October <span>(85)</span></a></li>
                    </ul>
                  </div>-->
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                 <!--   <div class="mu-single-sidebar">
                    <h3>Tags Cloud</h3>
                    <div class="tag-cloud">
                      <a href="#">Health</a>
                      <a href="#">Science</a>
                      <a href="#">Sports</a>
                      <a href="#">Mathematics</a>
                      <a href="#">Web Design</a>
                      <a href="#">Admission</a>
                      <a href="#">History</a>
                      <a href="#">Environment</a>
                    </div>
                  </div>-->
                  <!-- end single sidebar -->
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
          
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
          
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                          
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4></h4>
              <!--  <address>
                  <p>P.O. Box 320, Ross, California 9495, USA</p>
                  <p>Phone: (415) 453-1568 </p>
                  <p>Website: www.markups.io</p>
                  <p>Email: info@markups.io</p>
                </address>--->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p> <a hr rel="nofollow"></a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->





  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>