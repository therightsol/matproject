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
        <div class="container-fluid">
    <div class="row">

        <div class="col-sm-offset-3 col-sm-6 col-md-6">


            <form  style="margin-top:20px;" action="#" method="post">
            <div class="col-sm-offset-3 col-sm-9">
                <div  class="checkbox">

                    <label>
                        <input id="checkemail" name="reset" type="radio"> Via Email:
                    </label>

                    <br /><br />

                    <div id="email1" class="form-group">
                        <label for="email" class="lable_form col-sm-3 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="lable_form form-control" id="email" placeholder="Email">
                        </div>
                    </div>

                </div>

                <div  class="checkbox">
                    <label>
                        <input id="phone" name="reset" type="radio"> Via Phone NO:

                    </label>
                    <br /><br />

                    <div  id="phone" class="form-group row">

                        <label for="1" class="lable_form col-sm-3 control-label">Phone No</label>

                        <div  class=" col-sm-8">
                            <input type="text" name="phone" class="form-control"  placeholder="+92">
                        </div>

                    </div>

                    <div class="form-group" >
                        <div class="col-sm-offset-3 col-sm-6">
                            <button style="margin-bottom:30px;" type="submit" id="btn" class="btn-block btn-primary">Reset</button>
                        </div>
                    </div>

                </div>
            </form>

            </div>
        </div>
    </div>
</div>
<?php if(! empty($validation_errors)) : ?>
    <div class="alert alert-danger">
        <?php echo $validation_errors; ?>
    </div>
<?php endif; ?>
    <!--END  Reset Form -->
    <!-- Start Footer Section -->
<?php include 'includes/footer.inc';?>