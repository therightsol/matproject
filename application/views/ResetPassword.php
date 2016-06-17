<?php include 'includes/header.inc';?>
<?php include 'includes/headerform.inc';?>

<!-- Top menu -->

<?php include 'includes/topbar.inc';?>
<?php include 'includes/navigation.inc';?>
<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text">
                    <h1><strong class="animated4">Marriage Online..</strong>Password Reset</h1>
                    <div class="description">
                        <h1>
                            We can find <strong>Better</strong>
                        </h1>
                    </div>

                </div>
                <div class="col-sm-5 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <div >
                                <h2 class="panel-title">Reset via Phone</h2>
                            </div>
                            <div >
                                <small>Enter your valid Phone No.</small>
                            </div>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="<?php echo $root; ?>ResetPassword" method="post" class="registration-form">

                            <div class="form-group">
                                <label class="sr-only" for="form-Phone">Phone:</label>
                                <?php if($_POST):
                                    echo form_error('phone', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                                <input type="text" name="phone" placeholder="Phone..." class="form-Phone form-control" id="form-Phone">

                            </div>




                            <button type="submit" class="btn">Next</button>
                            <p>Try another..<a href="via_email">option</a></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include 'includes/footer.inc';?>
<?php include 'includes/footerform.inc';?>
