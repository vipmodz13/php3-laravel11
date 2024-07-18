<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="theme-color" content="#ec0000">
    <meta name="description" content="News Magazine HTML Template">
    <meta name="keywords" content="Article, Blog, Business, Fashion, Magazine, Music, News, News Magazine, Newspaper, Politics, Travel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altroz - News Magazine HTML Template ::</title>
    
    <!--Favicon-->
    <link rel="icon" href="{{ asset('template/images/favicon.png') }}" type="image/x-icon">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/colorbox.css') }}">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,500,600,700,800&amp;display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,600,700,800&amp;display=swap" rel="stylesheet"> 
    </head>
    <body>
    
    <!-- Start Pre Loader -->
    <div id="preloader">
      <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
          <div class="spinner"></div>
          <div class="txt-loading"> 
              <span data-text-preloader="A" class="letters-loading">A</span> 
              <span data-text-preloader="L" class="letters-loading">L</span> 
              <span data-text-preloader="T" class="letters-loading">T</span> 
              <span data-text-preloader="R" class="letters-loading">R</span> 
              <span data-text-preloader="O" class="letters-loading">O</span> 
              <span data-text-preloader="Z" class="letters-loading">Z</span> 
              <span data-text-preloader="�&nbsp;" class="letters-loading">�&nbsp;</span> 
              <span data-text-preloader="N" class="letters-loading">N</span> 
              <span data-text-preloader="E" class="letters-loading">E</span>
              <span data-text-preloader="W" class="letters-loading">W</span>
              <span data-text-preloader="S" class="letters-loading">S</span>	
          </div>
        </div>
        <div class="loader">
          <div class="row">
            <div class="col-3 loader-section section-left">
              <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
              <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
              <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
              <div class="bg"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Pre Loader -->

    @yield('content')

        <!-- Footer Start -->  
    <footer id="footer" class="footer">
        <div class="utf_footer_main">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-sm-12 col-xs-12 footer-widget contact-widget">
                <h3 class="widget-title">About Us</h3>
                <ul>
                  <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</li>
                  <li><i class="fa fa-home"></i> 15 Cliff St, New York NY 10038, USA</li>
                  <li><i class="fa fa-phone"></i> <a href="#">+91 234 567 8765</a></li>
                  <li><i class="fa fa-envelope-o"></i> <a href="#">mail@example.com</a></li>			 
                </ul>
                <ul class="unstyled utf_footer_social">
                    <li><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
                    <li><a title="Google+" href="#"><i class="fa fa-google-plus"></i></a></li> 
                    <li><a title="Linkdin" href="#"><i class="fa fa-linkedin"></i></a></li> 
                    <li><a title="Skype" href="#"><i class="fa fa-skype"></i></a></li> 
                    <li><a title="Skype" href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
              
              <div class="col-lg-4 col-sm-12 col-xs-12 footer-widget widget-categories">
                <h3 class="widget-title">Popular Categories</h3>
                <ul>
                  <li><i class="fa fa-angle-double-right"></i><a href="#"><span class="catTitle">Make-Up</span><span class="catCounter"> (05)</span></a> </li>
                  <li><i class="fa fa-angle-double-right"></i><a href="#"><span class="catTitle">Health</span><span class="catCounter"> (06)</span></a> </li>
                  <li><i class="fa fa-angle-double-right"></i><a href="#"><span class="catTitle">Audio</span><span class="catCounter"> (15)</span></a> </li>
                  <li><i class="fa fa-angle-double-right"></i><a href="#"><span class="catTitle">Travel</span><span class="catCounter"> (25)</span></a> </li>
                  <li><i class="fa fa-angle-double-right"></i><a href="#"><span class="catTitle">Health</span><span class="catCounter"> (05)</span></a> </li>
                  <li><i class="fa fa-angle-double-right"></i><a href="#"><span class="catTitle">Gadgets</span><span class="catCounter"> (12)</span></a> </li>
                  <li><i class="fa fa-angle-double-right"></i><a href="#"><span class="catTitle">Food</span><span class="catCounter"> (14)</span></a> </li>
                </ul>
              </div>
              
              <div class="col-lg-4 col-sm-12 col-xs-12 footer-widget">
                <h3 class="widget-title">Popular Post</h3>
                <div class="utf_list_post_block">
                  <ul class="utf_list_post">
                    <li class="clearfix">
                      <div class="utf_post_block_style post-float clearfix">
                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="{{ asset('template/images/health2.jpg') }}" alt=""> </a> </div>                    
                        <div class="utf_post_content">
                          <h2 class="utf_post_title title-small"> <a href="#">Santino loganne legan an year old resident...</a> </h2>
                          <div class="utf_post_meta"> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                        </div>
                      </div>
                    </li>
                    
                    <li class="clearfix">
                      <div class="utf_post_block_style post-float clearfix">
                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="{{ asset('template/images/health3.jpg') }}" alt=""> </a> </div>                    
                        <div class="utf_post_content">
                          <h2 class="utf_post_title title-small"> <a href="#">Santino loganne legan an year old resident...</a> </h2>
                          <div class="utf_post_meta"> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                        </div>
                      </div>
                    </li>
                    
                    <li class="clearfix">
                      <div class="utf_post_block_style post-float clearfix">
                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="{{ asset('template/images/health4.jpg') }}" alt=""> </a> </div>                    
                        <div class="utf_post_content">
                          <h2 class="utf_post_title title-small"> <a href="#">Santino loganne legan an year old resident...</a> </h2>
                          <div class="utf_post_meta"> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>            
              </div>
                        
            </div>
          </div>
        </div>    
    </footer>
    <!-- Footer End -->
      
    <!-- Copyright Start -->   
    <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 text-center">
              <div class="utf_copyright_info"> <span>Copyright © 2022 All Rights Reserved.</span> </div>
            </div>        
          </div>      
          <div id="back-to-top" class="back-to-top">
            <button class="btn btn-primary" title="Back to Top"> <i class="fa fa-angle-up"></i> </button>
          </div>
        </div>
    </div>
    <!-- Copyright End -->
    </div>
      
    <!-- Javascript Files --> 
    <script src="{{ asset('template/js/jquery-3.2.1.min.js') }}"></script> 
    <script src="{{ asset('template/js/popper.min.js') }}"></script> 
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script> 
    <script src="{{ asset('template/js/jquery.colorbox.js') }}"></script>
    <script src="{{ asset('template/js/smoothscroll.js') }}"></script> 
    <script src="{{ asset('template/js/custom_script.js') }}"></script> 
    
    </body></html>