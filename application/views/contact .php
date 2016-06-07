<?php include 'includes/headerabout.inc';?>
<!-- Container -->
<div id="container">

  <!-- Start Header -->
  <div class="hidden-header"></div>
  <header class="clearfix">

    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- Start Contact Info -->
            <ul class="contact-details">
              <li><a href="#"><i class="fa fa-map-marker"></i> House-54/A, London, UK</a>
              </li>
              <li><a href="#"><i class="fa fa-envelope-o"></i> info@yourcompany.com</a>
              </li>
              <li><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a>
              </li>
            </ul>
            <!-- End Contact Info -->
          </div>
          <div class="col-md-6">
            <!-- Start Social Links -->
            <ul class="social-list">
              <li>
                <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
              </li>
              <li>
                <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
              </li>
              <li>
                <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
              </li>
              <li>
                <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
              </li>
              <li>
                <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
              </li>
              <li>
                <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
              </li>
              <li>
                <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
              </li>
              <li>
                <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
              </li>
            </ul>
            <!-- End Social Links -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <!-- Start Header ( Logo & Naviagtion ) -->
    <div class="navbar navbar-default navbar-top">
      <div class="container">
        <div class="navbar-header">
          <!-- Stat Toggle Nav Link For Mobiles -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
          <!-- End Toggle Nav Link For Mobiles -->
          <a class="navbar-brand" href="index.html"><img alt="" src="<?php echo $root."assets/";?>images/margo.png"></a>
        </div>
        <div class="navbar-collapse collapse">
          <!-- Stat Search -->
          <div class="search-side">
            <a class="show-search"><i class="fa fa-search"></i></a>
            <div class="search-form">
              <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                <input type="text" value="" name="s" id="s" placeholder="Search the site...">
              </form>
            </div>
          </div>
          <!-- End Search -->
          <!-- Start Navigation List -->
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="index.html">Home</a>
              <ul class="dropdown">
                <li><a href="index.html">Home Main Version</a></li>
                <li><a href="index-01.html">Home Version 1</a></li>
                <li><a href="index-02.html">Home Version 2</a></li>
                <li><a href="index-03.html">Home Version 3</a></li>
                <li><a href="index-04.html">Home Version 4</a></li>
                <li><a href="index-05.html">Home Version 5</a></li>
                <li><a href="index-06.html">Home Version 6</a></li>
                <li><a href="index-07.html">Home Version 7</a></li>
              </ul>
            </li>
            <li>
              <a class="active" href="about.html">Pages</a>
              <ul class="dropdown">
                <li><a class="active" href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="right-sidebar.html">Right Sidebar</a></li>
                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                <li><a href="404.html">404 Page</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Shortcodes</a>
              <ul class="dropdown">
                <li><a href="tabs.html">Tabs</a></li>
                <li><a href="buttons.html">Buttons</a></li>
                <li><a href="action-box.html">Action Box</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li><a href="latest-posts.html">Latest Posts</a></li>
                <li><a href="latest-projects.html">Latest Projects</a></li>
                <li><a href="pricing.html">Pricing Tables</a></li>
                <li><a href="accordion-toggles.html">Accordion & Toggles</a></li>
              </ul>
            </li>
            <li>
              <a href="portfolio-3.html">Portfolio</a>
              <ul class="dropdown">
                <li><a href="portfolio-2.html">2 Columns</a></li>
                <li><a href="portfolio-3.html">3 Columns</a></li>
                <li><a href="portfolio-4.html">4 Columns</a></li>
                <li><a href="single-project.html">Single Project</a></li>
              </ul>
            </li>
            <li>
              <a href="blog.html">Blog</a>
              <ul class="dropdown">
                <li><a href="blog.html">Blog - right Sidebar</a></li>
                <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                <li><a href="single-post.html">Blog Single Post</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <!-- End Navigation List -->
        </div>
      </div>

      <!-- Mobile Menu Start -->
      <ul class="wpb-mobile-menu">
        <li>
          <a href="index.html">Home</a>
          <ul class="dropdown">
            <li><a href="index.html">Home Main Version</a>
            </li>
            <li><a href="index-01.html">Home Version 1</a>
            </li>
            <li><a href="index-02.html">Home Version 2</a>
            </li>
            <li><a href="index-03.html">Home Version 3</a>
            </li>
            <li><a href="index-04.html">Home Version 4</a>
            </li>
            <li><a href="index-05.html">Home Version 5</a>
            </li>
            <li><a href="index-06.html">Home Version 6</a>
            </li>
            <li><a href="index-07.html">Home Version 7</a>
            </li>
          </ul>
        </li>
        <li>
          <a class="active" href="about.html">Pages</a>
          <ul class="dropdown">
            <li><a class="active" href="about.html">About</a>
            </li>
            <li><a href="services.html">Services</a>
            </li>
            <li><a href="right-sidebar.html">Right Sidebar</a>
            </li>
            <li><a href="left-sidebar.html">Left Sidebar</a>
            </li>
            <li><a href="404.html">404 Page</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Shortcodes</a>
          <ul class="dropdown">
            <li><a href="tabs.html">Tabs</a>
            </li>
            <li><a href="buttons.html">Buttons</a>
            </li>
            <li><a href="action-box.html">Action Box</a>
            </li>
            <li><a href="testimonials.html">Testimonials</a>
            </li>
            <li><a href="latest-posts.html">Latest Posts</a>
            </li>
            <li><a href="latest-projects.html">Latest Projects</a>
            </li>
            <li><a href="pricing.html">Pricing Tables</a>
            </li>
            <li><a href="accordion-toggles.html">Accordion & Toggles</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="portfolio-3.html">Portfolio</a>
          <ul class="dropdown">
            <li><a href="portfolio-2.html">2 Columns</a>
            </li>
            <li><a href="portfolio-3.html">3 Columns</a>
            </li>
            <li><a href="portfolio-4.html">4 Columns</a>
            </li>
            <li><a href="single-project.html">Single Project</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="blog.html">Blog</a>
          <ul class="dropdown">
            <li><a href="blog.html">Blog - right Sidebar</a>
            </li>
            <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
            </li>
            <li><a href="single-post.html">Blog Single Post</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="contact.html">Contact</a>
        </li>
      </ul>
      <!-- Mobile Menu End -->

    </div>
    <!-- End Header ( Logo & Naviagtion ) -->

  </header>
  <!-- End Header -->


  <!-- Start Page Banner -->
  <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>About Us</h2>
          <p>We Are Professional</p>
        </div>
        <div class="col-md-6">
          <ul class="breadcrumbs">
            <li><a href="#">Home</a></li>
            <li>About Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Banner -->


  <!-- Start Content -->
  <div id="content">
    <div class="container">
      <div class="page-content">


        <div class="row">

          <div class="col-md-7">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Welcome To Our Agency</span></h4>

            <!-- Some Text -->
            <p>Lorem Ipsum is simply dummy text of the <a title="Simple Tooltip" href="#" class="itl-tooltip" data-placement="top">printing</a> and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Sed ut perspiciatis unde omnis iste natus error sit volup accusantium. Lorem ipsum dolor sit amet, consectetur.</p>

          </div>

          <div class="col-md-5">

            <!-- Start Touch Slider -->
            <div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
              <div class="item"><img alt="" src="<?php echo $root."assets/";?>images/about-01.jpg"></div>
              <div class="item"><img alt="" src="<?php echo $root."assets/";?>images/about-02.jpg"></div>
              <div class="item"><img alt="" src="<?php echo $root."assets/";?>images/about-03.jpg"></div>
            </div>
            <!-- End Touch Slider -->

          </div>

        </div>

        <!-- Divider -->
        <div class="hr1" style="margin-bottom:50px;"></div>

        <div class="row">

          <div class="col-md-6">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Our Skills</span></h4>

            <div class="skill-shortcode">
              <div class="skill">
                <p>Web Design</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" data-percentage="60">
                    <span class="progress-bar-span">60%</span>
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="skill">
                <p>Wordpress</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" data-percentage="80">
                    <span class="progress-bar-span">80%</span>
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="skill">
                <p>CSS 3</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" data-percentage="90">
                    <span class="progress-bar-span">90%</span>
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="skill">
                <p>HTML 5</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" data-percentage="100">
                    <span class="progress-bar-span">100%</span>
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-md-6">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Our Solutions</span></h4>

            <!-- Accordion -->
            <div class="panel-group" id="accordion">

              <!-- Start Accordion 1 -->
              <div class="panel panel-default">
                <!-- Toggle Heading -->
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
                      <i class="fa fa-angle-up control-icon"></i>
                      <i class="fa fa-desktop"></i> Fully Responsive Theme
                    </a>
                  </h4>
                </div>
                <!-- Toggle Content -->
                <div id="collapse-1" class="panel-collapse collapse in">
                  <div class="panel-body"><img class="img-thumbnail image-text" style="float:left; width:150px;" alt="" src="<?php echo $root."assets/";?>images/bussniss-pic.jpg" /> <strong class="accent-color">Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown <strong>printer</strong> took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
              </div>
              <!-- End Accordion 1 -->

              <!-- Start Accordion 2 -->
              <div class="panel panel-default">
                <!-- Toggle Heading -->
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2" class="collapsed">
                      <i class="fa fa-angle-up control-icon"></i>
                      <i class="fa fa-gift"></i> Touchable Slider
                    </a>
                  </h4>
                </div>
                <!-- Toggle Content -->
                <div id="collapse-2" class="panel-collapse collapse">
                  <div class="panel-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a <strong>more-or-less</strong> normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>
              </div>
              <!-- End Accordion 2 -->

            </div>
          </div>

        </div>

        <!-- Divider -->
        <div class="hr1" style="margin-bottom:50px;"></div>

        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Our Creative Team</span></h4>

        <!-- Start Team Members -->
        <div class="row">

          <!-- Start Memebr 1 -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-member">
              <!-- Memebr Photo, Name & Position -->
              <div class="member-photo">
                <img alt="" src="<?php echo $root."assets/";?>images/team/face_1.png" />
                <div class="member-name">John Doe <span>Developer</span></div>
              </div>
              <!-- Memebr Words -->
              <div class="member-info">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
              </div>
              <!-- Memebr Social Links -->
              <div class="member-socail">
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
          <!-- End Memebr 1 -->

          <!-- Start Memebr 2 -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-member">
              <!-- Memebr Photo, Name & Position -->
              <div class="member-photo">
                <img alt="" src="<?php echo $root."assets/";?>images/team/face_2.png" />
                <div class="member-name">Silly Sally <span>Developer</span></div>
              </div>
              <!-- Memebr Words -->
              <div class="member-info">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
              </div>
              <!-- Memebr Social Links -->
              <div class="member-socail">
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
          <!-- End Memebr 2 -->

          <!-- Start Memebr 3 -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-member">
              <!-- Memebr Photo, Name & Position -->
              <div class="member-photo">
                <img alt="" src="<?php echo $root."assets/";?>images/team/face_3.png" />
                <div class="member-name">Chris John <span>Developer</span></div>
              </div>
              <!-- Memebr Words -->
              <div class="member-info">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
              </div>
              <!-- Memebr Social Links -->
              <div class="member-socail">
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
          <!-- End Memebr 3 -->

          <!-- Start Memebr 4 -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-member">
              <!-- Memebr Photo, Name & Position -->
              <div class="member-photo">
                <img alt="" src="<?php echo $root."assets/";?>images/team/face_4.png" />
                <div class="member-name">Sara John <span>Developer</span></div>
              </div>
              <!-- Memebr Words -->
              <div class="member-info">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
              </div>
              <!-- Memebr Social Links -->
              <div class="member-socail">
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
          <!-- End Memebr 4 -->

        </div>
        <!-- End Team Members -->

        <!-- Divider -->
        <div class="hr1" style="margin-bottom:50px;"></div>

        <!-- Start Clients Carousel -->
        <div class="our-clients">

          <!-- Classic Heading -->
          <h4 class="classic-title"><span>Our Happy Clients</span></h4>

          <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5">

            <!-- Client 1 -->
            <div class="client-item item">
              <a href="#"><img src="<?php echo $root."assets/";?>images/c1.png" alt="" /></a>
            </div>

            <!-- Client 2 -->
            <div class="client-item item">
              <a href="#"><img src="<?php echo $root."assets/";?>images/c2.png" alt="" /></a>
            </div>

            <!-- Client 3 -->
            <div class="client-item item">
              <a href="#"><img src="<?php echo $root."assets/";?>images/c3.png" alt="" /></a>
            </div>

            <!-- Client 4 -->
            <div class="client-item item">
              <a href="#"><img src="<?php echo $root."assets/";?>images/c4.png" alt="" /></a>
            </div>

            <!-- Client 5 -->
            <div class="client-item item">
              <a href="#"><img src="<?php echo $root."assets/";?>images/c5.png" alt="" /></a>
            </div>

            <!-- Client 6 -->
            <div class="client-item item">
              <a href="#"><img src="<?php echo $root."assets/";?>images/c6.png" alt="" /></a>
            </div>

            <!-- Client 7 -->
            <div class="client-item item">
              <a href="#"><img src="<?php echo $root."assets/";?>images/c7.png" alt="" /></a>
            </div>

            <!-- Client 8 -->
            <div class="client-item item">
              <a href="#"><img src="<?php echo $root."assets/";?>images/c8.png" alt="" /></a>
            </div>

          </div>
        </div>
        <!-- End Clients Carousel -->


      </div>
    </div>
  </div>
  <!-- End content -->


  <!-- Start Footer -->
  <?php include 'includes/footerabout.inc';?>