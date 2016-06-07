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

    <!-- Start Registeration Banner -->
    <div class="container-fluid">
        <div class="row">
            <div class="banner" class="col-md-12 col-sm-12">
                <h1 class="sign">Registeration</h1>
            </div>
        </div>
    </div>
    <!-- End Registeration Banner -->
    <!--  Register Form -->
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-3  col-sm-offset-2 noteregister">



                <img src="<?php echo $root."assets/";?>images/mat.jpg" alt="" />
                <p class="linote">High quality profiles and pictures.</p>
            <p class="linote"> Ethical standards to ensure safety.</p>
            <p class="linote">24/7 technical support for all members.</p>
            <p class="linote"> 100% anonymity for ultimate security.</p>
            <p class="linote">Success stories from around the world.</p>
            <p class="linote">High quality profiles and pictures.</p>
            <p class="linote">Find Your Match.</p>






        </div>

        <div class="col-sm-offset-1 col-xs-10 col-sm-6 col-md-6 form_sign">


            <div class="form_register">

                <form class="form-horizontal" style="margin-top:20px;" action="#" method="post">
                    <div class="form-group">
                        <label for="fname" class="lable_form col-sm-3 control-label">First Name</label>
                        <div class="col-xs-10 col-sm-7 ">
                            <input type="name" class="form-control" id="fname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lname" class="lable_form col-sm-3 control-label">Last Name</label>
                        <div class="col-xs-10 col-sm-7 ">
                            <input type="name" class="form-control" id="lname" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Username" class="lable_form col-sm-3 control-label">User Name</label>
                        <div class="col-xs-10 col-sm-7 ">
                            <input type="name" class="form-control" id="Username" placeholder="UserName">
                        </div>
                    </div>




                            <div class="form-group">
                                <label for="Password" class="lable_form col-sm-offset-1 col-sm-2 control-label">Password</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" id="Password" placeholder="Password">
                                </div>

                            </div>
                    <div class="form-group">
                    <label for="cPassword" class="lable_form col-sm-3 control-label">Confirm Passowrd </label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" id="cPassword" placeholder="Confirm Password">
                    </div>
                    </div>


                    <div class="form-group">
                        <label for="email" class="lable_form col-sm-3 control-label">Email</label>
                        <div class="col-xs-10 col-sm-7">
                            <input type="email" class="lable_form form-control" id="email" placeholder="Email">
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="92" class="lable_form col-sm-3 control-label">Phone No</label>


                        <div class="col-xs-8 col-sm-7">
                            <input type="text" class="form-control" id="92" placeholder="6214643">
                        </div>

                    </div>




                    <div class="form-group">
                        <div class="col-sm-offset-4 col-xs-10 col-sm-4">
                            <button type="submit" class="btn-block btn-primary">Registeration</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!--END  Register Form -->
    <!-- Start Footer Section -->
<?php include 'includes/footer.inc';?>