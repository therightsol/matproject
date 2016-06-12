
<?php include 'includes/header.inc';?>
<?php include 'includes/headerform.inc';?>
<!-- Top menu -->

<?php include 'includes/topbar.inc';?>
<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text">
                    <h1><strong>Marriage Online</strong> Registration Form</h1>
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
                                <h2 class="panel-title">Reset via E-mail</h2>
                            </div>
                            <div >
                                <p>Enter your valid E-mail<br><small>Marriage Online will send your Reset password link to your email</small></p>
                            </div>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="" method="post" class="registration-form">

                            <div class="form-group">
                                <label class="sr-only" for="form-email">E-mail:</label>
                                <?php if($_POST):
                                    echo form_error('email', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                                <input type="text" name="email" placeholder="E-mail..." class="form-email form-control" id="form-email">

                            </div>




                            <button type="submit" class="btn">Next</button>
                            <p>Try another..<a href="ResetPassword">option</a></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'includes/footerform.inc';?>
<?php include 'includes/footer.inc';?>

