<?php include 'includes/header.inc';?>

<!-- Top menu -->

<?php include 'includes/topbar.inc';?>
<?php include 'includes/navigation.inc';?>


<!-- Top content -->
<div class="title"><h1 class="title_h1">User Profile Page</h1></div>

<div class="container-fluid">
    <div class="row form_back" >


        <div class="stepwizard col-md-offset-3">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn nextBtn btn-primary btn-circle ">1</a>
                    <p>Step 1</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button"  class="btn nextBtn btn-default btn-circle nextBtn" disabled="disabled">2</a>
                    <p>Step 2</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn nextBtn btn-default btn-circle nextBtn" disabled="disabled">3</a>
                    <p>Step 3</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-4" type="button" class="btn btn-default btn-circle nextBtn" disabled="disabled">4</a>
                    <p>Step 4</p>
                </div>
            </div>
        </div>
        <form role="form" action="<?php echo $root; ?>UserProfile" method="post" enctype="multipart/form-data" class="form_profile">
            <div class="row setup-content" id="step-1">
                <div class="col-xs-8  col-sm-6 col-md-4 col-md-offset-4">

                    <h3> Step 1</h3>
                    <div class="col-md-offset-4">
                        <div class="profil_img col-md-offset-0" >
                            <img id="blah" src="#" alt="your image" />
                        </div>
                        <div class="fileUpload btn btn-primary col-md-offset-1">
                            <span>Upload</span>
                            <input type="file" onchange="readURL(this);" class="upload" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label lable_user">Date Of Birth</label>
                        <input  name="dob" type="date" value="<?php if($_POST) echo $_POST['dob']; ?>" required="required" class="form-control inpute_profile" placeholder="Enter Date of Birth"  />
                        <?php if($_POST):
                            echo form_error('dob', '<strong class="error">', '</strong>');
                        endif;
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label lable_user">Religion</label>
                        <input  type="text" required="required" value="<?php if($_POST) echo $_POST['religion']; ?>" name="religion" class="form-control inpute_profile" placeholder="Enter You Religion" />
                        <?php if($_POST):
                            echo form_error('religion', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label lable_user">Interested In</label>
                        <input  type="text" required="required" name="intdi" value="<?php if($_POST) echo $_POST['intdi']; ?>" class="form-control inpute_profile" placeholder="Enter Your Interested" />
                        <?php if($_POST):
                            echo form_error('intdi', '<strong class="error">', '</strong>');
                        endif;
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label lable_user">Mother Tongue</label>
                        <input  type="text" required="required" name="mothertongue" value="<?php if($_POST) echo $_POST['mothertongue']; ?>" class="form-control inpute_profile" placeholder="Enter Your Mother Tongue" />
                        <?php if($_POST):
                            echo form_error('mothertongue', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label lable_user">Language</label>
                        <input  type="text" required="required" name="lng" value="<?php if($_POST) echo $_POST['lng']; ?>"  class="form-control inpute_profile" placeholder="Enter Your Language" />
                        <?php if($_POST):
                            echo form_error('lng', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>

                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-8 col-sm-6 col-md-4 col-md-offset-4">

                    <h3> Step 2</h3>
                    <div class="form-group">
                        <label class="control-label lable_user">LiveIn Country</label>
                        <input  type="text" name="lcountry" required="required" value="<?php if($_POST) echo $_POST['lcountry']; ?>" class="form-control inpute_profile" placeholder="Enter Your Live_In Country" />
                        <?php if($_POST):
                            echo form_error('lcountry', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label lable_user">LiveIn City</label>
                        <input  type="text" name="lcity" required="required" value="<?php if($_POST) echo $_POST['lcity']; ?>" class="form-control inpute_profile" placeholder="Enter Your Live_In City"  />
                        <?php if($_POST):
                            echo form_error('lcity', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label lable_user">BaseIn Country</label>
                        <input  type="text" name="bcountry" required="required" value="<?php if($_POST) echo $_POST['bcountry']; ?>" class="form-control inpute_profile" placeholder="Enter Your Base_In Country"  />
                        <?php if($_POST):
                            echo form_error('bcountry', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label lable_user">BaseIn City</label>
                        <input  type="text" name="bcity" required="required" value="<?php if($_POST) echo $_POST['bcity']; ?>" class="form-control inpute_profile" placeholder="Enter Your Base_In City"  />
                        <?php if($_POST):
                            echo form_error('bcity', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button inpute_profile" >Next</button>

                </div>
            </div>
            <div class="row setup-content" id="step-3">
                <div class="col-xs-8 col-sm-6 col-md-4 col-md-offset-4">

                    <h3> Step 3</h3>
                    <div class="form-group">
                        <label class="control-label lable_user">Sect</label>
                        <?php if($_POST):
                            echo form_error('sect', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                        <input  type="text" name="sect" required="required" value="<?php if($_POST) echo $_POST['sect']; ?>" class="form-control inpute_profile" placeholder="Enter Your Sect"  />

                    </div>
                    <div class="form-group ">
                        <label class="control-label lable_user">Profession</label>
                        <input  type="text" name="profession" value="<?php if($_POST) echo $_POST['profession']; ?>" required="required" class="form-control inpute_profile" placeholder="Enter Your Profession"/>
                        <?php if($_POST):
                            echo form_error('profession', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>

                    <div class="form-group ">
                        <label class="control-label lable_user">Interests</label>
                        <input  type="text" name="interests" value="<?php if($_POST) echo $_POST['interests']; ?>" required="required" class="form-control inpute_profile" placeholder="Enter Your Interests"/>
                        <?php if($_POST):
                            echo form_error('interests', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label lable_user">About Me</label>
                        <input  type="text"  name="aboutme" value="<?php if($_POST) echo $_POST['aboutme']; ?>"  required="required" class="form-control inpute_profile" placeholder="Enter Your AboutMe"  />
                        <?php if($_POST):
                            echo form_error('aboutme', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>

                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>




                </div>
            </div>
            <div class="row setup-content" id="step-4">
                <div class="col-xs-12 col-sm-6 col-md-8 col-md-offset-4">
                    <div class="col-md-6">
                        <h3> Step 4</h3>
                        <button class="btn btn-success   btn-lg pull-right" type="submit">Submit</button>
                    </div>
                </div>
            </div>


        </form>

    </div>
</div>

<?php include 'includes/footer.inc';?>
<?php include 'includes/footerfile.inc';?>
