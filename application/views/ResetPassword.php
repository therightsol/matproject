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
        <!-- Start Reset Banner -->
        <div class="container-fluid">
            <div class="row">
                <div class="banner" class="col-md-12 col-sm-12">
                    <h1 class="sign">Reset Your Passward</h1>
                </div>
            </div>
        </div>
        <!-- End Reset Banner -->


    <!--  Reset Form -->
    <div class="row centered-form">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
    <div class="panel panel-default">
    <div class="panel-body">
<form id='loginform' action="<?php echo $root; ?>sigin" method="post">

    <div class="form-group">
        <div>
            <h3 class="panel-title"> Enter the last password you remember</h3>
        </div>

        <input type="password" name="pass" id="password" class="form-control input-sm" placeholder="Password">
        <?php if($_POST):
            echo form_error('pass', '<strong class="red">', '</strong>');
        endif;
        ?>
    </div>
    <input href="#" id="next" type="submit" value="Next" class="btn btn-info btn-block">
    </form>
        <div>
            <h3 class="panel-title"><strong><a href="via_email">Try a different question</a></strong></h3>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!--END  Reset Form -->
    <!-- Start Footer Section -->
<?php include 'includes/footer.inc';?>