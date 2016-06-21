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
            echo"<h1>Congratulations!</h1><br><h2>Your email has been verified. Now you can login by clicking the link below.</h2><br><h2> <a href='#'>Login!</a></h2>";
            endif;
        ?>
        <?php
        if($email_alredy_verified):
            echo"<h1>Sorry!</h1><br><h2>Your token has been expired!</h2>";
            endif;
        ?>
        </div>
    </div>
</div>


