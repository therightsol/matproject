<div class="navbar navbar-default navbar-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.html">

            <img alt="" src="<?php echo $root."assets/";?>images/logo.jpg">
            </a>
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
                    <a class="active" href="<?php echo $root;?>">Home</a>

                </li>
                <li>
                    <a href="#">About</a>

                </li>
                <li>
                    <a href="#">Contact</a>

                </li>
                <li>
                    <a  href="Register">SignUp</a>

                </li>
                <li>
                    <a href="signin">LogIn</a>

                </li>
                
            </ul>
            <!-- End Navigation List -->
        </div>
    </div>

    <!-- Mobile Menu Start -->
    <ul class="wpb-mobile-menu">
        <li>
            <a class="active" href="index.html">Home</a>
            <ul class="dropdown">
                <li><a class="active" href="index.html">Home Main Version</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="about.html">Pages</a>
            <ul class="dropdown">
                <li><a href="about.html">About</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="#">Shortcodes</a>
            <ul class="dropdown">
                <li><a href="tabs.html">Tabs</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="portfolio-3.html">Portfolio</a>
            <ul class="dropdown">
                <li><a href="portfolio-2.html">2 Columns</a>

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
<!-- End Header Logo & Naviagtion -->
