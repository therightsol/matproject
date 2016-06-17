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
                <a class="show-search" href="<?php echo $root; ?>search"><i class="fa fa-search"></i></a>

            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a <?php if ($activepage == 'home'): ; ?> class="active" <?php endif; ?>href="<?php echo $root;?>">Home</a>

                </li>
                <li>
                    <a <?php if ($activepage == 'about'): ; ?> class="active" <?php endif; ?> href="<?php echo $root; ?>about">About</a>

                </li>
                <li>
                    <a<?php if ($activepage == 'contact'): ; ?> class="active" <?php endif; ?>   href="<?php echo $root; ?>contact">Contact</a>

                </li>
                <li>
                    <a <?php if ($activepage == 'register'): ; ?> class="active" <?php endif; ?>  href="<?php echo $root; ?>register">SignUp</a>

                </li>
                <li>
                    <a <?php if ($activepage == 'signin'): ; ?> class="active" <?php endif; ?>  href="<?php echo $root; ?>signin">LogIn</a>

                </li>
                
            </ul>
            <!-- End Navigation List -->
        </div>
    </div>

    <!-- Mobile Menu Start -->
    <ul class="wpb-mobile-menu">
        <li>
            <a <?php if ($activepage == 'home'): ; ?> class="active" <?php endif; ?>href="<?php echo $root;?>">Home</a>

        </li>
        <li>
            <a <?php if ($activepage == 'about'): ; ?> class="active" <?php endif; ?>href="<?php echo $root;?>about">About</a>

        </li>
        <li>
            <a <?php if ($activepage == 'contact'): ; ?> class="active" <?php endif; ?>href="<?php echo $root;?>Contact">Contact</a>

        </li>
        <li>
            <a <?php if ($activepage == 'register'): ; ?> class="active" <?php endif; ?>href="<?php echo $root;?>register">SignUp</a>

        </li>
        <li>
            <a <?php if ($activepage == 'Signin'): ; ?> class="active" <?php endif; ?>href="<?php echo $root;?>signin">LogIn</a>

        </li>

    </ul>
    <!-- Mobile Menu End -->

</div>
<!-- End Header Logo & Naviagtion -->
