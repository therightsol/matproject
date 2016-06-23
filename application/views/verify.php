<?php include 'includes/header.inc';?>
<?php include 'includes/headerform.inc';?>
    <!-- Top menu -->

<?php include 'includes/topbar.inc';?>

<?php include 'includes/navigation.inc';?>
    <!-- Top content -->
<div class="top-content">
    <div class="inner-bg">
        <div id="container">
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



