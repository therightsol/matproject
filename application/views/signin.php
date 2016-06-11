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
    <div class="container-fluid">
        <div class="row ">
             <div class="col-xs-offset-2 col-xs-4 col-md-3 notesign">

                <h1>Note</h1>
                

                     <p class="linote">
                         Now over 3 million members
                     </p>
                     <p class="linote">
                         high quality profiles and pictures
                     </p>
                     <p class="linote">
                         ethical standards to ensure safety
                     </p>
                     <p class="linote">
                         24/7 technical support for all members
                     </p>
                     <p class="linote">
                         100% anonymity for ultimate security
                     </p>
                     <p class="linote">
                         success stories from around the world

                     </p>
                     <p class="linote">
                         Find Your Match

                     </p>


                </div>


    <div class="col-xs-offset-1 col-xs-4 col-md-4 form_sign">




            <form class="form-horizontal" style="margin-top:20px;" method="post" action="#">
                <div class="form-group">
                    <label for="Username" class="lable_form col-sm-3 control-label">User Name</label>
                    <div class="col-xs-10 col-md-8">
                        <input type="text" name="un" class="form-control" id="Username" placeholder="UserName">
                        <span id="Error"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Password" class="lable_form col-sm-3 control-label">Password</label>
                    <div class="col-xs-10 col-md-8">
                        <input type="password" name="pass" class="form-control" id="Password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                                <a class="a_forget" href="ResetPassword">Forget Password</a>
                            </label>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-4 col-xs-10 col-md-4">
                        <button type="submit" id="btn" class="btn-block btn-primary">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
        </div>
</div>
<?php if(! empty($validation_errors)) : ?>
    <div class="alert alert-danger">
        <?php echo $validation_errors; ?>
    </div>
<?php endif; ?>

    <!-- Start Footer Section -->
<?php include 'includes/footer.inc';?>