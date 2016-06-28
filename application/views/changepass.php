<?php include 'includes/header.inc';?>
<?php include 'includes/headerform.inc';?>
<!-- Top menu -->

<?php include 'includes/topbar.inc';?>

<?php include 'includes/navigation.inc';?>
<!-- Top content -->

        <div id="container-fluid col-lg-6">
            <div class="row">
                <div class="col-sm-7 text">
                </div>
                <div class="col-sm-5 form-box">
            <?php if($updateOK != 'yes') : ?>
            <div class="form-bottom">
                <form role="form" action="<?php echo $root; ?>change/pass/<?php echo $email; ?>" method="post" class="registration-form">

                    <div class="form-group">
                        <label class="sr-only" for="form-password">Password:</label>
                        <input type="password" value="<?php if($_POST) echo $_POST['pass']; ?>" name="pass" placeholder="Password..." class="form-password form-control" id="form-password">
                        <?php if($_POST):
                            echo form_error('pass', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-conpass">Confirm Password:</label>
                        <input type="password" value="<?php if($_POST) echo $_POST['conpass']; ?>" name="conpass" placeholder="Confirm password..." class="form-conpass form-control" id="form-conpass">
                        <?php if($_POST):
                            echo form_error('conpass', '<strong class="red">', '</strong>');
                        endif;
                        ?>
                    </div>



                    <br/>
                    <button name="butn" type="submit"   class="btn" onclick="return true;">Submit!</button><br>


                </form>

                <div class="top-big-link">

                </div>
            </div>
            <?php else: ?>
                <div class="alert alert-success">
                    You password  successfuly changed.  <br />
                    Please Login.
                    <a href="signin.php"></a>
                </div>
            <?php endif; // changedOK ?>
                </div>
            </div>
        </div>