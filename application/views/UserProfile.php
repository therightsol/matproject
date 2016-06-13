<?php include 'includes/header.inc';?>

    <!-- Full Body Container -->
    <div id="container">


        <!-- Start Header Section -->
        <div class="hidden-header"></div>
        <header class="clearfix">

            <?php include 'includes/topbar.inc';?>


            <!-- Start  Logo & Naviagtion  -->

        </header>
        <!-- End Header Section -->

        <!-- Start Registeration Banner -->
        <div class="container-fluid">
            <div class="row">
                <div class="title" ">
                    <h1 class="sign_t">User Profile</h1>
                </div>
            </div>
        </div>
        <!-- End Registeration Banner -->
        <!--  UserProfile Form -->

        <div class="row"  style="background-color:#3a87ad">


            <div class="col-md-offset-3 col-xs-8 col-sm-6 col-md-8 userprofile">
                <form role="form" action="<?php echo $root; ?>UserProfile" method="post" >
                    <div class="col-xs-8 col-sm-6 col-md-3" >
                        <img src="" alt="Image" style="border: 1px solid black; height: 150px;width: 180px">
                        <input type="file"  name="cfile">
                    </div>



                    <div class="form-group" class="col-xs-10 col-sm-8  col-md-8 ">

                        <div class="col-xs-12 col-sm-8  col-md-8 ">
                            <label class="control-label lable_user" for="dob">Date Of Birth<span class="lable_steric"> *</span></label>
                            <input type="text" name="dob"  id="dob" placeholder="01/12/1990" class="form-control inpute_profile"/>
                            <?php if($_POST):
                                echo form_error('dob', '<strong class="error">', '</strong>');
                            endif;
                            ?>
                        </div>
                        <div class="form-group" class="col-xs-10 col-sm-8  col-md-8 ">
                            <div class="col-xs-12 col-sm-8 col-md-4 ">
                                <label class="control-label lable_user" for="inti">Interested In<span class="lable_steric"> *</span></label>
                                <input type="text" name="intdi"  id="inti" placeholder="Interested In" class="form-control inpute_profile"/>
                                <?php if($_POST):
                                    echo form_error('intdi', '<strong class="error">', '</strong>');
                                endif;
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-8  col-md-4 ">
                                <label class="control-label lable_user" for="rlgn" >Religion<span class="lable_steric"> *</span></label>
                                <input type="text" name="religion"  id="rlgn" placeholder="Suni, Shia" class="form-control inpute_profile"/>
                                <?php if($_POST):
                                    echo form_error('religion', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="form-group" class="col-xs-10 col-sm-8  col-md-8 ">
                            <div class="col-xs-12 col-sm-8 col-md-4 ">
                                <label class="control-label lable_user" for="lng" >Languages<span class="lable_steric"> *</span></label>
                                <input type="text" name="lng"  id="lng" placeholder="Languages" class="form-control inpute_profile"/>
                                <?php if($_POST):
                                    echo form_error('lng', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-8  col-md-4 ">
                                <label class="control-label lable_user" for="mtt" >Mother Tongue<span class="lable_steric"> *</span></label>
                                <input type="text" name="mothertongue"  id="mtt" placeholder="Mother Tongue" class="form-control inpute_profile"/>
                                <?php if($_POST):
                                    echo form_error('mothertongue', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                            </div>
                        </div>
         


                <div class="form-group" class="col-xs-10 col-sm-8  col-md-11 ">
                    <div class="col-xs-12 col-sm-8 col-md-7 ">
                        <label class="control-label lable_user" for="lcountry" >LivingIn Country <span class="lable_steric"> *</span></label>
                        <input type="text" name="lcountry"  id="lcountry" placeholder="Living Country" class="form-control inpute_profile"/>
                        <?php if($_POST):
                            echo form_error('lcountry', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                    <div class="col-xs-12 col-sm-8  col-md-4 ">
                        <label class="control-label lable_user" for="lcity" >LivingIn City<span class="lable_steric"> *</span></label>
                        <input type="text"name="lcity"  id="lcity" placeholder="LivingIn City" class="form-control inpute_profile"/>
                        <?php if($_POST):
                            echo form_error('lcity', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                </div>

                <div class="form-group" class="col-xs-10 col-sm-8  col-md-11 ">
                    <div class="col-xs-12 col-sm-8 col-md-7 ">
                        <label class="control-label lable_user" for="bcountry" >Base Country<span class="lable_steric"> *</span></label>
                        <input type="text" name="bcountry"  id="bcountry" placeholder="Base Country" class="form-control inpute_profile"/>
                        <?php if($_POST):
                            echo form_error('bcountry', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                    <div class="col-xs-12 col-sm-8  col-md-4 ">
                        <label class="control-label  lable_user" for="bcity" >Base City<span class="lable_steric"> *</span></label>
                        <input type="text" name="bcity"  id="bcity" placeholder="Base City" class="form-control inpute_profile"/>
                        <?php if($_POST):
                            echo form_error('bcity', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                </div>
                <div class="form-group" class="col-xs-10 col-sm-8  col-md-10 ">
                    <div class="col-xs-12 col-sm-8 col-md-7 ">
                        <label class="control-label lable_user" for="sect" >Sect<span class="lable_steric"> *</span></label>
                        <input type="text" name="sect" id="sect" placeholder="Sect" class="form-control inpute_profile"/>
                        <?php if($_POST):
                            echo form_error('sect', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                    <div class="col-xs-12 col-sm-8  col-md-4 ">
                        <label class="control-label lable_user" for="profession" >Profession<span class="lable_steric"> *</span></label>
                        <input type="text" name="profession"  id="profession" placeholder="Profession" class="form-control inpute_profile"/>
                        <?php if($_POST):
                            echo form_error('profession', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                </div>

                <div class="form-group col-xs-12 col-sm-8  col-md-7 ">
                    <label class="control-label lable_user" for="interest" >Interests<span class="lable_steric"> *</span></label>
                    <Input class="form-control inpute_profile" name="interests"  rows="2" id="interest" placeholder="Interests">
                    <?php if($_POST):
                        echo form_error('interests', '<strong class="red">', '</strong>');
                    endif;
                    ?>
                </div>
                <div class="form-group col-xs-12 col-sm-8  col-md-4">
                    <label class="control-label lable_user" for="aboutme" >About Me<span class="lable_steric"> *</span></label>
                    <input class="form-control inpute_profile" name="aboutme" rows="2" id="aboutme"  placeholder="About Me">
                    <?php if($_POST):
                        echo form_error('aboutme', '<strong class="red">', '</strong>');
                    endif;
                    ?>
                </div>
                <div class="col-md-offset-2 col-xs-10 col-sm-8  col-md-6">
                    <button type="submit" class="btn-block btn-success">Submit</button>
                </div>

            </div>

            </form>


        </div>

    </div>


    <!--END  Register Form -->
    <!-- Start Footer Section -->
<?php include 'includes/footer.inc';?>