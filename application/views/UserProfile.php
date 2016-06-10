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
                    <h1 class="sign">User Profile</h1>
                </div>
            </div>
        </div>
        <!-- End Registeration Banner -->
        <!--  UserProfile Form -->

        <div class="row"  style="background-color: #555555">
            <?php if(! empty($validation_errors)) : ?>
                <div class="alert alert-danger">
                    <?php echo $validation_errors; ?>
                </div>
            <?php endif; ?>

            <div class="col-md-offset-2 col-xs-8 col-sm-6 col-md-4 userprofile">
                <form role="form" action="<?php echo $root; ?>UserProfile" method="post" >
                <div class="col-xs-8 col-sm-6 col-md-4" style="border: 2px solid white; height: 200px;width: 200px">
                <img src="" alt="" class="img-circle">
                </div>
                <input type="file" style="size:20px;margin-top: 10px" name="cfile">

                 <div class="form-group" class="col-xs-10 col-sm-8  col-md-6 ">
                <div class="col-xs-12 col-sm-8 col-md-6 ">


                    <label class="control-label lable_user" for="uid" >User Id:</label>
                    <input type="text" name="uid" value="<?php if($_POST) echo $_POST['uid']; ?>"  placeholder="uid" id="uid" class="form-control inpute_profile"/>

                </div>
                <div class="col-xs-12 col-sm-8  col-md-6 ">
                    <label class="control-label lable_user" for="dob">Date Of Birth:</label>
                    <input type="text" name="dob" value="<?php if($_POST) echo $_POST['dob']; ?>" id="dob" placeholder="01/12/1990" class="form-control inpute_profile"/>
                </div>
                     <div class="form-group" class="col-xs-10 col-sm-8  col-md-6 ">
                         <div class="col-xs-12 col-sm-8 col-md-6 ">
                             <label class="control-label lable_user" for="inti">Interested In:</label>
                             <input type="text" name="intdi" value="<?php if($_POST) echo $_POST['intdi']; ?>" id="inti" placeholder="Interested In" class="form-control inpute_profile"/>
                         </div>
                         <div class="col-xs-12 col-sm-8  col-md-6 ">
                             <label class="control-label lable_user" for="rlgn" >Religion:</label>
                             <input type="text" name="religion" value="<?php if($_POST) echo $_POST['religion']; ?>" id="rlgn" placeholder="Suni, Shia" class="form-control inpute_profile"/>
                         </div>
                     </div>
                     <div class="form-group" class="col-xs-10 col-sm-8  col-md-6 ">
                         <div class="col-xs-12 col-sm-8 col-md-6 ">
                             <label class="control-label lable_user" for="lng" >Languages:</label>
                             <input type="text" name="lng" value="<?php if($_POST) echo $_POST['lng']; ?>" id="lng" placeholder="Languages" class="form-control inpute_profile"/>
                         </div>
                         <div class="col-xs-12 col-sm-8  col-md-6 ">
                             <label class="control-label lable_user" for="mtt" >Mother Tongue:</label>
                             <input type="text" name="mothertongue" value="<?php if($_POST) echo $_POST['mothertongue']; ?>" id="mtt" placeholder="Mother Tongue" class="form-control inpute_profile"/>
                         </div>
                     </div>
            </div>
        </div>
                    <div class=" col-md-offset-1 col-xs-8 col-sm-6 col-md-4 userprofile">





                    <div class="form-group" class="col-xs-10 col-sm-8  col-md-6 ">
                        <div class="col-xs-12 col-sm-8 col-md-6 ">
                            <label class="control-label lable_user" for="lcountry" >LivingIn Country:</label>
                            <input type="text" name="lcountry" value="<?php if($_POST) echo $_POST['lcountry']; ?>" id="lcountry" placeholder="Living Country" class="form-control inpute_profile"/>
                        </div>
                        <div class="col-xs-12 col-sm-8  col-md-6 ">
                            <label class="control-label lable_user" for="lcity" >LivingIn City:</label>
                            <input type="text"name="lcity" value="<?php if($_POST) echo $_POST['lcity']; ?>" id="lcity" placeholder="LivingIn City" class="form-control inpute_profile"/>
                        </div>
                    </div>

                    <div class="form-group" class="col-xs-10 col-sm-8  col-md-6 ">
                        <div class="col-xs-12 col-sm-8 col-md-6 ">
                            <label class="control-label lable_user" for="bcountry" >Base Country:</label>
                            <input type="text" name="bcountry" value="<?php if($_POST) echo $_POST['bcountry']; ?>" id="bcountry" placeholder="Base Country" class="form-control inpute_profile"/>
                        </div>
                        <div class="col-xs-12 col-sm-8  col-md-6 ">
                            <label class="control-label  lable_user" for="bcity" >Base City:</label>
                            <input type="text" name="bcity" value="<?php if($_POST) echo $_POST['bcity']; ?>" id="bcity" placeholder="Base City" class="form-control inpute_profile"/>
                        </div>
                    </div>
                        <div class="form-group" class="col-xs-10 col-sm-8  col-md-6 ">
                            <div class="col-xs-12 col-sm-8 col-md-6 ">
                                <label class="control-label lable_user" for="sect" >Sect:</label>
                                <input type="text" name="sect" value="<?php if($_POST) echo $_POST['sect']; ?>" id="sect" placeholder="Sect" class="form-control inpute_profile"/>
                            </div>
                            <div class="col-xs-12 col-sm-8  col-md-6 ">
                                <label class="control-label lable_user" for="profession" >Profession:</label>
                                <input type="text" name="profession" value="<?php if($_POST) echo $_POST['profession']; ?>" id="profession" placeholder="Profession" class="form-control inpute_profile"/>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-8  col-md-12 ">
                        <label class="control-label lable_user" for="interest" >Interests:</label>
                        <Input class="form-control inpute_profile" name="interests" value="<?php if($_POST) echo $_POST['interests']; ?>" rows="2" id="interest" placeholder="Interests">
                    </div>
                    <div class="form-group col-xs-12 col-sm-8  col-md-12">
                        <label class="control-label lable_user" for="aboutme" >About Me:</label>
                        <input class="form-control inpute_profile" name="aboutme" rows="2" id="aboutme" value="<?php if($_POST) echo $_POST['aboutme']; ?>" placeholder="About Me">
                    </div>
                        <div class="col-xs-10 col-sm-8  col-md-12">
                        <button type="submit" class="btn-block btn-primary">Submit</button>
                            </div>
                </form>
            </div>




        </div>

        </div>


    <!--END  Register Form -->
    <!-- Start Footer Section -->
<?php include 'includes/footer.inc';?>