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
                <form role="form" action="<?php echo $root; ?>register" method="post" class="registration-form">

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
                    <button name="butn" type="submit"   class="btn" onclick="return true;">Sign up!</button><br>
                    <a href="signin">Already a member??</a>

                </form>

                <div class="top-big-link">

                </div>
            </div>
        <?php 
        if(!$email_alredy_verified): 
            echo'<h1>Congratulations!</h1><br><h2>Your email has been verified. Now you can login by clicking the link below.</h2><br>';
            endif;
        ?>
            <h2> <a <?php if ($activepage == 'Signin'): ; ?> class="active" <?php endif; ?>href="<?php echo $root;?>signin">LogIn</a></h2>
        <?php

        if($email_alredy_verified):
            echo"<h1>Sorry!</h1><br><h2>Your token has been expired!</h2>";
            endif;
        ?>
        </div>
    </div>
</div>

<?php include 'includes/footer.inc';?>
<?php include 'includes/footerform.inc';?>



