<?php include 'includes/header.inc';?>

    <!-- Full Body Container -->
    <div id="container" >


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
    

    <div class="container" background="<?php echo $root."assets/";?>images/1.jpg">

        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Join Now...<small>It's free!</small></h3>
                    </div>
                    <div class="panel-body">
                        <form id='loginform' action="<?php echo $root; ?>register" method="post">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="fname" id="first_name" class="form-control input-sm" placeholder="First Name">
                                        <?php if($_POST):
                                            echo form_error('fname', '<strong class="red">', '</strong>');
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="lname" id="last_name" class="form-control input-sm" placeholder="Last Name">
                                        <?php if($_POST):
                                            echo form_error('lname', '<strong class="red">', '</strong>');
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">

                                <input type="text" name="un" id="username" class="form-control input-sm" placeholder="User Name">
                                <?php if($_POST):
                                    echo form_error('un', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                            </div>

                            <div class="form-group">

                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                                <?php if($_POST):
                                    echo form_error('email', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                            </div>
                            <div class="form-group">

                                <input type="number" name="phone" id="phone" class="form-control input-sm" placeholder="Mobile No:">
                                <?php if($_POST):
                                    echo form_error('phone', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                            </div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="pass" id="password" class="form-control input-sm" placeholder="Password">
                                        <?php if($_POST):
                                            echo form_error('pass', '<strong class="red">', '</strong>');
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="conpass" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                                        <?php if($_POST):
                                            echo form_error('conpass', '<strong class="red">', '</strong>');
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gender">I Am...</label>
                                <div >
                                    <div class="input-group">
                                        <div class="btn-group radio-group">
                                            <label class="btn btn-primary not-active">Male <input type="radio" value="male" name="gender"></label>
                                            <label class="btn btn-primary not-active">Female <input type="radio" value="female" name="gender"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="Language">Language</label>
                                <div >
                                    <div class="input-group">
                                        <div class="btn-group radio-group">
                                            <label class="btn btn-primary not-active">English <input type="radio" value="english" name="language"></label>
                                            <label class="btn btn-primary not-active">Urdu <input type="radio" value="urdu" name="language"></label>
                                            <label class="btn btn-primary not-active">Chinese <input type="radio" value="chinese" name="language"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <input id="signup" type="submit" value="Register" class="btn btn-success btn-block">

                        </form>
                        <div>
                            <h3 class="panel-title">Already a member..?<strong><a href="signin">Login Now..</a></strong></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--END  Register Form -->
    <!-- Start Footer Section -->
<?php include 'includes/footer.inc';?>