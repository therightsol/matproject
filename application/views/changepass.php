<?php include 'includes/header.inc';?>
<?php include 'includes/headerform.inc';?>
<!-- Top menu -->

<?php include 'includes/topbar.inc';?>

<?php include 'includes/navigation.inc';?>
<!-- Top content -->
<div class="top-content">
    <div class="inner-bg">
        <div id="container">
            <div class="form-bottom">
                <form role="form" action="<?php echo $root; ?>change/pass" method="post" class="registration-form">

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

        </div>
    </div>
</div>


