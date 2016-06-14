<?php include 'includes/header.inc';?>
<?php include 'includes/headerform.inc';?>
<!-- Top menu -->

<?php include 'includes/topbar.inc';?>
<!-- Top content -->


        <div class="container">
            <div class="row">
                <div class="col-sm-7 text">
                    <h1><strong class="red">Marriage Online..</strong>User Profile</h1>
                    <div class="description">
                        <h1>
                            We can find <strong>Better</strong>
                        </h1>
                    </div>

                </div>
                <div class="col-sm-8 col-sm-offset-3">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>User Profile</h3>

                        </div>

                 <form role="form" action="<?php echo $root; ?>UserProfile" method="post" >

                                    <div style="border: 1px solid black; height: 180px;width:180px;margin-top: 70px;margin-left: 60px">

                                    </div>
                     <input type="file" name="cfile" style=";margin-top: 10px;margin-left: 70px">


                                <div class="col-xs-12 col-sm-8  col-md-6 ">

                                    <input type="text" name="dob"  id="dob" placeholder="01/12/1990" class="form-control inpute_profile"/>
                                    <?php if($_POST):
                                        echo form_error('dob', '<strong class="error">', '</strong>');
                                    endif;
                                    ?>
                                </div>
                                <div class="col-xs-12 col-sm-8  col-md-6 ">

                                    <input type="text" name="religion"  id="rlgn" placeholder="Suni, Shia" class="form-control inpute_profile"/>
                                    <?php if($_POST):
                                        echo form_error('religion', '<strong class="red">', '</strong>');
                                    endif;
                                    ?>
                                </div>


                                    <div class="col-xs-12 col-sm-8 col-md-6 ">

                                        <input type="text" name="intdi"  id="inti" placeholder="Interested In" class="form-control inpute_profile"/>
                                        <?php if($_POST):
                                            echo form_error('intdi', '<strong class="error">', '</strong>');
                                        endif;
                                        ?>
                                    </div>
                     <div class="col-xs-12 col-sm-8 col-md-6 ">

                         <input type="text" name="sect" id="sect" placeholder="Sect" class="form-control inpute_profile"/>
                         <?php if($_POST):
                             echo form_error('sect', '<strong class="red">', '</strong>');
                         endif;
                         ?>
                     </div>


                                    <div class="col-xs-12 col-sm-8 col-md-6 ">

                                        <input type="text" name="lng"  id="lng" placeholder="Languages" class="form-control inpute_profile"/>
                                        <?php if($_POST):
                                            echo form_error('lng', '<strong class="red">', '</strong>');
                                        endif;
                                        ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-8  col-md-6 ">

                                        <input type="text" name="mothertongue"  id="mtt" placeholder="Mother Tongue" class="form-control inpute_profile"/>
                                        <?php if($_POST):
                                            echo form_error('mothertongue', '<strong class="red">', '</strong>');
                                        endif;
                                        ?>
                                    </div>





                                    <div class="col-xs-12 col-sm-8 col-md-6 ">

                                        <input type="text" name="lcountry"  id="lcountry" placeholder="Living Country" class="form-control inpute_profile"/>
                                        <?php if($_POST):
                                            echo form_error('lcountry', '<strong class="red">', '</strong>');
                                        endif;
                                        ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-8  col-md-6">

                                        <input type="text"name="lcity"  id="lcity" placeholder="LivingIn City" class="form-control inpute_profile"/>
                                        <?php if($_POST):
                                            echo form_error('lcity', '<strong class="red">', '</strong>');
                                        endif;
                                        ?>
                                    </div>



                                    <div class="col-xs-12 col-sm-8 col-md-6 ">

                                        <input type="text" name="bcountry"  id="bcountry" placeholder="Base Country" class="form-control inpute_profile"/>
                                        <?php if($_POST):
                                            echo form_error('bcountry', '<strong class="red">', '</strong>');
                                        endif;
                                        ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-8  col-md-6 ">

                                        <input type="text" name="bcity"  id="bcity" placeholder="Base City" class="form-control inpute_profile"/>
                                        <?php if($_POST):
                                            echo form_error('bcity', '<strong class="red">', '</strong>');
                                        endif;
                                        ?>
                                    </div>


                                    <div class="col-xs-12 col-sm-8  col-md-6 ">

                                        <input type="text" name="profession"  id="profession" placeholder="Profession" class="form-control inpute_profile"/>
                                        <?php if($_POST):
                                            echo form_error('profession', '<strong class="red">', '</strong>');
                                        endif;
                                        ?>
                                    </div>
                     <div class="col-xs-12 col-sm-8  col-md-6 ">

                         <Input class="form-control inpute_profile" type="text" name="interests"  rows="2" id="interest" placeholder="Interests">
                         <?php if($_POST):
                             echo form_error('profession', '<strong class="red">', '</strong>');
                         endif;
                         ?>
                     </div>


                              
                                <div class="form-group col-xs-12 col-sm-8  col-md-12">

                                    <input class="form-control inpute_profile" type="text" name="aboutme" rows="2" id="aboutme"  placeholder="About Me">
                                    <?php if($_POST):
                                        echo form_error('aboutme', '<strong class="red">', '</strong>');
                                    endif;
                                    ?>
                                </div>
                                <div class="col-md-offset-4 col-xs-10 col-sm-8  col-md-8">
                                    <button type="submit" class="btn">Submite</button>
                                </div>

                            </div>

                        </form>



                    </div>

            </div>
        </div>
    </div>

</div>

<?php include 'includes/footerform.inc';?>
<?php include 'includes/footer.inc';?>
