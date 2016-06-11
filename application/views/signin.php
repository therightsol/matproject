<?php include 'includes/header.inc';?>

    <!-- Full Body Container -->
    <div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

        <?php include 'includes/topbar.inc';?>


        <!-- Start  Logo & Naviagtion  -->
        <?php include 'includes/navigation.inc';?>
    </header>
    <!-- End Header Section -->
        <!-- Start Banner -->
        <?php include 'includes/banner.inc';?>
        <!--End Banner-->

        <!-- Sign In Form -->
    <div class="container" background="<?php echo $root."assets/";?>images/1.jpg">

        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Don't Have Account..??<strong><a href="register">Create Now..</a></strong></h3>
                    </div>
                    <div class="panel-body">
                        <form id='loginform' action="<?php echo $root; ?>signin" method="post">

                            <div class="form-group">

                                <input type="text" name="un" id="username" class="form-control input-sm" placeholder="User Name">
                                <?php if($_POST):
                                    echo form_error('un', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                            </div>

                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>


                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="pass" id="password" class="form-control input-sm" placeholder="Password">
                                        <?php if($_POST):
                                            echo form_error('pass', '<strong class="red">', '</strong>');
                                        endif;
                                        ?>
                                    </div>
                                </div>

                            </div>
                            <label>
                                <a class="a_forget" href="ResetPassword">Forget Password</a>
                            </label>




                                    <input id="signin" type="submit" value="Login" class="btn btn-info btn-block">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Footer Section -->
<?php include 'includes/footer.inc';?>